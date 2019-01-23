<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Groupe $groupe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Groupe'), ['action' => 'edit', $groupe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Groupe'), ['action' => 'delete', $groupe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groupe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Niveaus'), ['controller' => 'Niveaus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Niveau'), ['controller' => 'Niveaus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filieres'), ['controller' => 'Filieres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filiere'), ['controller' => 'Filieres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Access Admis'), ['controller' => 'AccessAdmis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access Admi'), ['controller' => 'AccessAdmis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupes view large-9 medium-8 columns content">
    <h3><?= h($groupe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Niveau') ?></th>
            <td><?= $groupe->has('niveau') ? $this->Html->link($groupe->niveau->id, ['controller' => 'Niveaus', 'action' => 'view', $groupe->niveau->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filiere') ?></th>
            <td><?= $groupe->has('filiere') ? $this->Html->link($groupe->filiere->id, ['controller' => 'Filieres', 'action' => 'view', $groupe->filiere->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Emploi') ?></th>
            <td><?= h($groupe->photo_emploi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($groupe->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Access Admis') ?></h4>
        <?php if (!empty($groupe->access_admis)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Access') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($groupe->access_admis as $accessAdmis): ?>
            <tr>
                <td><?= h($accessAdmis->id) ?></td>
                <td><?= h($accessAdmis->groupe_id) ?></td>
                <td><?= h($accessAdmis->access) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AccessAdmis', 'action' => 'view', $accessAdmis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AccessAdmis', 'action' => 'edit', $accessAdmis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AccessAdmis', 'action' => 'delete', $accessAdmis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accessAdmis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Autorisations') ?></h4>
        <?php if (!empty($groupe->autorisations)): ?>
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
            <?php foreach ($groupe->autorisations as $autorisations): ?>
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
        <h4><?= __('Related Etudiers') ?></h4>
        <?php if (!empty($groupe->etudiers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Etudiant Id') ?></th>
                <th scope="col"><?= __('Annee Scolaire Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Element Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($groupe->etudiers as $etudiers): ?>
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
        <h4><?= __('Related Modules') ?></h4>
        <?php if (!empty($groupe->modules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Libile') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Semestre Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($groupe->modules as $modules): ?>
            <tr>
                <td><?= h($modules->id) ?></td>
                <td><?= h($modules->libile) ?></td>
                <td><?= h($modules->groupe_id) ?></td>
                <td><?= h($modules->semestre_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Modules', 'action' => 'view', $modules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Modules', 'action' => 'edit', $modules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Modules', 'action' => 'delete', $modules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
