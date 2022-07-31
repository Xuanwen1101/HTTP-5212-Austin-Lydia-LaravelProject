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

            <h2 class="title">Manage Emails</h2>
            <div class="contact__wrapper">
              <?php foreach($emails as $email): ?>
                <div class="contact__card">
                  <div class="contact__text">
                    <div class="contact__content contact__content--name">
                      <h2>Name:</h2>
                      <h3><?= $email->name?></h3>
                    </div>
                    <div class="contact__content contact__content--email">
                      <h2>Email:</h2>
                      <h3><?= $email->email?></h3>
                    </div>
                    <div class="contact__content contact__content--message">
                      <h2>Message:</h2>
                      <p><?= $email->message?></p>
                    </div>
                  </div>
                  <a class="contact__delete" href="/console/emails/delete/<?= $email->id ?>">Delete</a>
                </div>
              <?php endforeach; ?>
            </div>
        </section>

    </body>
</html>