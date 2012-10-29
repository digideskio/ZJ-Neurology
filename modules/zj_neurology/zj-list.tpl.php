<?php
/**
 * List General
 */
?>

<?php if (!empty($nodes)): ?>
  <ul>
  <?php foreach ($nodes as $nid => $node): ?>
    <li><a href="<?php echo url('node/' . $nid) ?>"><?php echo check_plain($node->title); ?></a></li>
  <?php endforeach; ?>
  </ul>
<?php endif; ?>
