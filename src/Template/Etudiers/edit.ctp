<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudier $etudier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etudier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etudier->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etudiers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Annee Scolaires'), ['controller' => 'AnneeScolaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Annee Scolaire'), ['controller' => 'AnneeScolaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Elements'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Element'), ['controller' => 'Elements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etudiers form large-9 medium-8 columns content">
    <?= $this->Form->create($etudier) ?>
    <fieldset>
        <legend><?= __('Edit Etudier') ?></legend>
        <?php
            echo $this->Form->control('etudiant_id', ['options' => $etudiants]);
            echo $this->Form->control('annee_scolaire_id', ['options' => $anneeScolaires]);
            echo $this->Form->control('groupe_id', ['options' => $groupes]);
            echo $this->Form->control('element_id', ['options' => $elements]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
