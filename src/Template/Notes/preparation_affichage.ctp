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
<h4>Affichage des notes</h4>
<hr>
<h6>Choix des paramètres</h6>
<hr>
            
        <div id="div_filiere" class="choice" style="display: block">
            <?= $this->Form->create(null, ['url'=>['action'=>'preparationAffichage']]); ?>
            <h5>Filière</h5>
                <div style="width: 79%; float: left ;"> <?= $this->Form->select('filiere', $filieres_labels); ?> </div>
                <button type="submit" id="suivant_f" style="width: 20%; float: right ;" class="btn btn-dark">Suivant</button>
            <?= $this->Form->end(); ?>
        </div>  
        
        <div id="div_niveau" class="choice" style="display: none">
            <?= $this->Form->create(null, ['url'=>['action'=>'preparationAffichage']]); ?>
            <h5>Niveau</h5>
                <div style="width: 79%; float: left ;"> <?= $this->Form->select('niveau', $niveaux_labels); ?> </div>
                <button type="submit" id="suivant_n" style="width: 20%; float: right ;" class="btn btn-dark">Suivant</button>
            <?= $this->Form->end(); ?>
        </div> 
        
        <div id="div_semestre" class="choice" style="display: none">
            <?= $this->Form->create(null, ['url'=>['action'=>'preparationAffichage']]); ?>
            <h5>Semestre</h5>
                <div style="width: 79%; float: left ;"> <?= $this->Form->select('semestre', $semestres_labels); ?> </div>
                <button type="submit" id="suivant_s" style="width: 20%; float: right ;" class="btn btn-dark">Suivant</button>
            <?= $this->Form->end(); ?>
        </div> 
        <div id="div_module" class="choice" style="display: none">
            <?= $this->Form->create(null, ['url'=>['action'=>'preparationAffichage']]); ?>
            <h5>Module</h5>
                <div style="width: 79%; float: left ;"> <?= $this->Form->select('module', $modules_labels); ?> </div>
                <button type="submit" id="suivant_m" style="width: 20%; float: right ;" class="btn btn-dark">Suivant</button>
            <?= $this->Form->end(); ?>
        </div> 
        <div id="div_element" class="choice" style="display: none">
            <?= $this->Form->create(null, ['url'=>['action'=>'preparationAffichage']]); ?>
            <h5>Elément de module</h5>  
                <div style="width: 79%; float: left ;"> <?= $this->Form->select('element', $elements_labels); ?> </div>
                <button type="submit" id="suivant_e" style="width: 20%; float: right ;" class="btn btn-dark">Suivant</button>
            <?= $this->Form->end(); ?>
        </div>
        <div id="div_submit" style="text-align: center;display: none">
            <?= $this->Form->submit('Afficher', ['class'=>'btn btn-success']); ?>
        </div>
    <?= $this->Form->end(); ?>
 

<script>
    var etape = <?php echo $etape ?>;
    console.log(etape);
    switch (etape) {
        case 1:
            document.getElementById('div_niveau').style.display = 'block';
            document.getElementById('suivant_f').style.display = 'none';
            break;
        case 2:
            document.getElementById('div_niveau').style.display = 'block';
            document.getElementById('div_semestre').style.display = 'block';
            document.getElementById('suivant_f').style.display = 'none';
            document.getElementById('suivant_n').style.display = 'none';
            break;
        case 3:
            document.getElementById('div_niveau').style.display = 'block';
            document.getElementById('div_semestre').style.display = 'block';
            document.getElementById('div_module').style.display = 'block';
            document.getElementById('suivant_f').style.display = 'none';
            document.getElementById('suivant_n').style.display = 'none';
            document.getElementById('suivant_s').style.display = 'none';
            
            break;
        case 4:
            document.getElementById('div_element').style.display = 'block';
            document.getElementById('div_niveau').style.display = 'block';
            document.getElementById('div_semestre').style.display = 'block';
            document.getElementById('div_module').style.display = 'block';
            document.getElementById('suivant_f').style.display = 'none';
            document.getElementById('suivant_n').style.display = 'none';
            document.getElementById('suivant_s').style.display = 'none';
            document.getElementById('suivant_m').style.display = 'none';
            break;
        case 5:
            document.getElementById('div_submit').style.display = 'block';
            document.getElementById('div_element').style.display = 'block';
            document.getElementById('div_niveau').style.display = 'block';
            document.getElementById('div_semestre').style.display = 'block';
            document.getElementById('div_module').style.display = 'block';
            document.getElementById('suivant_f').style.display = 'none';
            document.getElementById('suivant_n').style.display = 'none';
            document.getElementById('suivant_s').style.display = 'none';
            document.getElementById('suivant_m').style.display = 'none';
            document.getElementById('suivant_e').style.display = 'none';
            break;
        default:
            break;
    }
</script>