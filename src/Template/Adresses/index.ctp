<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adress[]|\Cake\Collection\CollectionInterface $adresses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adress'), ['action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Libraries'),  ['controller' => 'Libraries', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="adresses index large-9 medium-8 columns content">
    <h3><?= __('Adresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
    
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
 
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adresses as $adress): ?>
            <tr>
          
                <td><?= h($adress->city) ?></td>
                <td><?= h($adress->street) ?></td>
                <td><?= $this->Number->format($adress->number) ?></td>
                <td><?= h($adress->zip) ?></td>
                <td><?= h($adress->created) ?></td>
                <td><?= h($adress->modified) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adress->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adress->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adress->id)]) ?>
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
