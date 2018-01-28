<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PontoNotavelVertical Controller
 *
 * @property \App\Model\Table\PontoNotavelVerticalTable $PontoNotavelVertical
 *
 * @method \App\Model\Entity\PontoNotavelVertical[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PontoNotavelVerticalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coordenada', 'Estaca', 'Projeto']
        ];
        $pontoNotavelVertical = $this->paginate($this->PontoNotavelVertical);

        $this->set(compact('pontoNotavelVertical'));
    }

    /**
     * View method
     *
     * @param string|null $id Ponto Notavel Vertical id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pontoNotavelVertical = $this->PontoNotavelVertical->get($id, [
            'contain' => ['Coordenada', 'Estaca', 'Projeto']
        ]);

        $this->set('pontoNotavelVertical', $pontoNotavelVertical);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pontoNotavelVertical = $this->PontoNotavelVertical->newEntity();
        if ($this->request->is('post')) {
            $pontoNotavelVertical = $this->PontoNotavelVertical->patchEntity($pontoNotavelVertical, $this->request->getData());
            if ($this->PontoNotavelVertical->save($pontoNotavelVertical)) {
                $this->Flash->success(__('The ponto notavel vertical has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ponto notavel vertical could not be saved. Please, try again.'));
        }
        $coordenada = $this->PontoNotavelVertical->Coordenada->find('list', ['limit' => 200]);
        $estaca = $this->PontoNotavelVertical->Estaca->find('list', ['limit' => 200]);
        $projeto = $this->PontoNotavelVertical->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('pontoNotavelVertical', 'coordenada', 'estaca', 'projeto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ponto Notavel Vertical id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pontoNotavelVertical = $this->PontoNotavelVertical->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pontoNotavelVertical = $this->PontoNotavelVertical->patchEntity($pontoNotavelVertical, $this->request->getData());
            if ($this->PontoNotavelVertical->save($pontoNotavelVertical)) {
                $this->Flash->success(__('The ponto notavel vertical has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ponto notavel vertical could not be saved. Please, try again.'));
        }
        $coordenada = $this->PontoNotavelVertical->Coordenada->find('list', ['limit' => 200]);
        $estaca = $this->PontoNotavelVertical->Estaca->find('list', ['limit' => 200]);
        $projeto = $this->PontoNotavelVertical->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('pontoNotavelVertical', 'coordenada', 'estaca', 'projeto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ponto Notavel Vertical id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pontoNotavelVertical = $this->PontoNotavelVertical->get($id);
        if ($this->PontoNotavelVertical->delete($pontoNotavelVertical)) {
            $this->Flash->success(__('The ponto notavel vertical has been deleted.'));
        } else {
            $this->Flash->error(__('The ponto notavel vertical could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
