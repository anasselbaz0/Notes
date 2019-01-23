<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filiere $filiere
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Filieres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Concours'), ['controller' => 'Concours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Concour'), ['controller' => 'Concours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filieres form large-9 medium-8 columns content">
    <?= $this->Form->create($filiere) ?>
    <fieldset>
        <legend><?= __('Add Filiere') ?></legend>
        <?php
            echo $this->Form->control('libile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
