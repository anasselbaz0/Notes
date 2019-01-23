<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnneeScolaire $anneeScolaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Annee Scolaires'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anneeScolaires form large-9 medium-8 columns content">
    <?= $this->Form->create($anneeScolaire) ?>
    <fieldset>
        <legend><?= __('Add Annee Scolaire') ?></legend>
        <?php
            echo $this->Form->control('libile');
            echo $this->Form->control('annee');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
