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

        <section>

            <h2 class="title">Add Education</h2>

            <div class="objects-container">
              <form method="post" action="/console/schools/add" novalidate class="form">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="school" class="form__label">School:</label>
                      <input type="text" class="form__input" name="school" id="school" value="<?= old('school') ?>" required>
              
                      <?php if($errors->first('school')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('school'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="school_url" class="form__label">URL:</label>
                      <input type="url" class="form__input" name="school_url" id="school_url" value="<?= old('school_url') ?>">
                      <?php if($errors->first('school_url')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('school_url'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="major" class="form__label">Major:</label>
                      <input type="text" class="form__input" name="major" id="major" value="<?= old('major') ?>" required>
              
                      <?php if($errors->first('major')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('major'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="degree" class="form__label">Degree:</label>
                      <input type="text" class="form__input" name="degree" id="degree" value="<?= old('degree') ?>" required>
              
                      <?php if($errors->first('degree')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('degree'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="start_date" class="form__label">Start Date:</label>
                      <input type="date" class="form__input" name="start_date" id="start_date" value="<?= old('start_date') ?>" required>
              
                      <?php if($errors->first('start_date')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('start_date'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="end_date" class="form__label">End Date:</label>
                      <input type="date" class="form__input" name="end_date" id="end_date" value="<?= old('end_date') ?>" required>
              
                      <?php if($errors->first('end_date')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('end_date'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Add Education</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/schools/list">Back to Education List</a>
            </div>

        </section>

    </body>
</html>