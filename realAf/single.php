<?php get_header();?>

	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page container">
		<div class="gutter-7px">
			<div id="main-content" class="col-md-8 fix-right">
				<article class="single-post">
					<div class="entry-header">
						<h1 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
						<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> <?php echo get_the_date( 'F  d, Y'  );?> <i class="fa fa-comment-o"></i> <?php echo comments_number();?> <i class="fa fa-eye"></i> 945</span>
					</div>
					<div class="post-thumbnail-wrap"><?php the_post_thumbnail();?></div>
					<div class="l-share" style="padding: 20px 0;">
						<ul class="list-inline center">
							<li><a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Share</a></li>
							<li><a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</a></li>
							<li><a href="#" class="btn btn-pinterest"><i class="fa fa-pinterest"></i> Tweet</a></li>
							<li><a href="#" class="btn btn-google"><i class="fa fa-google-plus-square"></i> Google+</a></li>
							<li><a href="#" class="btn btn-mail"><i class="fa fa-envelope-o"></i> E-mail</a></li>
						</ul>
					</div>
					<hr class="line">
					<div class="entry-content">
						<p><?php the_content();?></p>
						<div class="vid-tags">
							<?php the_tags();?>
						</div>
						<div class="line"></div>
						<!-- comment start here -->
							<!-- leave a replay -->
						<div class="comment">

						<div class="heading"><h4><?php comments_popup_link( 'No comment', '1 comment', '% comment');?></h4></div>
					<?php comments_template();?></div>
						
					
					<!-- comment  list-->
					
				
			</div>
		</article>
				<!-- end comment -->
				<div class="box">
					<div class="box-header header-natural">
						<h2>RELATED POSTS</h2>
					</div>
					<div class="box-content">
						<div class="row">
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<a href="<?php the_permalink();?>"></a>
										</div>
										<?php the_post_thumbnail();?>
									</div>
									<h3 class="vid-name"><a href="#"><?php the_title();?></a></h3>
									<div class="info">
										<h5>By <a href="#"><?php the_author();?></a></h5>
										<span><i class="fa fa-calendar"></i><?php echo get_the_date( 'F d, Y '  );?></span> 
										<span><i class="fa fa-heart"></i>1,200</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-md-3 fix-left">
				<!---- Start Widget ---->
				<?php dynamic_sidebar('lsidebar');?>
		</div>
		</div>
	</div>

<?php get_footer();?>