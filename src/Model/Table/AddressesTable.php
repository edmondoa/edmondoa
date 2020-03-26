<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addresses Model
 *
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\Address get($primaryKey, $options = [])
 * @method \App\Model\Entity\Address newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Address[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Address|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Address saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Address patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Address[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Address findOrCreate($search, callable $callback = null, $options = [])
 */
class AddressesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('addresses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'people_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        // $validator
        //     ->scalar('address1')
        //     ->maxLength('address1', 255);
            //->requirePresence('address1', 'create')
            //->notEmptyString('address1');

        // $validator
        //     ->scalar('address2')
        //     ->maxLength('address2', 255);
           // ->requirePresence('address2', 'create')
           // ->notEmptyString('address2');

        // $validator
        //     ->scalar('city')
        //     ->maxLength('city', 255);
           // ->requirePresence('city', 'create')
           // ->notEmptyString('city');

        // $validator
        //     ->scalar('zip')
        //     ->maxLength('zip', 255);
          //  -//>requirePresence('zip', 'create')
            //->notEmptyString('zip');

        // $validator
        //     ->scalar('country')
        //     ->maxLength('country', 255);
            //->requirePresence('country', 'create')
           // ->notEmptyString('country');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['people_id'], 'People'));

        return $rules;
    }
}
