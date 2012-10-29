<?php
/**
 * List Gallery
 */
?>

<div class="news-list-gallery">
<?php if (!empty($nodes)): ?>
<ul>
  <?php foreach ($nodes as $nid => $node): ?>
  <li>
    <div class="content">
      <div class="image">
        <a href="<?php echo url('node/' . $nid) ?>" title="<?php echo check_plain($node->title); ?>"><img src="<?php echo file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>" alt="" width="128" height="128"></a>
      </div>
      <a class="title" href="<?php echo url('node/' . $nid) ?>" title="<?php echo check_plain($node->title); ?>"><?php echo check_plain($node->title); ?></a>
    </div>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
</div>

