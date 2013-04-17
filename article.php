<?php theme_include('header'); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
    
      <article>
        <h6>Written by <a href="#"><?php echo article_author('real_name'); ?></a> - <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></h6>
        <hr />
        <div class="row">
          <div class="large-12 columns">
            <?php echo article_markdown(); ?>
          </div>
        </div>
      </article>
      
      <!-- Comments -->
      <?php if(comments_open()): ?>
      
      <h3 class="subheader">Comments</h3>
    	<section class="comments">
			<?php if(has_comments()): ?>
				<?php $i = 0; while(comments()): $i++; ?>
					<div class="panel">
						Written by <strong><?php echo comment_name(); ?></strong> - <time><?php echo relative_time(comment_time()); ?></time>
                        <br /><br />
                        
					    <?php echo comment_text(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

			<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p>
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p>
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p>
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p>
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
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