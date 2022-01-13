<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js" ty></script>
        
    </head>
    <body>
        
        <h1><?= $project->title ?></h1>

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

    </body>
</html>
