<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idusuarios') ?></th>
                <th><?= $this->Paginator->sort('id_redesocial') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('sexo') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('token') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->idusuarios) ?></td>
                <td><?= $this->Number->format($usuario->id_redesocial) ?></td>
                <td><?= h($usuario->nome) ?></td>
                <td><?= h($usuario->sexo) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->token) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->idusuarios]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->idusuarios]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->idusuarios], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idusuarios)]) ?>
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
