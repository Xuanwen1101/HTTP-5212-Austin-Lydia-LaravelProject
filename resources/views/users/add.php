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

        <section class="w3-padding">

            <h2 class="title">Add User</h2>

            <div class="objects-container">
              <form method="post" action="/console/users/add" novalidate class="form">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="first" class="form__label">First Name:</label>
                      <input type="text" class="form__input" name="first" id="first" value="<?= old('first') ?>" required>
              
                      <?php if($errors->first('first')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('first'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="last" class="form__label">Last Name:</label>
                      <input type="text" class="form__input" name="last" id="last" value="<?= old('last') ?>" required>
                      <?php if($errors->first('last')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('last'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="email" class="form__label">Email:</label>
                      <input type="email" class="form__input" name="email" id="email" value="<?= old('email') ?>" required>
                      <?php if($errors->first('email')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="password" class="form__label">Password:</label>
                      <input type="password" class="form__input" name="password" id="password">
                      <?php if($errors->first('password')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Add User</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/users/list">Back to User List</a>
            </div>

        </section>

    </body>
</html>