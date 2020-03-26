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
        <legend><?= __('Add Person') ?></legend>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <select name="gender" class="form-control">
                <option>Choose one</option>
                <option value="0" >Male</option>
                <option value="1">FeMale</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" placeholder="Birthdate">
        </div>
        <div class="form-group">
            <label for="name">Mobile Number</label>
            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
        </div>
        <div class="form-group">
            <label for="name">Office Number</label>
            <input type="text" class="form-control"  name="office_number" placeholder="Office Number">
        </div>
        <div class="form-group">
            <label for="name">Address 1</label>
            <input type="text" class="form-control"  name="address1" placeholder="Address 1">
        </div>
        <div class="form-group">
            <label for="name">Address 2</label>
            <input type="text" class="form-control" name="address2" placeholder="Address 2">
        </div>
        <div class="form-group">
            <label for="name">City</label>
            <input type="text" class="form-control"  name="city" placeholder="City"/>
        </div>
        <div class="form-group">
            <label for="name">Zip</label>
            <input type="text" class="form-control"  name="zip" placeholder="Zip">
        </div>
        <div class="form-group">
            <label for="name">Country</label>
            <input type="text" class="form-control"" name="country" placeholder="Country">
        </div>

       
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
