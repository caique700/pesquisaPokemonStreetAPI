<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Pokemon'), ['action' => 'edit', $tipoPokemon->idtipo_pokemon]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Pokemon'), ['action' => 'delete', $tipoPokemon->idtipo_pokemon], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoPokemon->idtipo_pokemon)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Pokemon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Pokemon'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoPokemon view large-9 medium-8 columns content">
    <h3><?= h($tipoPokemon->idtipo_pokemon) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Caracteristica') ?></th>
            <td><?= h($tipoPokemon->caracteristica) ?></td>
        </tr>
        <tr>
            <th><?= __('Idtipo Pokemon') ?></th>
            <td><?= $this->Number->format($tipoPokemon->idtipo_pokemon) ?></td>
        </tr>
    </table>
</div>
