<article class="c-route" id="<?= $route->uid() ?>">
    <?php
        snippet('common/title', [
            'title' => Html::a($route->url(), $route->lineTitle()),
            'level' => $level ?? 3,
            'class' => 'c-route__title'
        ]);

        snippet('scopes/text', [
            'content' => $route->title()
        ]);
    ?>
</article>
