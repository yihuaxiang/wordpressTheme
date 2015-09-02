<?php
/*
Template Name: contract
*/
?>
<?php get_header(); ?>
	<!-- Caption Line -->
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<h2 class="grid_12 caption clearfix"><?php the_title(); ?></h2>
	<div class="hr grid_12 clearfix">&nbsp;</div>
	<!-- Column 1 / Content -->
	<div class="grid_8">
		<?php the_content(); ?>
		<?php comments_template(); ?>
	</div>
	<?php else : ?>
	<div class="grid_8">
		Ã»ÓÐÈÎºÎÎÄÕÂ£¡
	</div>
	<?php endif; ?>
	<!-- Column 2 / Sidebar -->
	<div class="grid_4 contact">
		<!-- Adress and Phone Details -->
		<h4>地址邮箱：</h4>
		<div class="hr dotted clearfix">&nbsp;</div>
		<ul>
			<li> <strong>符栋栋</strong><br />
				朝阳望京<br />
				北京<br />
				中国<br />
				<br />
			</li>
			<li>手机：18215600321</li>
			<li>邮编：100102</li>
		</ul>
		<!-- Email Addresses -->
		<h4>邮箱：</h4>
		<div class="hr dotted clearfix">&nbsp;</div>
		<ul>
			<li>Gmail：<a href="mailto:fudongdonguestc@gmail.com">fudongdonguestc@gmail.com</a></li>
		</ul>
		<!-- Social Profile Links -->
		<h4>照片展：</h4>
		<div class="hr dotted clearfix">&nbsp;</div>
		<ul>
			<li class="float"><a href="#"><img alt="" src="images/twitter.png" title="Twitter" /></a></li>
			<li class="float"><a href="#"><img alt="" src="images/facebook.png" title="Facebook" /></a></li>
			<li class="float"><a href="#"><img alt="" src="images/stumbleupon.png" title="StumbleUpon" /></a></li>
			<li class="float"><a href="#"><img alt="" src="images/flickr.png" title="Flickr" /></a></li>
			<li class="float"><a href="#"><img alt="" src="images/delicious.png" title="Delicious" /></a></li>
		</ul>
	</div>
	<div class="hr grid_12 clearfix">&nbsp;</div>
<?php get_footer(); ?>
