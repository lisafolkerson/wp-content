<?php

/** * Grid Archive Template File *  
* This file is used to display a page when nothing more specific matches a query. 
* Learn more: http://codex.wordpress.org/Template_Hierarchy 
* * @package Starter_Theme */

get_header(); ?>

<div class="contentWrapper"> 
    <div class="contentContainer contentWithAside">
    	<div id="primary" role="main"> 

       <?php if ( have_posts() ) : ?>
            <!-- there IS content for this query -->

            <?php // check if we're on an archive page
            if ( is_archive() ) :
                // if so, print the archive title before the loop begins
                get_template_part( 'inc/archive-header' );
            endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php get_template_part('content'); ?>

            <?php endwhile; ?>

                <?php get_template_part('inc/pagination'); ?>

        <?php else : ?>
            <!-- there IS NOT content for this query -->

            <article id="post-0" class="hentry post no-results not-found">
                <header class="entry-header">
                    <h1><?php _e( "Oops!", "starter-theme" ); ?></h1>
                </header><!-- .entry-header -->

                <p><?php _e( "We can&#039;t find content for this page!", "starter-theme" ); ?></p>
            </article><!-- #post-0 -->

        <?php endif; ?>

        </div><!-- / #primary -->
        <?php get_sidebar(); ?>
    </div><!-- / #contentContainer -->   
</div><!-- / #contentWrapper --> 

<?php get_footer(); ?>