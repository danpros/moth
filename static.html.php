<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post post--text">

	<header class="post__header">
		<h1 class="post__title" style="margin-bottom:20px;"><?php echo $p->title;?>
		</h1><!-- /.post__title -->
		<span class="post__date">
		<?php if (authorized($p)) { echo '<span><a href="'. $p->url .'/edit?destination=post">Edit</a></span>'; } ?>
		</span>
	</header><!-- /.post__header -->

	<div class="post__content">
		<?php echo $p->body; ?>
	</div><!-- /.post__content -->

</article><!-- /.post -->