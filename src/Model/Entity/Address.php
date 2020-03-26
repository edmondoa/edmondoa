<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property int $people_id
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $zip
 * @property string $country
 *
 * @property \App\Model\Entity\Person $person
 */
class Address extends Entity
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
        'people_id' => true,
        'address1' => true,
        'address2' => true,
        'city' => true,
        'zip' => true,
        'country' => true,
        'person' => true,
    ];
}
