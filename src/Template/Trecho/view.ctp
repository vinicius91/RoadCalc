<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trecho $trecho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Trecho'), ['action' => 'edit', $trecho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trecho'), ['action' => 'delete', $trecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trecho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trecho'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trecho'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trecho view large-9 medium-8 columns content">
    <h3><?= h($trecho->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($trecho->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ponto Notavel Horizontal') ?></th>
            <td><?= $trecho->has('ponto_notavel_horizontal') ? $this->Html->link($trecho->ponto_notavel_horizontal->id, ['controller' => 'PontoNotavelHorizontal', 'action' => 'view', $trecho->ponto_notavel_horizontal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca') ?></th>
            <td><?= $trecho->has('estaca') ? $this->Html->link($trecho->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $trecho->estaca->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $trecho->has('projeto') ? $this->Html->link($trecho->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $trecho->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trecho->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ponto Inicial Id') ?></th>
            <td><?= $this->Number->format($trecho->ponto_inicial_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Inicial Id') ?></th>
            <td><?= $this->Number->format($trecho->estaca_inicial_id) ?></td>
        </tr>
    </table>
</div>
