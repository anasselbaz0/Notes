<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant[]|\Cake\Collection\CollectionInterface $etudiants
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiers'), ['controller' => 'Etudiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudier'), ['controller' => 'Etudiers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Certificats'), ['controller' => 'Certificats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Certificat'), ['controller' => 'Certificats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etudiants index large-9 medium-8 columns content">
    <h3><?= __('Etudiants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apogee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cne') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_naissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_ville_naissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville_naissance_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville_naissance_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_pays_naissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pays_naissance_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pays_naissance_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_sexe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexe_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexe_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee_1er_inscription_universite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee_1er_inscription_enseignement_superieur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee_1er_inscription_universite_marocaine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_bac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie_bac_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie_bac_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_etablissement_bac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etablissement_bac_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etablissement_bac_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_mention_bac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mention_bac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_province_bac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_bac_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_bac_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee_bac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_type_handicap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_handicap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_type_hebergement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_hebergement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_situation_familiale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_familiale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_militaire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie_socio_professionnelle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('domaine_activite_professionnelle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quatite_Travaillee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profession_pere_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profession_pere_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profession_mere_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profession_mere_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_province_parents') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_parents_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_parents_ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee_sortie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_cite_universiatire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cite_universiatire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validi_respo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $this->Number->format($etudiant->id) ?></td>
                <td><?= $etudiant->has('user') ? $this->Html->link($etudiant->user->id, ['controller' => 'Users', 'action' => 'view', $etudiant->user->id]) : '' ?></td>
                <td><?= h($etudiant->apogee) ?></td>
                <td><?= h($etudiant->nom_fr) ?></td>
                <td><?= h($etudiant->nom_ar) ?></td>
                <td><?= h($etudiant->prenom_fr) ?></td>
                <td><?= h($etudiant->prenom_ar) ?></td>
                <td><?= $this->Number->format($etudiant->cne) ?></td>
                <td><?= h($etudiant->cin) ?></td>
                <td><?= h($etudiant->date_naissance) ?></td>
                <td><?= h($etudiant->code_ville_naissance) ?></td>
                <td><?= h($etudiant->ville_naissance_fr) ?></td>
                <td><?= h($etudiant->ville_naissance_ar) ?></td>
                <td><?= h($etudiant->code_pays_naissance) ?></td>
                <td><?= h($etudiant->pays_naissance_fr) ?></td>
                <td><?= h($etudiant->pays_naissance_ar) ?></td>
                <td><?= h($etudiant->code_sexe) ?></td>
                <td><?= h($etudiant->sexe_fr) ?></td>
                <td><?= h($etudiant->sexe_ar) ?></td>
                <td><?= h($etudiant->annee_1er_inscription_universite) ?></td>
                <td><?= h($etudiant->annee_1er_inscription_enseignement_superieur) ?></td>
                <td><?= h($etudiant->annee_1er_inscription_universite_marocaine) ?></td>
                <td><?= h($etudiant->code_bac) ?></td>
                <td><?= h($etudiant->serie_bac_fr) ?></td>
                <td><?= h($etudiant->serie_bac_ar) ?></td>
                <td><?= h($etudiant->code_etablissement_bac) ?></td>
                <td><?= h($etudiant->etablissement_bac_fr) ?></td>
                <td><?= h($etudiant->etablissement_bac_ar) ?></td>
                <td><?= h($etudiant->code_mention_bac) ?></td>
                <td><?= h($etudiant->mention_bac) ?></td>
                <td><?= h($etudiant->code_province_bac) ?></td>
                <td><?= h($etudiant->province_bac_fr) ?></td>
                <td><?= h($etudiant->province_bac_ar) ?></td>
                <td><?= h($etudiant->annee_bac) ?></td>
                <td><?= h($etudiant->code_type_handicap) ?></td>
                <td><?= h($etudiant->type_handicap) ?></td>
                <td><?= h($etudiant->code_type_hebergement) ?></td>
                <td><?= h($etudiant->type_hebergement) ?></td>
                <td><?= h($etudiant->code_situation_familiale) ?></td>
                <td><?= h($etudiant->situation_familiale) ?></td>
                <td><?= h($etudiant->situation_militaire) ?></td>
                <td><?= h($etudiant->categorie_socio_professionnelle) ?></td>
                <td><?= h($etudiant->domaine_activite_professionnelle) ?></td>
                <td><?= h($etudiant->quatite_Travaillee) ?></td>
                <td><?= h($etudiant->profession_pere_fr) ?></td>
                <td><?= h($etudiant->profession_pere_ar) ?></td>
                <td><?= h($etudiant->profession_mere_fr) ?></td>
                <td><?= h($etudiant->profession_mere_ar) ?></td>
                <td><?= h($etudiant->code_province_parents) ?></td>
                <td><?= h($etudiant->province_parents_fr) ?></td>
                <td><?= h($etudiant->province_parents_ar) ?></td>
                <td><?= h($etudiant->annee_sortie) ?></td>
                <td><?= h($etudiant->code_cite_universiatire) ?></td>
                <td><?= h($etudiant->cite_universiatire) ?></td>
                <td><?= h($etudiant->created) ?></td>
                <td><?= h($etudiant->modified) ?></td>
                <td><?= h($etudiant->photo) ?></td>
                <td><?= $this->Number->format($etudiant->validi) ?></td>
                <td><?= $this->Number->format($etudiant->validi_respo) ?></td>
                <td><?= h($etudiant->numero_tel) ?></td>
                <td><?= h($etudiant->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $etudiant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etudiant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etudiant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->id)]) ?>
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
