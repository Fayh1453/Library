<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Library $library
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

        <li><?= $this->Html->link(__('List Libraries'), ['action' => 'index']) ?></li>

    </ul>
</nav>
<div class="libraries form large-9 medium-8 columns content">
    <?= $this->Form->create($library) ?>
    <fieldset>
        <legend><?= __('Edit Library') ?></legend>
        <?php
            echo $this->Form->control('adresse_id', ['options' => $adresses]);
            echo $this->Form->control('name');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
