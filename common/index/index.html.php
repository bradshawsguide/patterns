<?
  $listStyle = isset($listAs) ? ' c-list--'.$listAs : null;
?>
<section class="c-index" id="<?= $letter ?>">
  <h1 class="c-index__title"><?= str::upper($letter) ?></h1>
  <ul class="c-list<?= $listStyle ?>">
  <? foreach($items as $item): ?>
    <li class="c-list__item">
      <? $title = (!$item->title_short()->empty()) ? $item->title_short() : $item->title(); ?>
      <a href="<?= $item->url() ?>"><?= smartypants($title) ?></a>
    </li>
  <? endforeach ?>
  </ul>
</section>
