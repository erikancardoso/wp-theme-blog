<?php get_header(); ?>
    <img src='<?php header_image(); ?>' height="<?php echo esc_attr(get_custom_header()->heigth); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" />
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php the_archive_title('<h1 class="archive-title">','</h1>'); ?> <!--permite ter dois parametros de formatação-->
                <?php the_archive_description('<div class="archive-description">','</div>'); ?> <!---->
                <div class="container">
                    <div class="archive-items">
                        <?php
                        if ( have_posts()):
                            while (have_posts()):the_post();
                              get_template_part ('parts/content');// content- archive
                            endwhile;
                        else: ?> <!--fechou a tag php para poder entrar em uma tag html-->
                            <p> <?php esc_html_e('Nothing yet to be displayed!', 'wp-devs') ?> </p
                        <?php endif; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>