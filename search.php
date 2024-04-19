<?php get_header(); ?>

<div class="tour">
    <br />
    <br />
    <br />
    <div class="firstProduct ">
        <?php
        $s = get_search_query();
        $args = array(
            's' => $s,
            'post_type' => 'product',
            'posts_per_page' => 8,
            'paged' => $paged,
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
        ?>
            <div class="detail__tour--content__left--header">Kết quả tìm kiếm: <?php echo get_query_var('s') ?></div>
            <div class="firstProduct__content">
                <div class="firstProduct__content--list">

                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                    ?>
                        <?php
                        get_template_part('templates/template-tour/item', 'tour'); ?>
                    <?php
                    }
                } else {
                    ?>
                    <div class="found">
                        <h4 style='color:#000'>Không tìm thấy kết quả ?</h4>
                        <a class="found__link" href="<?php echo home_url(); ?>">Quay lại trang chủ</a>
                    </div>
                <?php }
                ?>

                </div>

            </div>
    </div>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>