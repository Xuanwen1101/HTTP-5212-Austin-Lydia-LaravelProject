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
                <li class="nav__item"><a href="/">Website Home Page</a></li>
              </ul>
            </nav>
        </header>

        <hr>

        <section class="objects-container">

            <form method="post" action="/console/login" novalidate>

                <?= csrf_field() ?>

                <div class="form__field">
                    <label for="email" class="form__label">Email Address:</label>
                    <input type="email" class="form__input" name="email" id="email" value="<?= old('email') ?>" required>
                    
                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <br>

                <div class="form__field">
                    <label for="password" class="form__label">Password:</label>
                    <input type="password" class="form__input" name="password" id="password" required>

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>
                
                <br>

                <button type="submit" class="form__button">Log In</button>

            </form>

        </section>

    </body>
</html>


        