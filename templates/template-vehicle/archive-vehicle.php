<div class="detail__car--container__list">
    <?php
    global $paged;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    function request()
    {
        global $wp;
        $url = $wp->request;
        $requesturl = explode("/", $url);
        return $requesturl[0];
    }
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 6,
        'paged' => $paged,
        'product_cat' => request()
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) {

        while ($loop->have_posts()):
            $loop->the_post();

            get_template_part('templates/template-vehicle/item', 'vehicle');
        endwhile;
    } else {
        echo __('Không có sản phẩm nào');
    }
    ?>
</div>
<div class="liveshow__container--body__product--list__page vehicle__pagging"
    style="align-items: center;justify-content: center;">

    <?php previous_posts_link('<div class="liveshow__container--body__product--list__page--item">
              <ion-icon name="chevron-back"></ion-icon>
            </div>', $loop->max_num_pages); ?>
    <?php

    for ($x = 1; $x <= $loop->max_num_pages; $x++) {
        ?>
        <a href="<?php echo home_url(); ?>/<?php request(); ?>/page/<?php echo $x; ?>" class="">
            <div class="liveshow__container--body__product--list__page--item"><?php echo $x; ?></div>
        </a>
        <?php
    }

    ?>
    <?php next_posts_link(' <div class="liveshow__container--body__product--list__page--item">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>', $loop->max_num_pages) ?>


</div>
<?php wc_get_template('loop/pagination.php'); ?>
<?php wp_reset_postdata(); ?>