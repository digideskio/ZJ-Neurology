<?php
/**
 * News Block
 */

$top = array_slice($nodes, 0, 1);
$left = array_slice($nodes, 1, 3);
$right = array_slice($nodes, 4);
?>

<div class="news-block">
<?php if (!empty($top)): ?>
  <ul class="left">

    <?php foreach($top as $node): ?>
    <li class="top">
      <div class="content">
      <?php if (isset($node->field_image) && !empty($node->field_image)): ?>
        <div class="image">
          <a href="<?php echo url('node/' . $node->nid); ?>"><img alt="" width="64" height="64" src="<?php echo file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>"></a>
          </div>
      <?php endif; ?>
        <div class="content">
            <a class="title" href="<?php echo url('node/' . $node->nid); ?>" title="<?php echo check_plain($node->title); ?>"><?php echo check_plain($node->title); ?></a>
            <p class="summary"><?php echo check_plain($node->body[LANGUAGE_NONE][0]['summary']); ?></p>
        </div>
      </div>
    </li>
    <?php endforeach; ?>

    <?php if (!empty($left)): ?>
      <?php foreach ($left as $node): ?>
        <li>
          <div class="content">
            <a class="title" href="<?php echo url('node/' . $node->nid) ?>" title="<?php echo check_plain($node->title); ?>"><?php echo check_plain($node->title); ?></a>
            <span class="pub-date"><?php echo date('Y-m-d', $node->created); ?></span>
          </div>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>

  </ul>
<?php endif; ?>

<?php if (!empty($right)): ?>
  <ul class="right">
  <?php foreach ($right as $node): ?>
    <li>
      <div class="content">
        <a class="title" href="<?php echo url('node/' . $node->nid) ?>"><?php echo check_plain($node->title); ?></a>
        <span class="pub-date"><?php echo date('Y-m-d', $node->created); ?></span>
      </div>
    </li>
  <?php endforeach; ?>
  </ul>
<?php endif; ?>
</div>
<div style="clear: both;"></div>

