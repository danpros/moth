<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo blog_language();?>">
<head>
<!-- Moth v1.1.0 | Copyright © 2015 by Theme Grinders -->
<?php echo head_contents();?>
    <?php echo $metatags;?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Narrow:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Signika Negative:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica Neue:300,400,700">
    <link rel="stylesheet" href="<?php echo theme_path();?>css/moth.css">
</head>
<body class="index">
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
	<div class="wrapper">
		<div class="main">
			<nav class="nav-wrapper" role="navigation">
				<div class="nav__inner js-center-menu" style="top: 168.5px;">
					<div class="nav__wrapper">

					<?php echo menu('menu');?>


						<form accept-charset="utf-8" class="search">
							<input type="search" name="search" placeholder="<?php echo i18n("Search");?>" class="search__field">
							<i class="icon-search search__icon"></i>
						</form><!-- /.search -->

						
					</div><!-- /.nav__wrapper -->
				</div><!-- /.nav__inner -->

				<div class="nav__toggle">
					<button type="button" role="button" class="nav__toggle-button js-toggle-nav">
						<i class="icon-menu nav__toggle-icon nav__toggle-icon--open"></i>
						<i class="icon-cancel nav__toggle-icon nav__toggle-icon--close"></i>
					</button><!-- /.nav__toggle-button -->
				</div><!-- /.nav__toggle -->
			</nav><!-- /.nav -->

			<div class="main__inner">
				<header class="header" role="banner">
					<div class="header__inner">
						<a href="<?php echo site_url();?>" class="avatar header__avatar">
							<img src="<?php echo theme_path();?>img/avatar.jpg" alt="<?php echo blog_title();?>" class="avatar__photo" width="60" height="60">
						</a><!-- /.avatar -->

						<h1 class="header__title">
							<a href="<?php echo site_url();?>"><?php echo blog_title();?></a>
						</h1><!-- /.header__title -->

						
						<p class="header__description"><?php echo blog_description();?></p>
						
					</div><!-- /.header__inner -->
				</header><!-- /.header -->

				<div class="content" role="main">
					
					
				<?php echo content();?>
					
				</div><!-- /.content -->
			</div><!-- /.main__inner -->
		</div><!-- /.main -->

		<footer class="footer" role="contentinfo">
			<small><?php echo copyright();?> <span>Designed by <a href="https://themegrinders.tumblr.com/" rel="nofollow" target="_blank">Theme Grinders</a>.</span></small>
		</footer><!-- /.footer -->
	</div><!-- /.wrapper -->

	<script src="<?php echo theme_path();?>js/jquery.js"></script>
	<script src="<?php echo theme_path();?>js/theme.js"></script>
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body></html>
