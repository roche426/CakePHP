<div align="center" ">
    <h2>Bulletin de notes
        <?= $student['Student']['first_name']?>
        <?= $student['Student']['last_name']?>
    </h2>
<table class="table">
  <thead class="thead-dark">
    <tr align="center">
      <th scope="col">Matière</th>
      <th scope="col">Note</th>
    </tr>
  </thead>
  <tbody>
  <?php
foreach ($notes as $note) : ?>
  <tr align="center">

      <td> <?= $note['discipline'];?> </td>
      <td> <?=$note['note'];?> </td>
  </tr>
 <?php endforeach; ?>

  </tbody>
</table>

<p class="btn btn-danger"><?= $this->Html->link('Ajouter une note', array('controller' => 'Notes','action' => 'add', $student['Student']['id'])
    );?></p>
<p class="btn btn-danger"><?= $this->Html->link('Retour à la liste', array('action' => 'index'));?></p>
</div>


