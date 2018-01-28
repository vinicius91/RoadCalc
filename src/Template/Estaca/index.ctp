<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estaca[]|\Cake\Collection\CollectionInterface $estaca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estaca index large-9 medium-8 columns content">
    <h3><?= __('Estaca') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('intermediario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relatorio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordenada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estaca as $estaca): ?>
            <tr>
                <td><?= $this->Number->format($estaca->id) ?></td>
                <td><?= $this->Number->format($estaca->numero) ?></td>
                <td><?= $this->Number->format($estaca->intermediario) ?></td>
                <td><?= $this->Number->format($estaca->relatorio) ?></td>
                <td><?= $estaca->has('coordenada') ? $this->Html->link($estaca->coordenada->id, ['controller' => 'Coordenada', 'action' => 'view', $estaca->coordenada->id]) : '' ?></td>
                <td><?= $estaca->has('projeto') ? $this->Html->link($estaca->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $estaca->projeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estaca->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estaca->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estaca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estaca->id)]) ?>
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
