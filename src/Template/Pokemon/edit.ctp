<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pokemon->idpokemon],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->idpokemon)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pokemon'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pokemon form large-9 medium-8 columns content">
    <?= $this->Form->create($pokemon) ?>
    <fieldset>
        <legend><?= __('Edit Pokemon') ?></legend>
        <?php
            echo $this->Form->input('nome_pokemon');
            echo $this->Form->input('categoria');
            echo $this->Form->input('peso');
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
