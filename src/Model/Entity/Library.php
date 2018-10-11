<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Library Entity
 *
 * @property int $id
 * @property int $adresse_id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Adress $adress
 * @property \App\Model\Entity\User $user
 */
class Library extends Entity
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
        'adresse_id' => true,
        'name' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'adress' => true,
        'user' => true
    ];
}
