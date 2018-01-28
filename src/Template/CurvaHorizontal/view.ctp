<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurvaHorizontal $curvaHorizontal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curva Horizontal'), ['action' => 'edit', $curvaHorizontal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curva Horizontal'), ['action' => 'delete', $curvaHorizontal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curvaHorizontal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Curva Horizontal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curva Horizontal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trecho'), ['controller' => 'Trecho', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trecho'), ['controller' => 'Trecho', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="curvaHorizontal view large-9 medium-8 columns content">
    <h3><?= h($curvaHorizontal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $curvaHorizontal->has('projeto') ? $this->Html->link($curvaHorizontal->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $curvaHorizontal->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trecho') ?></th>
            <td><?= $curvaHorizontal->has('trecho') ? $this->Html->link($curvaHorizontal->trecho->id, ['controller' => 'Trecho', 'action' => 'view', $curvaHorizontal->trecho->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca') ?></th>
            <td><?= $curvaHorizontal->has('estaca') ? $this->Html->link($curvaHorizontal->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $curvaHorizontal->estaca->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raio') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->raio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Superelevacao') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->superelevacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lc') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->lc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transicao') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->transicao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trecho Inicial Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->trecho_inicial_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Pc Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->estaca_pc_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Pt Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->estaca_pt_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Ts Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->estaca_ts_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Sc Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->estaca_sc_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Cs Id') ?></th>
            <td><?= $this->Number->format($curvaHorizontal->estaca_cs_id) ?></td>
        </tr>
    </table>
</div>
