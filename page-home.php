<?php
/*
Template Name: Home Page
 */ 

get_header();

?>

<header class="masthead home">
	<div class="masthead-content">
		<div class="container">
			<h1 class="masthead-heading text-black mb-0">Hoi, ik ben Etiën</h1>
			<h2 class="masthead-subheading mb-0">Fullstack (web)developer</h2>
			<a href="<?php bloginfo('stylesheet_directory'); ?>/CV.pdf" download><button type="button" class="btn btn-default btn-lg">Download CV</button></a>
		</div>
	</div>
</header>
  <section id="ervaring">
    <div class="container">
        <h1 class="text-center id-title">Ervaring</h1>
        <div class="row align-items-center">

        <?php $loop = new WP_Query( array('post_type' => 'ervaring', 'orderby' => 'date', 'order' => 'ASC', 'post_status' => 'publish'))?>
        <?php while($loop->have_posts() ) : $loop->the_post(); 

        if(empty(get_field('ervaring_eind_datum'))){
            $eindDatum = 'Heden';
        } else {
            $eindDatum = get_field('ervaring_eind_datum');
        }

        if(empty(get_field('ervaring_bedrijf'))){
            $ervaringBedrijf = 'tweedeFunctie';
        } else {
            $ervaringBedrijf = get_field('ervaring_bedrijf');
        }

        ?>

        <div class="col-lg-12 order-lg-1 <?= $ervaringBedrijf; ?>">
            <div class="p-5">
                <h2 class="display-8 company-name"><?= the_field('ervaring_bedrijf'); ?></h2>
                <h3 class="company-function"><?= the_field('ervaring_functie'); ?></h3>
                <p><?= the_field('ervaring_beschrijving'); ?></p>
                <h4 class="text-black"><?= the_field('ervaring_begin_datum') . " - " . $eindDatum; ?></h4>
            </div>
        </div>

        <?php endwhile;
        wp_reset_query(); 
        ?>
      </div>
    </div>
  </section>
  <section id="opleiding">
    <h1 class="text-center id-title">Opleidingen</h1>
    <?php $loop = new WP_Query( array('post_type' => 'opleiding', 'orderby' => 'post_id', 'order' => 'ASC', 'post_status' => 'publish'))?>
    <?php while($loop->have_posts() ) : $loop->the_post(); 

    if(empty(get_field('eind_datum'))){
        $eindDatum = 'Heden';
    } else {
        $eindDatum = get_field('eind_datum');
    }

    ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 order-lg-1">
                <div class="p-5">
                    <h2 class="display-8 school-name text-right text-black"><?= the_field('opleidings_school'); ?></h2>
                    <h3 class="school-education text-right text-black"><?= the_field('opleidings_naam'); ?></h3>
                    <h4 class="text-black text-right"><?= the_field('begin_datum') . " - " . $eindDatum; ?></h4>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;
    wp_reset_query();
    ?>
  </section>
<div id="skillsEigenschappenFooterBackground">
    <section id="skills">
        <h1 class="text-center id-title">Skills</h1>
            <div class="container">
                <div class="row">
                <?php $loop = new WP_Query( array('post_type' => 'skills', 'orderby' => 'post_id', 'order' => 'ASC', 'post_status' => 'publish',  'posts_per_page'=> -1))?>
                <?php while($loop->have_posts() ) : $loop->the_post(); 

                if(empty(get_field('skill_cijfer'))){
                    $cijfer = 4;
                } else {
                    $cijfer = get_field('skill_cijfer');
                }

                ?>
                    <div class="col-lg-<?= $cijfer; ?> col-md-6 item">
                        <div class="single-service">
                            <i class="<?= the_field('skill_icon'); ?>"></i>
                            <h4><?= the_field('skill_naam'); ?></h4>
                        </div>
                    </div>
                <?php endwhile;                     
                wp_reset_query();
                ?>
                </div>
            </div>
                <div class="container">
                    <p class="text-center bg-black text-white overige">
                        Tevens heb ik ervaring met agile werkmethodes, frameworks zoals Spring Boot, maar ook met verschillende database structuren waaronder SQL, Mysql en MongoDB
                    </p>
                </div>
    </section>
    <section id="eigenschappen">
        <h1 class="text-center id-title">Eigenschappen</h1>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 order-lg-1">
                        <ul class="eigenschappen-list">
                            <?php $loop = new WP_Query( array('post_type' => 'eigenschappen', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'DESC'))?>
                            <?php while($loop->have_posts() ) : $loop->the_post(); ?>
                                <li><?= the_field('eigenschap'); ?></li>          
                            <?php endwhile; 
                            wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
</div>

<?php get_footer();
