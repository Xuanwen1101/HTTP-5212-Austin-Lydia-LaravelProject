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

            <h2>Manage Work Experience</h2>

            <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
                <tr class="w3-red">
                    <th></th>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Created</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($works as $work): ?>
                    <tr>
                        <td>
                            <?php if($work->image): ?>
                                <img src="<?= asset('storage/'.$work->image) ?>" width="200">
                            <?php endif; ?>
                        </td>
                        <td><?= $work->title ?></td>
                        <td><?= $work->company_name ?></td>
                        <td><?= $work->location ?></td>
                        <td><?= $work->created_at->format('M j, Y') ?></td>
                        <td><a href="/console/works/image/<?= $work->id ?>">Image</a></td>
                        <td><a href="/console/works/edit/<?= $work->id ?>">Edit</a></td>
                        <td><a href="/console/works/delete/<?= $work->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/console/works/add" class="w3-button w3-green">New Experience</a>

        </section>

    </body>
</html>