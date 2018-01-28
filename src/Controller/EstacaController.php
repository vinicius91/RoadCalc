<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estaca Controller
 *
 * @property \App\Model\Table\EstacaTable $Estaca
 *
 * @method \App\Model\Entity\Estaca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstacaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coordenada', 'Projeto']
        ];
        $estaca = $this->paginate($this->Estaca);

        $this->set(compact('estaca'));
    }

    /**
     * View method
     *
     * @param string|null $id Estaca id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estaca = $this->Estaca->get($id, [
            'contain' => ['Coordenada', 'Projeto', 'PontoNotavelVerical']
        ]);

        $this->set('estaca', $estaca);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estaca = $this->Estaca->newEntity();
        if ($this->request->is('post')) {
            $estaca = $this->Estaca->patchEntity($estaca, $this->request->getData());
            if ($this->Estaca->save($estaca)) {
                $this->Flash->success(__('The estaca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estaca could not be saved. Please, try again.'));
        }
        $coordenada = $this->Estaca->Coordenada->find('list', ['limit' => 200]);
        $projeto = $this->Estaca->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('estaca', 'coordenada', 'projeto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estaca id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estaca = $this->Estaca->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estaca = $this->Estaca->patchEntity($estaca, $this->request->getData());
            if ($this->Estaca->save($estaca)) {
                $this->Flash->success(__('The estaca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estaca could not be saved. Please, try again.'));
        }
        $coordenada = $this->Estaca->Coordenada->find('list', ['limit' => 200]);
        $projeto = $this->Estaca->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('estaca', 'coordenada', 'projeto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estaca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estaca = $this->Estaca->get($id);
        if ($this->Estaca->delete($estaca)) {
            $this->Flash->success(__('The estaca has been deleted.'));
        } else {
            $this->Flash->error(__('The estaca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
