<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 get_header(); ?>

 <?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	 <header class="page-header alignwide">
		 <h1 class="page-title"><?php single_post_title(); ?></h1>
	 </header><!-- .page-header -->
 <?php endif; ?>
 
 <div class="content-list-post ">
	 <div class="row">
	 <div class="col-md-3 list-top-views">
			<div class="border-row-top-views"> 
				<div class="title-top-views">
					<h2 class="title-top-views-in">
						<a class="inner-title"href=""><?php echo get_option('widget_block')[5]['content']; ?></a>
					</h2>
				</div>
				<div class="title-post-top-views">
					<?php
					$args = array(
						'numberposts' => 8, 
						'post_status' => 'publish', 
						'orderby'     => 'date', 
						'order'       => 'DESC'
					);

					$recent_posts = get_posts($args);
					$count = 1;
					foreach ($recent_posts as $post) {
						setup_postdata($post);
						?>
							<div class="list-top-views ">
								<span class="number-top-views"><?php echo $count; ?></span>
								<h3 class="list-title-top-views"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<?php
							$count++;
            }
						wp_reset_postdata();
						?>
				</div>
			</div>
		</div>
		 <div class="col-md-6">
		 <?php
			 if ( have_posts() ) {
 
				 // Load posts loop.
				 while ( have_posts() ) {
					 the_post();
 
					 get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				 }
 
				 // Previous/next page navigation.
				 twenty_twenty_one_the_posts_navigation();
 
			 } else {
 
				 // If no content, include the "No posts found" template.
				 get_template_part( 'template-parts/content/content-none' );
 
			 }?>
		 </div>
		 <div class="col-md-3">
			<div class = "recents_comments">
				<div class="commentss">
			<p class = "comment">Comment</p>
				<?php
					$args = array(
						'number'      => 3,
						'status'      => 'approve',
						'order'       => 'DESC',
						'orderby'     => 'comment_date',
					);
		
					$latest_comments = get_comments($args);
					if ($latest_comments) {
						foreach ($latest_comments as $comment) {
							$comment_post_id = $comment->comment_post_ID;
							$comment_post_url = get_permalink($comment_post_id);		
							echo '<div class="comment">';
							echo '<p class="comment-content"><a href="' . $comment_post_url . '">' . $comment->comment_content . '</a></p>';
							echo '</div>';
						}
					} else {
						echo 'Không có comment nào.';
					}
				?>
				</div>
			</div>
		</div>
	 </div>
 </div>
 <?php
 get_footer();
 