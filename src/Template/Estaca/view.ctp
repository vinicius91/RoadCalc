<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estaca $estaca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estaca'), ['action' => 'edit', $estaca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estaca'), ['action' => 'delete', $estaca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estaca->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estaca view large-9 medium-8 columns content">
    <h3><?= h($estaca->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coordenada') ?></th>
            <td><?= $estaca->has('coordenada') ? $this->Html->link($estaca->coordenada->id, ['controller' => 'Coordenada', 'action' => 'view', $estaca->coordenada->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $estaca->has('projeto') ? $this->Html->link($estaca->projeto->id, ['controller' => 'Projeto', 'action' => 'view', $estaca->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estaca->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($estaca->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Intermediario') ?></th>
            <td><?= $this->Number->format($estaca->intermediario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relatorio') ?></th>
            <td><?= $this->Number->format($estaca->relatorio) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ponto Notavel Verical') ?></h4>
        <?php if (!empty($estaca->ponto_notavel_verical)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Coordenada Id') ?></th>
                <th scope="col"><?= __('Estaca Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estaca->ponto_notavel_verical as $pontoNotavelVerical): ?>
            <tr>
                <td><?= h($pontoNotavelVerical->id) ?></td>
                <td><?= h($pontoNotavelVerical->nome) ?></td>
                <td><?= h($pontoNotavelVerical->coordenada_id) ?></td>
                <td><?= h($pontoNotavelVerical->estaca_id) ?></td>
                <td><?= h($pontoNotavelVerical->projeto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PontoNotavelVerical', 'action' => 'view', $pontoNotavelVerical->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PontoNotavelVerical', 'action' => 'edit', $pontoNotavelVerical->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PontoNotavelVerical', 'action' => 'delete', $pontoNotavelVerical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pontoNotavelVerical->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
