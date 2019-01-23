<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asupprimer'), ['controller' => 'Asupprimer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asupprimer'), ['controller' => 'Asupprimer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diffusions Messages'), ['controller' => 'DiffusionsMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diffusions Message'), ['controller' => 'DiffusionsMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fonctionnaires'), ['controller' => 'Fonctionnaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fonctionnaire'), ['controller' => 'Fonctionnaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historiqueemprunte'), ['controller' => 'Historiqueemprunte', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historiqueemprunte'), ['controller' => 'Historiqueemprunte', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messagesbureauordres'), ['controller' => 'Messagesbureauordres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Messagesbureauordre'), ['controller' => 'Messagesbureauordres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notifications Users'), ['controller' => 'NotificationsUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notifications User'), ['controller' => 'NotificationsUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profpermanents'), ['controller' => 'Profpermanents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profpermanent'), ['controller' => 'Profpermanents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profpermanentsbis'), ['controller' => 'Profpermanentsbis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profpermanentsbi'), ['controller' => 'Profpermanentsbis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vacataires'), ['controller' => 'Vacataires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vacataire'), ['controller' => 'Vacataires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vacatairesbis'), ['controller' => 'Vacatairesbis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vacatairesbi'), ['controller' => 'Vacatairesbis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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