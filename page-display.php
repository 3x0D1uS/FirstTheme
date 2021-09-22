<?php
get_header();
?>
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>
 games
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <h3><?php the_title(); ?></h3>
    
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>
    
<?php endwhile; ?>
 
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>
 
<?php else: ?>
 
<p>No posts found. :(</p>
 
<?php endif; ?>
<?php
$cat = get_field('category');
//var_dump($cat);
//die;
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => "$cat",
    'posts_per_page' => 6,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            endif;
            ?>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
    endwhile;
endif;
?>
<?php 
get_footer();
?>