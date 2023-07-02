        <?php get_header(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                        <header class="content-Header">
                            <h1 class="content-Title">
                                <?php if ( is_month() ): ?>
                                    <?php echo get_the_date( 'Y年n月' ); ?>
                                <?php else: ?>
                                    <?php single_term_title(); ?>
                                <?php endif; ?>
                            </h1>
                        </header>
                        <?php if( have_posts() ) :?>
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'module-Article_Item' ); ?>>
                            <a href="<?php the_permalink(); ?>" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail( 'archive_thumbnail' ); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
                                <?php endif; ?>
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title"><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <ul class="module-Article_Item_Meta">
                                        <?php
                                            $neko_category_list = get_the_category();
                                            if ( $neko_category_list ) :
                                        ?>
                                        <li class="module-Article_Item_Cat">
                                            <?php echo esc_html( $neko_category_list[0]->name ); ?>
                                        </li>
                                        <?php endif; ?>
                                        <li class="module-Article_Item_Date"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time></li>
                                    </ul>
                                </div>
                            </a>
                        </article>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <nav class="navigation pagination" role="navigation" aria-label="投稿">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">&lt;<span class="sr-only">前</span></a>
                                <a class="page-numbers" href="#">1</a>
                                <span aria-current="page" class="page-numbers current">2</span>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#"> <span class="sr-only">次</span>&gt;</a>
                            </div>
                        </nav>
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
    <script src="./assets/js/theme-common.js"></script>
</body>

</html>
