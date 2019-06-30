<?php
/*
Template Name: Portfolio Page
 */ 

get_header();

?>

<header class="masthead portfolio">
	<div class="masthead-content">
		<div class="container">
			<h1 class="masthead-heading text-black mb-0">Portfolio</h1>
		</div>
	</div>
</header>
<section id="portfolio-items">

    <?php $loop = new WP_Query( array('post_type' => 'portfolio_items', 'orderby' => 'post_id', 'order' => 'ASC', 'post_status' => 'publish'))?>
    <?php while($loop->have_posts() ) : $loop->the_post(); 
    
    $image = get_field('portfolio_afbeelding');
    $link = get_field('portfolio_link_naam');

    if(!empty(get_field('portfolio_link_naam'))){
        $link = get_field('portfolio_link_naam');
    } else {
        $link = '';
    }
    if(!empty(get_field('portfolio_bedrijf'))){
        $bedrijf = get_field('portfolio_bedrijf');
    } else {
        $bedrijf = '';  
    }

    ?>

    <div class="container portfolio-item">
      <div class="row align-items-center">
        <div class="col-lg-12 order-lg-1">
            <div class="p-5">
                <div class="portfolio-title">
                    <h2 class="text-center id-subtitle"><?= the_field('portfolio_projectnaam'); ?></h2>
                </div>
                <div class="portfolio-content">
                    <a id="single_image" href="<?= $image['url']; ?>"><img src="<?= $image['url']; ?>"></a>
                    <p class="beschrijving"><?= the_field('portfolio_beschrijving'); ?></p>
                </div>
                    <?php
                    if(empty($link)){
                        ?>
                        <a class="button" style="border: 2px solid #000; color: #000;">Geen link beschikbaar</a>
                        <?php
                    } else {
                        ?>
                        <a class="button" href="<?= the_field('portfolio_link_src'); ?>" target="blank"><?= the_field('portfolio_link_naam'); ?></a>
                        <?php
                    }
                    ?>
            </div>
        </div>
      </div>
    </div>

    <?php endwhile; ?>
    <div class="portfolio-image"></div>
  </section>


<?php get_footer();