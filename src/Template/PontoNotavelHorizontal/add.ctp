<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PontoNotavelHorizontal $pontoNotavelHorizontal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['controller' => 'Coordenada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordenada'), ['controller' => 'Coordenada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pontoNotavelHorizontal form large-9 medium-8 columns content">
    <?= $this->Form->create($pontoNotavelHorizontal) ?>
    <fieldset>
        <legend><?= __('Add Ponto Notavel Horizontal') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('coordenada_id', ['options' => $coordenada]);
            echo $this->Form->control('projeto_id', ['options' => $projeto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
