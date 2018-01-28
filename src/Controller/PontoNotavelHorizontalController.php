<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PontoNotavelHorizontal Controller
 *
 * @property \App\Model\Table\PontoNotavelHorizontalTable $PontoNotavelHorizontal
 *
 * @method \App\Model\Entity\PontoNotavelHorizontal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PontoNotavelHorizontalController extends AppController
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
        $pontoNotavelHorizontal = $this->paginate($this->PontoNotavelHorizontal);

        $this->set(compact('pontoNotavelHorizontal'));
    }

    /**
     * View method
     *
     * @param string|null $id Ponto Notavel Horizontal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pontoNotavelHorizontal = $this->PontoNotavelHorizontal->get($id, [
            'contain' => ['Coordenada', 'Projeto']
        ]);

        $this->set('pontoNotavelHorizontal', $pontoNotavelHorizontal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pontoNotavelHorizontal = $this->PontoNotavelHorizontal->newEntity();
        if ($this->request->is('post')) {
            $pontoNotavelHorizontal = $this->PontoNotavelHorizontal->patchEntity($pontoNotavelHorizontal, $this->request->getData());
            if ($this->PontoNotavelHorizontal->save($pontoNotavelHorizontal)) {
                $this->Flash->success(__('The ponto notavel horizontal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ponto notavel horizontal could not be saved. Please, try again.'));
        }
        $coordenada = $this->PontoNotavelHorizontal->Coordenada->find('list', ['limit' => 200]);
        $projeto = $this->PontoNotavelHorizontal->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('pontoNotavelHorizontal', 'coordenada', 'projeto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ponto Notavel Horizontal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pontoNotavelHorizontal = $this->PontoNotavelHorizontal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pontoNotavelHorizontal = $this->PontoNotavelHorizontal->patchEntity($pontoNotavelHorizontal, $this->request->getData());
            if ($this->PontoNotavelHorizontal->save($pontoNotavelHorizontal)) {
                $this->Flash->success(__('The ponto notavel horizontal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ponto notavel horizontal could not be saved. Please, try again.'));
        }
        $coordenada = $this->PontoNotavelHorizontal->Coordenada->find('list', ['limit' => 200]);
        $projeto = $this->PontoNotavelHorizontal->Projeto->find('list', ['limit' => 200]);
        $this->set(compact('pontoNotavelHorizontal', 'coordenada', 'projeto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ponto Notavel Horizontal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pontoNotavelHorizontal = $this->PontoNotavelHorizontal->get($id);
        if ($this->PontoNotavelHorizontal->delete($pontoNotavelHorizontal)) {
            $this->Flash->success(__('The ponto notavel horizontal has been deleted.'));
        } else {
            $this->Flash->error(__('The ponto notavel horizontal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
