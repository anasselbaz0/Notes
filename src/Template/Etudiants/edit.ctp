<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant $etudiant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etudiant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Certificats'), ['controller' => 'Certificats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Certificat'), ['controller' => 'Certificats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etudiants form large-9 medium-8 columns content">
    <?= $this->Form->create($etudiant) ?>
    <fieldset>
        <legend><?= __('Edit Etudiant') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('apogee');
            echo $this->Form->control('nom_fr');
            echo $this->Form->control('nom_ar');
            echo $this->Form->control('prenom_fr');
            echo $this->Form->control('prenom_ar');
            echo $this->Form->control('cne');
            echo $this->Form->control('cin');
            echo $this->Form->control('date_naissance', ['empty' => true]);
            echo $this->Form->control('code_ville_naissance');
            echo $this->Form->control('ville_naissance_fr');
            echo $this->Form->control('ville_naissance_ar');
            echo $this->Form->control('code_pays_naissance');
            echo $this->Form->control('pays_naissance_fr');
            echo $this->Form->control('pays_naissance_ar');
            echo $this->Form->control('code_sexe');
            echo $this->Form->control('sexe_fr');
            echo $this->Form->control('sexe_ar');
            echo $this->Form->control('code_adresse_fix');
            echo $this->Form->control('adresse_fix_fr');
            echo $this->Form->control('adresse_fix_ar');
            echo $this->Form->control('adresse_annulle_fr');
            echo $this->Form->control('adresse_annulle_ar');
            echo $this->Form->control('annee_1er_inscription_universite');
            echo $this->Form->control('annee_1er_inscription_enseignement_superieur');
            echo $this->Form->control('annee_1er_inscription_universite_marocaine');
            echo $this->Form->control('code_bac');
            echo $this->Form->control('serie_bac_fr');
            echo $this->Form->control('serie_bac_ar');
            echo $this->Form->control('code_etablissement_bac');
            echo $this->Form->control('etablissement_bac_fr');
            echo $this->Form->control('etablissement_bac_ar');
            echo $this->Form->control('code_mention_bac');
            echo $this->Form->control('mention_bac');
            echo $this->Form->control('code_province_bac');
            echo $this->Form->control('province_bac_fr');
            echo $this->Form->control('province_bac_ar');
            echo $this->Form->control('annee_bac');
            echo $this->Form->control('code_type_handicap');
            echo $this->Form->control('type_handicap');
            echo $this->Form->control('code_type_hebergement');
            echo $this->Form->control('type_hebergement');
            echo $this->Form->control('code_situation_familiale');
            echo $this->Form->control('situation_familiale');
            echo $this->Form->control('situation_militaire');
            echo $this->Form->control('categorie_socio_professionnelle');
            echo $this->Form->control('domaine_activite_professionnelle');
            echo $this->Form->control('quatite_Travaillee');
            echo $this->Form->control('profession_pere_fr');
            echo $this->Form->control('profession_pere_ar');
            echo $this->Form->control('profession_mere_fr');
            echo $this->Form->control('profession_mere_ar');
            echo $this->Form->control('code_province_parents');
            echo $this->Form->control('province_parents_fr');
            echo $this->Form->control('province_parents_ar');
            echo $this->Form->control('annee_sortie');
            echo $this->Form->control('code_cite_universiatire');
            echo $this->Form->control('cite_universiatire');
            echo $this->Form->control('photo');
            echo $this->Form->control('validi');
            echo $this->Form->control('validi_respo');
            echo $this->Form->control('numero_tel');
            echo $this->Form->control('email');
            echo $this->Form->control('certificats._ids', ['options' => $certificats]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
