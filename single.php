<?php

get_header();

    function slug(){
        global $product; 
        $terms = get_the_terms($product->ID, 'product_cat');
        foreach ($terms as $term) {
            $cat_parent_id = $term->parent;
            if($cat_parent_id == 0){
                return $term->slug;
            }else{
                $cat_parent =  get_term_by('id',  $cat_parent_id, 'product_cat');
                return $cat_parent->slug;
            }

        }
    }
    get_template_part('templates/template-'.slug().'/content',slug());
    echo slug();
    get_footer();
?>



