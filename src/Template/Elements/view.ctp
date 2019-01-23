<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Element $element
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Element'), ['action' => 'edit', $element->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Element'), ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Elements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="elements view large-9 medium-8 columns content">
    <h3><?= h($element->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($element->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libile') ?></th>
            <td><?= h($element->libile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module') ?></th>
            <td><?= $element->has('module') ? $this->Html->link($element->module->id, ['controller' => 'Modules', 'action' => 'view', $element->module->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($element->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CM') ?></th>
            <td><?= $this->Number->format($element->CM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eval') ?></th>
            <td><?= $this->Number->format($element->Eval) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AP') ?></th>
            <td><?= $this->Number->format($element->AP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TP') ?></th>
            <td><?= $this->Number->format($element->TP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TD') ?></th>
            <td><?= $this->Number->format($element->TD) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Enseigners') ?></h4>
        <?php if (!empty($element->enseigners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Semestre Id') ?></th>
                <th scope="col"><?= __('Annee Scolaire Id') ?></th>
                <th scope="col"><?= __('Element Id') ?></th>
                <th scope="col"><?= __('Profpermanent Id') ?></th>
                <th scope="col"><?= __('Vacataire Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($element->enseigners as $enseigners): ?>
            <tr>
                <td><?= h($enseigners->id) ?></td>
                <td><?= h($enseigners->semestre_id) ?></td>
                <td><?= h($enseigners->annee_scolaire_id) ?></td>
                <td><?= h($enseigners->element_id) ?></td>
                <td><?= h($enseigners->profpermanent_id) ?></td>
                <td><?= h($enseigners->vacataire_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Enseigners', 'action' => 'view', $enseigners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Enseigners', 'action' => 'edit', $enseigners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enseigners', 'action' => 'delete', $enseigners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enseigners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Etudiers') ?></h4>
        <?php if (!empty($element->etudiers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Etudiant Id') ?></th>
                <th scope="col"><?= __('Annee Scolaire Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Element Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($element->etudiers as $etudiers): ?>
            <tr>
                <td><?= h($etudiers->id) ?></td>
                <td><?= h($etudiers->etudiant_id) ?></td>
                <td><?= h($etudiers->annee_scolaire_id) ?></td>
                <td><?= h($etudiers->groupe_id) ?></td>
                <td><?= h($etudiers->element_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Etudiers', 'action' => 'view', $etudiers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Etudiers', 'action' => 'edit', $etudiers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Etudiers', 'action' => 'delete', $etudiers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notes') ?></h4>
        <?php if (!empty($element->notes)): ?>
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
            <?php foreach ($element->notes as $notes): ?>
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
