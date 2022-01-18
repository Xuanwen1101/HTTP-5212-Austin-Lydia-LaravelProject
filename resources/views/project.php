
<?= view('layout.header') ?>

<section class="w3-padding">

    <h2 class="w3-text-blue"><?= $project->title ?></h2>

    <?php if($project->image): ?>
        <div class="w3-margin-top">
            <img src="<?= asset('storage/'.$project->image) ?>" width="400">
        </div>
    <?php endif; ?>

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

</section>

<?= view('layout.footer') ?>
