<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PontoNotavelVertical[]|\Cake\Collection\CollectionInterface $pontoNotavelVertical
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Vertical'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pontoNotavelVertical index large-9 medium-8 columns content">
    <h3><?= __('Ponto Notavel Vertical') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordenada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estaca_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pontoNotavelVertical as $pontoNotavelVertical): ?>
            <tr>
                <td><?= $this->Number->format($pontoNotavelVertical->id) ?></td>
                <td><?= h($pontoNotavelVertical->nome) ?></td>
                <td><?= $pontoNotavelVertical->has('coordenada') ? $this->Html->link($pontoNotavelVertical->coordenada->id, ['controller' => 'Coordenada', 'action' => 'view', $pontoNotavelVertical->coordenada->id]) : '' ?></td>
                <td><?= $pontoNotavelVertical->has('estaca') ? $this->Html->link($pontoNotavelVertical->estaca->id, ['controller' => 'Estaca', 'action' => 'view', $pontoNotavelVertical->estaca->id]) : '' ?></td>
                <td><?= $pontoNotavelVertical->has('projeto') ? $this->Html->link($pontoNotavelVertical->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $pontoNotavelVertical->projeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pontoNotavelVertical->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pontoNotavelVertical->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pontoNotavelVertical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pontoNotavelVertical->id)]) ?>
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
