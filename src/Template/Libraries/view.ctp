<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Library $library
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Library'), ['action' => 'edit', $library->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Library'), ['action' => 'delete', $library->id], ['confirm' => __('Are you sure you want to delete # {0}?', $library->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Libraries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Library'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Adresses'), ['controller' => 'Adresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adress'), ['controller' => 'Adresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="libraries view large-9 medium-8 columns content">
    <h3><?= h($library->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= $library->has('adress') ? $this->Html->link($library->adress->id, ['controller' => 'Adresses', 'action' => 'view', $library->adress->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($library->name) ?></td>
        </tr>
   
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($library->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($library->modified) ?></td>
        </tr>
    </table>
</div>
