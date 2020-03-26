<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<?php
$this->extend('/Layout/default');?>

<div class="col-md-6">
    
    <h3><?= h($person->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($person->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?=(($person->gender) ? "Female" : "Male") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($person->birthdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Number') ?></th>
            <td><?= h((!empty($person->phones )) ? $person->phones[0]->mobile_number: "") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Office Number') ?></th>
            <td><?= h((!empty($person->phones )) ? $person->phones[0]->office_number: "") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 1') ?></th>
            <td><?= h((!empty($person->addresses )) ? $person->addresses[0]->address1: "") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 2') ?></th>
            <td><?= h((!empty($person->addresses )) ? $person->addresses[0]->address2: "") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h((!empty($person->addresses )) ? $person->addresses[0]->city: "") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h((!empty($person->addresses )) ? $person->addresses[0]->zip: "") ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h((!empty($person->addresses ))? $person->addresses[0]->country: "") ?></td>
        </tr>
    </table>
    <button type="button" class="btn btn-info"><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $person->id]) ?> </button>
    <button type="button" class="btn btn-danger"><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?></button>
</div>
