<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClasseProjeto Model
 *
 * @property \App\Model\Table\ProjetoTable|\Cake\ORM\Association\HasMany $Projeto
 *
 * @method \App\Model\Entity\ClasseProjeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClasseProjeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClasseProjeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClasseProjeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClasseProjeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClasseProjeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClasseProjeto findOrCreate($search, callable $callback = null, $options = [])
 */
class ClasseProjetoTable extends Table
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

        $this->setTable('classe_projeto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Projeto', [
            'foreignKey' => 'classe_projeto_id'
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

        $validator
            ->scalar('caracteristicas')
            ->maxLength('caracteristicas', 45)
            ->requirePresence('caracteristicas', 'create')
            ->notEmpty('caracteristicas');

        $validator
            ->scalar('criterio_clas_tecnica')
            ->maxLength('criterio_clas_tecnica', 45)
            ->requirePresence('criterio_clas_tecnica', 'create')
            ->notEmpty('criterio_clas_tecnica');

        $validator
            ->scalar('relevo')
            ->maxLength('relevo', 45)
            ->requirePresence('relevo', 'create')
            ->notEmpty('relevo');

        $validator
            ->numeric('velocidade_projeto')
            ->requirePresence('velocidade_projeto', 'create')
            ->notEmpty('velocidade_projeto');

        $validator
            ->numeric('velocidade_diretriz_min')
            ->requirePresence('velocidade_diretriz_min', 'create')
            ->notEmpty('velocidade_diretriz_min');

        $validator
            ->integer('dist_min_visibilidade_parada_min_d')
            ->requirePresence('dist_min_visibilidade_parada_min_d', 'create')
            ->notEmpty('dist_min_visibilidade_parada_min_d');

        $validator
            ->integer('dist_min_visibilidade_parada_min_a')
            ->requirePresence('dist_min_visibilidade_parada_min_a', 'create')
            ->notEmpty('dist_min_visibilidade_parada_min_a');

        $validator
            ->integer('dist_min_visibilidade_ultrapassagem')
            ->requirePresence('dist_min_visibilidade_ultrapassagem', 'create')
            ->notEmpty('dist_min_visibilidade_ultrapassagem');

        $validator
            ->integer('raio_minimo_superelevacao_max')
            ->requirePresence('raio_minimo_superelevacao_max', 'create')
            ->notEmpty('raio_minimo_superelevacao_max');

        $validator
            ->integer('superelevacao_maxima')
            ->requirePresence('superelevacao_maxima', 'create')
            ->notEmpty('superelevacao_maxima');

        $validator
            ->integer('rampa_maxima')
            ->requirePresence('rampa_maxima', 'create')
            ->notEmpty('rampa_maxima');

        $validator
            ->integer('k_curva_convexa_min_d')
            ->requirePresence('k_curva_convexa_min_d', 'create')
            ->notEmpty('k_curva_convexa_min_d');

        $validator
            ->integer('k_curva_convexa_min_a')
            ->requirePresence('k_curva_convexa_min_a', 'create')
            ->notEmpty('k_curva_convexa_min_a');

        $validator
            ->integer('k_curva_concava_min_d')
            ->requirePresence('k_curva_concava_min_d', 'create')
            ->notEmpty('k_curva_concava_min_d');

        $validator
            ->integer('k_curva_concava_min_a')
            ->requirePresence('k_curva_concava_min_a', 'create')
            ->notEmpty('k_curva_concava_min_a');

        $validator
            ->integer('largura_faixa_transito')
            ->requirePresence('largura_faixa_transito', 'create')
            ->notEmpty('largura_faixa_transito');

        $validator
            ->integer('largura_acostamento_externo_min_d')
            ->requirePresence('largura_acostamento_externo_min_d', 'create')
            ->notEmpty('largura_acostamento_externo_min_d');

        $validator
            ->integer('largura_acostamento_externo_min_a')
            ->requirePresence('largura_acostamento_externo_min_a', 'create')
            ->notEmpty('largura_acostamento_externo_min_a');

        $validator
            ->integer('largura_acostamento_interno_duas_fx_min')
            ->requirePresence('largura_acostamento_interno_duas_fx_min', 'create')
            ->notEmpty('largura_acostamento_interno_duas_fx_min');

        $validator
            ->integer('largura_acostamento_interno_tres_fx_min')
            ->requirePresence('largura_acostamento_interno_tres_fx_min', 'create')
            ->notEmpty('largura_acostamento_interno_tres_fx_min');

        $validator
            ->integer('largura_acostamento_interno_quatro_fx_min')
            ->requirePresence('largura_acostamento_interno_quatro_fx_min', 'create')
            ->notEmpty('largura_acostamento_interno_quatro_fx_min');

        $validator
            ->integer('largura_acostamento_interno_duas_fx_max')
            ->requirePresence('largura_acostamento_interno_duas_fx_max', 'create')
            ->notEmpty('largura_acostamento_interno_duas_fx_max');

        $validator
            ->integer('largura_acostamento_interno_tres_fx_max')
            ->requirePresence('largura_acostamento_interno_tres_fx_max', 'create')
            ->notEmpty('largura_acostamento_interno_tres_fx_max');

        $validator
            ->integer('largura_acostamento_interno_quatro_fx_max')
            ->requirePresence('largura_acostamento_interno_quatro_fx_max', 'create')
            ->notEmpty('largura_acostamento_interno_quatro_fx_max');

        $validator
            ->integer('gabarito_vertical_min_d')
            ->requirePresence('gabarito_vertical_min_d', 'create')
            ->notEmpty('gabarito_vertical_min_d');

        $validator
            ->integer('gabarito_vertical_min_a')
            ->requirePresence('gabarito_vertical_min_a', 'create')
            ->notEmpty('gabarito_vertical_min_a');

        $validator
            ->integer('afastamento_min_borda_acost_obstaculos_cont')
            ->requirePresence('afastamento_min_borda_acost_obstaculos_cont', 'create')
            ->notEmpty('afastamento_min_borda_acost_obstaculos_cont');

        $validator
            ->integer('afastamento_min_borda_acost_obstaculos_iso')
            ->requirePresence('afastamento_min_borda_acost_obstaculos_iso', 'create')
            ->notEmpty('afastamento_min_borda_acost_obstaculos_iso');

        $validator
            ->integer('largura_cant_central_min_normal')
            ->requirePresence('largura_cant_central_min_normal', 'create')
            ->notEmpty('largura_cant_central_min_normal');

        $validator
            ->integer('largura_cant_central_min_absoluto')
            ->requirePresence('largura_cant_central_min_absoluto', 'create')
            ->notEmpty('largura_cant_central_min_absoluto');

        $validator
            ->integer('largura_cant_central_min_desejavel')
            ->requirePresence('largura_cant_central_min_desejavel', 'create')
            ->notEmpty('largura_cant_central_min_desejavel');

        $validator
            ->integer('largura_cant_central_max_desejavel')
            ->requirePresence('largura_cant_central_max_desejavel', 'create')
            ->notEmpty('largura_cant_central_max_desejavel');

        $validator
            ->integer('largura_cant_central_max_absoluto')
            ->requirePresence('largura_cant_central_max_absoluto', 'create')
            ->notEmpty('largura_cant_central_max_absoluto');

        return $validator;
    }
}
