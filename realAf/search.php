<?php get_header();?>	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
		<div class="clearfix no-gutter">
			<div id="main-content" class="col-md-9 fix-right">
				
				<div class="gutter-7px">
					<?php while(have_posts()):the_post();?>
					<div class="col-sm-4">
						
						<article>
							<div class="entry-header">
								<div class="grid-cat"><a href="<?php the_permalink();?>">
								</a><?php the_category( ' | ');?></div>
								<h3 class="entry-title"><a href="#"><?php the_title();?></a></h3>
								<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> <?php echo get_the_date('F d, Y ');?> / <i class="fa fa-comment-o"></i> <?php echo comments_number();?> / <i class="fa fa-eye"></i> 945</span>
							</div>
							<div class="post-thumbnail-wrap"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a></div>
							<div class="entry-content">
								<p><?php echo wp_trim_words( get_the_content(), 40,false);?></p>
								<a href="<?php the_permalink();?>">More...</a>
							</div>
						</article>
					</div>
				
<?php endwhile;?>
</div>
<?php wp_reset_query();?>
					
			</div>
			<?php get_sidebar();?>
	</div>
	<?php get_footer();?>
	<?php
	// array(
	// 	'child_of'            => 0,
	// 	'current_category'    => 0,
	// 	'depth'               => 0,
	// 	'echo'                => 1,
	// 	'exclude'             => '',
	// 	'exclude_tree'        => '',
	// 	'feed'                => '',
	// 	'feed_image'          => '',
	// 	'feed_type'           => '',
	// 	'hide_empty'          => 0,
	// 	'hide_title_if_empty' => false,
	// 	'hierarchical'        => true,
	// 	'order'               => 'ASC',
	// 	'orderby'             => 'name',
	// 	'separator'           => '<br />',
	// 	'show_count'          => 0,
	// 	'show_option_all'     => '',
	// 	'show_option_none'    => __( 'No categories' ),
	// 	'style'               => 'list',
	// 	'taxonomy'            => 'category',
	// 	'title_li'            => __( 'Categories' ),
	// 	'use_desc_for_title'  => 1,

	// array(
	// 	'child_of'	=>	0,
	// 	'style'               => 'none',
	// 	'separator'           => ' | ',
	// 	'depth'               => 1,
	// 	'echo'			   	  =>2,
	// 	'use_desc_for_title'  => 1,
	// 	'hide_title_if_empty' => true,
	?>