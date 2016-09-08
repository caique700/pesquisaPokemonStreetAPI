<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Action Usuario'), ['action' => 'edit', $actionUsuario->idaction_usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Action Usuario'), ['action' => 'delete', $actionUsuario->idaction_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $actionUsuario->idaction_usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Action Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actionUsuario view large-9 medium-8 columns content">
    <h3><?= h($actionUsuario->idaction_usuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Idaction Usuario') ?></th>
            <td><?= $this->Number->format($actionUsuario->idaction_usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuarios Idusuarios') ?></th>
            <td><?= $this->Number->format($actionUsuario->usuarios_idusuarios) ?></td>
        </tr>
        <tr>
            <th><?= __('Makers Idmakers') ?></th>
            <td><?= $this->Number->format($actionUsuario->makers_idmakers) ?></td>
        </tr>
        <tr>
            <th><?= __('Like Dislike') ?></th>
            <td><?= $this->Number->format($actionUsuario->like_dislike) ?></td>
        </tr>
    </table>
</div>
