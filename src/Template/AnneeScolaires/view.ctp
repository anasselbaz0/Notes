<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnneeScolaire $anneeScolaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Annee Scolaire'), ['action' => 'edit', $anneeScolaire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Annee Scolaire'), ['action' => 'delete', $anneeScolaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anneeScolaire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Annee Scolaires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Annee Scolaire'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="anneeScolaires view large-9 medium-8 columns content">
    <h3><?= h($anneeScolaire->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libile') ?></th>
            <td><?= h($anneeScolaire->libile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($anneeScolaire->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee') ?></th>
            <td><?= h($anneeScolaire->annee) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Autorisations') ?></h4>
        <?php if (!empty($anneeScolaire->autorisations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Annee Scolaire Id') ?></th>
                <th scope="col"><?= __('Semestre Id') ?></th>
                <th scope="col"><?= __('Isnormal') ?></th>
                <th scope="col"><?= __('Isratt') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($anneeScolaire->autorisations as $autorisations): ?>
            <tr>
                <td><?= h($autorisations->id) ?></td>
                <td><?= h($autorisations->groupe_id) ?></td>
                <td><?= h($autorisations->annee_scolaire_id) ?></td>
                <td><?= h($autorisations->semestre_id) ?></td>
                <td><?= h($autorisations->isnormal) ?></td>
                <td><?= h($autorisations->isratt) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Autorisations', 'action' => 'view', $autorisations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Autorisations', 'action' => 'edit', $autorisations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Autorisations', 'action' => 'delete', $autorisations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorisations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Enseigners') ?></h4>
        <?php if (!empty($anneeScolaire->enseigners)): ?>
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
            <?php foreach ($anneeScolaire->enseigners as $enseigners): ?>
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
        <?php if (!empty($anneeScolaire->etudiers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Etudiant Id') ?></th>
                <th scope="col"><?= __('Annee Scolaire Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Element Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($anneeScolaire->etudiers as $etudiers): ?>
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
</div>
