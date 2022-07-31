<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js"></script>
        
    </head>
    <body>

        <header class="w3-padding">

            <h1 class="w3-text-red">Portfolio Console</h1>

            <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
                <a href="/console/logout">Log Out</a> | 
                <a href="/console/dashboard">Dashboard</a> | 
                <a href="/">Website Home Page</a>
            <?php else: ?>
                <a href="/">Return to My Portfolio</a>
            <?php endif; ?>

        </header>

        <hr>

        <?php if(session()->has('message')): ?>
            <div class="w3-padding w3-margin-top w3-margin-bottom">
                <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section>

            <h2 class="title">Manage Articles</h2>
            <div class="objects-container">
              <?php foreach($blogs as $article): ?>
                <div class="object-item">
                  <?php if($article->image): ?>
                    <img src="<?= asset('storage/'.$article->image) ?>" width="250" height="250">
                  <?php endif; ?>
                  <h2 class="object-title"><?= $article->title ?></h2>
                  <div id="object-edit">
                    <ul class="edit__list">
                      <li class="edit__link"><a href="/console/articles/image/<?= $article->id ?>">Image</a></li>
                      <li class="edit__link"><a href="/console/articles/edit/<?= $article->id ?>">Edit</a></li>
                      <li class="delete__link"><a href="/console/articles/delete/<?= $article->id ?>">Delete</a></li>
                    </ul>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="object__link">
            <a href="/console/blogs/add">New Article</a>
            </div>

        </section>

    </body>
</html>