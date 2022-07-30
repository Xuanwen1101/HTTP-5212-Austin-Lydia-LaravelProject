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

        <section class="w3-padding">

            <h2>Manage Skills</h2>

            <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
                <tr class="w3-red">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Received</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($emails as $email): ?>
                    <tr>
                        <td><?= $email->name ?></td>
                        <td><?= $email->email ?></td>
                        <td><?= $email->message ?></td>
                        <td><?= $email->created_at->format('M j, Y') ?></td>
                        <td><a href="/console/skills/delete/<?= $email->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </section>

    </body>
</html>