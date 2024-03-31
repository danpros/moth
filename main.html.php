<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php if (isset($is_category)):?>
    <header class="page-header"><h1 class="page-title"><?php echo i18n('Category');?>: <?php echo $category->title;?></h1><div class="taxonomy-description"><?php echo $category->body;?></div></header>
<?php endif;?>
<?php if (isset($is_tag)):?>
    <header class="page-header"><h1 class="page-title"><?php echo i18n("Tags");?>: <?php echo $tag->title;?></h1></header>
<?php endif;?>
<?php if (isset($is_archive)):?>
    <header class="page-header"><h1 class="page-title"><?php echo i18n("Archives");?>: <?php echo $archive->title;?></h1></header>
<?php endif;?>
<?php if (isset($is_search)):?>
    <header class="page-header"><h1 class="page-title"><?php echo i18n("Search");?>: <?php echo $search->title;?></h1></header>
<?php endif;?>
<?php if (isset($is_type)):?>
    <header class="page-header"><h1 class="page-title">Type: <?php echo ucfirst($type->title);?></h1></header>
<?php endif;?>
<?php foreach ($posts as $p):?>
	<article class="post post--text <?php if (!empty($p->link)): ?>post--link<?php endif;?> <?php if (!empty($p->quote)): ?>post--quote<?php endif;?>">

		<header class="post__header">
			<h2 class="post__title">
			<?php if (!empty($p->link)) { ?>
			<a href="<?php echo $p->link;?>" target="_blank"><?php echo $p->title;?></a>
			<?php } elseif (!empty($p->quote)) {?>
			<a href="<?php echo $p->url;?>"><?php echo $p->quote;?></a>
			<?php } else {?>
			<a href="<?php echo $p->url;?>"><?php echo $p->title;?></a>
			<?php }?>
			</h2><!-- /.post__title -->

			<span class="post__date"><?php echo i18n("Posted_on");?> <a href="<?php echo $p->url;?>"><time class="entry-date published updated"><?php echo format_date($p->date) ?></time></a> <?php echo i18n("by");?> 
			<a href="<?php echo $p->authorUrl;?>"><?php echo $p->authorName;?></a> - 
			<?php echo $p->category;?>
			<?php if (authorized($p)) { echo '<span class="sep"> |</span> <span><a href="'. $p->url .'/edit?destination=post">Edit</a></span>'; } ?>
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
			<?php echo get_teaser($p->body, $p->url); ?>
			<?php if (config('teaser.type') === 'trimmed'):?> ... <a class="read-more" href="<?php echo $p->url; ?>"><?php echo config('read.more'); ?></a><?php endif;?>
		</div><!-- /.post__content -->

		<footer class="post__footer">

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

<?php endforeach;?>

<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<nav class="pagination">
	<?php if (!empty($pagination['prev'])): ?>						
	<a href="?page=<?php echo $page - 1 ?>" class="pagination__item pagination__item--previous"><?php echo i18n("Next");?></a>
	<?php endif; ?>

	<?php if (!empty($pagination['next'])): ?>
	<a href="?page=<?php echo $page + 1 ?>" class="pagination__item pagination__item--next"><?php echo i18n("Prev");?></a>
	<?php endif; ?>

	<span class="pagination__stats"><?php echo $pagination['pagenum'];?></span>
</nav>
<?php endif; ?>