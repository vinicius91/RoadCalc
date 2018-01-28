<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClasseProjeto Controller
 *
 * @property \App\Model\Table\ClasseProjetoTable $ClasseProjeto
 *
 * @method \App\Model\Entity\ClasseProjeto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClasseProjetoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $classeProjeto = $this->paginate($this->ClasseProjeto);

        $this->set(compact('classeProjeto'));
    }

    /**
     * View method
     *
     * @param string|null $id Classe Projeto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classeProjeto = $this->ClasseProjeto->get($id, [
            'contain' => ['Projeto']
        ]);

        $this->set('classeProjeto', $classeProjeto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classeProjeto = $this->ClasseProjeto->newEntity();
        if ($this->request->is('post')) {
            $classeProjeto = $this->ClasseProjeto->patchEntity($classeProjeto, $this->request->getData());
            if ($this->ClasseProjeto->save($classeProjeto)) {
                $this->Flash->success(__('The classe projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classe projeto could not be saved. Please, try again.'));
        }
        $this->set(compact('classeProjeto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Classe Projeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classeProjeto = $this->ClasseProjeto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classeProjeto = $this->ClasseProjeto->patchEntity($classeProjeto, $this->request->getData());
            if ($this->ClasseProjeto->save($classeProjeto)) {
                $this->Flash->success(__('The classe projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classe projeto could not be saved. Please, try again.'));
        }
        $this->set(compact('classeProjeto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Classe Projeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classeProjeto = $this->ClasseProjeto->get($id);
        if ($this->ClasseProjeto->delete($classeProjeto)) {
            $this->Flash->success(__('The classe projeto has been deleted.'));
        } else {
            $this->Flash->error(__('The classe projeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
