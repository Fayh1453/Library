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

        
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($adress->street) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($adress->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($adress->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($adress->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $adress->has('user') ? $this->Html->link($adress->user->id, ['controller' => 'Users', 'action' => 'view', $adress->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adress->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($adress->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adress->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($adress->modified) ?></td>
        </tr>
    </table>
</div>
