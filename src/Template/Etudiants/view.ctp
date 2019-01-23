<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant $etudiant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etudiant'), ['action' => 'edit', $etudiant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etudiant'), ['action' => 'delete', $etudiant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Certificats'), ['controller' => 'Certificats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Certificat'), ['controller' => 'Certificats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etudiants view large-9 medium-8 columns content">
    <h3><?= h($etudiant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $etudiant->has('user') ? $this->Html->link($etudiant->user->id, ['controller' => 'Users', 'action' => 'view', $etudiant->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apogee') ?></th>
            <td><?= h($etudiant->apogee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom Fr') ?></th>
            <td><?= h($etudiant->nom_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom Ar') ?></th>
            <td><?= h($etudiant->nom_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom Fr') ?></th>
            <td><?= h($etudiant->prenom_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom Ar') ?></th>
            <td><?= h($etudiant->prenom_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cin') ?></th>
            <td><?= h($etudiant->cin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Ville Naissance') ?></th>
            <td><?= h($etudiant->code_ville_naissance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville Naissance Fr') ?></th>
            <td><?= h($etudiant->ville_naissance_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville Naissance Ar') ?></th>
            <td><?= h($etudiant->ville_naissance_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Pays Naissance') ?></th>
            <td><?= h($etudiant->code_pays_naissance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pays Naissance Fr') ?></th>
            <td><?= h($etudiant->pays_naissance_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pays Naissance Ar') ?></th>
            <td><?= h($etudiant->pays_naissance_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Sexe') ?></th>
            <td><?= h($etudiant->code_sexe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexe Fr') ?></th>
            <td><?= h($etudiant->sexe_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexe Ar') ?></th>
            <td><?= h($etudiant->sexe_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee 1er Inscription Universite') ?></th>
            <td><?= h($etudiant->annee_1er_inscription_universite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee 1er Inscription Enseignement Superieur') ?></th>
            <td><?= h($etudiant->annee_1er_inscription_enseignement_superieur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee 1er Inscription Universite Marocaine') ?></th>
            <td><?= h($etudiant->annee_1er_inscription_universite_marocaine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Bac') ?></th>
            <td><?= h($etudiant->code_bac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serie Bac Fr') ?></th>
            <td><?= h($etudiant->serie_bac_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serie Bac Ar') ?></th>
            <td><?= h($etudiant->serie_bac_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Etablissement Bac') ?></th>
            <td><?= h($etudiant->code_etablissement_bac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etablissement Bac Fr') ?></th>
            <td><?= h($etudiant->etablissement_bac_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etablissement Bac Ar') ?></th>
            <td><?= h($etudiant->etablissement_bac_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Mention Bac') ?></th>
            <td><?= h($etudiant->code_mention_bac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mention Bac') ?></th>
            <td><?= h($etudiant->mention_bac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Province Bac') ?></th>
            <td><?= h($etudiant->code_province_bac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Bac Fr') ?></th>
            <td><?= h($etudiant->province_bac_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Bac Ar') ?></th>
            <td><?= h($etudiant->province_bac_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee Bac') ?></th>
            <td><?= h($etudiant->annee_bac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Type Handicap') ?></th>
            <td><?= h($etudiant->code_type_handicap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Handicap') ?></th>
            <td><?= h($etudiant->type_handicap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Type Hebergement') ?></th>
            <td><?= h($etudiant->code_type_hebergement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Hebergement') ?></th>
            <td><?= h($etudiant->type_hebergement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Situation Familiale') ?></th>
            <td><?= h($etudiant->code_situation_familiale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation Familiale') ?></th>
            <td><?= h($etudiant->situation_familiale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation Militaire') ?></th>
            <td><?= h($etudiant->situation_militaire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorie Socio Professionnelle') ?></th>
            <td><?= h($etudiant->categorie_socio_professionnelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Domaine Activite Professionnelle') ?></th>
            <td><?= h($etudiant->domaine_activite_professionnelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quatite Travaillee') ?></th>
            <td><?= h($etudiant->quatite_Travaillee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession Pere Fr') ?></th>
            <td><?= h($etudiant->profession_pere_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession Pere Ar') ?></th>
            <td><?= h($etudiant->profession_pere_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession Mere Fr') ?></th>
            <td><?= h($etudiant->profession_mere_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession Mere Ar') ?></th>
            <td><?= h($etudiant->profession_mere_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Province Parents') ?></th>
            <td><?= h($etudiant->code_province_parents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Parents Fr') ?></th>
            <td><?= h($etudiant->province_parents_fr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Parents Ar') ?></th>
            <td><?= h($etudiant->province_parents_ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee Sortie') ?></th>
            <td><?= h($etudiant->annee_sortie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Cite Universiatire') ?></th>
            <td><?= h($etudiant->code_cite_universiatire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cite Universiatire') ?></th>
            <td><?= h($etudiant->cite_universiatire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($etudiant->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Tel') ?></th>
            <td><?= h($etudiant->numero_tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($etudiant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($etudiant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cne') ?></th>
            <td><?= $this->Number->format($etudiant->cne) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validi') ?></th>
            <td><?= $this->Number->format($etudiant->validi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validi Respo') ?></th>
            <td><?= $this->Number->format($etudiant->validi_respo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Naissance') ?></th>
            <td><?= h($etudiant->date_naissance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($etudiant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($etudiant->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Code Adresse Fix') ?></h4>
        <?= $this->Text->autoParagraph(h($etudiant->code_adresse_fix)); ?>
    </div>
    <div class="row">
        <h4><?= __('Adresse Fix Fr') ?></h4>
        <?= $this->Text->autoParagraph(h($etudiant->adresse_fix_fr)); ?>
    </div>
    <div class="row">
        <h4><?= __('Adresse Fix Ar') ?></h4>
        <?= $this->Text->autoParagraph(h($etudiant->adresse_fix_ar)); ?>
    </div>
    <div class="row">
        <h4><?= __('Adresse Annulle Fr') ?></h4>
        <?= $this->Text->autoParagraph(h($etudiant->adresse_annulle_fr)); ?>
    </div>
    <div class="row">
        <h4><?= __('Adresse Annulle Ar') ?></h4>
        <?= $this->Text->autoParagraph(h($etudiant->adresse_annulle_ar)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Certificats') ?></h4>
        <?php if (!empty($etudiant->certificats)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Nombre Max') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($etudiant->certificats as $certificats): ?>
            <tr>
                <td><?= h($certificats->id) ?></td>
                <td><?= h($certificats->type) ?></td>
                <td><?= h($certificats->created) ?></td>
                <td><?= h($certificats->modified) ?></td>
                <td><?= h($certificats->nombre_max) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Certificats', 'action' => 'view', $certificats->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Certificats', 'action' => 'edit', $certificats->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Certificats', 'action' => 'delete', $certificats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $certificats->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Etudiers') ?></h4>
        <?php if (!empty($etudiant->etudiers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Etudiant Id') ?></th>
                <th scope="col"><?= __('Annee Scolaire Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Element Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($etudiant->etudiers as $etudiers): ?>
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
