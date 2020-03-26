<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<?php
$this->extend('/Layout/default');?>


<div class="col-sm-6">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= h($person->name) ?>">
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <select name="gender" class="form-control">
                <option>Choose one</option>
                <option value="0" <?=($person->gender==0) ? "selected" : ""?>>Male</option>
                <option value="1" <?=($person->gender==1) ? "selected" : ""?>>FeMale</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" value="<?= h(date("mm/dd/Y",strtotime($person->birthdate))) ?>">
        </div>
        <div class="form-group">
            <label for="name">Mobile Number</label>
            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number" value="<?= h($person->phones[0]->mobile_number) ?>">
        </div>
        <div class="form-group">
            <label for="name">Office Number</label>
            <input type="text" class="form-control"  name="office_number" placeholder="Office Number" value="<?= h($person->phones[0]->office_number) ?>">
        </div>
        <div class="form-group">
            <label for="name">Address 1</label>
            <input type="text" class="form-control"  name="address1" placeholder="Address 1" value="<?= h($person->addresses[0]->address1) ?>">
        </div>
        <div class="form-group">
            <label for="name">Address 2</label>
            <input type="text" class="form-control" name="address2" placeholder="Address 2" value="<?= h($person->addresses[0]->address2) ?>">
        </div>
        <div class="form-group">
            <label for="name">City</label>
            <input type="text" class="form-control"  name="city" placeholder="City" value="<?= h($person->addresses[0]->city) ?>"/>
        </div>
        <div class="form-group">
            <label for="name">Zip</label>
            <input type="text" class="form-control"  name="zip" placeholder="Zip" value="<?= h($person->addresses[0]->zip) ?>">
        </div>
        <div class="form-group">
            <label for="name">Country</label>
            <input type="text" class="form-control"" name="country" placeholder="Country" value="<?= h($person->addresses[0]->country) ?>">
        </div>

       
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
