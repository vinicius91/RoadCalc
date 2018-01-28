<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CurvaHorizontal Model
 *
 * @property \App\Model\Table\ProjetoTable|\Cake\ORM\Association\BelongsTo $Projeto
 * @property \App\Model\Table\TrechoTable|\Cake\ORM\Association\BelongsTo $Trecho
 * @property \App\Model\Table\TrechoTable|\Cake\ORM\Association\BelongsTo $Trecho
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 *
 * @method \App\Model\Entity\CurvaHorizontal get($primaryKey, $options = [])
 * @method \App\Model\Entity\CurvaHorizontal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CurvaHorizontal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CurvaHorizontal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CurvaHorizontal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CurvaHorizontal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CurvaHorizontal findOrCreate($search, callable $callback = null, $options = [])
 */
class CurvaHorizontalTable extends Table
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

        $this->setTable('curva_horizontal');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Projeto', [
            'foreignKey' => 'projeto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Trecho', [
            'foreignKey' => 'trecho_inicial_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Trecho', [
            'foreignKey' => 'trecho_final_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_pc_id'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_pt_id'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_ts_id'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_sc_id'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_cs_id'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_st_id'
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
            ->numeric('raio')
            ->allowEmpty('raio');

        $validator
            ->numeric('superelevacao')
            ->allowEmpty('superelevacao');

        $validator
            ->numeric('lc')
            ->allowEmpty('lc');

        $validator
            ->allowEmpty('transicao');

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
        $rules->add($rules->existsIn(['projeto_id'], 'Projeto'));
        $rules->add($rules->existsIn(['trecho_inicial_id'], 'Trecho'));
        $rules->add($rules->existsIn(['trecho_final_id'], 'Trecho'));
        $rules->add($rules->existsIn(['estaca_pc_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_pt_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_ts_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_sc_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_cs_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_st_id'], 'Estaca'));

        return $rules;
    }
}
