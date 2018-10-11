<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adress $adress
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Adresses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adresses form large-9 medium-8 columns content">
    <?= $this->Form->create($adress) ?>
    <fieldset>
        <legend><?= __('Add Adress') ?></legend>
        <?php
            echo $this->Form->control('city');
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('zip');
 
           // echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
