<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post post--text">

	<header class="post__header">
		<h1 class="post__title" style="margin-bottom:20px;">Search results not found!</h1><!-- /.post__title -->
	</header><!-- /.post__header -->

	<div class="post__content">
<p>Please search again, or would you like to try our <a href="<?php echo site_url() ?>">homepage</a> instead?</p>
        <div class="search-404">
            <?php echo search() ?>
        </div>
	</div><!-- /.post__content -->

</article><!-- /.post -->