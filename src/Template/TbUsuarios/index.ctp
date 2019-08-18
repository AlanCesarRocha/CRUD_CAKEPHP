<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TbUsuario[]|\Cake\Collection\CollectionInterface $tbUsuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Tb Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbUsuarios as $tbUsuario): ?>
            <tr>
                <td><?= $this->Number->format($tbUsuario->id) ?></td>
                <td><?= h($tbUsuario->nome) ?></td>
                <td><?= h($tbUsuario->mail) ?></td>
                <td><?= h($tbUsuario->telefone) ?></td>
                <td><?= h($tbUsuario->senha) ?></td>
                <td><?= h($tbUsuario->created) ?></td>
                <td><?= h($tbUsuario->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbUsuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbUsuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tbUsuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
