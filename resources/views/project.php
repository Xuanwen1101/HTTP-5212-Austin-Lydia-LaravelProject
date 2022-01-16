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

            <h1 class="w3-text-red">My Portfolio!</h1>

        </header>

        <hr>

        <section class="w3-padding">
        
            <h2 class="w3-text-blue"><?= $project->title ?></h2>

            <?php if($project->image): ?>
                <div class="w3-margin-top">
                    <img src="<?= asset('storage/'.$project->image) ?>" width="400">
                </div>
            <?php endif; ?>

            <p><?= $project->content ?></p>

            <?php if($project->url): ?>
                View Project: <a href="<?= $project->url ?>"><?= $project->url ?></a>
            <?php endif; ?>

            <p>
                Posted: <?= $project->created_at->format('M j, Y') ?>
                <br>
                Type: <?= $project->type->title ?>
            </p>

            <a href="/">Back to Home</a>

        </section>

        <hr>

        <footer class="w3-padding">

            Footer Text | 
            Copyright <?= date('Y') ?> |
            <a href="#">Facebook</a> | 
            <a href="#">Instagram</a>

            <br>

            <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
                <a href="/console/logout">Log Out</a> | 
                <a href="/console/dashboard">Dashboard</a>
            <?php else: ?>
                <a href="/console/login">Login</a>
            <?php endif; ?>

        </footer>

    </body>
</html>
