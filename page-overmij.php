<?php
/*
Template Name: Over Mij Page
 */ 
get_header();

?>

<header class="masthead over-mij-header">
	<div class="masthead-content">
		<div class="container">
			<h1 class="masthead-heading text-black mb-0">Over mij</h1>
		</div>
	</div>
</header>
<section id="over-mij">
	<div class="container">
        <div class="row">
            <div class="col">
                <?php 
            $image = get_field('over_mij_afbeelding');

            if( !empty($image) ): ?>

	            <img src="<?php echo $image['url']; ?>" alt="<?= $image['alt']; ?>" class="<?= $image['alt']; ?> shadow-lg" />

            <?php endif; ?>
            <div class="test">
                <?= the_field('over_mij_beschrijving'); ?>
            </div>
            </div>
        </div>
	</div>
</section>

<?php get_footer();