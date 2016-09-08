<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actionUsuario->idaction_usuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actionUsuario->idaction_usuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Action Usuario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="actionUsuario form large-9 medium-8 columns content">
    <?= $this->Form->create($actionUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Action Usuario') ?></legend>
        <?php
            echo $this->Form->input('like_dislike');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
