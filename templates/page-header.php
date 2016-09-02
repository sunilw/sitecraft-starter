<?php use Roots\Sage\Titles; ?>

<header class="container page-header ">
    <div class="row">
        <div class="title">
            <h1><?=  Titles\title(); ?></h1>
	    <?php if (is_single() ||  is_page() ) {
		get_template_part('templates/entry-meta');
	    }  ?>
        </div>
    </div>
</header>
