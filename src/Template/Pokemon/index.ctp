<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pokemon'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pokemon index large-9 medium-8 columns content">
    <h3><?= __('Pokemon') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idpokemon') ?></th>
                <th><?= $this->Paginator->sort('nome_pokemon') ?></th>
                <th><?= $this->Paginator->sort('categoria') ?></th>
                <th><?= $this->Paginator->sort('peso') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pokemon as $pokemon): ?>
            <tr>
                <td><?= $this->Number->format($pokemon->idpokemon) ?></td>
                <td><?= h($pokemon->nome_pokemon) ?></td>
                <td><?= h($pokemon->categoria) ?></td>
                <td><?= h($pokemon->peso) ?></td>
                <td><?= h($pokemon->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pokemon->idpokemon]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pokemon->idpokemon]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pokemon->idpokemon], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->idpokemon)]) ?>
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
