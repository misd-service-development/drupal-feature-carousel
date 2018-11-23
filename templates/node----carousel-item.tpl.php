<?php

if (array_key_exists('field_link', $content)):
  $url = $content['field_link']['#items'][0]['url'];
else:
  $url = ($type == 'homepage_carousel') ? NULL : $node_url;
endif;

if (!isset($content['field_image'][0]['#path']['path'])) {
  $content['field_image'][0]['#path'] = array('path' => $url);
}

?>

<?php print render($title_prefix); ?>
<?php print render($title_suffix); ?>
<div class="image-container">
  <?php print render($content['field_image']); ?>
</div>

<?php if( !(isset($content['field_hide_title']['#items']) && ($content['field_hide_title']['#items'][0]['value']))): ?>
<div class="campl-slide-caption">

  <?php if($url) : ?>
    <a href="<?php print $url; ?>">
  <?php endif; ?>

  <span class="campl-slide-caption-txt"><?php print $title; ?></span>

  <?php if($url) : ?>
    </a>
  <?php endif; ?>

</div>
<?php endif; ?>
