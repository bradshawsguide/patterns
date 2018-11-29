<section class="<?= classList('c-section', $modifiers ?? null) ?>">
    <?php
        snippet('common/title', [
            'title' => $title,
            'level' => $level ?? 2,
            'class' => 'c-section__title'
        ]);

        snippet('common/list', [
            'items' => $items,
            'component' => $component ?? null,
            'modifiers' => [$display ?? null]
        ]);
    ?>
</section>
