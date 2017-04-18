<?php
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>

 <video class="backgroundvideo"  width="100%" height="100%"  autoplay style="position: fixed;">
  <source src="\profiles\commerce_kickstart\themes\contrib\omega_kickstart\movie.mp4" type="video/mp4">
</video>
<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>

  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>

  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
