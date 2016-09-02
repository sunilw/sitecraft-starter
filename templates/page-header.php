<?php use Roots\Sage\Titles; ?>

<header class="container-fluid page-header ">
    <div class="row">
        <div class="col-xs-12">
            <div class="title">
                <h1><?=  Titles\title(); ?></h1>
                <?php if (is_single() ||  is_page() ) {
                    get_template_part('templates/entry-meta');
                }  ?>
            </div>
        </div>
    </div>
</header>
