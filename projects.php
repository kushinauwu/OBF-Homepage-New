<?php
/*
Template Name:projects
*/
?>

<?php get_header(); ?>

<div class="showcase-wrapper" id="main">
    <div class="container-fluid">
        <?php custom_breadcrumbs(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
        <p>
            <?php __('No post found'); ?>
        </p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
    <section class="main-projects" id="member-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-projects-head">
                        <h1>Member Projects</h1>
                    </div>
                </div>
            </div>

            <div class="main-projects-content">
                <div class="main-projects-content-wrapper">
                    <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'member-projects',
                                                            )
                                                        ),
                                            );
                                $main_project = new WP_Query( $args );
                            ?>
                    <?php if ( $main_project->have_posts() ) : while ( $main_project->have_posts() ) : $main_project->the_post(); ?>
                    <div class="projects-details">
                        <div class="row">
                            <div class="project-icon">
                                <div class="col-sm-3">
                                    <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                                    <?php if ( has_post_thumbnail() ) { ?>
                                    <a href="<?php echo $project_url; ?>" target="_blank">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <?php }
                                            else  { ?>
                                    <a href="<?php echo $project_url; ?>" target="_blank">
                                        <?php the_title(); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="col-sm-9">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; else : ?>
                    <p>
                        <?php __('No post found'); ?>
                    </p>
                    <?php endif;
                                wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="affiliated-projects" id="affiliated-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <div class="affiliated-projects-head">
                        <h1>Affiliated Projects</h1>
                    </div>

                </div>
            </div>

            <div class="affiliated-projects-content">

                <div class="affiliated-projects-content-wrapper">
                    <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'affiliated-projects',
                                                            )
                                                        ),
                                            );
                                $affiliated_project = new WP_Query( $args );
                            ?>
                    <?php if ( $affiliated_project->have_posts() ) : while ( $affiliated_project->have_posts() ) : $affiliated_project->the_post(); ?>
                    <div class="projects-details">
                        <div class="row">
                            <div class="project-icon">
                                <div class="col-sm-3">
                                    <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                                    <?php if ( has_post_thumbnail() ) { ?>
                                    <a href="<?php echo $project_url; ?>" target="_blank">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <?php }
                                            else  { ?>
                                    <a href="<?php echo $project_url; ?>" target="_blank">
                                        <?php the_title(); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="col-sm-9">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else : ?>
                    <p>
                        <?php __('No post found'); ?>
                    </p>
                    <?php endif;
                                wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="related-projects" id="related-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <div class="related-projects-head">
                        <h1>Other Related Projects</h1>
                    </div>

                </div>
            </div>

            <div class="related-projects-content-wrapper">
                <div class="related-projects-content grid-container">
                    <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'other-related-projects',
                                                            )
                                                        ),
                                            );
                                $related_project = new WP_Query( $args );
                            ?>
                    <?php if ( $related_project->have_posts() ) : while ( $related_project->have_posts() ) : $related_project->the_post(); ?>
                    <div class="related-projects-details">
                        <div class="related-projects-icon">
                            <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                            <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php echo $project_url; ?>" target="_blank">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="related-projects-heading">
                            <h2><a href="<?php echo $project_url; ?>" target="_blank">
                                    <?php the_title(); ?></a></h2>
                        </div>
                        <div class="related-projects-info">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; else : ?>
                    <p>
                        <?php __('No post found'); ?>
                    </p>
                    <?php endif;
                                wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ontologies-definitions" id="ontologies-and-definitions">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ontologies-definitions-heading">
                        <h1>Ontologies and Definitions</h1>
                    </div>
                </div>
            </div>

            <div class="ontologies-definitions-content-wrapper">
                <div class="ontologies-definitions-content">
                    <ul class="ontologies-definitions-list list-unstyled">
                        <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'ontologies-and-definitions',
                                                            )
                                                        ),
                                            );
                                $ontologies_and_definitions = new WP_Query( $args );
                            ?>
                        <?php if ( $ontologies_and_definitions->have_posts() ) : while ( $ontologies_and_definitions->have_posts() ) : $ontologies_and_definitions->the_post(); ?>
                        <li>
                            <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                            <p>
                                <a href="<?php echo $project_url; ?>" target="_blank" class="ontology-title">
                                    <?php the_title(); ?> :
                                </a>
                                <?php the_content(); ?>
                            </p>
                        </li>
                        <?php endwhile; else : ?>
                        <p>
                            <?php __('No post found'); ?>
                        </p>
                        <?php endif;
                                wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="in-memoriam" id="retired-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="in-memoriam-heading">
                        <h1>Retired Projects</h1>
                    </div>
                </div>
            </div>

            <div class="in-memoriam-content-wrapper">
                <div class="in-memoriam-content">
                    <ul class="in-memoriam-list list-unstyled">
                        <?php
                                $args = array(
                                                'post_type' => 'obf-projects',
                                                'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'project-type',
                                                                'field' => 'slug',
                                                                'terms' => 'retired-projects',
                                                            )
                                                        ),
                                            );
                                $in_memoriam = new WP_Query( $args );
                            ?>
                        <?php if ( $in_memoriam->have_posts() ) : while ( $in_memoriam->have_posts() ) : $in_memoriam->the_post(); ?>
                        <li>
                            <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
                            <p>
                                <a href="<?php echo $project_url; ?>" class="in-memoriam-project-title" target="_blank">
                                    <?php the_title(); ?> :
                                </a>
                                <?php the_content(); ?>
                            </p>
                        </li>
                        <?php endwhile; else : ?>
                        <p>
                            <?php __('No post found'); ?>
                        </p>
                        <?php endif;
                                wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
