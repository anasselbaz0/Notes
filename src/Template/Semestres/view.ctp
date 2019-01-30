<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semestre $semestre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Semestre'), ['action' => 'edit', $semestre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Semestre'), ['action' => 'delete', $semestre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Semestres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Semestre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Niveaus'), ['controller' => 'Niveaus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Niveau'), ['controller' => 'Niveaus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Preinscriptions Infos'), ['controller' => 'PreinscriptionsInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preinscriptions Info'), ['controller' => 'PreinscriptionsInfos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="semestres view large-9 medium-8 columns content">
    <h3><?= h($semestre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libile') ?></th>
            <td><?= h($semestre->libile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Niveau') ?></th>
            <td><?= $semestre->has('niveau') ? $this->Html->link($semestre->niveau->id, ['controller' => 'Niveaus', 'action' => 'view', $semestre->niveau->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($semestre->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Autorisations') ?></h4>
        <?php if (!empty($semestre->autorisations)): ?>
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
            <?php foreach ($semestre->autorisations as $autorisations): ?>
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
        <?php if (!empty($semestre->enseigners)): ?>
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
            <?php foreach ($semestre->enseigners as $enseigners): ?>
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
        <h4><?= __('Related Modules') ?></h4>
        <?php if (!empty($semestre->modules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Libile') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Semestre Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($semestre->modules as $modules): ?>
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
    <div class="related">
        <h4><?= __('Related Preinscriptions Infos') ?></h4>
        <?php if (!empty($semestre->preinscriptions_infos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Preinscriptions Diplome Id') ?></th>
                <th scope="col"><?= __('Preinscriptions Etablissement Id') ?></th>
                <th scope="col"><?= __('Preinscription Id') ?></th>
                <th scope="col"><?= __('Semestre Id') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Mention') ?></th>
                <th scope="col"><?= __('AnneeObtention') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($semestre->preinscriptions_infos as $preinscriptionsInfos): ?>
            <tr>
                <td><?= h($preinscriptionsInfos->id) ?></td>
                <td><?= h($preinscriptionsInfos->preinscriptions_diplome_id) ?></td>
                <td><?= h($preinscriptionsInfos->preinscriptions_etablissement_id) ?></td>
                <td><?= h($preinscriptionsInfos->preinscription_id) ?></td>
                <td><?= h($preinscriptionsInfos->semestre_id) ?></td>
                <td><?= h($preinscriptionsInfos->note) ?></td>
                <td><?= h($preinscriptionsInfos->mention) ?></td>
                <td><?= h($preinscriptionsInfos->anneeObtention) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PreinscriptionsInfos', 'action' => 'view', $preinscriptionsInfos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PreinscriptionsInfos', 'action' => 'edit', $preinscriptionsInfos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PreinscriptionsInfos', 'action' => 'delete', $preinscriptionsInfos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preinscriptionsInfos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
