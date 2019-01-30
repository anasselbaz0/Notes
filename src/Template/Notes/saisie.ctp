<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
    body {
        background-color: #FAFAFA;
        margin: 0;
    }
    .choice {
        width: 70%;
        height: auto;
        margin: 40px auto;
        padding: 20px;
        background-color: #E0F8F1;
        border: 1px solid #D8D8D8;
    }
</style>

<br>
<h1>Gestion des notes</h1>
<hr>
<h4>Saisie des notes</h4>
<hr>
<h6>Module : <?= $module->libile ?></h6>
<h6>Element : <?= $element->libile ?></h6>
<hr>

<div id="saisie">
    <table>
        <thead>
            <td>CNE</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Note</td>
            <td>Action</td>
        </thead>
        <tbody>
            <?php
                for ($i=0; $i < sizeof($my_etudiants); $i++) {
                    $et = $my_etudiants[$i];
                    $eter = $my_etudiers[$i];
                    if (isset($my_notes[$i])){
                        $no = $my_notes[$i];
                        echo '<tr>';
                            echo "<td>$et->cne</td>";
                            echo "<td>$et->nom_fr</td>";
                            echo "<td>$et->prenom_fr</td>";
                            echo "<td>$no->note</td>"; ?>
                           <td> <?= $this->Html->link('Modifier', ['action'=>'edit', $no->id], ['class'=>'btn btn-warning']) ?> </td>
                       <?php echo '</tr>';
                    }
                    else { //la note makaynach
                        echo '<tr>';
                            echo "<td>$et->cne</td>";
                            echo "<td>$et->nom_fr</td>";
                            echo "<td>$et->prenom_fr</td>";
                            echo "<td>";
                                echo $this->Form->create(null, [ 'url'=>[ 'action'=>'add' ] ]); ?>
                                    <input type="hidden" name="element_id" value="<?= $element->id ?>">
                                    <input type="hidden" name="etudier_id" value="<?= $eter->id ?>">
                                    <input type="hidden" name="note_ratt" value="">
                                    <input type="hidden" name="confirmed" value="">
                                    <input type="hidden" name="ratt_confirmed" value="0">
                                    <input type="hidden" name="saved" value="">
                                    <input type="hidden" name="ratt_saved" value="0">
                                    <input type="hidden" name="created_at" value="<?= date('d-m-y h:m') ?>">
                                    <input type="hidden" name="updated_at" value="<?= date('d-m-y h:m') ?>">
                                    <div style="width:80%; float:left;"><input type="number" name="note"></div>
                                    <div style="width:19%; float:right;"><input type="submit" value="Noter" class="btn btn-success"></div>
                                <?php echo $this->Form->end();
                            echo "</td>";
                            echo "<td></td>";
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>

