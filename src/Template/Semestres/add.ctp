<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semestre $semestre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Semestres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Niveaus'), ['controller' => 'Niveaus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Niveau'), ['controller' => 'Niveaus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Preinscriptions Infos'), ['controller' => 'PreinscriptionsInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preinscriptions Info'), ['controller' => 'PreinscriptionsInfos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="semestres form large-9 medium-8 columns content">
    <?= $this->Form->create($semestre) ?>
    <fieldset>
        <legend><?= __('Add Semestre') ?></legend>
        <?php
            echo $this->Form->control('libile');
            echo $this->Form->control('niveaus_id', ['options' => $niveaus]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
