<div class="<?= classList('c-section', $modifiers ?? null) ?>">
    <?php
        snippet('common/header', [
            'level' => 2,
            'title' => Html::a(page('places')->url(), 'Places'),
            'subtitle' => 'With Maps, Plans of Towns And Pictorial Illustrations',
            'modifiers' => ['index']
        ]);

        snippet('common/section/list', [
            'level' => 3,
            'title' => 'Best Of The Guide',
            'items' => $page->feature()->toPages(),
            'component' => 'common/feature',
            'display' => 'grid'
        ]);
    ?>
</div>
