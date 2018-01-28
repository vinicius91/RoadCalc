<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClasseProjeto $classeProjeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classeProjeto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classeProjeto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Classe Projeto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="classeProjeto form large-9 medium-8 columns content">
    <?= $this->Form->create($classeProjeto) ?>
    <fieldset>
        <legend><?= __('Edit Classe Projeto') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('caracteristicas');
            echo $this->Form->control('criterio_clas_tecnica');
            echo $this->Form->control('relevo');
            echo $this->Form->control('velocidade_projeto');
            echo $this->Form->control('velocidade_diretriz_min');
            echo $this->Form->control('dist_min_visibilidade_parada_min_d');
            echo $this->Form->control('dist_min_visibilidade_parada_min_a');
            echo $this->Form->control('dist_min_visibilidade_ultrapassagem');
            echo $this->Form->control('raio_minimo_superelevacao_max');
            echo $this->Form->control('superelevacao_maxima');
            echo $this->Form->control('rampa_maxima');
            echo $this->Form->control('k_curva_convexa_min_d');
            echo $this->Form->control('k_curva_convexa_min_a');
            echo $this->Form->control('k_curva_concava_min_d');
            echo $this->Form->control('k_curva_concava_min_a');
            echo $this->Form->control('largura_faixa_transito');
            echo $this->Form->control('largura_acostamento_externo_min_d');
            echo $this->Form->control('largura_acostamento_externo_min_a');
            echo $this->Form->control('largura_acostamento_interno_duas_fx_min');
            echo $this->Form->control('largura_acostamento_interno_tres_fx_min');
            echo $this->Form->control('largura_acostamento_interno_quatro_fx_min');
            echo $this->Form->control('largura_acostamento_interno_duas_fx_max');
            echo $this->Form->control('largura_acostamento_interno_tres_fx_max');
            echo $this->Form->control('largura_acostamento_interno_quatro_fx_max');
            echo $this->Form->control('gabarito_vertical_min_d');
            echo $this->Form->control('gabarito_vertical_min_a');
            echo $this->Form->control('afastamento_min_borda_acost_obstaculos_cont');
            echo $this->Form->control('afastamento_min_borda_acost_obstaculos_iso');
            echo $this->Form->control('largura_cant_central_min_normal');
            echo $this->Form->control('largura_cant_central_min_absoluto');
            echo $this->Form->control('largura_cant_central_min_desejavel');
            echo $this->Form->control('largura_cant_central_max_desejavel');
            echo $this->Form->control('largura_cant_central_max_absoluto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
