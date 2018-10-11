<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Library[]|\Cake\Collection\CollectionInterface $libraries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Library'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Adresses'), ['controller' => 'Adresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
         <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
           <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Send Email'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="libraries index large-9 medium-8 columns content">
    <h3><?= __('Libraries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
           
          
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libraries as $library): ?>
            <tr>
 
                
                <td><?= h($library->name) ?></td>
                <td><?= h($library->created) ?></td>
                <td><?= h($library->modified) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $library->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $library->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $library->id], ['confirm' => __('Are you sure you want to delete # {0}?', $library->id)]) ?>
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
