<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idusuarios]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idusuarios], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idusuarios)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->idusuarios) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= h($usuario->sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Token') ?></th>
            <td><?= h($usuario->token) ?></td>
        </tr>
        <tr>
            <th><?= __('Idusuarios') ?></th>
            <td><?= $this->Number->format($usuario->idusuarios) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Redesocial') ?></th>
            <td><?= $this->Number->format($usuario->id_redesocial) ?></td>
        </tr>
    </table>
</div>
