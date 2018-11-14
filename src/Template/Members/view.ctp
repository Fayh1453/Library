<?php
$this->extend('/Layout/TwitterBootstrap/default');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
   
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
 
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= $member->has('adress') ? $this->Html->link($member->adress->id, ['controller' => 'Adresses', 'action' => 'view', $member->adress->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($member->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($member->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $member->has('user') ? $this->Html->link($member->user->id, ['controller' => 'Users', 'action' => 'view', $member->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($member->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($member->modified) ?></td>
        </tr>
    </table>
</div>
