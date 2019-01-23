<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
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
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
            echo $this->Form->control('books._ids', ['options' => $books]);
            echo $this->Form->control('messages._ids', ['options' => $messages]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
