<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PontoNotavelHorizontal Model
 *
 * @property \App\Model\Table\CoordenadaTable|\Cake\ORM\Association\BelongsTo $Coordenada
 * @property \App\Model\Table\ProjetoTable|\Cake\ORM\Association\BelongsTo $Projeto
 *
 * @method \App\Model\Entity\PontoNotavelHorizontal get($primaryKey, $options = [])
 * @method \App\Model\Entity\PontoNotavelHorizontal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PontoNotavelHorizontal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PontoNotavelHorizontal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PontoNotavelHorizontal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PontoNotavelHorizontal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PontoNotavelHorizontal findOrCreate($search, callable $callback = null, $options = [])
 */
class PontoNotavelHorizontalTable extends Table
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

        $this->setTable('ponto_notavel_horizontal');
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
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

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
