<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TryoutCust Model
 *
 * @method \App\Model\Entity\TryoutCust newEmptyEntity()
 * @method \App\Model\Entity\TryoutCust newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCust[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCust get($primaryKey, $options = [])
 * @method \App\Model\Entity\TryoutCust findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TryoutCust patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCust[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TryoutCust|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TryoutCust saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TryoutCust[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCust[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCust[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TryoutCust[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TryoutCustTable extends Table
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

        // $this->belongsTo('TryoutCustDesc', [
        //     'foreignKey' => 'id',
        //     'joinType' => 'LEFT',
        // ]);
        
        // $this->belongsTo('TryoutCustKits')
        //     ->setForeignKey('kit_id')
        //     ->setJoinType('LEFT');

        //  $this->hasOne('TryoutCustDesc', [
        //     'foreignKey' => 'customer_id',
        //     'dependent' => true,
        // ]);

         // Association with TryoutCustDesc
         $this->hasOne('TryoutCustDesc', [
            'foreignKey' => 'customer_id',
            'dependent' => true,
        ]);

       // Updated association with TryoutCustKits
        $this->belongsTo('TryoutCustKits', [
            'foreignKey' => 'kit_id', // The foreign key linking TryoutCustKits to TryoutCust
            'joinType' => 'LEFT',
        ]);
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
            ->nonNegativeInteger('kit_id')
            ->requirePresence('kit_id', 'create')
            ->notEmptyString('kit_id');

        $validator
            ->scalar('customer_name')
            ->maxLength('customer_name', 255)
            ->requirePresence('customer_name', 'create')
            ->notEmptyString('customer_name');

        return $validator;
    }
}
