<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudier $etudier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etudier'), ['action' => 'edit', $etudier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etudier'), ['action' => 'delete', $etudier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Etudiers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Annee Scolaires'), ['controller' => 'AnneeScolaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Annee Scolaire'), ['controller' => 'AnneeScolaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Elements'), ['controller' => 'Elements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['controller' => 'Elements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etudiers view large-9 medium-8 columns content">
    <h3><?= h($etudier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Etudiant') ?></th>
            <td><?= $etudier->has('etudiant') ? $this->Html->link($etudier->etudiant->id, ['controller' => 'Etudiants', 'action' => 'view', $etudier->etudiant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee Scolaire') ?></th>
            <td><?= $etudier->has('annee_scolaire') ? $this->Html->link($etudier->annee_scolaire->id, ['controller' => 'AnneeScolaires', 'action' => 'view', $etudier->annee_scolaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groupe') ?></th>
            <td><?= $etudier->has('groupe') ? $this->Html->link($etudier->groupe->id, ['controller' => 'Groupes', 'action' => 'view', $etudier->groupe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Element') ?></th>
            <td><?= $etudier->has('element') ? $this->Html->link($etudier->element->id, ['controller' => 'Elements', 'action' => 'view', $etudier->element->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($etudier->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Notes') ?></h4>
        <?php if (!empty($etudier->notes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Element Id') ?></th>
                <th scope="col"><?= __('Etudier Id') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Note Ratt') ?></th>
                <th scope="col"><?= __('Confirmed') ?></th>
                <th scope="col"><?= __('Ratt Confirmed') ?></th>
                <th scope="col"><?= __('Saved') ?></th>
                <th scope="col"><?= __('Ratt Saved') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($etudier->notes as $notes): ?>
            <tr>
                <td><?= h($notes->id) ?></td>
                <td><?= h($notes->element_id) ?></td>
                <td><?= h($notes->etudier_id) ?></td>
                <td><?= h($notes->note) ?></td>
                <td><?= h($notes->note_ratt) ?></td>
                <td><?= h($notes->confirmed) ?></td>
                <td><?= h($notes->ratt_confirmed) ?></td>
                <td><?= h($notes->saved) ?></td>
                <td><?= h($notes->ratt_saved) ?></td>
                <td><?= h($notes->created_at) ?></td>
                <td><?= h($notes->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
