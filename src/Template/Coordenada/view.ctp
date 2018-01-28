<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenada $coordenada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coordenada'), ['action' => 'edit', $coordenada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coordenada'), ['action' => 'delete', $coordenada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coordenada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordenada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coordenada view large-9 medium-8 columns content">
    <h3><?= h($coordenada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Utm Letter') ?></th>
            <td><?= h($coordenada->utm_letter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Geom') ?></th>
            <td><?= h($coordenada->geom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coordenada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($coordenada->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($coordenada->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utm X') ?></th>
            <td><?= $this->Number->format($coordenada->utm_x) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utm Y') ?></th>
            <td><?= $this->Number->format($coordenada->utm_y) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utm Z') ?></th>
            <td><?= $this->Number->format($coordenada->utm_z) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utm Number') ?></th>
            <td><?= $this->Number->format($coordenada->utm_number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Estaca') ?></h4>
        <?php if (!empty($coordenada->estaca)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Numero') ?></th>
                <th scope="col"><?= __('Intermediario') ?></th>
                <th scope="col"><?= __('Relatorio') ?></th>
                <th scope="col"><?= __('Coordenada Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($coordenada->estaca as $estaca): ?>
            <tr>
                <td><?= h($estaca->id) ?></td>
                <td><?= h($estaca->numero) ?></td>
                <td><?= h($estaca->intermediario) ?></td>
                <td><?= h($estaca->relatorio) ?></td>
                <td><?= h($estaca->coordenada_id) ?></td>
                <td><?= h($estaca->projeto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Estaca', 'action' => 'view', $estaca->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Estaca', 'action' => 'edit', $estaca->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estaca', 'action' => 'delete', $estaca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estaca->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ponto Notavel Horizontal') ?></h4>
        <?php if (!empty($coordenada->ponto_notavel_horizontal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Coordenada Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($coordenada->ponto_notavel_horizontal as $pontoNotavelHorizontal): ?>
            <tr>
                <td><?= h($pontoNotavelHorizontal->id) ?></td>
                <td><?= h($pontoNotavelHorizontal->nome) ?></td>
                <td><?= h($pontoNotavelHorizontal->coordenada_id) ?></td>
                <td><?= h($pontoNotavelHorizontal->projeto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'view', $pontoNotavelHorizontal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'edit', $pontoNotavelHorizontal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'delete', $pontoNotavelHorizontal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pontoNotavelHorizontal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ponto Notavel Verical') ?></h4>
        <?php if (!empty($coordenada->ponto_notavel_verical)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Coordenada Id') ?></th>
                <th scope="col"><?= __('Estaca Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($coordenada->ponto_notavel_verical as $pontoNotavelVerical): ?>
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
