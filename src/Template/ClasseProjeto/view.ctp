<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClasseProjeto $classeProjeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Classe Projeto'), ['action' => 'edit', $classeProjeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Classe Projeto'), ['action' => 'delete', $classeProjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classeProjeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Classe Projeto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classe Projeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classeProjeto view large-9 medium-8 columns content">
    <h3><?= h($classeProjeto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($classeProjeto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caracteristicas') ?></th>
            <td><?= h($classeProjeto->caracteristicas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criterio Clas Tecnica') ?></th>
            <td><?= h($classeProjeto->criterio_clas_tecnica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relevo') ?></th>
            <td><?= h($classeProjeto->relevo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($classeProjeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Velocidade Projeto') ?></th>
            <td><?= $this->Number->format($classeProjeto->velocidade_projeto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Velocidade Diretriz Min') ?></th>
            <td><?= $this->Number->format($classeProjeto->velocidade_diretriz_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dist Min Visibilidade Parada Min D') ?></th>
            <td><?= $this->Number->format($classeProjeto->dist_min_visibilidade_parada_min_d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dist Min Visibilidade Parada Min A') ?></th>
            <td><?= $this->Number->format($classeProjeto->dist_min_visibilidade_parada_min_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dist Min Visibilidade Ultrapassagem') ?></th>
            <td><?= $this->Number->format($classeProjeto->dist_min_visibilidade_ultrapassagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raio Minimo Superelevacao Max') ?></th>
            <td><?= $this->Number->format($classeProjeto->raio_minimo_superelevacao_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Superelevacao Maxima') ?></th>
            <td><?= $this->Number->format($classeProjeto->superelevacao_maxima) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rampa Maxima') ?></th>
            <td><?= $this->Number->format($classeProjeto->rampa_maxima) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('K Curva Convexa Min D') ?></th>
            <td><?= $this->Number->format($classeProjeto->k_curva_convexa_min_d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('K Curva Convexa Min A') ?></th>
            <td><?= $this->Number->format($classeProjeto->k_curva_convexa_min_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('K Curva Concava Min D') ?></th>
            <td><?= $this->Number->format($classeProjeto->k_curva_concava_min_d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('K Curva Concava Min A') ?></th>
            <td><?= $this->Number->format($classeProjeto->k_curva_concava_min_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Faixa Transito') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_faixa_transito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Externo Min D') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_externo_min_d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Externo Min A') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_externo_min_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Interno Duas Fx Min') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_duas_fx_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Interno Tres Fx Min') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_tres_fx_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Interno Quatro Fx Min') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_quatro_fx_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Interno Duas Fx Max') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_duas_fx_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Interno Tres Fx Max') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_tres_fx_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Acostamento Interno Quatro Fx Max') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_quatro_fx_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gabarito Vertical Min D') ?></th>
            <td><?= $this->Number->format($classeProjeto->gabarito_vertical_min_d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gabarito Vertical Min A') ?></th>
            <td><?= $this->Number->format($classeProjeto->gabarito_vertical_min_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afastamento Min Borda Acost Obstaculos Cont') ?></th>
            <td><?= $this->Number->format($classeProjeto->afastamento_min_borda_acost_obstaculos_cont) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afastamento Min Borda Acost Obstaculos Iso') ?></th>
            <td><?= $this->Number->format($classeProjeto->afastamento_min_borda_acost_obstaculos_iso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Cant Central Min Normal') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_cant_central_min_normal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Cant Central Min Absoluto') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_cant_central_min_absoluto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Cant Central Min Desejavel') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_cant_central_min_desejavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Cant Central Max Desejavel') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_cant_central_max_desejavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largura Cant Central Max Absoluto') ?></th>
            <td><?= $this->Number->format($classeProjeto->largura_cant_central_max_absoluto) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projeto') ?></h4>
        <?php if (!empty($classeProjeto->projeto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Mapa Rederizado') ?></th>
                <th scope="col"><?= __('Estacas Geradas') ?></th>
                <th scope="col"><?= __('Classe Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($classeProjeto->projeto as $projeto): ?>
            <tr>
                <td><?= h($projeto->id) ?></td>
                <td><?= h($projeto->nome) ?></td>
                <td><?= h($projeto->mapa_rederizado) ?></td>
                <td><?= h($projeto->estacas_geradas) ?></td>
                <td><?= h($projeto->classe_projeto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projeto', 'action' => 'view', $projeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projeto', 'action' => 'edit', $projeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projeto', 'action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
