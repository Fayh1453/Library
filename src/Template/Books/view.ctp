<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
    
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $book->has('user') ? $this->Html->link($book->user->id, ['controller' => 'Users', 'action' => 'view', $book->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publication') ?></th>
            <td><?= h($book->publication) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($book->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($book->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Files Book') ?></h4>
        <?php if (!empty($book->files_book)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('File Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->files_book as $filesBook): ?>
            <tr>
                <td><?= h($filesBook->id) ?></td>
                <td><?= h($filesBook->book_id) ?></td>
                <td><?= h($filesBook->file_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FilesBook', 'action' => 'view', $filesBook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FilesBook', 'action' => 'edit', $filesBook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FilesBook', 'action' => 'delete', $filesBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filesBook->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Stocks') ?></h4>
        <?php if (!empty($book->stocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Librarie Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Copy') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->stocks as $stocks): ?>
            <tr>
                <td><?= h($stocks->id) ?></td>
                <td><?= h($stocks->librarie_id) ?></td>
                <td><?= h($stocks->book_id) ?></td>
                <td><?= h($stocks->copy) ?></td>
                <td><?= h($stocks->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stocks', 'action' => 'view', $stocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stocks', 'action' => 'edit', $stocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stocks', 'action' => 'delete', $stocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
