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

            <h2>Edit User</h2>

            <form method="post" action="/console/users/edit/<?= $user->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="first">First Name:</label>
                    <input type="text" name="first" id="first" value="<?= old('first', $user->first) ?>" required>
                    
                    <?php if($errors->first('first')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('first'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="last">Last Name:</label>
                    <input type="text" name="last" id="last" value="<?= old('last', $user->last) ?>" required>
                    
                    <?php if($errors->first('last')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('last'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?= old('email', $user->email) ?>">

                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w3-button w3-green">Edit User</button>

            </form>

            <a href="/console/users/list">Back to User List</a>

        </section>

    </body>
</html>