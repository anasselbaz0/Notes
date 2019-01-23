<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Element[]|\Cake\Collection\CollectionInterface $elements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Element'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elements index large-9 medium-8 columns content">
    <h3><?= __('Elements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('module_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Eval') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TD') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elements as $element): ?>
            <tr>
                <td><?= $this->Number->format($element->id) ?></td>
                <td><?= h($element->code) ?></td>
                <td><?= h($element->libile) ?></td>
                <td><?= $element->has('module') ? $this->Html->link($element->module->id, ['controller' => 'Modules', 'action' => 'view', $element->module->id]) : '' ?></td>
                <td><?= $this->Number->format($element->CM) ?></td>
                <td><?= $this->Number->format($element->Eval) ?></td>
                <td><?= $this->Number->format($element->AP) ?></td>
                <td><?= $this->Number->format($element->TP) ?></td>
                <td><?= $this->Number->format($element->TD) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $element->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $element->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]) ?>
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
