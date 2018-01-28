<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto[]|\Cake\Collection\CollectionInterface $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classe Projeto'), ['controller' => 'ClasseProjeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classe Projeto'), ['controller' => 'ClasseProjeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curva Horizontal'), ['controller' => 'CurvaHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curva Horizontal'), ['controller' => 'CurvaHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curva Vertical'), ['controller' => 'CurvaVertical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curva Vertical'), ['controller' => 'CurvaVertical', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trecho'), ['controller' => 'Trecho', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trecho'), ['controller' => 'Trecho', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projeto index large-9 medium-8 columns content">
    <h3><?= __('Projeto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mapa_rederizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estacas_geradas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classe_projeto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projeto as $projeto): ?>
            <tr>
                <td><?= $this->Number->format($projeto->id) ?></td>
                <td><?= h($projeto->nome) ?></td>
                <td><?= $this->Number->format($projeto->mapa_rederizado) ?></td>
                <td><?= $this->Number->format($projeto->estacas_geradas) ?></td>
                <td><?= $projeto->has('classe_projeto') ? $this->Html->link($projeto->classe_projeto->id, ['controller' => 'ClasseProjeto', 'action' => 'view', $projeto->classe_projeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?>
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
