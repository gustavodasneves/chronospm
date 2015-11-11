<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Add Project') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('date', ['empty' => true, 'default' => '']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
