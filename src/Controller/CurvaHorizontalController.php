<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CurvaHorizontal Controller
 *
 * @property \App\Model\Table\CurvaHorizontalTable $CurvaHorizontal
 *
 * @method \App\Model\Entity\CurvaHorizontal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CurvaHorizontalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projeto', 'Trecho', 'Estaca']
        ];
        $curvaHorizontal = $this->paginate($this->CurvaHorizontal);

        $this->set(compact('curvaHorizontal'));
    }

    /**
     * View method
     *
     * @param string|null $id Curva Horizontal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curvaHorizontal = $this->CurvaHorizontal->get($id, [
            'contain' => ['Projeto', 'Trecho', 'Estaca']
        ]);

        $this->set('curvaHorizontal', $curvaHorizontal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curvaHorizontal = $this->CurvaHorizontal->newEntity();
        if ($this->request->is('post')) {
            $curvaHorizontal = $this->CurvaHorizontal->patchEntity($curvaHorizontal, $this->request->getData());
            if ($this->CurvaHorizontal->save($curvaHorizontal)) {
                $this->Flash->success(__('The curva horizontal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curva horizontal could not be saved. Please, try again.'));
        }
        $projeto = $this->CurvaHorizontal->Projeto->find('list', ['limit' => 200]);
        $trecho = $this->CurvaHorizontal->Trecho->find('list', ['limit' => 200]);
        $estaca = $this->CurvaHorizontal->Estaca->find('list', ['limit' => 200]);
        $this->set(compact('curvaHorizontal', 'projeto', 'trecho', 'estaca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Curva Horizontal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curvaHorizontal = $this->CurvaHorizontal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curvaHorizontal = $this->CurvaHorizontal->patchEntity($curvaHorizontal, $this->request->getData());
            if ($this->CurvaHorizontal->save($curvaHorizontal)) {
                $this->Flash->success(__('The curva horizontal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curva horizontal could not be saved. Please, try again.'));
        }
        $projeto = $this->CurvaHorizontal->Projeto->find('list', ['limit' => 200]);
        $trecho = $this->CurvaHorizontal->Trecho->find('list', ['limit' => 200]);
        $estaca = $this->CurvaHorizontal->Estaca->find('list', ['limit' => 200]);
        $this->set(compact('curvaHorizontal', 'projeto', 'trecho', 'estaca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Curva Horizontal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curvaHorizontal = $this->CurvaHorizontal->get($id);
        if ($this->CurvaHorizontal->delete($curvaHorizontal)) {
            $this->Flash->success(__('The curva horizontal has been deleted.'));
        } else {
            $this->Flash->error(__('The curva horizontal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
