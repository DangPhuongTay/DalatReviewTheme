<?php previous_posts_link('<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-back"></ion-icon>
                </div>', $loop->max_num_pages); ?></li>
<?php

// echo ceil($count/4);
for ($x = 1; $x <= ceil($count / $loop->max_num_pages); $x++) {
    ?>
    <a href="<?php echo home_url(); ?>/page/<?php echo $x; ?>" class="">
        <div class="liveshow__container--body__product--list__page--item"><?php echo $x; ?></div>
    </a>
    <?php
}

?>
<?php next_posts_link('<div class="liveshow__container--body__product--list__page--item">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>', $loop->max_num_pages) ?></li>