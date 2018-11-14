<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>

        <li><?= $this->Html->link(__('Edit Adress'), ['action' => 'edit', $adress->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adress'), ['action' => 'delete', $adress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adress->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adress'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
  <?php
$this->end();

$this->start('tb_sidebar');
?>
             
<div class="dropdown hidden-xs">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= __("Actions") ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <?= $this->fetch('tb_actions') ?>
    </ul>
</div>
<?php
$this->end();
?>
   

    <?= $this->Form->create($adress) ?>
    <fieldset>
        <legend><?= __('Add Adress') ?></legend>
        <?php
            echo $this->Form->control('ville');
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('zip');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
