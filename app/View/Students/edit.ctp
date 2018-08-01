<div align="center" ">
    <div class="card border-primary mb-3" style="max-width: 25rem;">
        <div class="card-header">Modifier un étudiant</div>
            <div class="card-body text-primary">
                <?php
                    echo $this->Form->create('Student');
                    echo $this->Form->input('first_name', array(
                        'label' => 'Prénom',
                        'required'   => true,
                        'allowEmpty' => false
                    ));
                    echo $this->Form->input('last_name', array(
                        'label' => 'Nom',
                        'required'   => true,
                        'allowEmpty' => false
                    ));
                    echo $this->Form->input('birtday', array(
                        'label' => 'Date de naissance',
                        'dateFormat' => 'DMY',
                        'minYear' => date('Y') - 50,
                        'maxYear' => date('Y') - 15
                    ));
                ?>
            <div class="card-footer">
                <?= $this->Form->end('Enregister');?>    </div>
           </div>
    </div>

    <p class="btn btn-primary"><?= $this->Html->link('Retour à la liste', array('action' => 'index'));?></p>

</div>
