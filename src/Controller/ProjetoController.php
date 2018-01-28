<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projeto Controller
 *
 * @property \App\Model\Table\ProjetoTable $Projeto
 *
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClasseProjeto']
        ];
        $projeto = $this->paginate($this->Projeto);

        $this->set(compact('projeto'));
    }

    /**
     * View method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projeto = $this->Projeto->get($id, [
            'contain' => ['ClasseProjeto', 'CurvaHorizontal', 'CurvaVertical', 'Estaca', 'PontoNotavelHorizontal', 'PontoNotavelVerical', 'Trecho']
        ]);

        $this->set('projeto', $projeto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projeto = $this->Projeto->newEntity();
        if ($this->request->is('post')) {
            $projeto = $this->Projeto->patchEntity($projeto, $this->request->getData());
            if ($this->Projeto->save($projeto)) {
                $this->Flash->success(__('The projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projeto could not be saved. Please, try again.'));
        }
        $classeProjeto = $this->Projeto->ClasseProjeto->find('list', ['limit' => 200]);
        $this->set(compact('projeto', 'classeProjeto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projeto = $this->Projeto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projeto = $this->Projeto->patchEntity($projeto, $this->request->getData());
            if ($this->Projeto->save($projeto)) {
                $this->Flash->success(__('The projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projeto could not be saved. Please, try again.'));
        }
        $classeProjeto = $this->Projeto->ClasseProjeto->find('list', ['limit' => 200]);
        $this->set(compact('projeto', 'classeProjeto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projeto = $this->Projeto->get($id);
        if ($this->Projeto->delete($projeto)) {
            $this->Flash->success(__('The projeto has been deleted.'));
        } else {
            $this->Flash->error(__('The projeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
