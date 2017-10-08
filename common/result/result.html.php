<article class="c-result">
  <a class="c-result__body" href="<?= $result->url() ?>">
    <header class="c-result__header">
      <?= brick('h'.(isset($level) ? $level : 3))->html($result->title())->attr('class', 'c-result__title') ?>
    </header>

    <div class="c-result__main">
      <?
        pattern('scopes/text', [
          'content' => !$result->desc()->empty() ? $result->desc() : excerpt($result->text(), $length=240)
        ]);
      ?>
      <p class="c-result__url"><?= $result->uri() ?></p>
    </div>
  </a>
</article>