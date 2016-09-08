<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Action Usuario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="actionUsuario form large-9 medium-8 columns content">
    <?= $this->Form->create($actionUsuario) ?>
    <fieldset>
        <legend><?= __('Add Action Usuario') ?></legend>
        <?php
            echo $this->Form->input('like_dislike');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
