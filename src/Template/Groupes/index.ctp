<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Groupe[]|\Cake\Collection\CollectionInterface $groupes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['action' => 'add']) ?></li>
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
<div class="groupes index large-9 medium-8 columns content">
    <h3><?= __('Groupes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('niveaus_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filiere_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_emploi') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groupes as $groupe): ?>
            <tr>
                <td><?= $this->Number->format($groupe->id) ?></td>
                <td><?= $groupe->has('niveau') ? $this->Html->link($groupe->niveau->id, ['controller' => 'Niveaus', 'action' => 'view', $groupe->niveau->id]) : '' ?></td>
                <td><?= $groupe->has('filiere') ? $this->Html->link($groupe->filiere->id, ['controller' => 'Filieres', 'action' => 'view', $groupe->filiere->id]) : '' ?></td>
                <td><?= h($groupe->photo_emploi) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $groupe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->id)]) ?>
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
