<?php if($block->text()->isNotEmpty()): ?>
  <button class="button">
    <a href="<?= $block->link() ?>" target="_blank" rel="noopener noreferrer"><?= $block->text() ?></a>
  </button>
<?php endif ?>