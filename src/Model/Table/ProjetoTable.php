<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projeto Model
 *
 * @property \App\Model\Table\ClasseProjetoTable|\Cake\ORM\Association\BelongsTo $ClasseProjeto
 * @property \App\Model\Table\CurvaHorizontalTable|\Cake\ORM\Association\HasMany $CurvaHorizontal
 * @property \App\Model\Table\CurvaVerticalTable|\Cake\ORM\Association\HasMany $CurvaVertical
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\HasMany $Estaca
 * @property \App\Model\Table\PontoNotavelHorizontalTable|\Cake\ORM\Association\HasMany $PontoNotavelHorizontal
 * @property \App\Model\Table\PontoNotavelVericalTable|\Cake\ORM\Association\HasMany $PontoNotavelVerical
 * @property \App\Model\Table\TrechoTable|\Cake\ORM\Association\HasMany $Trecho
 *
 * @method \App\Model\Entity\Projeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjetoTable extends Table
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

        $this->setTable('projeto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ClasseProjeto', [
            'foreignKey' => 'classe_projeto_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CurvaHorizontal', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('CurvaVertical', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Estaca', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('PontoNotavelHorizontal', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('PontoNotavelVerical', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Trecho', [
            'foreignKey' => 'projeto_id'
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
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->allowEmpty('mapa_rederizado');

        $validator
            ->allowEmpty('estacas_geradas');

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
        $rules->add($rules->existsIn(['classe_projeto_id'], 'ClasseProjeto'));

        return $rules;
    }
}
