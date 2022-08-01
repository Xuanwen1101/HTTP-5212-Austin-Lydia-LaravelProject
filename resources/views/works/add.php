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

            <h2 class="title">Add Work Experience</h2>

            <div class="objects-container">
              <form method="post" action="/console/works/add" novalidate class="form">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="title" class="form__label">Title:</label>
                      <input type="text" class="form__input" name="title" id="title" value="<?= old('title') ?>" required>
              
                      <?php if($errors->first('title')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label class="form__label" for="employment_type">Employment Type:</label>
                      <input type="text" class="form__input" name="employment_type" id="employment_type" value="<?= old('employment_type') ?>" required>
              
                      <?php if($errors->first('employment_type')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('employment_type'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="company_name" class="form__label">Company Name:</label>
                      <input type="text" class="form__input" name="company_name" id="company_name" value="<?= old('company_name') ?>" required>
              
                      <?php if($errors->first('company_name')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('company_name'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="location" class="form__label">Location:</label>
                      <input type="text" class="form__input" name="location" id="location" value="<?= old('location') ?>" required>
              
                      <?php if($errors->first('location')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('location'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="description" class="form__label">Description:</label>
                      <textarea class="form__textarea" name="description" id="description" required rows="10"><?= old('description') ?></textarea>
                      <?php if($errors->first('description')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('description'); ?></span>
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
              
                  <button type="submit" class="form__button">Add Work Experience</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/works/list">Back to Work Experience List</a>
            </div>

        </section>

    </body>
</html>