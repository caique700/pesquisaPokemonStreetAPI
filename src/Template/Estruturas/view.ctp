<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estrutura'), ['action' => 'edit', $estrutura->idestruturas]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estrutura'), ['action' => 'delete', $estrutura->idestruturas], ['confirm' => __('Are you sure you want to delete # {0}?', $estrutura->idestruturas)]) ?> </li>
        <li><?= $this->Html->link(__('List Estruturas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estrutura'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estruturas view large-9 medium-8 columns content">
    <h3><?= h($estrutura->idestruturas) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($estrutura->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Estrutura') ?></th>
            <td><?= h($estrutura->tipo_estrutura) ?></td>
        </tr>
        <tr>
            <th><?= __('Idestruturas') ?></th>
            <td><?= $this->Number->format($estrutura->idestruturas) ?></td>
        </tr>
    </table>
</div>
