<?php
/*
Template Name: contact page
 */ 

get_header();

?>

<header class="masthead contact">
	<div class="masthead-content">
		<div class="container">
			<h1 class="masthead-heading text-black mb-0">Contact</h1>
		</div>
	</div>
</header>
<section id="contact">
	<div class="container">
    <p>U kunt contact met me opnemen door onderstaand formulier in te vullen.</p>
    <p>Direct 'n mail sturen? Dit kan naar <a href="mailto:info@etienruhl.nl">info@etienruhl.nl</a></p>
		<?php echo do_shortcode( "[swp_form]" ); ?>
	</div>
</section>

<?php get_footer();
