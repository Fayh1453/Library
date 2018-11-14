<?php
$urlToVillesAutocompletedemoJson = $this->Url->build([
    "controller" => "Villes",
    "action" => "findVilles",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToVillesAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Villes/autocompletedemo', ['block' => 'scriptBottom']);
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ville'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('Villes') ?>
<fieldset>
    <legend><?= __('Search Ville') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>