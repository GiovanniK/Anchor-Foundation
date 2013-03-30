<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/foundation.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
        
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>

        <script src="//code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="<?php echo theme_url('/js/foundation.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo theme_url('/js/foundation.topbar.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo theme_url('/js/custom.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo theme_url('/js/jquery.stickyfooter.js'); ?>" type="text/javascript"></script>
        
	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<header id="top">
            <div class="topbar-bg">
                <div class="row">
                    <div class="large-12 columns">
                        <nav class="top-bar">
                          <ul class="title-area">
                            <li class="name">
                              <h1><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                          </ul>
                        
                          <section class="top-bar-section">
                            <ul class="left">
                                <?php while(menu_items()): ?>
        						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
        							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
        								<?php echo menu_name(); ?>
        							</a>
        						</li>
        						<?php endwhile; ?>
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
            </div>
            
            <div class="header">
                <div class="row">
                    <div class="large-9 columns" role="content">
                        <p class="header-title"><?php echo page_title('Page can’t be found'); ?></p>
                    </div>
                </div>
            </div>

            <div style="padding-bottom: 25px;"></div>
		</header>