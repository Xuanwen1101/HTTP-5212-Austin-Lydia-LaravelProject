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

            <h2 class="title">Content Image</h2>

            <div class="objects-container">
                <?php if($content->image): ?>
                    <img src="<?= asset('storage/'.$content->image) ?>" width="200">
                <?php endif; ?>
            </div>

            <div class="objects-container">
              <form method="post" action="/console/contents/image/<?= $content->id ?>" novalidate class="form" enctype="multipart/form-data">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="image" class="form__label">Image:</label>
                      <input type="file" class="form__input" name="image" id="image" value="<?= old('image') ?>" required>
              
                      <?php if($errors->first('image')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('image'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Add Image</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/contents/list">Back to Content List</a>
            </div>

        </section>

    </body>
</html>