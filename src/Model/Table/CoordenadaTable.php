<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordenada Model
 *
 * @property \App\Model\Table\EstacaTable|\Cake\ORM\Association\HasMany $Estaca
 * @property \App\Model\Table\PontoNotavelHorizontalTable|\Cake\ORM\Association\HasMany $PontoNotavelHorizontal
 * @property \App\Model\Table\PontoNotavelVericalTable|\Cake\ORM\Association\HasMany $PontoNotavelVerical
 *
 * @method \App\Model\Entity\Coordenada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coordenada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coordenada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordenada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordenada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coordenada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordenada findOrCreate($search, callable $callback = null, $options = [])
 */
class CoordenadaTable extends Table
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

        $this->setTable('coordenada');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Estaca', [
            'foreignKey' => 'coordenada_id'
        ]);
        $this->hasMany('PontoNotavelHorizontal', [
            'foreignKey' => 'coordenada_id'
        ]);
        $this->hasMany('PontoNotavelVerical', [
            'foreignKey' => 'coordenada_id'
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
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->numeric('utm_x')
            ->allowEmpty('utm_x');

        $validator
            ->numeric('utm_y')
            ->allowEmpty('utm_y');

        $validator
            ->numeric('utm_z')
            ->allowEmpty('utm_z');

        $validator
            ->scalar('utm_letter')
            ->maxLength('utm_letter', 2)
            ->allowEmpty('utm_letter');

        $validator
            ->integer('utm_number')
            ->allowEmpty('utm_number');

        $validator
            ->scalar('geom')
            ->allowEmpty('geom');

        return $validator;
    }
}
