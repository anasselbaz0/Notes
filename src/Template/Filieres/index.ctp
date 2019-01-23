<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filiere[]|\Cake\Collection\CollectionInterface $filieres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Filiere'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Concours'), ['controller' => 'Concours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Concour'), ['controller' => 'Concours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filieres index large-9 medium-8 columns content">
    <h3><?= __('Filieres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libile') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filieres as $filiere): ?>
            <tr>
                <td><?= $this->Number->format($filiere->id) ?></td>
                <td><?= h($filiere->libile) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filiere->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filiere->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filiere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filiere->id)]) ?>
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
