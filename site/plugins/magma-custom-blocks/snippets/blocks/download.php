<?php if($file = $block->file()->toFile()): ?>
  <button class="button">
      <a href="<?= $file->url() ?>" target="_blank" rel="noopener noreferrer"><?= $block->text() ?></a>
  </button>
<?php endif ?>