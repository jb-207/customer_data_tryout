<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TryoutCustDesc Model
 *
 * @method \App\Model\Entity\TryoutCustDesc newEmptyEntity()
 * @method \App\Model\Entity\TryoutCustDesc newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustDesc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustDesc get($primaryKey, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustDesc[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCustDesc|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCustDesc[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TryoutCustDescTable extends Table
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

        $this->setTable('tryout_cust_desc');
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
            ->nonNegativeInteger('customer_id')
            ->requirePresence('customer_id', 'create')
            ->notEmptyString('customer_id');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
