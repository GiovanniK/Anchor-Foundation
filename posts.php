<?php theme_include('header'); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
    
    <h3 class="subheader"><?php echo page_title(); ?></h3>
    <?php if(has_posts()): ?>
    <?php $i = 0; while(posts()): $i++; ?>
      <article>
        <h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
        <h6>Written by <a href="#"><?php echo article_author('real_name'); ?></a> - <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></h6>
        <div class="row">
          <div class="large-12 columns">
            <?php echo Html::markdown(article_html()); ?>
          </div>
        </div>
      </article>
      <hr />
    <?php endwhile; ?>
    
    <?php else: ?>
		<p>There are no posts yet!</p>
	<?php endif; ?>
    
    <?php if(has_pagination()): ?>
		<nav>
			<div class="large-6 columns" style="text-align: left;"><?php echo posts_prev(); ?></div>
			<div class="large-6 columns" style="text-align: right;"><?php echo posts_next(); ?></div>
		</nav>
		<?php endif; ?>
    </div>

    <aside class="large-3 columns">
    <!-- 
    ** This is for Anchor when it supports category pages **
    
      <h5>Categories</h5>
      <ul class="side-nav">
        <li><a href="#">Projects</a></li>
        <li><a href="#">Anchor CMS</a></li>
        <li><a href="#">Web development</a></li>
      </ul>
    -->
    <form id="search" action="<?php echo search_url(); ?>" method="post">
        <h5>Search for a post:</h4>
		<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
	</form>
    
    </aside>
  </div>
<?php theme_include('footer'); ?>