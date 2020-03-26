<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $name
 * @property int $gender
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 */
class People extends Entity
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
        'name' => true,
        'gender' => true,
        'birthdate' => true,
        'created_at' => true,
        'updated_at' => true,
    ];

    protected function _getAddress()
    {
        return $this->addresses[0]->address1 . '  ' . $this->addresses[0]->address2." ".$this->addresses[0]->city . '  ' . $this->addresses[0]->country;
    }
}
