<article>
    <header>
        <h1> <?php the_title(); ?> </h1>
    </header>
    <?php the_content(); ?>
    <!--paginação da simple page-->
    <?php  wp_link_pages();?>
</article>
