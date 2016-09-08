<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pokemon'), ['action' => 'edit', $pokemon->idpokemon]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pokemon'), ['action' => 'delete', $pokemon->idpokemon], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->idpokemon)]) ?> </li>
        <li><?= $this->Html->link(__('List Pokemon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pokemon'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pokemon view large-9 medium-8 columns content">
    <h3><?= h($pokemon->idpokemon) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome Pokemon') ?></th>
            <td><?= h($pokemon->nome_pokemon) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= h($pokemon->categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso') ?></th>
            <td><?= h($pokemon->peso) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($pokemon->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Idpokemon') ?></th>
            <td><?= $this->Number->format($pokemon->idpokemon) ?></td>
        </tr>
    </table>
</div>
