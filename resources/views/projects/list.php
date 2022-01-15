


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js" ty></script>
        
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

            <h2>Manage Projects</h2>

            <table class="w3-table w3-stripped w3-bordered">
                <tr class="w3-red">
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Type</th>
                    <th>Created</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($projects as $project): ?>
                    <tr>
                        <td><?= $project->title ?></td>
                        <td>
                            <a href="/project/<?= $project->slug ?>">
                                <?= $project->slug ?>
                            </a>
                        </td>
                        <td><?= $project->type->title ?></td>
                        <td><?= $project->created_at->format('M j, Y') ?></td>
                        <td><a href="/console/projects/<?= $project->id ?>/edit">Edit</a></td>
                        <td><a href="/console/projects/<?= $project->id ?>/delete">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/console/projects/add" class="w3-button w3-green w3-margin-top">New Project</a>

        </section>

    </body>
</html>