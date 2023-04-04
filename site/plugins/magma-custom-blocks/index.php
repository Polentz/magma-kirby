<?php
Kirby::plugin('magma/button', [
    'blueprints' => [
        'blocks/button' => __DIR__ . '/blueprints/blocks/button.yml',
        'blocks/title' => __DIR__ . '/blueprints/blocks/title.yml',
        'blocks/description' => __DIR__ . '/blueprints/blocks/description.yml',
      ],
      'snippets' => [
        'blocks/button' => __DIR__ . '/snippets/blocks/button.php',
        'blocks/title' => __DIR__ . '/snippets/blocks/title.php',
        'blocks/description' => __DIR__ . '/snippets/blocks/description.php',
      ],
]);