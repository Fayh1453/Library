
<?php
$this->extend('/Layout/TwitterBootstrap/default');
$urlToVilleAutocompletedemoJson = $this->Url->build([
    "controller" => "Villes",
    "action" => "findVilles",
    "_ext" => "json"
        ]);
    echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToVilleAutocompletedemoJson . '";', ['block' => true]);
    echo $this->Html->script('Villes/autocompletedemo', ['block' => 'scriptBottom']);
?>



<?php
$urlToRestApi = $this->Url->build('/api/adresses', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->scriptBlock('var csrfToken = '.json_encode($this->request->getParam('_csrfToken')).';', ['block' => true]);
echo $this->Html->script('Adresses/index', ['block' => 'scriptBottom']);
 
?>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adress'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adresses index large-9 medium-8 columns content">
    <h3><?= __('Adresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adresses as $adress): ?>
            <tr>
                <td><?= $this->Number->format($adress->id) ?></td>
                <td><?= h($adress->ville) ?></td>
                <td><?= h($adress->street) ?></td>
                <td><?= $this->Number->format($adress->number) ?></td>
                <td><?= h($adress->zip) ?></td>
                <td><?= h($adress->created) ?></td>
                <td><?= h($adress->modified) ?></td>
                <td><?= $adress->has('user') ? $this->Html->link($adress->user->id, ['controller' => 'Users', 'action' => 'view', $adress->user->id]) : '' ?></td>
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
