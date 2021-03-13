<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post post--text">

	<header class="post__header">
		<h1 class="post__title" style="margin-bottom:20px;">This page doesn't exist!</h1><!-- /.post__title -->
	</header><!-- /.post__header -->

	<div class="post__content">
		        <p>Please search to find what you're looking for or visit our <a href="<?php echo site_url() ?>">homepage</a> instead.</p>
        <?php echo search() ?>
	</div><!-- /.post__content -->

</article><!-- /.post -->