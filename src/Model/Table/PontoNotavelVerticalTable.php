<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PontoNotavelVertical Model
 *
 * @property \App\Model\Table\CoordenadaTable|\Cake\ORM\Association\BelongsTo $Coordenada
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\BelongsTo $Estaca
 * @property \App\Model\Table\ProjetoTable|\Cake\ORM\Association\BelongsTo $Projeto
 *
 * @method \App\Model\Entity\PontoNotavelVertical get($primaryKey, $options = [])
 * @method \App\Model\Entity\PontoNotavelVertical newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PontoNotavelVertical[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PontoNotavelVertical|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PontoNotavelVertical patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PontoNotavelVertical[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PontoNotavelVertical findOrCreate($search, callable $callback = null, $options = [])
 */
class PontoNotavelVerticalTable extends Table
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

        $this->setTable('ponto_notavel_vertical');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Coordenada', [
            'foreignKey' => 'coordenada_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estaca', [
            'foreignKey' => 'estaca_id',
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
        $rules->add($rules->existsIn(['coordenada_id'], 'Coordenada'));
        $rules->add($rules->existsIn(['estaca_id'], 'Estaca'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projeto'));

        return $rules;
    }
}
