<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projeto'), ['action' => 'edit', $projeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projeto'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projeto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classe Projeto'), ['controller' => 'ClasseProjeto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classe Projeto'), ['controller' => 'ClasseProjeto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Curva Horizontal'), ['controller' => 'CurvaHorizontal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curva Horizontal'), ['controller' => 'CurvaHorizontal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Curva Vertical'), ['controller' => 'CurvaVertical', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curva Vertical'), ['controller' => 'CurvaVertical', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trecho'), ['controller' => 'Trecho', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trecho'), ['controller' => 'Trecho', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projeto view large-9 medium-8 columns content">
    <h3><?= h($projeto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($projeto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classe Projeto') ?></th>
            <td><?= $projeto->has('classe_projeto') ? $this->Html->link($projeto->classe_projeto->id, ['controller' => 'ClasseProjeto', 'action' => 'view', $projeto->classe_projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mapa Rederizado') ?></th>
            <td><?= $this->Number->format($projeto->mapa_rederizado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estacas Geradas') ?></th>
            <td><?= $this->Number->format($projeto->estacas_geradas) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Curva Horizontal') ?></h4>
        <?php if (!empty($projeto->curva_horizontal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Raio') ?></th>
                <th scope="col"><?= __('Superelevacao') ?></th>
                <th scope="col"><?= __('Lc') ?></th>
                <th scope="col"><?= __('Transicao') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Trecho Inicial Id') ?></th>
                <th scope="col"><?= __('Trecho Final Id') ?></th>
                <th scope="col"><?= __('Estaca Pc Id') ?></th>
                <th scope="col"><?= __('Estaca Pt Id') ?></th>
                <th scope="col"><?= __('Estaca Ts Id') ?></th>
                <th scope="col"><?= __('Estaca Sc Id') ?></th>
                <th scope="col"><?= __('Estaca Cs Id') ?></th>
                <th scope="col"><?= __('Estaca St Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->curva_horizontal as $curvaHorizontal): ?>
            <tr>
                <td><?= h($curvaHorizontal->id) ?></td>
                <td><?= h($curvaHorizontal->raio) ?></td>
                <td><?= h($curvaHorizontal->superelevacao) ?></td>
                <td><?= h($curvaHorizontal->lc) ?></td>
                <td><?= h($curvaHorizontal->transicao) ?></td>
                <td><?= h($curvaHorizontal->projeto_id) ?></td>
                <td><?= h($curvaHorizontal->trecho_inicial_id) ?></td>
                <td><?= h($curvaHorizontal->trecho_final_id) ?></td>
                <td><?= h($curvaHorizontal->estaca_pc_id) ?></td>
                <td><?= h($curvaHorizontal->estaca_pt_id) ?></td>
                <td><?= h($curvaHorizontal->estaca_ts_id) ?></td>
                <td><?= h($curvaHorizontal->estaca_sc_id) ?></td>
                <td><?= h($curvaHorizontal->estaca_cs_id) ?></td>
                <td><?= h($curvaHorizontal->estaca_st_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CurvaHorizontal', 'action' => 'view', $curvaHorizontal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CurvaHorizontal', 'action' => 'edit', $curvaHorizontal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CurvaHorizontal', 'action' => 'delete', $curvaHorizontal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curvaHorizontal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Curva Vertical') ?></h4>
        <?php if (!empty($projeto->curva_vertical)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Ponto Notavel Verical Id') ?></th>
                <th scope="col"><?= __('Estaca Pcv Id') ?></th>
                <th scope="col"><?= __('Estaca Piv Id') ?></th>
                <th scope="col"><?= __('Estaca Ptv Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->curva_vertical as $curvaVertical): ?>
            <tr>
                <td><?= h($curvaVertical->id) ?></td>
                <td><?= h($curvaVertical->nome) ?></td>
                <td><?= h($curvaVertical->projeto_id) ?></td>
                <td><?= h($curvaVertical->ponto_notavel_verical_id) ?></td>
                <td><?= h($curvaVertical->estaca_pcv_id) ?></td>
                <td><?= h($curvaVertical->estaca_piv_id) ?></td>
                <td><?= h($curvaVertical->estaca_ptv_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CurvaVertical', 'action' => 'view', $curvaVertical->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CurvaVertical', 'action' => 'edit', $curvaVertical->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CurvaVertical', 'action' => 'delete', $curvaVertical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curvaVertical->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Estaca') ?></h4>
        <?php if (!empty($projeto->estaca)): ?>
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
            <?php foreach ($projeto->estaca as $estaca): ?>
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
        <?php if (!empty($projeto->ponto_notavel_horizontal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Coordenada Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->ponto_notavel_horizontal as $pontoNotavelHorizontal): ?>
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
        <?php if (!empty($projeto->ponto_notavel_verical)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Coordenada Id') ?></th>
                <th scope="col"><?= __('Estaca Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->ponto_notavel_verical as $pontoNotavelVerical): ?>
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
    <div class="related">
        <h4><?= __('Related Trecho') ?></h4>
        <?php if (!empty($projeto->trecho)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Ponto Inicial Id') ?></th>
                <th scope="col"><?= __('Ponto Final Id') ?></th>
                <th scope="col"><?= __('Estaca Inicial Id') ?></th>
                <th scope="col"><?= __('Estaca Final Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->trecho as $trecho): ?>
            <tr>
                <td><?= h($trecho->id) ?></td>
                <td><?= h($trecho->nome) ?></td>
                <td><?= h($trecho->ponto_inicial_id) ?></td>
                <td><?= h($trecho->ponto_final_id) ?></td>
                <td><?= h($trecho->estaca_inicial_id) ?></td>
                <td><?= h($trecho->estaca_final_id) ?></td>
                <td><?= h($trecho->projeto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Trecho', 'action' => 'view', $trecho->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Trecho', 'action' => 'edit', $trecho->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trecho', 'action' => 'delete', $trecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trecho->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
