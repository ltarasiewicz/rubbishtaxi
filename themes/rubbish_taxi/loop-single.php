<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blog-post blog">
    <div class="post-date">
      <?php the_time('j'); ?>
      <span>
      <?php the_time('M'); ?>
      </span></div>
    <h1 class="sub-header1">
      <?php the_title(); ?>
    </h1>
    <div class="blog-content"> <?php echo get_the_content(); ?> </div>
    <span class="pull-left comment-count">
    <?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( 'Comments 1', 'twentyten' ), __( 'Comments %', 'twentyten' ) ); ?>
    </span> </div>
</div>
<!-- #post-## -->

<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>
