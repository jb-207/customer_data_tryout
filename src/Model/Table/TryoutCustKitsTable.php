<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TryoutCustKit Model
 *
 * @method \App\Model\Entity\TryoutCustKit newEmptyEntity()
 * @method \App\Model\Entity\TryoutCustKit newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustKit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustKit get($primaryKey, $options = [])
 * @method \App\Model\Entity\TryoutCustKit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TryoutCustKit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustKit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustKit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TryoutCustKit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TryoutCustKit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCustKit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCustKit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCustKit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TryoutCustKitsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tryout_cust_kits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('kit_id')
            ->maxLength('kit_id', 100)
            ->requirePresence('kit_id', 'create')
            ->notEmptyString('kit_id')
            ->add('kit_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['kit_id']), ['errorField' => 'kit_id']);

        return $rules;
    }
}
