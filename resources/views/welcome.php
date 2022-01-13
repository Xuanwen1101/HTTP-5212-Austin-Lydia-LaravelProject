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

        <header class="w3-padding">

            <h1 class="w3-text-red">My Portfolio!</h1>

        </header>

        <hr>

        <section class="w3-padding">
                
            <h2 class="w3-text-blue">About Me!</h2>

            <p>
                Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
                erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
                varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>

            <h3>My Skills</h3>

            <ul>
                <li>PHP</li>
                <li>Laravel</li>
                <li>MySQL</li>
            </ul>

        </section>

        <hr>

        <section class="w3-padding">

            <h2 class="w3-text-blue">Projects</h2>

            <?php foreach($projects as $project): ?>

                <h3><?= $project->title ?></h3>

                <?php if($project->url): ?>
                    View Project: <a href="<?= $project->url ?>"><?= $project->url ?></a>
                <?php endif; ?>

                <p>
                    Posted: <?= $project->created_at->format('M j, Y') ?>
                    <br>
                    <a href="/project/<?= $project->slug ?>">View Project Details</a>
                    <br>
                    Type: <?= $project->type->title ?>
                </p>

            <?php endforeach; ?>

        </section>
        
        <hr>

        <section class="w3-padding">

            <h2 class="w3-text-blue">Contact Me</h2>

            <p>
                Phone: 111.222.3333
                <br>
                Email: <a href="mailto:email@address.com">email@address.com</a>
            </p>
                
            FORM

        </section>

        <hr>

        <footer class="w3-padding">

            Footer Text | 
            Copyright <?= date('Y') ?> |
            <a href="#">Facebook</a> | 
            <a href="#">Instagram</a>

        </footer>

    </body>
</html>
