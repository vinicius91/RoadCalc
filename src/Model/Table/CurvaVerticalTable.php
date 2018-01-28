<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CurvaVertical Model
 *
 * @property \App\Model\Table\ProjetoTable|\Cake\ORM\Association\BelongsTo $Projeto
 * @property \App\Model\Table\PontoNotavelVerticalTable|\Cake\ORM\Association\BelongsTo $PontoNotavelVertical
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 *
 * @method \App\Model\Entity\CurvaVertical get($primaryKey, $options = [])
 * @method \App\Model\Entity\CurvaVertical newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CurvaVertical[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CurvaVertical|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CurvaVertical patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CurvaVertical[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CurvaVertical findOrCreate($search, callable $callback = null, $options = [])
 */
class CurvaVerticalTable extends Table
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

        $this->setTable('curva_vertical');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Projeto', [
            'foreignKey' => 'projeto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PontoNotavelVertical', [
            'foreignKey' => 'ponto_notavel_verical_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_pcv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_piv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_ptv_id',
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
            ->allowEmpty('nome');

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
        $rules->add($rules->existsIn(['ponto_notavel_verical_id'], 'PontoNotavelVertical'));
        $rules->add($rules->existsIn(['estaca_pcv_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_piv_id'], 'Estaca'));
        $rules->add($rules->existsIn(['estaca_ptv_id'], 'Estaca'));

        return $rules;
    }
}
