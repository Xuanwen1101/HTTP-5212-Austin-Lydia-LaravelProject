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

            <h2>Edit Work Experience</h2>

            <form method="post" action="/console/works/edit/<?= $work->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="<?= old('title', $work->title) ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="employment_type">Employment Type:</label>
                    <input type="text" name="employment_type" id="employment_type" value="<?= old('employment_type', $work->employment_type) ?>" required>
                    
                    <?php if($errors->first('employment_type')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('employment_type'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="company_name">Company Name:</label>
                    <input type="text" name="company_name" id="company_name" value="<?= old('company_name', $work->company_name) ?>" required>
                    
                    <?php if($errors->first('company_name')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('company_name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location" value="<?= old('location', $work->location) ?>" required>
                    
                    <?php if($errors->first('location')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('location'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" required><?= old('description', $work->description) ?></textarea>

                    <?php if($errors->first('description')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('description'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" value="<?= old('start_date', $work->start_date) ?>" required>
                    
                    <?php if($errors->first('start_date')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('start_date'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" value="<?= old('end_date', $work->end_date) ?>" required>
                    
                    <?php if($errors->first('end_date')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('end_date'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w3-button w3-green">Edit Work Experience</button>

            </form>

            <a href="/console/works/list">Back to Work Experience List</a>

        </section>

    </body>
</html>