<div align="center" ">
    <div class="card border-primary mb-3" style="max-width: 25rem;">
        <div class="card-header">Ajouter une Note à
            <?= $student['Student']['first_name'];?>
            <?= $student['Student']['last_name'];?>
        </div>
            <div class="card-body text-primary">
                <?php
                    echo $this->Form->create('Note');
                    echo $this->Form->input('discipline', array(
                        'label' => 'Matière',
                        'required'   => true,
                        'allowEmpty' => false
                    ));
                    echo $this->Form->input('note', array(
                        'label' => 'Note',
                        'required'   => true,
                        'allowEmpty' => false,
                        'min' => 0,
                        'max' => 20
                    ));
                     echo  $this->Form->hidden( 'student_id', array( 'value' => $studentId ) );
                ?>
                <div class="card-footer">
                    <?= $this->Form->end('Enregister');?>
                </div>
           </div>
    </div>

    <p class="btn btn-primary"><?= $this->Html->link('Retour à la liste', array(
        'controller' => 'Students',
        'action' => 'index'));?>
    </p>

</div>
