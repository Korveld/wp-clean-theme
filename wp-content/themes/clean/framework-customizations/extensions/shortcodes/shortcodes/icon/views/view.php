<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<span class="fw-icon">
  <a href="<?php if (!empty($atts['custom_link'])) {
      echo esc_attr($atts['custom_link']);
    } else { echo '#'; } ?>">
	  <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
  </a>
	<?php if (!empty($atts['title'])): ?>
		<br/>
		<span class="list-title"><?php echo $atts['title'] ?></span>
	<?php endif; ?>
</span>