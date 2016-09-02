<div class="entry-meta">
    <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>    
    <span class="byline author vcard"><?= __('By', 'sage'); ?>
	<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
	    <?php echo ss_userdata($post->post_author, "user_nicename")  ?>
	</a>
    </span> 
</div>

