<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * People Controller
 *
 * @property \App\Model\Table\PeopleTable $People
 *
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeopleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $people = $this->paginate($this->People->find('all',[
            'contain' => ['Addresses', 'Phones'],
        ]));

        $this->set(compact('people'));
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $person = $this->People->get($id, [
            'contain' => ['Addresses', 'Phones'],
        ]);

        $this->set('person', $person);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $person = $this->People->newEntity();
        $address = $this->People->Addresses->newEntity();
        $phones = $this->People->Phones->newEntity();
        if ($this->request->is('post')) {
            $person = $this->People->patchEntity($person, $this->request->getData());
            $address = $this->People->Addresses->patchEntity($address, $this->request->getData());
            $phones = $this->People->Phones->patchEntity($phones, $this->request->getData());

            try{
                $this->transaction();
                $person = $this->People->save($person);
                $address->people_id = $person->id;
                $phones->people_id = $person->id;
                $this->People->Addresses->save($address);
                $this->People->Phones->save($phones);
                $this->transaction(true);
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }catch(Exception $e){
                $this->transaction(false);
                
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
            
        }
        $this->set(compact('person'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $person = $this->People->get($id, [
            'contain' => ['Addresses', 'Phones'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personData = $this->People->patchEntity($person, $this->request->getData());
            $phonesData = $this->People->Phones->patchEntity($person->phones[0], $this->request->getData());
            $addressData = $this->People->Addresses->patchEntity($person->addresses[0], $this->request->getData());
            try{
                $this->transaction();
                $this->People->save($personData);
                $addressData->id = $person->addresses[0]->id;
                $phonesData->id = $person->phones[0]->id;
                $this->People->Addresses->save($addressData);
                $this->People->Phones->save($phonesData);
                $this->transaction(true);
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }catch(Exception $e){
                $this->transaction(false);
                
            }
            
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
        $this->set(compact('person'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->People->get($id);
        if ($this->People->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
