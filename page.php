<?php theme_include('header'); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
    
      <article>
        <h3 class="subheader"><?php echo page_title(); ?></h3>
        <div class="row">
          <div class="large-12 columns">
            <?php echo page_content(); ?>
          </div>
        </div>
      </article>
    
    </div>
  </div>
<?php theme_include('footer'); ?>