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

            <h2 class="title">Edit Project</h2>

            <div class="objects-container">
              <form method="post" action="/console/projects/edit/<?= $project->id ?>" novalidate class="form">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="title" class="form__label">Title:</label>
                      <input type="text" class="form__input" name="title" id="title" value="<?= old('title', $project->title) ?>" required>
              
                      <?php if($errors->first('title')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="url" class="form__label">URL:</label>
                      <input type="url" class="form__input" name="url" id="url" value="<?= old('url', $project->url) ?>">
                      <?php if($errors->first('url')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('url'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="slug" class="form__label">Slug:</label>
                      <input type="text" class="form__input" name="slug" id="slug" value="<?= old('slug', $project->slug) ?>" required>
                      <?php if($errors->first('slug')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('slug'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="content" class="form__label">Content:</label>
                      <textarea name="content" class="form__textarea" id="content" required rows="10"><?= old('content', $project->content) ?></textarea>
                      <?php if($errors->first('content')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('content'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="type_id" class="form__label">Type:</label>
                      <select name="type_id" id="type_id" class="form__select">
                          <option></option>
                          <?php foreach($types as $type): ?>
                              <option value="<?= $type->id ?>"
                                  <?= $type->id == old('type_id', $project->type_id) ? 'selected' : '' ?>>
                                  <?= $type->title ?>
                              </option>
                          <?php endforeach; ?>
                      </select>
                      <?php if($errors->first('type_id')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('type_id'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Edit Project</button>
              </form>
            </div>

            <div class="objects__link">
              <a href="/console/projects/list">Back to Project List</a>
            </div>

        </section>

    </body>
</html>