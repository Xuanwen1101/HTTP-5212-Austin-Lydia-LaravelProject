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

        <header class="w3-padding">

            <h1 class="w3-text-red">Portfolio Console</h1>
            <a href="/console/logout">Log Out</a> | 
            <a href="/console/dashboard">Dashboard</a> | 
            <a href="/">Website Home Page</a>
        </header>

        <hr>

        <section>
            <?php if(Auth::check()): ?>
                <div class="dashboard__user">Hello, <?= auth()->user()->first ?> <?= auth()->user()->last ?>!</div> 
                <?php else: ?>
                <a href="/" class="dashboard__user">Return to My Portfolio</a>
            <?php endif; ?>
            <ul id="dashboard" class="dashboard__container">
                <li class="dashboard__link">
                  <a href="/console/projects/list">
                    <img src="/icons/projects.svg" alt="Icon for Projects List">
                    Your Projects
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/types/list">
                    <img src="/icons/chevron-left.svg" style="transform: scaleX(-1)" alt="Icon for Types List">
                    Your Types
                  </a>
                </li>                
                <li class="dashboard__link">
                  <a href="/console/schools/list">
                  <img src="/icons/projects.svg" alt="Icon for Schools List">
                    Your Educations
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/works/list">
                  <img src="/icons/experience.svg" alt="Icon for User Accounts List">
                    Your Experience
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/contents/list">
                  <img src="/icons/extra.svg" alt="Icon for Extra Content List">
                    Your Extras
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/skills/list">
                  <img src="/icons/skills.svg" alt="Icon for Skills List">
                    Your Skills
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/emails/list">
                  <img src="/icons/mail.svg" alt="Icon for Emails List">
                    Your Emails
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/blogs/list">
                  <img src="/icons/blog.svg" alt="Icon for Blog Articles List">
                    Your Blog
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/users/list">
                  <img src="/icons/users.svg" alt="Icon for User Accounts List">
                    Your Accounts
                  </a>
                </li>
                
                <li class="dashboard__link dashboard__link--logout">
                  <a href="/console/logout">
                    <img src="/icons/log-out.svg" alt="Icon for Log Out Button">
                    Log Out
                  </a>
                </li>
            </ul>

        </section>

    </body>
</html>