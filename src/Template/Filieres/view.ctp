<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filiere $filiere
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Filiere'), ['action' => 'edit', $filiere->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Filiere'), ['action' => 'delete', $filiere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filiere->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Filieres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filiere'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Concours'), ['controller' => 'Concours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Concour'), ['controller' => 'Concours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filieres view large-9 medium-8 columns content">
    <h3><?= h($filiere->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libile') ?></th>
            <td><?= h($filiere->libile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($filiere->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Concours') ?></h4>
        <?php if (!empty($filiere->concours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Niveaus Id') ?></th>
                <th scope="col"><?= __('Filiere Id') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('Date Debut') ?></th>
                <th scope="col"><?= __('Date Fin') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filiere->concours as $concours): ?>
            <tr>
                <td><?= h($concours->id) ?></td>
                <td><?= h($concours->niveaus_id) ?></td>
                <td><?= h($concours->filiere_id) ?></td>
                <td><?= h($concours->etat) ?></td>
                <td><?= h($concours->date_debut) ?></td>
                <td><?= h($concours->date_fin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Concours', 'action' => 'view', $concours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Concours', 'action' => 'edit', $concours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Concours', 'action' => 'delete', $concours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Groupes') ?></h4>
        <?php if (!empty($filiere->groupes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Niveaus Id') ?></th>
                <th scope="col"><?= __('Filiere Id') ?></th>
                <th scope="col"><?= __('Photo Emploi') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filiere->groupes as $groupes): ?>
            <tr>
                <td><?= h($groupes->id) ?></td>
                <td><?= h($groupes->niveaus_id) ?></td>
                <td><?= h($groupes->filiere_id) ?></td>
                <td><?= h($groupes->photo_emploi) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Groupes', 'action' => 'view', $groupes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groupes', 'action' => 'edit', $groupes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groupes', 'action' => 'delete', $groupes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
