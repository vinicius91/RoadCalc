<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Classe Projeto'), ['controller' => 'ClasseProjeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classe Projeto'), ['controller' => 'ClasseProjeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curva Horizontal'), ['controller' => 'CurvaHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curva Horizontal'), ['controller' => 'CurvaHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curva Vertical'), ['controller' => 'CurvaVertical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curva Vertical'), ['controller' => 'CurvaVertical', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trecho'), ['controller' => 'Trecho', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trecho'), ['controller' => 'Trecho', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projeto form large-9 medium-8 columns content">
    <?= $this->Form->create($projeto) ?>
    <fieldset>
        <legend><?= __('Add Projeto') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('mapa_rederizado');
            echo $this->Form->control('estacas_geradas');
            echo $this->Form->control('classe_projeto_id', ['options' => $classeProjeto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
