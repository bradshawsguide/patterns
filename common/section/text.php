<section class="<?= classList('c-section', $modifiers ?? null) ?>">
    <?php
        snippet('common/title', [
            'title' => $title,
            'level' => $level ?? 2,
            'class' => 'c-section__title'
        ]);

        snippet('scopes/text', [
            'content' => $text
        ]);
    ?>
</section>
