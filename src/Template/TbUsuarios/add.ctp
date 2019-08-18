<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TbUsuario $tbUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($tbUsuario) ?>
    <fieldset>
        <legend><?= __('Add Tb Usuario') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('mail');
            echo $this->Form->control('telefone');
            echo $this->Form->control('senha');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
