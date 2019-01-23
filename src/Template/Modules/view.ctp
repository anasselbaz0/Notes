<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Semestres'), ['controller' => 'Semestres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Semestre'), ['controller' => 'Semestres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Elements'), ['controller' => 'Elements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['controller' => 'Elements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modules view large-9 medium-8 columns content">
    <h3><?= h($module->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libile') ?></th>
            <td><?= h($module->libile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groupe') ?></th>
            <td><?= $module->has('groupe') ? $this->Html->link($module->groupe->id, ['controller' => 'Groupes', 'action' => 'view', $module->groupe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semestre') ?></th>
            <td><?= $module->has('semestre') ? $this->Html->link($module->semestre->id, ['controller' => 'Semestres', 'action' => 'view', $module->semestre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($module->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Elements') ?></h4>
        <?php if (!empty($module->elements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Libile') ?></th>
                <th scope="col"><?= __('Module Id') ?></th>
                <th scope="col"><?= __('CM') ?></th>
                <th scope="col"><?= __('Eval') ?></th>
                <th scope="col"><?= __('AP') ?></th>
                <th scope="col"><?= __('TP') ?></th>
                <th scope="col"><?= __('TD') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($module->elements as $elements): ?>
            <tr>
                <td><?= h($elements->id) ?></td>
                <td><?= h($elements->code) ?></td>
                <td><?= h($elements->libile) ?></td>
                <td><?= h($elements->module_id) ?></td>
                <td><?= h($elements->CM) ?></td>
                <td><?= h($elements->Eval) ?></td>
                <td><?= h($elements->AP) ?></td>
                <td><?= h($elements->TP) ?></td>
                <td><?= h($elements->TD) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Elements', 'action' => 'view', $elements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Elements', 'action' => 'edit', $elements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elements', 'action' => 'delete', $elements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
