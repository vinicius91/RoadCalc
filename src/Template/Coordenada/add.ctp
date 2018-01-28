<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenada $coordenada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coordenada'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estaca'), ['controller' => 'Estaca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estaca'), ['controller' => 'Estaca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Horizontal'), ['controller' => 'PontoNotavelHorizontal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto Notavel Verical'), ['controller' => 'PontoNotavelVerical', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordenada form large-9 medium-8 columns content">
    <?= $this->Form->create($coordenada) ?>
    <fieldset>
        <legend><?= __('Add Coordenada') ?></legend>
        <?php
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('utm_x');
            echo $this->Form->control('utm_y');
            echo $this->Form->control('utm_z');
            echo $this->Form->control('utm_letter');
            echo $this->Form->control('utm_number');
            echo $this->Form->control('geom');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
