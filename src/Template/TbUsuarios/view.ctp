<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TbUsuario $tbUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Usuario'), ['action' => 'edit', $tbUsuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Usuario'), ['action' => 'delete', $tbUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbUsuarios view large-9 medium-8 columns content">
    <h3><?= h($tbUsuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tbUsuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($tbUsuario->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($tbUsuario->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($tbUsuario->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tbUsuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tbUsuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tbUsuario->modified) ?></td>
        </tr>
    </table>
</div>
