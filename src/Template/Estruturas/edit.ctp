<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estrutura->idestruturas],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estrutura->idestruturas)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estruturas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estruturas form large-9 medium-8 columns content">
    <?= $this->Form->create($estrutura) ?>
    <fieldset>
        <legend><?= __('Edit Estrutura') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('tipo_estrutura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
