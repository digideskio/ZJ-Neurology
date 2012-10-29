<?php
/**
 * List Gallery
 */
?>

<?php if (!empty($nodes)): ?>
<ul>
  <?php foreach ($nodes as $nid => $node): ?>
  <li>
    <img src="<?php echo file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>" alt="" width="128" height="128">
    <a href="<?php echo url('node/' . $nid) ?>"><?php echo check_plain($node->title); ?></a>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
