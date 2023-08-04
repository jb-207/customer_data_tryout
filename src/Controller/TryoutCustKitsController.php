<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TryoutCustKit Controller
 *
 * @property \App\Model\Table\TryoutCustKitTable $TryoutCustKit
 * @method \App\Model\Entity\TryoutCustKit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TryoutCustKitsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $tryoutCustKits = $this->paginate($this->TryoutCustKits);

        // $this->set(compact('tryoutCustKits'));

         // Fetch all kits and related data
         $tryoutCustKits = $this->TryoutCustKits->find('all');

         // Pass data to the view
         $this->set('tryoutCustKits', $tryoutCustKits);
    }

    /**
     * View method
     *
     * @param string|null $id Tryout Cust Kit id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tryoutCustKit = $this->TryoutCustKits->get($id);
        $this->set(compact('tryoutCustKit'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tryoutCustKit = $this->TryoutCustKits->newEmptyEntity();
        if ($this->request->is('post')) {
            $kitId = $this->request->getData('kit_id');
            
            // Check if the kit ID already exists in the database
            $existingKit = $this->TryoutCustKits->find()->where(['kit_id' => $kitId])->first();
            
            if ($existingKit) {
                $this->Flash->error(__('The kit ID already exists. Please enter a different kit ID.'));
            } else {
                $tryoutCustKit = $this->TryoutCustKits->patchEntity($tryoutCustKit, $this->request->getData());
                if ($this->TryoutCustKits->save($tryoutCustKit)) {
                    $this->Flash->success(__('The kit ID has been added successfully.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add the kit ID. Please, try again.'));
            }
        }
        $this->set(compact('tryoutCustKit'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tryout Cust Kit id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tryoutCustKit = $this->TryoutCustKit->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tryoutCustKit = $this->TryoutCustKit->patchEntity($tryoutCustKit, $this->request->getData());
            if ($this->TryoutCustKit->save($tryoutCustKit)) {
                $this->Flash->success(__('The tryout cust kit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tryout cust kit could not be saved. Please, try again.'));
        }
        $this->set(compact('tryoutCustKit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tryout Cust Kit id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tryoutCustKit = $this->TryoutCustKit->get($id);
        if ($this->TryoutCustKit->delete($tryoutCustKit)) {
            $this->Flash->success(__('The tryout cust kit has been deleted.'));
        } else {
            $this->Flash->error(__('The tryout cust kit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
