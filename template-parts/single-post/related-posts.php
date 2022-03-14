<?php
$cats = get_the_terms(get_the_ID(), 'category' );
$cat_ids = wp_list_pluck($cats,'term_id' );
$related_post_count = 2;
$posts = new WP_Query( array(
    'post_type' => 'post',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $cat_ids,
            'operator'=> 'IN' //Or 'AND' or 'NOT IN'
        )),
    'posts_per_page' => $related_post_count,
    'ignore_sticky_posts' => 1,
    'orderby' => 'rand',
    'post__not_in' => array($post->ID)
));

if ( $posts->have_posts() ) :
    ?>
    <div class="pt-17.5 pb-17.5">
        <h2 class="font-rufina font-bold text-title12 text-shaft mb-7.5"><?php  ?></h2>

        <div class="grid grid-cols-2 gap-x-7.5 gap-y-15">
            <?php
            while($posts->have_posts()) : $posts->the_post();
	            $user_name = get_the_author_meta( 'display_name' );
	            $user_url = get_the_author_meta( 'user_url' );
            ?>
                <!-- Blog item -->
                <div class="col-span-1 relative z-10 pt-5 ">
                    <div class="absolute top-0 left-6 inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5" >
	                    <?php the_category(", ", " ", get_the_ID() ); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">
	                    <?php the_post_thumbnail('hovard-box', ['class' => 'w-full']); ?>
                    </a>
                    <div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
                        <ul class="flex gap-6">
                            <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
                                <a href="<?php echo esc_url( $user_url ); ?>"><i class="ti-user text-sienna mr-2.5"></i><?php echo esc_html( $user_name ); ?></a>
                            </li>
                            <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
                                <i class="ti-calendar text-sienna mr-2.5"></i><?php echo esc_html( get_the_date('F j, Y') ); ?>
                            </li>
                        </ul>

                        <h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-oceangreen">
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                        </h4>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php
endif;
?>

