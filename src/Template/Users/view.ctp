<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
     
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($user->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Adresses') ?></h4>
        <?php if (!empty($user->adresses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->adresses as $adresses): ?>
            <tr>
                <td><?= h($adresses->id) ?></td>
                <td><?= h($adresses->city) ?></td>
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
    <div class="related">
        <h4><?= __('Related Books') ?></h4>
        <?php if (!empty($user->books)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Publication') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->books as $books): ?>
            <tr>
                <td><?= h($books->id) ?></td>
                <td><?= h($books->title) ?></td>
                <td><?= h($books->publication) ?></td>
                <td><?= h($books->created) ?></td>
                <td><?= h($books->modified) ?></td>
                <td><?= h($books->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Books', 'action' => 'view', $books->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Books', 'action' => 'edit', $books->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Books', 'action' => 'delete', $books->id], ['confirm' => __('Are you sure you want to delete # {0}?', $books->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Libraries') ?></h4>
        <?php if (!empty($user->libraries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Adresse Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->libraries as $libraries): ?>
            <tr>
                <td><?= h($libraries->id) ?></td>
                <td><?= h($libraries->adresse_id) ?></td>
                <td><?= h($libraries->name) ?></td>
                <td><?= h($libraries->created) ?></td>
                <td><?= h($libraries->modified) ?></td>
                <td><?= h($libraries->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Libraries', 'action' => 'view', $libraries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Libraries', 'action' => 'edit', $libraries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Libraries', 'action' => 'delete', $libraries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libraries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Members') ?></h4>
        <?php if (!empty($user->members)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Adresse Id') ?></th>
                <th scope="col"><?= __('Firstname') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->members as $members): ?>
            <tr>
                <td><?= h($members->id) ?></td>
                <td><?= h($members->adresse_id) ?></td>
                <td><?= h($members->firstname) ?></td>
                <td><?= h($members->lastname) ?></td>
                <td><?= h($members->created) ?></td>
                <td><?= h($members->modified) ?></td>
                <td><?= h($members->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Members', 'action' => 'view', $members->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Members', 'action' => 'edit', $members->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Members', 'action' => 'delete', $members->id], ['confirm' => __('Are you sure you want to delete # {0}?', $members->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Stocks') ?></h4>
        <?php if (!empty($user->stocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Librarie Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Copy') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->stocks as $stocks): ?>
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
