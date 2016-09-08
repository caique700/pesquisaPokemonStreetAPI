<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pokemon Conecta Tipo Pokemon'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pokemonConectaTipoPokemon form large-9 medium-8 columns content">
    <?= $this->Form->create($pokemonConectaTipoPokemon) ?>
    <fieldset>
        <legend><?= __('Add Pokemon Conecta Tipo Pokemon') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
