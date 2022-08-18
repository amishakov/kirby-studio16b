<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>

    <div id="highlight" class="light">
		<div class="stage">
            <h2>
                <?= $page->highlight(); ?>
            </h2>
		</div>
    </div>
    <figure class="featured">
        <?= $page->image(); ?>
    </figure>

    <div id="intro">
        <div class="stage">
            <p><?= $page->intro(); ?></p>
        </div>
    </div>

    <div id="content">
       <div class="stage">
            <?= $page->text()->kirbytext(); ?>
        </div>
    </div>

</main>

<?php snippet('footer'); ?>