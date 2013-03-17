 <div style="padding-top: 25px;"></div>
 <footer class="row">
    <div class="large-12 columns">
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright <?php echo date("Y") ?> <?php echo site_name(); ?></p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <?php if(twitter_account()): ?>
	            <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	        <?php endif; ?>
            <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	        <li><a href="<?php echo admin_url(); ?>" title="Administer your site!">Admin area</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </body>
  </html>