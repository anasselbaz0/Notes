<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Niveau $niveau
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $niveau->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $niveau->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Niveaus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="niveaus form large-9 medium-8 columns content">
    <?= $this->Form->create($niveau) ?>
    <fieldset>
        <legend><?= __('Edit Niveau') ?></legend>
        <?php
            echo $this->Form->control('libile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>