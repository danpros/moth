<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<style>
.tags-p a:after {content:','}
.tags-p a:last-child:after {content:'';}
</style>
<article class="post post--text">
    <header class="post__header">
        <h1 class="post__title" style="margin-bottom:20px;"><?php echo $name ?></h1>
    </header>
    <div class="post__content">
		<div class="page-header">
        <?php echo $about ?>
		</div>
        <h2 class="post-index">Posts by this author</h2>
        <?php if (!empty($posts)) { ?>
            <ul class="post-list">
                <?php foreach ($posts as $p): ?>
                    <li class="item">
                        <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                        <span><?php echo format_date($p->date) ?></span>. <?php echo i18n('Posted_in');?> <span class="tags-p"><?php echo $p->category;?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php } else {
            echo i18n('No_posts_found') . '!';
        } ?>
    </div>
</article>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<nav class="pagination">
	<?php if (!empty($pagination['prev'])): ?>						
	<a href="?page=<?php echo $page - 1 ?>" class="pagination__item pagination__item--previous">Next</a>
	<?php endif; ?>

	<?php if (!empty($pagination['next'])): ?>
	<a href="?page=<?php echo $page + 1 ?>" class="pagination__item pagination__item--next">Previous</a>
	<?php endif; ?>

	<span class="pagination__stats"><?php echo $pagination['pagenum'];?></span>
</nav>
<?php endif; ?>