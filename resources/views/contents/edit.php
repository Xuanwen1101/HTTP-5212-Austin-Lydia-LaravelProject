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

        <section class="w3-padding">

            <h2>Edit Content</h2>

            <form method="post" action="/console/contents/edit/<?= $content->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="<?= old('title', $content->title) ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>
                </div>



                <div class="w3-margin-bottom">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" required><?= old('content', $content->content) ?></textarea>

                    <?php if($errors->first('content')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('content'); ?></span>
                    <?php endif; ?>
                </div>


                <button type="submit" class="w3-button w3-green">Edit Content</button>

            </form>

            <a href="/console/contents/list">Back to Content List</a>

        </section>

    </body>
</html>