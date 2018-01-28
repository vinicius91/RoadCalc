<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurvaVertical $curvaVertical
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curva Vertical'), ['action' => 'edit', $curvaVertical->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curva Vertical'), ['action' => 'delete', $curvaVertical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curvaVertical->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Curva Vertical'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curva Vertical'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Vertical'), ['controller' => 'PontoNotavelVertical', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Vertical'), ['controller' => 'PontoNotavelVertical', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="curvaVertical view large-9 medium-8 columns content">
    <h3><?= h($curvaVertical->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($curvaVertical->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $curvaVertical->has('projeto') ? $this->Html->link($curvaVertical->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $curvaVertical->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ponto Notavel Vertical') ?></th>
            <td><?= $curvaVertical->has('ponto_notavel_vertical') ? $this->Html->link($curvaVertical->ponto_notavel_vertical->id, ['controller' => 'PontoNotavelVertical', 'action' => 'view', $curvaVertical->ponto_notavel_vertical->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca') ?></th>
            <td><?= $curvaVertical->has('estaca') ? $this->Html->link($curvaVertical->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $curvaVertical->estaca->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curvaVertical->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Pcv Id') ?></th>
            <td><?= $this->Number->format($curvaVertical->estaca_pcv_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca Piv Id') ?></th>
            <td><?= $this->Number->format($curvaVertical->estaca_piv_id) ?></td>
        </tr>
    </table>
</div>
