<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenada[]|\Cake\Collection\CollectionInterface $coordenada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordenada index large-9 medium-8 columns content">
    <h3><?= __('Coordenada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utm_x') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utm_y') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utm_z') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utm_letter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utm_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('geom') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coordenada as $coordenada): ?>
            <tr>
                <td><?= $this->Number->format($coordenada->id) ?></td>
                <td><?= $this->Number->format($coordenada->latitude) ?></td>
                <td><?= $this->Number->format($coordenada->longitude) ?></td>
                <td><?= $this->Number->format($coordenada->utm_x) ?></td>
                <td><?= $this->Number->format($coordenada->utm_y) ?></td>
                <td><?= $this->Number->format($coordenada->utm_z) ?></td>
                <td><?= h($coordenada->utm_letter) ?></td>
                <td><?= $this->Number->format($coordenada->utm_number) ?></td>
                <td><?= h($coordenada->geom) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coordenada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordenada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordenada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenada->id)]) ?>
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
