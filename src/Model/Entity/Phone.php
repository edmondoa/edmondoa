<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Phone Entity
 *
 * @property int $id
 * @property int $people_id
 * @property string $mobile_number
 * @property string $office_number
 *
 * @property \App\Model\Entity\Person $person
 */
class Phone extends Entity
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
        'mobile_number' => true,
        'office_number' => true,
        'person' => true,
    ];
}
