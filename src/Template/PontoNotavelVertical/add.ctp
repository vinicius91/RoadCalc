<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PontoNotavelVertical $pontoNotavelVertical
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Vertical'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pontoNotavelVertical form large-9 medium-8 columns content">
    <?= $this->Form->create($pontoNotavelVertical) ?>
    <fieldset>
        <legend><?= __('Add Ponto Notavel Vertical') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('coordenada_id', ['options' => $coordenada]);
            echo $this->Form->control('estaca_id', ['options' => $estaca]);
            echo $this->Form->control('projeto_id', ['options' => $projeto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
