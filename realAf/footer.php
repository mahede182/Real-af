
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-footer footer-1">
						<div class="footer-heading"><h1><span style="color: #fff;">MYAFRICA</span></h1></div>
						<div class="content">
							<p>Never missed any post published in our site. Subscribe to our daly newsletter now.</p>
							<strong>Email address:</strong>
							<form action="#" method="post">
								<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
								<input type="submit" value="SUBSCRIBE" class="btn btn-3" />
							</form>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-2">
						<div class="footer-heading"><h4>Category</h4></div>
						<div class="content">
							<?php wp_list_categories(array(
								'style'	=>	'none',
								'depth'	=>	1,
								'separator'=> ' ',
							));?>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-3">
						<div class="footer-heading"><h4>Link List</h4></div>
						<div class="content">
							<ul>
							<?php while(have_posts()):the_post();?>
								<li><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 8);?></a></li>
						<?php endwhile;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right">
			<p><a href="https://github.com/mahede182/realaf"> <?php echo '&copy;'.date('Y').        ' | '.get_bloginfo('name');?> </a></p>
		</div>
	</footer>

<?php wp_footer();?>

</body>
</html>
