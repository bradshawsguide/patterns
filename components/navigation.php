<nav class="c-navigation" id="navigation" role="dialog" aria-label="Menu" hidden>
    <ul class="c-navigation__items">
    <?php foreach($site->children()->listed() as $item): ?>
        <li class="c-navigation__item">
            <a href="<?= $item->url() ?>"<?php e($item->isOpen(), ' aria-current="page"') ?>>
                <?= smartypants($item->title()) ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
    <button class="c-navigation__dismiss" type="button" aria-label="Close menu">✕</button>
    <div class="c-navigation__backdrop"></div>
</nav>
