<div align="center" ">
    <h2>Liste des étudiants</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr align="center">
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($students) :
            foreach ($students as $student) : ?>
                <tr align="center">
                    <td> <?= $student['Student']['first_name']; ?> </td>
                    <td> <?= $student['Student']['last_name']; ?> </td>
                    <td> <?= $this->Time->format('d/m/Y', $student['Student']['birtday']); ?> </td>
                    <td>
                        <p class="btn btn-primary"><?= $this->Html->link('Notes', '/notes/'.$student['Student']['id'],
                                array('class' => 'btn-link',)); ?></p>
                        <p class="btn btn-primary"><?= $this->Html->link('Editer', '/editer/'.$student['Student']['id'],
                                array('class' => 'btn-link')); ?></p>
                        <p class="btn btn-danger"><?= $this->Html->link('Supprimer',
                                array('action' => 'delete', $student['Student']['id']),
                                array('class' => 'btn-link')); ?></p>
                    </td>
                </tr>
            <?php endforeach;
        else: ?>
            <tr align="center">
                <td>Aucun élève dans la liste</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <p class="btn btn-dark"><?= $this->Html->link('Ajouter un étudiant', '/ajouter',
            array('class' => 'btn-link',));
    ?></p>

</div>


