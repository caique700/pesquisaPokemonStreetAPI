<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoPokemon->idtipo_pokemon],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoPokemon->idtipo_pokemon)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Pokemon'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoPokemon form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoPokemon) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Pokemon') ?></legend>
        <?php
            echo $this->Form->input('caracteristica');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
