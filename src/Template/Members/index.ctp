<?php
$this->extend('/Layout/TwitterBootstrap/default');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?></li>
       <li><?= $this->Html->link(__('List Libraries'),  ['controller' => 'Libraries', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="members index large-9 medium-8 columns content">
    <h3><?= __('Members') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
         
                <th scope="col"><?= $this->Paginator->sort('adresse_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
   
                <td><?= $member->has('adress') ? $this->Html->link($member->adress->id, ['controller' => 'Adresses', 'action' => 'view', $member->adress->id]) : '' ?></td>
                <td><?= h($member->firstname) ?></td>
                <td><?= h($member->lastname) ?></td>
                <td><?= h($member->created) ?></td>
                <td><?= h($member->modified) ?></td>
                <td><?= $member->has('user') ? $this->Html->link($member->user->id, ['controller' => 'Users', 'action' => 'view', $member->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
