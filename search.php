<?php theme_include('header'); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
        <h3 class="subheader">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h3>

        <?php if(has_search_results()): ?>
            <article>
                <?php $i = 0; while(posts()): $i++; ?>
        			<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a><br />
        		<?php endwhile; ?>
              </article>
              
        <?php if(has_pagination()): ?>
            <nav class="pagination">
                <div class="wrap">
                    <?php echo search_prev(); ?>
                	<?php echo search_next(); ?>
                </div>
            </nav>
        <?php endif; ?>
              
        <?php else: ?>
            <p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
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