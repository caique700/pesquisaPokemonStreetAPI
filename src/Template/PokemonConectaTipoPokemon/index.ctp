<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pokemon Conecta Tipo Pokemon'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pokemonConectaTipoPokemon index large-9 medium-8 columns content">
    <h3><?= __('Pokemon Conecta Tipo Pokemon') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pokemon_idpokemon') ?></th>
                <th><?= $this->Paginator->sort('tipo_pokemon_idtipo_pokemon') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pokemonConectaTipoPokemon as $pokemonConectaTipoPokemon): ?>
            <tr>
                <td><?= $this->Number->format($pokemonConectaTipoPokemon->pokemon_idpokemon) ?></td>
                <td><?= $this->Number->format($pokemonConectaTipoPokemon->tipo_pokemon_idtipo_pokemon) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pokemonConectaTipoPokemon->pokemon_idpokemon]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pokemonConectaTipoPokemon->pokemon_idpokemon]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pokemonConectaTipoPokemon->pokemon_idpokemon], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemonConectaTipoPokemon->pokemon_idpokemon)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
