<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semestre[]|\Cake\Collection\CollectionInterface $semestres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Semestre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Niveaus'), ['controller' => 'Niveaus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Niveau'), ['controller' => 'Niveaus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Autorisations'), ['controller' => 'Autorisations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autorisation'), ['controller' => 'Autorisations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Preinscriptions Infos'), ['controller' => 'PreinscriptionsInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preinscriptions Info'), ['controller' => 'PreinscriptionsInfos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="semestres index large-9 medium-8 columns content">
    <h3><?= __('Semestres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('niveaus_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($semestres as $semestre): ?>
            <tr>
                <td><?= $this->Number->format($semestre->id) ?></td>
                <td><?= h($semestre->libile) ?></td>
                <td><?= $semestre->has('niveau') ? $this->Html->link($semestre->niveau->id, ['controller' => 'Niveaus', 'action' => 'view', $semestre->niveau->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $semestre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $semestre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $semestre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->id)]) ?>
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
