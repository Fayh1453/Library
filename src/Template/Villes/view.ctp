<?php
$this->extend('/Layout/TwitterBootstrap/default');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ville'), ['action' => 'edit', $ville->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ville'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Villes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ville'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Adresses'), ['controller' => 'Adresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adress'), ['controller' => 'Adresses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="villes view large-9 medium-8 columns content">
    <h3><?= h($ville->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ville->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ville->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Adresses') ?></h4>
        <?php if (!empty($ville->adresses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ville') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ville->adresses as $adresses): ?>
            <tr>
                <td><?= h($adresses->id) ?></td>
                <td><?= h($adresses->ville) ?></td>
                <td><?= h($adresses->street) ?></td>
                <td><?= h($adresses->number) ?></td>
                <td><?= h($adresses->zip) ?></td>
                <td><?= h($adresses->created) ?></td>
                <td><?= h($adresses->modified) ?></td>
                <td><?= h($adresses->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Adresses', 'action' => 'view', $adresses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Adresses', 'action' => 'edit', $adresses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Adresses', 'action' => 'delete', $adresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adresses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
