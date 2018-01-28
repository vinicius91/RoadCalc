<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurvaHorizontal[]|\Cake\Collection\CollectionInterface $curvaHorizontal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curva Horizontal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trecho'), ['controller' => 'Trecho', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trecho'), ['controller' => 'Trecho', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curvaHorizontal index large-9 medium-8 columns content">
    <h3><?= __('Curva Horizontal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('superelevacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transicao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trecho_inicial_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trecho_final_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_pc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_pt_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_ts_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_sc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_cs_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_st_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($curvaHorizontal as $curvaHorizontal): ?>
            <tr>
                <td><?= $this->Number->format($curvaHorizontal->id) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->raio) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->superelevacao) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->lc) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->transicao) ?></td>
                <td><?= $curvaHorizontal->has('projeto') ? $this->Html->link($curvaHorizontal->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $curvaHorizontal->projeto->id]) : '' ?></td>
                <td><?= $this->Number->format($curvaHorizontal->trecho_inicial_id) ?></td>
                <td><?= $curvaHorizontal->has('trecho') ? $this->Html->link($curvaHorizontal->trecho->id, ['controller' => 'Trecho', 'action' => 'view', $curvaHorizontal->trecho->id]) : '' ?></td>
                <td><?= $this->Number->format($curvaHorizontal->estaca_pc_id) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->estaca_pt_id) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->estaca_ts_id) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->estaca_sc_id) ?></td>
                <td><?= $this->Number->format($curvaHorizontal->estaca_cs_id) ?></td>
                <td><?= $curvaHorizontal->has('estaca') ? $this->Html->link($curvaHorizontal->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $curvaHorizontal->estaca->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curvaHorizontal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curvaHorizontal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curvaHorizontal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curvaHorizontal->id)]) ?>
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
