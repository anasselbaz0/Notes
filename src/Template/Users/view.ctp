<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asupprimer'), ['controller' => 'Asupprimer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asupprimer'), ['controller' => 'Asupprimer', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diffusions Messages'), ['controller' => 'DiffusionsMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diffusions Message'), ['controller' => 'DiffusionsMessages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fonctionnaires'), ['controller' => 'Fonctionnaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fonctionnaire'), ['controller' => 'Fonctionnaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Historiqueemprunte'), ['controller' => 'Historiqueemprunte', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historiqueemprunte'), ['controller' => 'Historiqueemprunte', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messagesbureauordres'), ['controller' => 'Messagesbureauordres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Messagesbureauordre'), ['controller' => 'Messagesbureauordres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notifications Users'), ['controller' => 'NotificationsUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notifications User'), ['controller' => 'NotificationsUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profpermanents'), ['controller' => 'Profpermanents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profpermanent'), ['controller' => 'Profpermanents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profpermanentsbis'), ['controller' => 'Profpermanentsbis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profpermanentsbi'), ['controller' => 'Profpermanentsbis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vacataires'), ['controller' => 'Vacataires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vacataire'), ['controller' => 'Vacataires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vacatairesbis'), ['controller' => 'Vacatairesbis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vacatairesbi'), ['controller' => 'Vacatairesbis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Books') ?></h4>
        <?php if (!empty($user->books)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titre') ?></th>
                <th scope="col"><?= __('Auteur') ?></th>
                <th scope="col"><?= __('Edition') ?></th>
                <th scope="col"><?= __('Resumer') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('ISBN') ?></th>
                <th scope="col"><?= __('NumInventaire') ?></th>
                <th scope="col"><?= __('NbExemplaire') ?></th>
                <th scope="col"><?= __('Sous Categorie Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->books as $books): ?>
            <tr>
                <td><?= h($books->id) ?></td>
                <td><?= h($books->titre) ?></td>
                <td><?= h($books->auteur) ?></td>
                <td><?= h($books->edition) ?></td>
                <td><?= h($books->resumer) ?></td>
                <td><?= h($books->image) ?></td>
                <td><?= h($books->ISBN) ?></td>
                <td><?= h($books->numInventaire) ?></td>
                <td><?= h($books->nbExemplaire) ?></td>
                <td><?= h($books->sous_categorie_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Books', 'action' => 'view', $books->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Books', 'action' => 'edit', $books->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Books', 'action' => 'delete', $books->id], ['confirm' => __('Are you sure you want to delete # {0}?', $books->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($user->messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sujet') ?></th>
                <th scope="col"><?= __('Contenu') ?></th>
                <th scope="col"><?= __('Piecejointe') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->messages as $messages): ?>
            <tr>
                <td><?= h($messages->id) ?></td>
                <td><?= h($messages->sujet) ?></td>
                <td><?= h($messages->contenu) ?></td>
                <td><?= h($messages->piecejointe) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Asupprimer') ?></h4>
        <?php if (!empty($user->asupprimer)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->asupprimer as $asupprimer): ?>
            <tr>
                <td><?= h($asupprimer->message_id) ?></td>
                <td><?= h($asupprimer->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Asupprimer', 'action' => 'view', $asupprimer->message_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Asupprimer', 'action' => 'edit', $asupprimer->message_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Asupprimer', 'action' => 'delete', $asupprimer->message_id], ['confirm' => __('Are you sure you want to delete # {0}?', $asupprimer->message_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Diffusions Messages') ?></h4>
        <?php if (!empty($user->diffusions_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Typerecepteur') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Departement Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->diffusions_messages as $diffusionsMessages): ?>
            <tr>
                <td><?= h($diffusionsMessages->message_id) ?></td>
                <td><?= h($diffusionsMessages->user_id) ?></td>
                <td><?= h($diffusionsMessages->typerecepteur) ?></td>
                <td><?= h($diffusionsMessages->group_id) ?></td>
                <td><?= h($diffusionsMessages->departement_id) ?></td>
                <td><?= h($diffusionsMessages->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DiffusionsMessages', 'action' => 'view', $diffusionsMessages->message_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DiffusionsMessages', 'action' => 'edit', $diffusionsMessages->message_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DiffusionsMessages', 'action' => 'delete', $diffusionsMessages->message_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diffusionsMessages->message_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Etudiants') ?></h4>
        <?php if (!empty($user->etudiants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Apogee') ?></th>
                <th scope="col"><?= __('Nom Fr') ?></th>
                <th scope="col"><?= __('Nom Ar') ?></th>
                <th scope="col"><?= __('Prenom Fr') ?></th>
                <th scope="col"><?= __('Prenom Ar') ?></th>
                <th scope="col"><?= __('Cne') ?></th>
                <th scope="col"><?= __('Cin') ?></th>
                <th scope="col"><?= __('Date Naissance') ?></th>
                <th scope="col"><?= __('Code Ville Naissance') ?></th>
                <th scope="col"><?= __('Ville Naissance Fr') ?></th>
                <th scope="col"><?= __('Ville Naissance Ar') ?></th>
                <th scope="col"><?= __('Code Pays Naissance') ?></th>
                <th scope="col"><?= __('Pays Naissance Fr') ?></th>
                <th scope="col"><?= __('Pays Naissance Ar') ?></th>
                <th scope="col"><?= __('Code Sexe') ?></th>
                <th scope="col"><?= __('Sexe Fr') ?></th>
                <th scope="col"><?= __('Sexe Ar') ?></th>
                <th scope="col"><?= __('Code Adresse Fix') ?></th>
                <th scope="col"><?= __('Adresse Fix Fr') ?></th>
                <th scope="col"><?= __('Adresse Fix Ar') ?></th>
                <th scope="col"><?= __('Adresse Annulle Fr') ?></th>
                <th scope="col"><?= __('Adresse Annulle Ar') ?></th>
                <th scope="col"><?= __('Annee 1er Inscription Universite') ?></th>
                <th scope="col"><?= __('Annee 1er Inscription Enseignement Superieur') ?></th>
                <th scope="col"><?= __('Annee 1er Inscription Universite Marocaine') ?></th>
                <th scope="col"><?= __('Code Bac') ?></th>
                <th scope="col"><?= __('Serie Bac Fr') ?></th>
                <th scope="col"><?= __('Serie Bac Ar') ?></th>
                <th scope="col"><?= __('Code Etablissement Bac') ?></th>
                <th scope="col"><?= __('Etablissement Bac Fr') ?></th>
                <th scope="col"><?= __('Etablissement Bac Ar') ?></th>
                <th scope="col"><?= __('Code Mention Bac') ?></th>
                <th scope="col"><?= __('Mention Bac') ?></th>
                <th scope="col"><?= __('Code Province Bac') ?></th>
                <th scope="col"><?= __('Province Bac Fr') ?></th>
                <th scope="col"><?= __('Province Bac Ar') ?></th>
                <th scope="col"><?= __('Annee Bac') ?></th>
                <th scope="col"><?= __('Code Type Handicap') ?></th>
                <th scope="col"><?= __('Type Handicap') ?></th>
                <th scope="col"><?= __('Code Type Hebergement') ?></th>
                <th scope="col"><?= __('Type Hebergement') ?></th>
                <th scope="col"><?= __('Code Situation Familiale') ?></th>
                <th scope="col"><?= __('Situation Familiale') ?></th>
                <th scope="col"><?= __('Situation Militaire') ?></th>
                <th scope="col"><?= __('Categorie Socio Professionnelle') ?></th>
                <th scope="col"><?= __('Domaine Activite Professionnelle') ?></th>
                <th scope="col"><?= __('Quatite Travaillee') ?></th>
                <th scope="col"><?= __('Profession Pere Fr') ?></th>
                <th scope="col"><?= __('Profession Pere Ar') ?></th>
                <th scope="col"><?= __('Profession Mere Fr') ?></th>
                <th scope="col"><?= __('Profession Mere Ar') ?></th>
                <th scope="col"><?= __('Code Province Parents') ?></th>
                <th scope="col"><?= __('Province Parents Fr') ?></th>
                <th scope="col"><?= __('Province Parents Ar') ?></th>
                <th scope="col"><?= __('Annee Sortie') ?></th>
                <th scope="col"><?= __('Code Cite Universiatire') ?></th>
                <th scope="col"><?= __('Cite Universiatire') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Validi') ?></th>
                <th scope="col"><?= __('Validi Respo') ?></th>
                <th scope="col"><?= __('Numero Tel') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->etudiants as $etudiants): ?>
            <tr>
                <td><?= h($etudiants->id) ?></td>
                <td><?= h($etudiants->user_id) ?></td>
                <td><?= h($etudiants->apogee) ?></td>
                <td><?= h($etudiants->nom_fr) ?></td>
                <td><?= h($etudiants->nom_ar) ?></td>
                <td><?= h($etudiants->prenom_fr) ?></td>
                <td><?= h($etudiants->prenom_ar) ?></td>
                <td><?= h($etudiants->cne) ?></td>
                <td><?= h($etudiants->cin) ?></td>
                <td><?= h($etudiants->date_naissance) ?></td>
                <td><?= h($etudiants->code_ville_naissance) ?></td>
                <td><?= h($etudiants->ville_naissance_fr) ?></td>
                <td><?= h($etudiants->ville_naissance_ar) ?></td>
                <td><?= h($etudiants->code_pays_naissance) ?></td>
                <td><?= h($etudiants->pays_naissance_fr) ?></td>
                <td><?= h($etudiants->pays_naissance_ar) ?></td>
                <td><?= h($etudiants->code_sexe) ?></td>
                <td><?= h($etudiants->sexe_fr) ?></td>
                <td><?= h($etudiants->sexe_ar) ?></td>
                <td><?= h($etudiants->code_adresse_fix) ?></td>
                <td><?= h($etudiants->adresse_fix_fr) ?></td>
                <td><?= h($etudiants->adresse_fix_ar) ?></td>
                <td><?= h($etudiants->adresse_annulle_fr) ?></td>
                <td><?= h($etudiants->adresse_annulle_ar) ?></td>
                <td><?= h($etudiants->annee_1er_inscription_universite) ?></td>
                <td><?= h($etudiants->annee_1er_inscription_enseignement_superieur) ?></td>
                <td><?= h($etudiants->annee_1er_inscription_universite_marocaine) ?></td>
                <td><?= h($etudiants->code_bac) ?></td>
                <td><?= h($etudiants->serie_bac_fr) ?></td>
                <td><?= h($etudiants->serie_bac_ar) ?></td>
                <td><?= h($etudiants->code_etablissement_bac) ?></td>
                <td><?= h($etudiants->etablissement_bac_fr) ?></td>
                <td><?= h($etudiants->etablissement_bac_ar) ?></td>
                <td><?= h($etudiants->code_mention_bac) ?></td>
                <td><?= h($etudiants->mention_bac) ?></td>
                <td><?= h($etudiants->code_province_bac) ?></td>
                <td><?= h($etudiants->province_bac_fr) ?></td>
                <td><?= h($etudiants->province_bac_ar) ?></td>
                <td><?= h($etudiants->annee_bac) ?></td>
                <td><?= h($etudiants->code_type_handicap) ?></td>
                <td><?= h($etudiants->type_handicap) ?></td>
                <td><?= h($etudiants->code_type_hebergement) ?></td>
                <td><?= h($etudiants->type_hebergement) ?></td>
                <td><?= h($etudiants->code_situation_familiale) ?></td>
                <td><?= h($etudiants->situation_familiale) ?></td>
                <td><?= h($etudiants->situation_militaire) ?></td>
                <td><?= h($etudiants->categorie_socio_professionnelle) ?></td>
                <td><?= h($etudiants->domaine_activite_professionnelle) ?></td>
                <td><?= h($etudiants->quatite_Travaillee) ?></td>
                <td><?= h($etudiants->profession_pere_fr) ?></td>
                <td><?= h($etudiants->profession_pere_ar) ?></td>
                <td><?= h($etudiants->profession_mere_fr) ?></td>
                <td><?= h($etudiants->profession_mere_ar) ?></td>
                <td><?= h($etudiants->code_province_parents) ?></td>
                <td><?= h($etudiants->province_parents_fr) ?></td>
                <td><?= h($etudiants->province_parents_ar) ?></td>
                <td><?= h($etudiants->annee_sortie) ?></td>
                <td><?= h($etudiants->code_cite_universiatire) ?></td>
                <td><?= h($etudiants->cite_universiatire) ?></td>
                <td><?= h($etudiants->created) ?></td>
                <td><?= h($etudiants->modified) ?></td>
                <td><?= h($etudiants->photo) ?></td>
                <td><?= h($etudiants->validi) ?></td>
                <td><?= h($etudiants->validi_respo) ?></td>
                <td><?= h($etudiants->numero_tel) ?></td>
                <td><?= h($etudiants->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Etudiants', 'action' => 'view', $etudiants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Etudiants', 'action' => 'edit', $etudiants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Etudiants', 'action' => 'delete', $etudiants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fonctionnaires') ?></h4>
        <?php if (!empty($user->fonctionnaires)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Somme') ?></th>
                <th scope="col"><?= __('Date Recrut') ?></th>
                <th scope="col"><?= __('Salaire') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Nom Fct') ?></th>
                <th scope="col"><?= __('Prenom Fct') ?></th>
                <th scope="col"><?= __('DateNaissance') ?></th>
                <th scope="col"><?= __('LieuNaissance') ?></th>
                <th scope="col"><?= __('Specialite') ?></th>
                <th scope="col"><?= __('Situation Familiale') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Etat Attestation') ?></th>
                <th scope="col"><?= __('Etat Fiche') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('CIN') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Genre') ?></th>
                <th scope="col"><?= __('Nbr Enfants') ?></th>
                <th scope="col"><?= __('IsPassExam') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->fonctionnaires as $fonctionnaires): ?>
            <tr>
                <td><?= h($fonctionnaires->id) ?></td>
                <td><?= h($fonctionnaires->somme) ?></td>
                <td><?= h($fonctionnaires->date_Recrut) ?></td>
                <td><?= h($fonctionnaires->salaire) ?></td>
                <td><?= h($fonctionnaires->etat) ?></td>
                <td><?= h($fonctionnaires->user_id) ?></td>
                <td><?= h($fonctionnaires->nom_fct) ?></td>
                <td><?= h($fonctionnaires->prenom_fct) ?></td>
                <td><?= h($fonctionnaires->dateNaissance) ?></td>
                <td><?= h($fonctionnaires->lieuNaissance) ?></td>
                <td><?= h($fonctionnaires->specialite) ?></td>
                <td><?= h($fonctionnaires->situation_Familiale) ?></td>
                <td><?= h($fonctionnaires->email) ?></td>
                <td><?= h($fonctionnaires->etat_attestation) ?></td>
                <td><?= h($fonctionnaires->etat_fiche) ?></td>
                <td><?= h($fonctionnaires->phone) ?></td>
                <td><?= h($fonctionnaires->CIN) ?></td>
                <td><?= h($fonctionnaires->age) ?></td>
                <td><?= h($fonctionnaires->genre) ?></td>
                <td><?= h($fonctionnaires->nbr_enfants) ?></td>
                <td><?= h($fonctionnaires->isPassExam) ?></td>
                <td><?= h($fonctionnaires->photo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fonctionnaires', 'action' => 'view', $fonctionnaires->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fonctionnaires', 'action' => 'edit', $fonctionnaires->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fonctionnaires', 'action' => 'delete', $fonctionnaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fonctionnaires->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Historiqueemprunte') ?></h4>
        <?php if (!empty($user->historiqueemprunte)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('DateEmprunte') ?></th>
                <th scope="col"><?= __('DateRetour') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->historiqueemprunte as $historiqueemprunte): ?>
            <tr>
                <td><?= h($historiqueemprunte->id) ?></td>
                <td><?= h($historiqueemprunte->user_id) ?></td>
                <td><?= h($historiqueemprunte->book_id) ?></td>
                <td><?= h($historiqueemprunte->dateEmprunte) ?></td>
                <td><?= h($historiqueemprunte->dateRetour) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Historiqueemprunte', 'action' => 'view', $historiqueemprunte->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Historiqueemprunte', 'action' => 'edit', $historiqueemprunte->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Historiqueemprunte', 'action' => 'delete', $historiqueemprunte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historiqueemprunte->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messagesbureauordres') ?></h4>
        <?php if (!empty($user->messagesbureauordres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contenu') ?></th>
                <th scope="col"><?= __('Piecejointe') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->messagesbureauordres as $messagesbureauordres): ?>
            <tr>
                <td><?= h($messagesbureauordres->id) ?></td>
                <td><?= h($messagesbureauordres->contenu) ?></td>
                <td><?= h($messagesbureauordres->piecejointe) ?></td>
                <td><?= h($messagesbureauordres->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messagesbureauordres', 'action' => 'view', $messagesbureauordres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messagesbureauordres', 'action' => 'edit', $messagesbureauordres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messagesbureauordres', 'action' => 'delete', $messagesbureauordres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesbureauordres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notifications Users') ?></h4>
        <?php if (!empty($user->notifications_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titre') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Principale') ?></th>
                <th scope="col"><?= __('Commentaire') ?></th>
                <th scope="col"><?= __('Lien') ?></th>
                <th scope="col"><?= __('Style') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->notifications_users as $notificationsUsers): ?>
            <tr>
                <td><?= h($notificationsUsers->id) ?></td>
                <td><?= h($notificationsUsers->titre) ?></td>
                <td><?= h($notificationsUsers->user_id) ?></td>
                <td><?= h($notificationsUsers->created) ?></td>
                <td><?= h($notificationsUsers->principale) ?></td>
                <td><?= h($notificationsUsers->commentaire) ?></td>
                <td><?= h($notificationsUsers->lien) ?></td>
                <td><?= h($notificationsUsers->style) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'NotificationsUsers', 'action' => 'view', $notificationsUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'NotificationsUsers', 'action' => 'edit', $notificationsUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'NotificationsUsers', 'action' => 'delete', $notificationsUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificationsUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Profpermanents') ?></h4>
        <?php if (!empty($user->profpermanents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Somme') ?></th>
                <th scope="col"><?= __('Salaire') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('Date Recrut') ?></th>
                <th scope="col"><?= __('Nom Prof') ?></th>
                <th scope="col"><?= __('Prenom Prof') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Diplome') ?></th>
                <th scope="col"><?= __('Specialite') ?></th>
                <th scope="col"><?= __('Universite') ?></th>
                <th scope="col"><?= __('Autresdiplomes') ?></th>
                <th scope="col"><?= __('Situation Familiale') ?></th>
                <th scope="col"><?= __('DateNaissance') ?></th>
                <th scope="col"><?= __('Lieu Naissance') ?></th>
                <th scope="col"><?= __('CIN') ?></th>
                <th scope="col"><?= __('Email Prof') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Etat Attestation') ?></th>
                <th scope="col"><?= __('Etatdemande') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Etat Fichesalaire') ?></th>
                <th scope="col"><?= __('Genre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->profpermanents as $profpermanents): ?>
            <tr>
                <td><?= h($profpermanents->id) ?></td>
                <td><?= h($profpermanents->user_id) ?></td>
                <td><?= h($profpermanents->somme) ?></td>
                <td><?= h($profpermanents->salaire) ?></td>
                <td><?= h($profpermanents->etat) ?></td>
                <td><?= h($profpermanents->date_Recrut) ?></td>
                <td><?= h($profpermanents->nom_prof) ?></td>
                <td><?= h($profpermanents->prenom_prof) ?></td>
                <td><?= h($profpermanents->age) ?></td>
                <td><?= h($profpermanents->diplome) ?></td>
                <td><?= h($profpermanents->specialite) ?></td>
                <td><?= h($profpermanents->universite) ?></td>
                <td><?= h($profpermanents->autresdiplomes) ?></td>
                <td><?= h($profpermanents->situation_familiale) ?></td>
                <td><?= h($profpermanents->dateNaissance) ?></td>
                <td><?= h($profpermanents->Lieu_Naissance) ?></td>
                <td><?= h($profpermanents->CIN) ?></td>
                <td><?= h($profpermanents->email_prof) ?></td>
                <td><?= h($profpermanents->phone) ?></td>
                <td><?= h($profpermanents->etat_attestation) ?></td>
                <td><?= h($profpermanents->etatdemande) ?></td>
                <td><?= h($profpermanents->photo) ?></td>
                <td><?= h($profpermanents->etat_fichesalaire) ?></td>
                <td><?= h($profpermanents->genre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profpermanents', 'action' => 'view', $profpermanents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profpermanents', 'action' => 'edit', $profpermanents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profpermanents', 'action' => 'delete', $profpermanents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profpermanents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Profpermanentsbis') ?></h4>
        <?php if (!empty($user->profpermanentsbis)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Somme') ?></th>
                <th scope="col"><?= __('Salaire') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('Date Recrut') ?></th>
                <th scope="col"><?= __('Nom Prof') ?></th>
                <th scope="col"><?= __('Prenom Prof') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col"><?= __('Diplome') ?></th>
                <th scope="col"><?= __('Specialite') ?></th>
                <th scope="col"><?= __('Universite') ?></th>
                <th scope="col"><?= __('Autresdiplomes') ?></th>
                <th scope="col"><?= __('Situation Familiale') ?></th>
                <th scope="col"><?= __('Lieu Naissance') ?></th>
                <th scope="col"><?= __('CIN') ?></th>
                <th scope="col"><?= __('Email Prof') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Etat Attestation') ?></th>
                <th scope="col"><?= __('Etatdemande') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Etat Fichesalaire') ?></th>
                <th scope="col"><?= __('Date Envoi') ?></th>
                <th scope="col"><?= __('IsValid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->profpermanentsbis as $profpermanentsbis): ?>
            <tr>
                <td><?= h($profpermanentsbis->id) ?></td>
                <td><?= h($profpermanentsbis->user_id) ?></td>
                <td><?= h($profpermanentsbis->somme) ?></td>
                <td><?= h($profpermanentsbis->salaire) ?></td>
                <td><?= h($profpermanentsbis->etat) ?></td>
                <td><?= h($profpermanentsbis->date_Recrut) ?></td>
                <td><?= h($profpermanentsbis->nom_prof) ?></td>
                <td><?= h($profpermanentsbis->prenom_prof) ?></td>
                <td><?= h($profpermanentsbis->age) ?></td>
                <td><?= h($profpermanentsbis->diplome) ?></td>
                <td><?= h($profpermanentsbis->specialite) ?></td>
                <td><?= h($profpermanentsbis->universite) ?></td>
                <td><?= h($profpermanentsbis->autresdiplomes) ?></td>
                <td><?= h($profpermanentsbis->situation_familiale) ?></td>
                <td><?= h($profpermanentsbis->Lieu_Naissance) ?></td>
                <td><?= h($profpermanentsbis->CIN) ?></td>
                <td><?= h($profpermanentsbis->email_prof) ?></td>
                <td><?= h($profpermanentsbis->phone) ?></td>
                <td><?= h($profpermanentsbis->etat_attestation) ?></td>
                <td><?= h($profpermanentsbis->etatdemande) ?></td>
                <td><?= h($profpermanentsbis->photo) ?></td>
                <td><?= h($profpermanentsbis->etat_fichesalaire) ?></td>
                <td><?= h($profpermanentsbis->date_envoi) ?></td>
                <td><?= h($profpermanentsbis->isValid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profpermanentsbis', 'action' => 'view', $profpermanentsbis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profpermanentsbis', 'action' => 'edit', $profpermanentsbis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profpermanentsbis', 'action' => 'delete', $profpermanentsbis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profpermanentsbis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($user->reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('DateReservation') ?></th>
                <th scope="col"><?= __('Delai') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->dateReservation) ?></td>
                <td><?= h($reservations->delai) ?></td>
                <td><?= h($reservations->user_id) ?></td>
                <td><?= h($reservations->book_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vacataires') ?></h4>
        <?php if (!empty($user->vacataires)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Somme') ?></th>
                <th scope="col"><?= __('Nom Vacataire') ?></th>
                <th scope="col"><?= __('Prenom Vacataire') ?></th>
                <th scope="col"><?= __('Nb Heures') ?></th>
                <th scope="col"><?= __('Echelle') ?></th>
                <th scope="col"><?= __('Echelon') ?></th>
                <th scope="col"><?= __('DateRecrut') ?></th>
                <th scope="col"><?= __('DateNaissance') ?></th>
                <th scope="col"><?= __('LieuNaissance') ?></th>
                <th scope="col"><?= __('Diplome') ?></th>
                <th scope="col"><?= __('Universite') ?></th>
                <th scope="col"><?= __('Specialite') ?></th>
                <th scope="col"><?= __('CIN') ?></th>
                <th scope="col"><?= __('SituationFamiliale') ?></th>
                <th scope="col"><?= __('CodeSituation') ?></th>
                <th scope="col"><?= __('DateAffectation') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Nbr Enfants') ?></th>
                <th scope="col"><?= __('Genre') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->vacataires as $vacataires): ?>
            <tr>
                <td><?= h($vacataires->id) ?></td>
                <td><?= h($vacataires->user_id) ?></td>
                <td><?= h($vacataires->somme) ?></td>
                <td><?= h($vacataires->nom_vacataire) ?></td>
                <td><?= h($vacataires->prenom_vacataire) ?></td>
                <td><?= h($vacataires->nb_heures) ?></td>
                <td><?= h($vacataires->echelle) ?></td>
                <td><?= h($vacataires->echelon) ?></td>
                <td><?= h($vacataires->dateRecrut) ?></td>
                <td><?= h($vacataires->dateNaissance) ?></td>
                <td><?= h($vacataires->LieuNaissance) ?></td>
                <td><?= h($vacataires->diplome) ?></td>
                <td><?= h($vacataires->universite) ?></td>
                <td><?= h($vacataires->specialite) ?></td>
                <td><?= h($vacataires->CIN) ?></td>
                <td><?= h($vacataires->situationFamiliale) ?></td>
                <td><?= h($vacataires->codeSituation) ?></td>
                <td><?= h($vacataires->dateAffectation) ?></td>
                <td><?= h($vacataires->email) ?></td>
                <td><?= h($vacataires->nbr_enfants) ?></td>
                <td><?= h($vacataires->genre) ?></td>
                <td><?= h($vacataires->age) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vacataires', 'action' => 'view', $vacataires->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vacataires', 'action' => 'edit', $vacataires->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vacataires', 'action' => 'delete', $vacataires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vacataires->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vacatairesbis') ?></h4>
        <?php if (!empty($user->vacatairesbis)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Somme') ?></th>
                <th scope="col"><?= __('Nom Vacataire') ?></th>
                <th scope="col"><?= __('Prenom Vacataire') ?></th>
                <th scope="col"><?= __('Nb Heures') ?></th>
                <th scope="col"><?= __('Echelle') ?></th>
                <th scope="col"><?= __('Echelon') ?></th>
                <th scope="col"><?= __('DateRecrut') ?></th>
                <th scope="col"><?= __('DateNaissance') ?></th>
                <th scope="col"><?= __('LieuNaissance') ?></th>
                <th scope="col"><?= __('Diplome') ?></th>
                <th scope="col"><?= __('Universite') ?></th>
                <th scope="col"><?= __('Specialite') ?></th>
                <th scope="col"><?= __('CIN') ?></th>
                <th scope="col"><?= __('SituationFamiliale') ?></th>
                <th scope="col"><?= __('CodeSituation') ?></th>
                <th scope="col"><?= __('DateAffectation') ?></th>
                <th scope="col"><?= __('Date Envoi') ?></th>
                <th scope="col"><?= __('IsValid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->vacatairesbis as $vacatairesbis): ?>
            <tr>
                <td><?= h($vacatairesbis->id) ?></td>
                <td><?= h($vacatairesbis->user_id) ?></td>
                <td><?= h($vacatairesbis->somme) ?></td>
                <td><?= h($vacatairesbis->nom_vacataire) ?></td>
                <td><?= h($vacatairesbis->prenom_vacataire) ?></td>
                <td><?= h($vacatairesbis->nb_heures) ?></td>
                <td><?= h($vacatairesbis->echelle) ?></td>
                <td><?= h($vacatairesbis->echelon) ?></td>
                <td><?= h($vacatairesbis->dateRecrut) ?></td>
                <td><?= h($vacatairesbis->dateNaissance) ?></td>
                <td><?= h($vacatairesbis->LieuNaissance) ?></td>
                <td><?= h($vacatairesbis->diplome) ?></td>
                <td><?= h($vacatairesbis->universite) ?></td>
                <td><?= h($vacatairesbis->specialite) ?></td>
                <td><?= h($vacatairesbis->CIN) ?></td>
                <td><?= h($vacatairesbis->situationFamiliale) ?></td>
                <td><?= h($vacatairesbis->codeSituation) ?></td>
                <td><?= h($vacatairesbis->dateAffectation) ?></td>
                <td><?= h($vacatairesbis->date_envoi) ?></td>
                <td><?= h($vacatairesbis->isValid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vacatairesbis', 'action' => 'view', $vacatairesbis->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vacatairesbis', 'action' => 'edit', $vacatairesbis->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vacatairesbis', 'action' => 'delete', $vacatairesbis->], ['confirm' => __('Are you sure you want to delete # {0}?', $vacatairesbis->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
