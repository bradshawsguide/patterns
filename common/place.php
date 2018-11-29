<article class="c-place" id="<?= $place->uid() ?>">
    <?php
        $title = Html::a($place->url(), $place->title());
        $suffixText = $suffix ? ' ('.$suffix.')' : '';

        snippet('common/title', [
            'title' => $title.$suffixText,
            'level' => $level ?? 3,
            'class' => 'c-place__title'
        ]);

        if ($place->excerpt()) {
            snippet('scopes/text', [
                'content' => $place->excerpt()
            ]);
        }
    ?>
</article>
