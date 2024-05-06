<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <header class="error404">
                    <h3> <?php esc_html_e('Page Not Found!', 'wp-devs') ?></h3>
                </header>
                <div class="error">
                    <p> How about doing a search? </p>
                    <?php get_search_form(); ?>
                    <?php the_widget(
                            'WP_Widget_Recent_Posts',
                        array(
                                'title' => __('Latest Posts', 'wp-devs'),
                                'number' => '3'
                        )
                    ); ?>
                </div>

            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>
