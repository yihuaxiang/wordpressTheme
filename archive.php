<?php get_header(); ?>


	<!-- Column 1 /Content -->
	<div class="grid_8">
		<div class="sorting">
			<div class="sort_by">
				<h4>排序</h4>
				<ul>
					<li><a href="#">随机查看</a></li>
					<li><a href="#">评论最多</a></li>
					<li><a href="#">标题排序</a></li>
				</ul>
			</div>
			<h4>浏览分类</h4>
			<h2>程序员</h2>
			<p></p>
			<p>程序员(英文Programmer)是从事程序开发、维护的专业人员。一般将程序员分为程序设计人员和程序编码人员，但两者的界限并不非常清楚，特别是在中国。软件从业人员分为初级程序员、高级程序员、系统分析员，系统架构师，测试工程师五大类。</p>
		</div>

		<!-- Blog Post -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post">
				<!-- Post Title -->
				<h3 class="title"><a href="single.html"><?php the_title(); ?></a></h3>
				<!-- Post Data -->
				<p class="sub"><?php the_tags('标签：', ', ', ''); ?> &bull; <?php the_time('Y年n月j日') ?> &bull; <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></p>
				<div class="hr dotted clearfix">&nbsp;</div>
				<!-- Post Image -->
				<!--<img class="thumb" alt="" src="<?php bloginfo('template_url'); ?>/images//610x150.gif" />-->
				<!-- Post Content -->
				<?php the_excerpt(); ?>
				<!-- Read More Button -->
				<p class="clearfix"><a href="single.html" class="button right"> Read More...</a></p>
			</div>
			<div class="hr clearfix">&nbsp;</div>
		<?php endwhile; ?>

		<!-- Blog Navigation -->
		<p class="clearfix"><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?></span></p><p class="clearfix"> <a href="#" class="button float">&lt;&lt; Previous Posts</a> <a href="#" class="button float right">Newer Posts >></a> </p>
        <?php else : ?>
        <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
        <p>没有找到任何文章！</p>
        <?php endif; ?>
	</div>


<?php get_sidebar(); ?>


<?php get_footer(); ?>
