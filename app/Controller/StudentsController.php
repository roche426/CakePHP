<?php

class StudentsController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->set('students', $this->Student->find('all'));
    }

    public function add()
    {
        if ($this->request->is('post')) {

            $this->Student->create();

            if ($this->Student->save($this->request->data)) {
                $this->Flash->default('L\'étudiant à été ajouté à la liste');
                return $this->redirect(array('action' => 'index'));
            }

            $this->Flash->error(('Impossible d\'ajouter l\'étudiant'));
        }
    }

    public function delete($id)
    {

        if ($this->Student->delete($id)) {

            $this->Flash->default('L\'étudiant à été supprimé');
            $this->redirect(array('action' => 'index'));
        }

        $this->Flash->error('La suppression de l\'étudiant à échoué');
    }

    public function edit($id)
    {
        $student = $this->Student->findById($id);

        if ($this->request->is(array('post'))) {

            $this->Student->id = $id;
            if ($this->Student->save($this->request->data)) {
                $this->Flash->default(__('L\'étudiant à été modifié'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error('Impossible de modifier les informations de l\étudiant');

        }

        if (!$this->request->data) {
            $this->request->data = $student;
        }

    }

    public function note($id)
    {
        $student = $this->Student->findById($id);
        $notes = $student['Note'];
        $this->set('student', $student);
        $this->set('notes', $notes);
    }
}
