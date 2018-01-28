<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CurvaVertical Controller
 *
 * @property \App\Model\Table\CurvaVerticalTable $CurvaVertical
 *
 * @method \App\Model\Entity\CurvaVertical[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CurvaVerticalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projeto', 'PontoNotavelVertical', 'Estaca']
        ];
        $curvaVertical = $this->paginate($this->CurvaVertical);

        $this->set(compact('curvaVertical'));
    }

    /**
     * View method
     *
     * @param string|null $id Curva Vertical id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curvaVertical = $this->CurvaVertical->get($id, [
            'contain' => ['Projeto', 'PontoNotavelVertical', 'Estaca']
        ]);

        $this->set('curvaVertical', $curvaVertical);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curvaVertical = $this->CurvaVertical->newEntity();
        if ($this->request->is('post')) {
            $curvaVertical = $this->CurvaVertical->patchEntity($curvaVertical, $this->request->getData());
            if ($this->CurvaVertical->save($curvaVertical)) {
                $this->Flash->success(__('The curva vertical has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curva vertical could not be saved. Please, try again.'));
        }
        $projeto = $this->CurvaVertical->Projeto->find('list', ['limit' => 200]);
        $pontoNotavelVertical = $this->CurvaVertical->PontoNotavelVertical->find('list', ['limit' => 200]);
        $estaca = $this->CurvaVertical->Estaca->find('list', ['limit' => 200]);
        $this->set(compact('curvaVertical', 'projeto', 'pontoNotavelVertical', 'estaca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Curva Vertical id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curvaVertical = $this->CurvaVertical->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curvaVertical = $this->CurvaVertical->patchEntity($curvaVertical, $this->request->getData());
            if ($this->CurvaVertical->save($curvaVertical)) {
                $this->Flash->success(__('The curva vertical has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curva vertical could not be saved. Please, try again.'));
        }
        $projeto = $this->CurvaVertical->Projeto->find('list', ['limit' => 200]);
        $pontoNotavelVertical = $this->CurvaVertical->PontoNotavelVertical->find('list', ['limit' => 200]);
        $estaca = $this->CurvaVertical->Estaca->find('list', ['limit' => 200]);
        $this->set(compact('curvaVertical', 'projeto', 'pontoNotavelVertical', 'estaca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Curva Vertical id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curvaVertical = $this->CurvaVertical->get($id);
        if ($this->CurvaVertical->delete($curvaVertical)) {
            $this->Flash->success(__('The curva vertical has been deleted.'));
        } else {
            $this->Flash->error(__('The curva vertical could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
