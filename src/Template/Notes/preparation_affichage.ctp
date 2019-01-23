<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    .choice {
        width: 70%;
        height: auto;
        margin: 40px auto;
        padding: 20px;
        background-color: #FAFAFA;
        border: 1px solid #D8D8D8;
    }
</style>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<br>
<h1>Gestion des notes</h1>
<hr>
<h4>Affichage des notes</h4>
<hr>
<h6>Choix des paramètres</h6>
<hr>

<script>
    
</script>

<div>
    <?= $this->Form->create(null, ['url'=>['action'=>'affichage']]); ?>
        <div id="div_filiere" class="choice" >
            <h5>Filière</h5>
                <div style="width: 100%; float: left ;"> <?= $this->Form->select('filiere', $filieres_labels); ?> </div>
        </div>  
        <div id="div_niveau" class="choice" >
            <h5>Niveau</h5>
                <div style="width: 100%; float: left ;"> <?= $this->Form->select('niveau', $niveaux_labels); ?> </div>
        </div> 
        <div id="div_semestre" class="choice" >
            <h5>Semestre</h5>
                <div style="width: 100%; float: left ;"> <?= $this->Form->select('semestre', $semestres_labels); ?> </div>
        </div> 
        <div id="div_module" class="choice" >
            <h5>Module</h5>
                <div style="width: 100%; float: left ;"> <?= $this->Form->select('module', $modules_labels); ?> </div>
        </div> 
        <div id="div_element" class="choice" >
            <h5>Elément de module</h5>  
                <div style="width: 100%; float: left ;"> <?= $this->Form->select('element', $elements_labels); ?> </div>
        </div>
        <div id="div_submit" style="text-align: center;">
            <?= $this->Form->submit('Afficher', ['class'=>'btn btn-success']); ?>
        </div>
    <?= $this->Form->end(); ?>
</div> 

