<div class="blog__banner">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
            <div class="blog__banner--text">
                <p><?php the_title() ?></p>
                <span><?php the_content() ?></span>
            </div>
        </div>