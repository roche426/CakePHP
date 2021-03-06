<div align="center">
    <h2>Bulletin de notes
        <?= $student['Student']['first_name'] ?>
        <?= $student['Student']['last_name'] ?>
    </h2>

    <table class="table">
        <thead class="thead-dark">
        <tr align="center">
            <th scope="col">Matière</th>
            <th scope="col">Note</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($notes as $note) : ?>
            <tr align="center">
                <td> <?= $note['discipline']; ?> </td>
                <td> <?= $note['note']; ?> </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <p class="btn btn-dark"><?= $this->Html->link('Ajouter une note', '/note/ajouter/'.$student['Student']['id'],
            array('class' => 'btn-link')); ?></p>
    <p class="btn btn-primary"><?= $this->Html->link('Retour à la liste', '/',
            array('class' => 'btn-link')); ?>
    </p>
</div>


