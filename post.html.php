<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post post--text <?php if (!empty($p->link)): ?>post--link<?php endif;?> <?php if (!empty($p->quote)): ?>post--quote<?php endif;?>">

	<header class="post__header">
		<h1 class="post__title">
		<?php if (!empty($p->link)) { ?>
		<a href="<?php echo $p->link;?>" target="_blank"><?php echo $p->title;?></a>
		<?php } elseif (!empty($p->quote)) {?>
		<?php echo $p->quote;?>
		<?php } else {?>
		<?php echo $p->title;?>
		<?php }?>
		</h1><!-- /.post__title -->

		<span class="post__date">Posted <a href="<?php echo $p->url;?>"><time class="entry-date published updated"><?php echo format_date($p->date) ?></time></a> by 
		<a href="<?php echo $p->authorUrl;?>"><?php echo $p->authorName;?></a> in 
		<?php echo $p->category;?>
		<?php if (login()) { echo '<span class="sep"> |</span> <span><a href="'. $p->url .'/edit?destination=post">Edit</a></span>'; } ?>
		</span>
	</header><!-- /.post__header -->
	
	<?php if (!empty($p->image)):?>
	<div class="featured-wrapper">
		<img style="width:100%;" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail" src="<?php echo $p->image; ?>">
	</div>
	<?php endif; ?>
	<?php if (!empty($p->audio)):?>
	<div class="featured-wrapper">
		<iframe width="100%" height="200px" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
	</div>
	<?php endif; ?>
	<?php if (!empty($p->video)):?>
	<div class="featured-wrapper">
		<iframe width="100%" height="315px" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_video_id($p->video); ?>" frameborder="0" allowfullscreen></iframe>
	</div>
	<?php endif; ?>	
	<div class="post__content">
		<?php echo $p->body; ?>
	</div><!-- /.post__content -->


	<footer class="post__footer">
		<div class="tags"><?php echo $p->tag;?></div>
			<ul class="post__options">
				<li class="post__options-item">
					<a href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>" class="post__option">
						<i class="icon-facebook"></i>
					</a><!-- /.post__option -->
				</li><!-- /.post__options-item -->
				<li class="post__options-item">
					<a href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>" class="post__option">
						<i class="icon-twitter"></i>
					</a><!-- /.post__option -->
				</li><!-- /.post__options-item -->
			</ul><!-- /.post__options -->
	</footer><!-- /.post__footer -->

</article><!-- /.post -->
<?php if (disqus()): ?>
    <?php echo disqus($p->title, $p->url) ?>
<?php endif; ?>
<?php if (facebook() || disqus()): ?>
<div class="comments-area" id="comments">
    <?php if (facebook()): ?>
        <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
    <?php endif; ?>
    <?php if (disqus()): ?>
        <div id="disqus_thread"></div>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if (!empty($next) || !empty($prev)): ?>
<nav class="pagination">
	<?php if (!empty($next)): ?>						
	<a href="<?php echo($next['url']); ?>" class="pagination__item pagination__item--previous">Next post</a>
	<?php endif; ?>

	<?php if (!empty($prev)): ?>
	<a href="<?php echo($prev['url']); ?>" class="pagination__item pagination__item--next">Previous post</a>
	<?php endif; ?>
</nav>
<?php endif; ?>