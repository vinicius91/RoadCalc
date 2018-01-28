<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PontoNotavelHorizontal $pontoNotavelHorizontal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ponto Notavel Horizontal'), ['action' => 'edit', $pontoNotavelHorizontal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ponto Notavel Horizontal'), ['action' => 'delete', $pontoNotavelHorizontal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pontoNotavelHorizontal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pontoNotavelHorizontal view large-9 medium-8 columns content">
    <h3><?= h($pontoNotavelHorizontal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pontoNotavelHorizontal->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordenada') ?></th>
            <td><?= $pontoNotavelHorizontal->has('coordenada') ? $this->Html->link($pontoNotavelHorizontal->coordenada->id, ['controller' => 'Coordenada', 'action' => 'view', $pontoNotavelHorizontal->coordenada->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $pontoNotavelHorizontal->has('projeto') ? $this->Html->link($pontoNotavelHorizontal->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $pontoNotavelHorizontal->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pontoNotavelHorizontal->id) ?></td>
        </tr>
    </table>
</div>
