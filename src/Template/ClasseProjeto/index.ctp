<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClasseProjeto[]|\Cake\Collection\CollectionInterface $classeProjeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Classe Projeto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="classeProjeto index large-9 medium-8 columns content">
    <h3><?= __('Classe Projeto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caracteristicas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criterio_clas_tecnica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relevo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('velocidade_projeto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('velocidade_diretriz_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dist_min_visibilidade_parada_min_d') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dist_min_visibilidade_parada_min_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dist_min_visibilidade_ultrapassagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raio_minimo_superelevacao_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('superelevacao_maxima') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rampa_maxima') ?></th>
                <th scope="col"><?= $this->Paginator->sort('k_curva_convexa_min_d') ?></th>
                <th scope="col"><?= $this->Paginator->sort('k_curva_convexa_min_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('k_curva_concava_min_d') ?></th>
                <th scope="col"><?= $this->Paginator->sort('k_curva_concava_min_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_faixa_transito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_externo_min_d') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_externo_min_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_interno_duas_fx_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_interno_tres_fx_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_interno_quatro_fx_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_interno_duas_fx_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_interno_tres_fx_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_acostamento_interno_quatro_fx_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gabarito_vertical_min_d') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gabarito_vertical_min_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('afastamento_min_borda_acost_obstaculos_cont') ?></th>
                <th scope="col"><?= $this->Paginator->sort('afastamento_min_borda_acost_obstaculos_iso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_cant_central_min_normal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_cant_central_min_absoluto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_cant_central_min_desejavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_cant_central_max_desejavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largura_cant_central_max_absoluto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classeProjeto as $classeProjeto): ?>
            <tr>
                <td><?= $this->Number->format($classeProjeto->id) ?></td>
                <td><?= h($classeProjeto->nome) ?></td>
                <td><?= h($classeProjeto->caracteristicas) ?></td>
                <td><?= h($classeProjeto->criterio_clas_tecnica) ?></td>
                <td><?= h($classeProjeto->relevo) ?></td>
                <td><?= $this->Number->format($classeProjeto->velocidade_projeto) ?></td>
                <td><?= $this->Number->format($classeProjeto->velocidade_diretriz_min) ?></td>
                <td><?= $this->Number->format($classeProjeto->dist_min_visibilidade_parada_min_d) ?></td>
                <td><?= $this->Number->format($classeProjeto->dist_min_visibilidade_parada_min_a) ?></td>
                <td><?= $this->Number->format($classeProjeto->dist_min_visibilidade_ultrapassagem) ?></td>
                <td><?= $this->Number->format($classeProjeto->raio_minimo_superelevacao_max) ?></td>
                <td><?= $this->Number->format($classeProjeto->superelevacao_maxima) ?></td>
                <td><?= $this->Number->format($classeProjeto->rampa_maxima) ?></td>
                <td><?= $this->Number->format($classeProjeto->k_curva_convexa_min_d) ?></td>
                <td><?= $this->Number->format($classeProjeto->k_curva_convexa_min_a) ?></td>
                <td><?= $this->Number->format($classeProjeto->k_curva_concava_min_d) ?></td>
                <td><?= $this->Number->format($classeProjeto->k_curva_concava_min_a) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_faixa_transito) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_externo_min_d) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_externo_min_a) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_duas_fx_min) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_tres_fx_min) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_quatro_fx_min) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_duas_fx_max) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_tres_fx_max) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_acostamento_interno_quatro_fx_max) ?></td>
                <td><?= $this->Number->format($classeProjeto->gabarito_vertical_min_d) ?></td>
                <td><?= $this->Number->format($classeProjeto->gabarito_vertical_min_a) ?></td>
                <td><?= $this->Number->format($classeProjeto->afastamento_min_borda_acost_obstaculos_cont) ?></td>
                <td><?= $this->Number->format($classeProjeto->afastamento_min_borda_acost_obstaculos_iso) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_cant_central_min_normal) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_cant_central_min_absoluto) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_cant_central_min_desejavel) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_cant_central_max_desejavel) ?></td>
                <td><?= $this->Number->format($classeProjeto->largura_cant_central_max_absoluto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $classeProjeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classeProjeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classeProjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classeProjeto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
