<?php
declare(strict_types=1);

namespace App\Controller;
use App\Controller\AppController;

/**
 * TryoutCust Controller
 *
 * @property \App\Model\Table\TryoutCustTable $TryoutCust
 * @method \App\Model\Entity\TryoutCust[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TryoutCustController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('TryoutCustKits');
        $this->loadModel('TryoutCustDesc');

    }

    public function index()
    {
        // Method 1
        // $this->paginate = [
        //     'contain' => ['TryoutCustKits', 'TryoutCustDesc'],
        //     'limit' => 10, // Number of records per page
        // ];
        // $tryoutCust = $this->paginate($this->TryoutCust);

        // $this->loadModel('TryoutCust');
        // $query = $this->TryoutCust->find();
        // // $tryoutCust = $this->TryoutCust->find('all')->contain(['TryoutCustKits']);

        // // Check if search query is provided
        // if ($this->request->getQuery('search')) {
        //     $searchTerm = $this->request->getQuery('search');
        //     $query->where(['customer_name LIKE' => "%$searchTerm%"]);
        // } else {
            
        // }

        // // debug($query->sql()); // Debug the query results
        // // debug($query->toArray()); // Debug the query results
        
        // $data = $query->contain(['TryoutCustDesc', 'TryoutCustKits']);
        // $this->set('data', $data);

        // $this->set(compact('tryoutCust'));



        // Method 2
        // $this->paginate = [
        //     'contain' => ['TryoutCustKits', 'TryoutCustDesc'],
        //     'limit' => 10, // Number of records per page
        // ];

        // $tryoutCust = $this->paginate($this->TryoutCust);

        // $this->set(compact('tryoutCust'));




        // Method 3
        $query = $this->TryoutCust->find('all', [
            'contain' => ['TryoutCustKits', 'TryoutCustDesc'],
        ]);

        // Handle search query if provided
        $search = $this->request->getQuery('search');
        if ($search) {
            $query->where(['customer_name LIKE' => "%$search%"]);

            // $query->where([
            //     'OR' => [
            //         'TryoutCust.customer_name LIKE' => "%$search%",
            //         'TryoutCustKits.kit_id LIKE' => "%$search%",
            //         'TryoutCustDesc.description LIKE' => "%$search%",
            //     ],
            // ]);
        }

        // Set up pagination
        $this->paginate = [
            'query' => $query, // Use the modified query for pagination
            'limit' => 10,
        ];

        $tryoutCust = $this->paginate($query);

        $this->set(compact('tryoutCust'));
        $this->set('search', $search);

    }

    /**
     * View method
     *
     * @param string|null $id Tryout Cust id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('TryoutCust');
        $customer = $this->TryoutCust->get($id, ['contain' => ['TryoutCustDesc', 'TryoutCustKits']]);
        $this->set('customer', $customer);

        // $this->set(compact('tryoutCust'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tryoutCust = $this->TryoutCust->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            // Validate the required fields
            if (empty($data['customer_name']) || empty($data['description']) || empty($data['kit_id'])) {
                $this->Flash->error(__('Please fill in all the required fields.'));
            } else {
                // Save the new customer data and its description
                $tryoutCust = $this->TryoutCust->patchEntity($tryoutCust, $data);
                $tryoutCustDesc = $this->TryoutCustDesc->newEmptyEntity(['associated' => ['TryoutCust']]);
                $tryoutCustDesc->description = $data['description'];
                $tryoutCust->tryout_cust_desc = $tryoutCustDesc;

                if ($this->TryoutCust->save($tryoutCust, ['associated' => ['TryoutCustDesc']])) {
                    $this->Flash->success(__('The new customer has been added successfully.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add the new customer. Please, try again.'));
            }
        }

        // Fetch all existing kit IDs to populate the kit ID selection field
        $existingKitIds = $this->TryoutCustKits->find('list', ['keyField' => 'id', 'valueField' => 'kit_id'])->toArray();
        
        $this->set(compact('tryoutCust', 'existingKitIds'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tryout Cust id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->TryoutCust->get($id, [
            'contain' => ['TryoutCustKits', 'TryoutCustDesc'],
        ]);

        // Fetch tryout_cust_kits data and prepare options for kit_id select input
        $tryoutCustKits = $this->TryoutCust->TryoutCustKits->find('list', [
            'keyField' => 'id',
            'valueField' => 'kit_name', // Adjust this to the desired field to be displayed in the select options
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            // Debugging: Display the data received from the form
            // debug($this->request->getData());

            $customer = $this->TryoutCust->patchEntity($customer, $this->request->getData(), [
                'associated' => ['TryoutCustKits', 'TryoutCustDesc'],
            ]);
            if ($this->TryoutCust->save($customer, ['associated' => ['TryoutCustKits', 'TryoutCustDesc']])) {
                $this->Flash->success(__('The customer has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the customer. Please, try again.'));
        }

        // Fetch all existing kit IDs to populate the kit ID selection field
        $existingKitIds = $this->TryoutCustKits->find('list', ['keyField' => 'id', 'valueField' => 'kit_id'])->toArray();

        // Fetch all available kit IDs to populate the kit ID selection field
        $availableKitIds = $this->TryoutCustKits->find('list', ['keyField' => 'id', 'valueField' => 'kit_id'])
            ->where(function ($query) use ($existingKitIds) {
                if (!empty($existingKitIds)) {
                    return $query->notIn('id', array_keys($existingKitIds));
                }
                return $query;
            })
            ->toArray();

        $this->set(compact('customer','existingKitIds','availableKitIds'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tryout Cust id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $customer = $this->TryoutCust->get($id);
        if ($this->request->is(['post', 'delete'])) {
            if ($this->TryoutCust->delete($customer)) {
                $this->Flash->success(__('The customer has been deleted.'));
            } else {
                $this->Flash->error(__('Unable to delete the customer. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }

        // Set a variable to indicate that a modal should be rendered
        $this->set('modal', true);
        $this->set(compact('customer'));
    }
}
