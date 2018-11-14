
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
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adress $adress
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adress->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adress->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Adresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adresses form large-9 medium-8 columns content">
    <?= $this->Form->create($adress) ?>
    <fieldset>
        <legend><?= __('Edit Adress') ?></legend>
        <?php
            echo $this->Form->control('ville', ['id'=>'autocomplete']);
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('zip');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
