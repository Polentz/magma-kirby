<?php if($block->buttontext()->isNotEmpty()): ?>
  <button class="button">
    <a href="<?= $block->buttonlink() ?>" target="_blank" rel="noopener noreferrer"><?= $block->buttontext() ?></a>
  </button>
<?php endif ?>