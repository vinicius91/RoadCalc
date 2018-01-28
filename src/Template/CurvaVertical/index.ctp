<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurvaVertical[]|\Cake\Collection\CollectionInterface $curvaVertical
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curva Vertical'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Vertical'), ['controller' => 'PontoNotavelVertical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Vertical'), ['controller' => 'PontoNotavelVertical', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curvaVertical index large-9 medium-8 columns content">
    <h3><?= __('Curva Vertical') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ponto_notavel_verical_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_pcv_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_piv_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_ptv_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($curvaVertical as $curvaVertical): ?>
            <tr>
                <td><?= $this->Number->format($curvaVertical->id) ?></td>
                <td><?= h($curvaVertical->nome) ?></td>
                <td><?= $curvaVertical->has('projeto') ? $this->Html->link($curvaVertical->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $curvaVertical->projeto->id]) : '' ?></td>
                <td><?= $curvaVertical->has('ponto_notavel_vertical') ? $this->Html->link($curvaVertical->ponto_notavel_vertical->id, ['controller' => 'PontoNotavelVertical', 'action' => 'view', $curvaVertical->ponto_notavel_vertical->id]) : '' ?></td>
                <td><?= $this->Number->format($curvaVertical->estaca_pcv_id) ?></td>
                <td><?= $this->Number->format($curvaVertical->estaca_piv_id) ?></td>
                <td><?= $curvaVertical->has('estaca') ? $this->Html->link($curvaVertical->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $curvaVertical->estaca->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curvaVertical->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curvaVertical->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curvaVertical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curvaVertical->id)]) ?>
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
