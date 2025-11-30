<section id="portfolio" class="mb-5">
    <h2 class="mb-4 text-center">Portfolio</h2>
    <div class="row">
        <?php
        $portfolio = new WP_Query(['post_type'=>'portfolio', 'posts_per_page'=>6]);
        if($portfolio->have_posts()):
            while($portfolio->have_posts()): $portfolio->the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if(has_post_thumbnail()) the_post_thumbnail('medium', ['class'=>'card-img-top']); ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>
