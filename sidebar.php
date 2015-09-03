   <!-- Column 2 / Sidebar -->
    <div class="grid_4">

<form method="get" action="http://localhost/wordpress/">
    <input type="search" name="s" placeholder="search ??? " />
    <input type="hidden" value="submit" />
    <button type="submit" >submit</button>
</form>

        <h4>分类目录</h4>
        <ul>
            <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
        </ul>



        <h4>最新文章</h4>
        <ul>
            <?php
                $posts = get_posts('numberposts=6&orderby=post_date');
                foreach($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $post = $posts[0];
            ?>
        </ul>



        <h4>标签云</h4>
        <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>



        <h4>文章存档</h4>
        <ul>
            <?php wp_get_archives('limit=10'); ?>
        </ul>


<?php
/**
 * 名称：WordPress显示最近评论的文章列表
 * 作者：露兜
 * 博客：http://www.ludou.org/
 * 最后修改：2010年12月06日
 */

$pop = $wpdb->get_results("SELECT DISTINCT comment_post_ID
FROM $wpdb->comments
WHERE comment_approved = 1
AND comment_post_ID NOT IN
(
SELECT ID FROM $wpdb->posts
WHERE post_type != 'post'
OR post_status != 'publish'
OR post_password != ''
)
ORDER BY comment_ID DESC
LIMIT 10"); ?>
<h4>最新评论</h4>
<ul>
<?php foreach($pop as $post) : ?>
<li><a href="<?php echo get_permalink($post->comment_post_ID); ?>"><?php echo get_the_title($post->comment_post_ID); ?></a></li>
<?php endforeach; ?>
</ul>


<h4>热门文章</h4>
<ul><?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5");
foreach ($result as $post) {
setup_postdata($post);
$postid = $post->ID;
$title = $post->post_title;
$commentcount = $post->comment_count;
if ($commentcount != 0) { ?>
<li><a href="<?php echo get_permalink($postid); ?>"title="<?php echo $title ?>">
<?php echo $title ?></a> (<?php echo $commentcount ?>)</li>
<?php } } ?></ul>

    </div>
    <div class="hr grid_12 clearfix">&nbsp;</div>
