<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurvaHorizontal $curvaHorizontal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Curva Horizontal'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projeto'), ['controller' => 'Projeto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projeto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trecho'), ['controller' => 'Trecho', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trecho'), ['controller' => 'Trecho', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curvaHorizontal form large-9 medium-8 columns content">
    <?= $this->Form->create($curvaHorizontal) ?>
    <fieldset>
        <legend><?= __('Add Curva Horizontal') ?></legend>
        <?php
            echo $this->Form->control('raio');
            echo $this->Form->control('superelevacao');
            echo $this->Form->control('lc');
            echo $this->Form->control('transicao');
            echo $this->Form->control('projeto_id', ['options' => $projeto]);
            echo $this->Form->control('trecho_inicial_id');
            echo $this->Form->control('trecho_final_id', ['options' => $trecho]);
            echo $this->Form->control('estaca_pc_id');
            echo $this->Form->control('estaca_pt_id');
            echo $this->Form->control('estaca_ts_id');
            echo $this->Form->control('estaca_sc_id');
            echo $this->Form->control('estaca_cs_id');
            echo $this->Form->control('estaca_st_id', ['options' => $estaca, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
