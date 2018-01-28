<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PontoNotavelVertical $pontoNotavelVertical
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ponto Notavel Vertical'), ['action' => 'edit', $pontoNotavelVertical->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ponto Notavel Vertical'), ['action' => 'delete', $pontoNotavelVertical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pontoNotavelVertical->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Vertical'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Vertical'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pontoNotavelVertical view large-9 medium-8 columns content">
    <h3><?= h($pontoNotavelVertical->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pontoNotavelVertical->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordenada') ?></th>
            <td><?= $pontoNotavelVertical->has('coordenada') ? $this->Html->link($pontoNotavelVertical->coordenada->id, ['controller' => 'Coordenada', 'action' => 'view', $pontoNotavelVertical->coordenada->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estaca') ?></th>
            <td><?= $pontoNotavelVertical->has('estaca') ? $this->Html->link($pontoNotavelVertical->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $pontoNotavelVertical->estaca->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $pontoNotavelVertical->has('projeto') ? $this->Html->link($pontoNotavelVertical->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $pontoNotavelVertical->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pontoNotavelVertical->id) ?></td>
        </tr>
    </table>
</div>
