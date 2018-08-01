<div align="center" ">
    <h2>Liste des élèves</h2>
</div>
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
          <td> <?= $student['Student']['first_name'];?> </td>
          <td> <?= $student['Student']['last_name'];?> </td>
          <td> <?= $student['Student']['birtday'];?> </td>
          <td>
              <p class="btn btn-danger"><?= $this->Html->link('Editer', array('action' => 'edit', $student['Student']['id'])); ?></p>
              <p class="btn btn-danger"><?= $this->Html->link('Supprimer', array('action' => 'delete', $student['Student']['id'])); ?></p>
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

<p class="btn btn-danger"><?= $this->Html->link('Ajouter', array('action' => 'add'));?></p>


