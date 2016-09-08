<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estrutura'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estruturas index large-9 medium-8 columns content">
    <h3><?= __('Estruturas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idestruturas') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('tipo_estrutura') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estruturas as $estrutura): ?>
            <tr>
                <td><?= $this->Number->format($estrutura->idestruturas) ?></td>
                <td><?= h($estrutura->nome) ?></td>
                <td><?= h($estrutura->tipo_estrutura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estrutura->idestruturas]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estrutura->idestruturas]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estrutura->idestruturas], ['confirm' => __('Are you sure you want to delete # {0}?', $estrutura->idestruturas)]) ?>
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
