<nav class="c-route-traversal">
  <?= brick('h'.(isset($level) ? $level : 3))->html($title)->attr('class', 'c-route-traversal__title') ?>
  <?
    $stops = $route->stops()->yaml();
    $stopKey = array_search ($page->uid(), $stops);

    if (array_key_exists(($stopKey - 1), $stops)) {
      $prevUID = $stops[$stopKey - 1];
      $prev = page('stations/'.$prevUID);
    }

    if (array_key_exists(($stopKey + 1), $stops)) {
      $nextUID = $stops[$stopKey + 1];
      $next = page('stations/'.$nextUID);
    }
  ?>

<? if(isset($prevUID)): ?>
  <a rel="prev" href="<?= $prev->url() ?>" aria-label="Previous station: <?= $prev->title()?>"><?= smartypants($prev->title()) ?></a>
<? endif ?>
<? if(isset($nextUID)): ?>
  <a rel="next" href="<?= $next->url() ?>" aria-label="Next station: <?= $prev->title()?>"><?= smartypants($next->title()) ?></a>
<? endif ?>
</nav>