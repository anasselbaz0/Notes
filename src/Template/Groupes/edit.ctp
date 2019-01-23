<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Groupe $groupe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Niveaus'), ['controller' => 'Niveaus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Niveau'), ['controller' => 'Niveaus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filieres'), ['controller' => 'Filieres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filiere'), ['controller' => 'Filieres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Access Admis'), ['controller' => 'AccessAdmis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Access Admi'), ['controller' => 'AccessAdmis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupes form large-9 medium-8 columns content">
    <?= $this->Form->create($groupe) ?>
    <fieldset>
        <legend><?= __('Edit Groupe') ?></legend>
        <?php
            echo $this->Form->control('niveaus_id', ['options' => $niveaus]);
            echo $this->Form->control('filiere_id', ['options' => $filieres]);
            echo $this->Form->control('photo_emploi');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
