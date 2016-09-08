<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $maker->idmakers],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maker->idmakers)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Makers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="makers form large-9 medium-8 columns content">
    <?= $this->Form->create($maker) ?>
    <fieldset>
        <legend><?= __('Edit Maker') ?></legend>
        <?php
            echo $this->Form->input('markers_x');
            echo $this->Form->input('markes_y');
            echo $this->Form->input('estruturas_idestruturas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
