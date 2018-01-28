<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trecho Controller
 *
 * @property \App\Model\Table\TrechoTable $Trecho
 *
 * @method \App\Model\Entity\Trecho[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrechoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PontoNotavelHorizontal', 'Estaca', 'Projeto']
        ];
        $trecho = $this->paginate($this->Trecho);

        $this->set(compact('trecho'));
    }

    /**
     * View method
     *
     * @param string|null $id Trecho id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trecho = $this->Trecho->get($id, [
            'contain' => ['PontoNotavelHorizontal', 'Estaca', 'Projeto']
        ]);

        $this->set('trecho', $trecho);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trecho = $this->Trecho->newEntity();
        if ($this->request->is('post')) {
            $trecho = $this->Trecho->patchEntity($trecho, $this->request->getData());
            if ($this->Trecho->save($trecho)) {
                $this->Flash->success(__('The trecho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trecho could not be saved. Please, try again.'));
        }
        $pontoNotavelHorizontal = $this->Trecho->PontoNotavelHorizontal->find('list', ['limit' => 200]);
        $estaca = $this->Trecho->Estaca->find('list', ['limit' => 200]);
        $projeto = $this->Trecho->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('trecho', 'pontoNotavelHorizontal', 'estaca', 'projeto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trecho id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trecho = $this->Trecho->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trecho = $this->Trecho->patchEntity($trecho, $this->request->getData());
            if ($this->Trecho->save($trecho)) {
                $this->Flash->success(__('The trecho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trecho could not be saved. Please, try again.'));
        }
        $pontoNotavelHorizontal = $this->Trecho->PontoNotavelHorizontal->find('list', ['limit' => 200]);
        $estaca = $this->Trecho->Estaca->find('list', ['limit' => 200]);
        $projeto = $this->Trecho->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('trecho', 'pontoNotavelHorizontal', 'estaca', 'projeto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trecho id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trecho = $this->Trecho->get($id);
        if ($this->Trecho->delete($trecho)) {
            $this->Flash->success(__('The trecho has been deleted.'));
        } else {
            $this->Flash->error(__('The trecho could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
