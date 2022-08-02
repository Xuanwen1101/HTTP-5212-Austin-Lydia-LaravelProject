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

        <section>

            <h2 class="title">Edit Content</h2>

            <form method="post" action="/console/contents/edit/<?= $content->id ?>" novalidate class="form">

                <?= csrf_field() ?>

                <div class="form__field">
                    <label for="title" class="form__label">Title:</label>
                    <input type="text" class="form__input" name="title" id="title" value="<?= old('title', $content->title) ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>
                </div>



                <div class="form__field">
                    <label for="content" class="form__label">Content:</label>
                    <textarea name="content" class="form__textarea" id="content" required><?= old('content', $content->content) ?></textarea>

                    <?php if($errors->first('content')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('content'); ?></span>
                    <?php endif; ?>
                </div>


                <button type="submit" class="form__button">Edit Content</button>

            </form>

            <div class="object__link">
              <a href="/console/contents/list">Back to Content List</a>
            </div>

        </section>

    </body>
</html>