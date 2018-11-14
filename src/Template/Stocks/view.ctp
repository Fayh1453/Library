<?php
$this->extend('/Layout/TwitterBootstrap/default');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?> </li>
     
    </ul>
</nav>
<div class="stocks view large-9 medium-8 columns content">
    <h3><?= h($stock->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Library') ?></th>
            <td><?= $stock->has('library') ? $this->Html->link($stock->library->name, ['controller' => 'Libraries', 'action' => 'view', $stock->library->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $stock->has('book') ? $this->Html->link($stock->book->title, ['controller' => 'Books', 'action' => 'view', $stock->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $stock->has('user') ? $this->Html->link($stock->user->id, ['controller' => 'Users', 'action' => 'view', $stock->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stock->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Copy') ?></th>
            <td><?= $this->Number->format($stock->copy) ?></td>
        </tr>
    </table>
</div>
