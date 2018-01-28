<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurvaVertical $curvaVertical
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Curva Vertical'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Vertical'), ['controller' => 'PontoNotavelVertical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Vertical'), ['controller' => 'PontoNotavelVertical', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curvaVertical form large-9 medium-8 columns content">
    <?= $this->Form->create($curvaVertical) ?>
    <fieldset>
        <legend><?= __('Add Curva Vertical') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('projeto_id', ['options' => $projeto]);
            echo $this->Form->control('ponto_notavel_verical_id', ['options' => $pontoNotavelVertical]);
            echo $this->Form->control('estaca_pcv_id');
            echo $this->Form->control('estaca_piv_id');
            echo $this->Form->control('estaca_ptv_id', ['options' => $estaca]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
