<?php
$this->extend('/Layout/TwitterBootstrap/default');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adress $adress
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adress'), ['action' => 'edit', $adress->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adress'), ['action' => 'delete', $adress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adress->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adress'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adresses view large-9 medium-8 columns content">
    <h3><?= h($adress->id) ?></h3>
    <table class="vertical-table">
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
