<?php

get_header();
    
    function slug(){
        global $product;
        global $post; 
        $termproduct = get_the_terms($product->term_id, 'product_cat');
        $termpost = get_the_terms($post->term_id, 'category');
        if($termproduct){
            foreach ($termproduct as $term) {
                $cat_parent_id = $term->parent;
                if($cat_parent_id == 0){
                    return $term->slug;
                }else{
                    $cat_parent =  get_term_by('id',  $cat_parent_id, 'product_cat');
                    return $cat_parent->slug;
                }
                
            }
        }else{
            foreach ($termpost as $term) {
                $cat_parent_id = $term->parent;
                if($cat_parent_id == 0){
                    return $term->slug;
                }else{
                    $cat_parent =  get_term_by('id',  $cat_parent_id, 'category');
                    return $cat_parent->slug;
                }
    
            }
        }
        
    }
    
    get_template_part('templates/template-'.slug().'/content',slug());
    get_footer();

?>



