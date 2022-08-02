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

        <section class="users">

            <h2 class="title">Manage Users</h2>
            <div class="users__container">
              <?php foreach($users as $user): ?>
                <div class="users__card">
                  <div class="users__text">
                    <span class="users__id">ID: <?= $user->id ?></span>
                    <h2 class="users__name"><?= $user->first ?> <?= $user->last ?></h2>
                    <h3 class="users__email"><?= $user->email ?></h3>
                  </div>
                  <div class="users__functions">
                    <a href="/console/users/edit/<?= $user->id ?>">Edit</a> 
                    <a href="/console/users/delete/<?= $user->id ?>" class="user__delete">Delete</a> 
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="users__add">
              <a href="/console/users/add">Add User +</a>
            </div>
        </section>

    </body>
</html>