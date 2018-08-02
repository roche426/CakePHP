<?php

class NotesController extends AppController
{
    public function add($id)
    {
        $this->loadModel('Student');

        $this->set('studentId', $id);
        $this->set('student', $this->Student->findById($id));


        if ($this->request->is('post')) {

            $this->Note->create();

            $this->Note->save($this->request->data);

            if ($this->Note->save($this->request->data)) {

                $this->Flash->default('La note a été ajoutée');
                return $this->redirect('/');
            }

            $this->Flash->error(('Impossible d\'ajouter la note'));
        }
    }
}
