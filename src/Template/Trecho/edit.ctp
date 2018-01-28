<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trecho $trecho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trecho->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trecho->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trecho'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trecho form large-9 medium-8 columns content">
    <?= $this->Form->create($trecho) ?>
    <fieldset>
        <legend><?= __('Edit Trecho') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('ponto_inicial_id');
            echo $this->Form->control('ponto_final_id', ['options' => $pontoNotavelHorizontal]);
            echo $this->Form->control('estaca_inicial_id');
            echo $this->Form->control('estaca_final_id', ['options' => $estaca]);
            echo $this->Form->control('projeto_id', ['options' => $projeto]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
