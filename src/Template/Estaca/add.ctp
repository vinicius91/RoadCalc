<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estaca $estaca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estaca form large-9 medium-8 columns content">
    <?= $this->Form->create($estaca) ?>
    <fieldset>
        <legend><?= __('Add Estaca') ?></legend>
        <?php
            echo $this->Form->control('numero');
            echo $this->Form->control('intermediario');
            echo $this->Form->control('relatorio');
            echo $this->Form->control('coordenada_id', ['options' => $coordenada]);
            echo $this->Form->control('projeto_id', ['options' => $projeto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
