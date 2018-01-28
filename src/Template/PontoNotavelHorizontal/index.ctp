<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PontoNotavelHorizontal[]|\Cake\Collection\CollectionInterface $pontoNotavelHorizontal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pontoNotavelHorizontal index large-9 medium-8 columns content">
    <h3><?= __('Ponto Notavel Horizontal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordenada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pontoNotavelHorizontal as $pontoNotavelHorizontal): ?>
            <tr>
                <td><?= $this->Number->format($pontoNotavelHorizontal->id) ?></td>
                <td><?= h($pontoNotavelHorizontal->nome) ?></td>
                <td><?= $pontoNotavelHorizontal->has('coordenada') ? $this->Html->link($pontoNotavelHorizontal->coordenada->id, ['controller' => 'Coordenada', 'action' => 'view', $pontoNotavelHorizontal->coordenada->id]) : '' ?></td>
                <td><?= $pontoNotavelHorizontal->has('projeto') ? $this->Html->link($pontoNotavelHorizontal->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $pontoNotavelHorizontal->projeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pontoNotavelHorizontal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pontoNotavelHorizontal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pontoNotavelHorizontal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pontoNotavelHorizontal->id)]) ?>
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
