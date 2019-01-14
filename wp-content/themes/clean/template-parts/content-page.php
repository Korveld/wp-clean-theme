<?php
if (has_post_thumbnail()) {
  the_post_thumbnail_url();
}
?>
<div class="fh5co-portfolio-description">
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
</div>