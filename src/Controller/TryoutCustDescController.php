<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TryoutCustDesc Controller
 *
 * @property \App\Model\Table\TryoutCustDescTable $TryoutCustDesc
 * @method \App\Model\Entity\TryoutCustDesc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TryoutCustDescController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tryoutCustDesc = $this->paginate($this->TryoutCustDesc);

        $this->set(compact('tryoutCustDesc'));
    }

    /**
     * View method
     *
     * @param string|null $id Tryout Cust Desc id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tryoutCustDesc = $this->TryoutCustDesc->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tryoutCustDesc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tryoutCustDesc = $this->TryoutCustDesc->newEmptyEntity();
        if ($this->request->is('post')) {
            $tryoutCustDesc = $this->TryoutCustDesc->patchEntity($tryoutCustDesc, $this->request->getData());
            if ($this->TryoutCustDesc->save($tryoutCustDesc)) {
                $this->Flash->success(__('The tryout cust desc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tryout cust desc could not be saved. Please, try again.'));
        }
        $this->set(compact('tryoutCustDesc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tryout Cust Desc id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tryoutCustDesc = $this->TryoutCustDesc->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tryoutCustDesc = $this->TryoutCustDesc->patchEntity($tryoutCustDesc, $this->request->getData());
            if ($this->TryoutCustDesc->save($tryoutCustDesc)) {
                $this->Flash->success(__('The tryout cust desc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tryout cust desc could not be saved. Please, try again.'));
        }
        $this->set(compact('tryoutCustDesc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tryout Cust Desc id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tryoutCustDesc = $this->TryoutCustDesc->get($id);
        if ($this->TryoutCustDesc->delete($tryoutCustDesc)) {
            $this->Flash->success(__('The tryout cust desc has been deleted.'));
        } else {
            $this->Flash->error(__('The tryout cust desc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
