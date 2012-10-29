<?php
/**
 * List General
 */
?>

<div class="news-list">
<?php if (!empty($nodes)): ?>
  <ul>
  <?php $i = 0; ?>
  <?php foreach ($nodes as $nid => $node): ?>
    <li<?php ++$i; if ($i % 5 == 0) echo ' class="separator"'; ?>>
      <div class="content">
        <a class="title" href="<?php echo url('node/' . $nid) ?>" title="<?php echo check_plain($node->title); ?>"><?php echo check_plain($node->title); ?></a>
        <span class="pub-date"><?php echo date('Y-m-d H:i:s', $node->created); ?></span>
      </div>
    </li>
  <?php endforeach; ?>
  </ul>
<?php endif; ?>
</div>
