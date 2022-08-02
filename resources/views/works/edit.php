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
        <header class="header">
            <img class="nav__btn" src="/" alt="">
            <nav class="header__nav">
              <ul class="nav__wrapper">
                <li class="nav__close">X</li>
                <li class="nav__item"><a href="/console/dashboard">Dashboard</a></li>
                <li class="nav__line">|</li>
                <li class="nav__item"><a href="/">Website Home Page</a></li>
                <li class="nav__line">|</li>
                <li class="nav__item"><a href="/console/logout">Log Out</a></li>
              </ul>
            </nav>
        </header>

        <section>

            <h2 class="title">Edit Work Experience</h2>

            <div class="objects-container">
              <form method="post" action="/console/works/edit/<?= $work->id ?>" novalidate class="form">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="title" class="form__label">Title:</label>
                      <input type="text" class="form__input" name="title" id="title" value="<?= old('title', $work->title) ?>" required>
              
                      <?php if($errors->first('title')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label class="form__label" for="employment_type">Employment Type:</label>
                      <input type="text" class="form__input" name="employment_type" id="employment_type" value="<?= old('employment_type', $work->employment_type) ?>" required>
              
                      <?php if($errors->first('employment_type')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('employment_type'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="company_name" class="form__label">Company Name:</label>
                      <input type="text" class="form__input" name="company_name" id="company_name" value="<?= old('company_name', $work->company_name) ?>" required>
              
                      <?php if($errors->first('company_name')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('company_name'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="location" class="form__label">Location:</label>
                      <input type="text" class="form__input" name="location" id="location" value="<?= old('location', $work->location) ?>" required>
              
                      <?php if($errors->first('location')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('location'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="description" class="form__label">Description:</label>
                      <textarea name="description" class="form__textarea" id="description" required rows="10"><?= old('description', $work->description) ?></textarea>
                      <?php if($errors->first('description')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('description'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="start_date" class="form__label">Start Date:</label>
                      <input type="date" class="form__input" name="start_date" id="start_date" value="<?= old('start_date', $work->start_date) ?>" required>
              
                      <?php if($errors->first('start_date')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('start_date'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="end_date" class="form__label">End Date:</label>
                      <input type="date" class="form__input" name="end_date" id="end_date" value="<?= old('end_date', $work->end_date) ?>" required>
              
                      <?php if($errors->first('end_date')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('end_date'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Edit Work Experience</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/works/list">Back to Work Experience List</a>
            </div>

        </section>

    </body>
</html>