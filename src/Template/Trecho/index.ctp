<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trecho[]|\Cake\Collection\CollectionInterface $trecho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trecho'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trecho index large-9 medium-8 columns content">
    <h3><?= __('Trecho') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ponto_inicial_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ponto_final_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_inicial_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_final_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trecho as $trecho): ?>
            <tr>
                <td><?= $this->Number->format($trecho->id) ?></td>
                <td><?= h($trecho->nome) ?></td>
                <td><?= $this->Number->format($trecho->ponto_inicial_id) ?></td>
                <td><?= $trecho->has('ponto_notavel_horizontal') ? $this->Html->link($trecho->ponto_notavel_horizontal->id, ['controller' => 'PontoNotavelHorizontal', 'action' => 'view', $trecho->ponto_notavel_horizontal->id]) : '' ?></td>
                <td><?= $this->Number->format($trecho->estaca_inicial_id) ?></td>
                <td><?= $trecho->has('estaca') ? $this->Html->link($trecho->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $trecho->estaca->id]) : '' ?></td>
                <td><?= $trecho->has('projeto') ? $this->Html->link($trecho->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $trecho->projeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trecho->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trecho->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trecho->id)]) ?>
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
