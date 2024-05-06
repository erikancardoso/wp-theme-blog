<?php get_header(); ?>
    <img src='<?php header_image(); ?>' height="<?php echo esc_attr(get_custom_header()->heigth); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" />
    <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1><?php esc_html_e('Blog', 'wp-devs') ?></h1>
                        <div class="container">
                            <div class="blog-items">
                                <?php
                                if ( have_posts()):
                                    while (have_posts()):the_post();
                                    get_template_part('parts/content',);
                                    endwhile;
                                    the_posts_pagination();
                                else: ?>
                                    <p> <?php esc_html_e('Nothing yet to be displayed!', 'wp-devs') ?> </p
                                <?php endif; ?>
                            </div>

                            <?php get_sidebar(); ?>
                        </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>