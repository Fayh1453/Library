<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adress Entity
 *
 * @property int $id
 * @property string $street
 * @property int $number
 * @property string $zip
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Ville $ville
 * @property \App\Model\Entity\User $user
 */
class Adress extends Entity
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
        'ville' => true,
        'street' => true,
        'number' => true,
        'zip' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true
    ];
}
