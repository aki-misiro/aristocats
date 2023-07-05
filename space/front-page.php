<?php get_header(); ?>
<main class="main">
    <div class="container-fluid">
        <div class="home-Hero">
            <div class="home-Hero_Inner">
            </div>
        </div>
        <section class="home-News">
            <h2 class="home-News_Title">投稿一覧</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php
                    $neko_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $neko_news_query = new WP_Query( $neko_args );
                    if ( $neko_news_query->have_posts() ) :
                        ?>
                        <?php
                        while ( $neko_news_query->have_posts() ) :
                            $neko_news_query->the_post();
                            ?>
                            <?php get_template_part( 'template-parts/loop', 'post' ); ?>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>
                </div>
            </div>
            <p class="home-News_More">
                <a href="https://aristocats.space/list/" class="home-News_More_Link">もっと見る</a>
            </p>
        </section>
    </div>
</main>
<?php get_footer(); ?>