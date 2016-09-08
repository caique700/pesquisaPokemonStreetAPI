<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Action Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actionUsuario index large-9 medium-8 columns content">
    <h3><?= __('Action Usuario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idaction_usuario') ?></th>
                <th><?= $this->Paginator->sort('usuarios_idusuarios') ?></th>
                <th><?= $this->Paginator->sort('makers_idmakers') ?></th>
                <th><?= $this->Paginator->sort('like_dislike') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actionUsuario as $actionUsuario): ?>
            <tr>
                <td><?= $this->Number->format($actionUsuario->idaction_usuario) ?></td>
                <td><?= $this->Number->format($actionUsuario->usuarios_idusuarios) ?></td>
                <td><?= $this->Number->format($actionUsuario->makers_idmakers) ?></td>
                <td><?= $this->Number->format($actionUsuario->like_dislike) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actionUsuario->idaction_usuario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actionUsuario->idaction_usuario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actionUsuario->idaction_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $actionUsuario->idaction_usuario)]) ?>
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
