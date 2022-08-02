<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js"></script>
        
    </head>
    <body>
        <header class="header">
            <img class="nav__btn" src="/" alt="">
            <nav class="header__nav">
              <ul class="nav__wrapper">
                <li class="nav__close">X</li>
                <li class="nav__item"><a href="/console/dashboard">Dashboard</a></li>
                <li class="nav__line">|</li>
                <li class="nav__item"><a href="/">Website Home Page</a></li>
                <li class="nav__line">|</li>
                <li class="nav__item"><a href="/console/logout">Log Out</a></li>
              </ul>
            </nav>
        </header>

        <?php if(session()->has('message')): ?>
            <div class="w3-padding w3-margin-top w3-margin-bottom">
                <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section>

            <h2 class="title">Manage Projects</h2>
            <div class="objects-container">
              <?php foreach($projects as $project): ?>
                <div class="object-item">
                  <?php if($project->image): ?>
                    <img src="<?= asset('storage/'.$project->image) ?>" width="250" height="250">
                  <?php endif; ?>
                  <h2 class="object-title"><?= $project->title ?></h2>
                  <div id="object-edit">
                    <ul class="edit__list">
                      <li class="edit__link"><a href="/console/projects/image/<?= $project->id ?>">Image</a></li>
                      <li class="edit__link"><a href="/console/projects/edit/<?= $project->id ?>">Edit</a></li>
                      <li class="delete__link"><a href="/console/projects/delete/<?= $project->id ?>">Delete</a></li>
                    </ul>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <div class="object__link">
              <a href="/console/projects/add">New Project</a>
            </div>

        </section>

    </body>
</html>