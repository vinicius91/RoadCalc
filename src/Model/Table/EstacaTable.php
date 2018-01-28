<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estaca Model
 *
 * @property \App\Model\Table\CoordenadaTable|\Cake\ORM\Association\BelongsTo $Coordenada
 * @property \App\Model\Table\ProjetoTable|\Cake\ORM\Association\BelongsTo $Projeto
 * @property \App\Model\Table\PontoNotavelVericalTable|\Cake\ORM\Association\HasMany $PontoNotavelVerical
 *
 * @method \App\Model\Entity\Estaca get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estaca newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estaca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estaca|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estaca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estaca[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estaca findOrCreate($search, callable $callback = null, $options = [])
 */
class EstacaTable extends Table
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

        $this->setTable('estaca');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Coordenada', [
            'foreignKey' => 'coordenada_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projeto', [
            'foreignKey' => 'projeto_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('PontoNotavelVerical', [
            'foreignKey' => 'estaca_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->numeric('intermediario')
            ->requirePresence('intermediario', 'create')
            ->notEmpty('intermediario');

        $validator
            ->allowEmpty('relatorio');

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
        $rules->add($rules->existsIn(['coordenada_id'], 'Coordenada'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projeto'));

        return $rules;
    }
}
