<?php get_header(); ?>

<!-- GREEN BANNER -->

    <div class="banner-container">
            <div class="color-banner">
                <div class="container" id="header-text">
                    <div class="row">
                        <h1 id="title-tekst"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
    </div>

<!-- CONTENT -->

    <!--BLOG POST LOOP WITH PAGINATION -->
    <div class="container">
        <div class="row" id="top-row">
            <div class="col" id="blog-page">
                <h1 id="blogfix"> Alle blogposts </h1>
                <?php  
                    $the_current_page= get_query_var('paged');
                    $the_query = new WP_Query( array(

                    'posts_per_page' => 3,
                    'paged' => $the_current_page

                    ));

                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>  
                        <p id="blog_title"><?php the_title(); ?></p>
                        <p><?php the_content(); ?></p><br>
                    <?php endwhile;

                    echo paginate_links(array(
                        'total' => $the_query->max_num_pages
                    ));

                    else: ?>

                    <!-- NO POSTS MESSAGE -->
                    <p><?php _e("Sorry, hier is niks te bekijken"); ?></p>

                <?php endif; ?>
                <?php wp_reset_postdata(); //Restore the original postdata for this page, if needed later ?>
            </div>
        </div>
    </div> 


<?php get_footer(); ?>