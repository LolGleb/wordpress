<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php
                    // Отображение пользовательских полей
                    $client_name = get_field('client_name');
                    $project_date = get_field('project_date');
                    ?>
                    <p><strong>Client Name:</strong> <?php echo esc_html($client_name); ?></p>
                    <p><strong>Project Date:</strong> <?php echo esc_html($project_date); ?></p>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

        <?php
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
