<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pokemon Conecta Tipo Pokemon'), ['action' => 'edit', $pokemonConectaTipoPokemon->pokemon_idpokemon]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pokemon Conecta Tipo Pokemon'), ['action' => 'delete', $pokemonConectaTipoPokemon->pokemon_idpokemon], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemonConectaTipoPokemon->pokemon_idpokemon)]) ?> </li>
        <li><?= $this->Html->link(__('List Pokemon Conecta Tipo Pokemon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pokemon Conecta Tipo Pokemon'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pokemonConectaTipoPokemon view large-9 medium-8 columns content">
    <h3><?= h($pokemonConectaTipoPokemon->pokemon_idpokemon) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pokemon Idpokemon') ?></th>
            <td><?= $this->Number->format($pokemonConectaTipoPokemon->pokemon_idpokemon) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Pokemon Idtipo Pokemon') ?></th>
            <td><?= $this->Number->format($pokemonConectaTipoPokemon->tipo_pokemon_idtipo_pokemon) ?></td>
        </tr>
    </table>
</div>
