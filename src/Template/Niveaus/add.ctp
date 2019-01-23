<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Niveau $niveau
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Niveaus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="niveaus form large-9 medium-8 columns content">
    <?= $this->Form->create($niveau) ?>
    <fieldset>
        <legend><?= __('Add Niveau') ?></legend>
        <?php
            echo $this->Form->control('libile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
