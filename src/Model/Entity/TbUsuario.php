<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbUsuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $mail
 * @property string $telefone
 * @property string $senha
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class TbUsuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'mail' => true,
        'telefone' => true,
        'senha' => true,
        'created' => true,
        'modified' => true
    ];
}
