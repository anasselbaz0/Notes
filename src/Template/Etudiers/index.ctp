<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudier[]|\Cake\Collection\CollectionInterface $etudiers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Etudier'), ['action' => 'add']) ?></li>
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
<div class="etudiers index large-9 medium-8 columns content">
    <h3><?= __('Etudiers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etudiant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee_scolaire_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groupe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('element_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiers as $etudier): ?>
            <tr>
                <td><?= $this->Number->format($etudier->id) ?></td>
                <td><?= $etudier->has('etudiant') ? $this->Html->link($etudier->etudiant->id, ['controller' => 'Etudiants', 'action' => 'view', $etudier->etudiant->id]) : '' ?></td>
                <td><?= $etudier->has('annee_scolaire') ? $this->Html->link($etudier->annee_scolaire->id, ['controller' => 'AnneeScolaires', 'action' => 'view', $etudier->annee_scolaire->id]) : '' ?></td>
                <td><?= $etudier->has('groupe') ? $this->Html->link($etudier->groupe->id, ['controller' => 'Groupes', 'action' => 'view', $etudier->groupe->id]) : '' ?></td>
                <td><?= $etudier->has('element') ? $this->Html->link($etudier->element->id, ['controller' => 'Elements', 'action' => 'view', $etudier->element->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $etudier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etudier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etudier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudier->id)]) ?>
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
