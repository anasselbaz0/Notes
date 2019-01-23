<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Module'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Semestres'), ['controller' => 'Semestres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Semestre'), ['controller' => 'Semestres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Elements'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Element'), ['controller' => 'Elements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modules index large-9 medium-8 columns content">
    <h3><?= __('Modules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groupe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semestre_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modules as $module): ?>
            <tr>
                <td><?= $this->Number->format($module->id) ?></td>
                <td><?= h($module->libile) ?></td>
                <td><?= $module->has('groupe') ? $this->Html->link($module->groupe->id, ['controller' => 'Groupes', 'action' => 'view', $module->groupe->id]) : '' ?></td>
                <td><?= $module->has('semestre') ? $this->Html->link($module->semestre->id, ['controller' => 'Semestres', 'action' => 'view', $module->semestre->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $module->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $module->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $module->id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
