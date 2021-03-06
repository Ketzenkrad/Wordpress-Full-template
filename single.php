<?php get_header() ?>

    <div id="fh5co-blog" class="fh5co-bg-section" style="background-color:#fcfcfc;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php
                    if( has_post_thumbnail() ){
                        $img_url = get_the_post_thumbnail_url();
                    }else{
                        $img_url = 'https://picsum.photos/800/570';
                    }
                    ?>
                    <h1><?php echo the_title() ?></h1>
                    <img class="pull-left law-post-image" src="<?php echo $img_url ?>" alt="">
                    <?php the_content() ?>

                    <?php
                    if( comments_open() || get_comments_number() ){
                        comments_template();
                    }
                    ?>

                <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>