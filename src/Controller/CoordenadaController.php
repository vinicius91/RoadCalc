<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coordenada Controller
 *
 * @property \App\Model\Table\CoordenadaTable $Coordenada
 *
 * @method \App\Model\Entity\Coordenada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoordenadaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $coordenada = $this->paginate($this->Coordenada);

        $this->set(compact('coordenada'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordenada id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordenada = $this->Coordenada->get($id, [
            'contain' => ['Estaca', 'PontoNotavelHorizontal', 'PontoNotavelVerical']
        ]);

        $this->set('coordenada', $coordenada);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordenada = $this->Coordenada->newEntity();
        if ($this->request->is('post')) {
            $coordenada = $this->Coordenada->patchEntity($coordenada, $this->request->getData());
            if ($this->Coordenada->save($coordenada)) {
                $this->Flash->success(__('The coordenada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordenada could not be saved. Please, try again.'));
        }
        $this->set(compact('coordenada'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordenada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordenada = $this->Coordenada->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordenada = $this->Coordenada->patchEntity($coordenada, $this->request->getData());
            if ($this->Coordenada->save($coordenada)) {
                $this->Flash->success(__('The coordenada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordenada could not be saved. Please, try again.'));
        }
        $this->set(compact('coordenada'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordenada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordenada = $this->Coordenada->get($id);
        if ($this->Coordenada->delete($coordenada)) {
            $this->Flash->success(__('The coordenada has been deleted.'));
        } else {
            $this->Flash->error(__('The coordenada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
