<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Pokemon'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoPokemon index large-9 medium-8 columns content">
    <h3><?= __('Tipo Pokemon') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idtipo_pokemon') ?></th>
                <th><?= $this->Paginator->sort('caracteristica') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoPokemon as $tipoPokemon): ?>
            <tr>
                <td><?= $this->Number->format($tipoPokemon->idtipo_pokemon) ?></td>
                <td><?= h($tipoPokemon->caracteristica) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoPokemon->idtipo_pokemon]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoPokemon->idtipo_pokemon]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoPokemon->idtipo_pokemon], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoPokemon->idtipo_pokemon)]) ?>
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
