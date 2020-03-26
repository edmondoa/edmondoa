<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $people
 */
?>
<?php
$this->extend('/Layout/default');?>

<div class="col-sm-12 main">
    <h3><?= __('People') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mobile Phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Office Phone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
            <tr>
                <td><?= $this->Number->format($person->id) ?></td>
                <td><?= h($person->name) ?></td>
                <td><?= $this->Number->format($person->gender) ?></td>
                <td><?= h($person->birthdate) ?></td>
                <td><?= h($person->phones[0]->mobile_number) ?></td>
                <td><?= h($person->phones[0]->office_number) ?></td>
                <td class="actions">
                    <button class="btn btn-sm btn-default"><?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?></button>
                    <button class="btn btn-sm btn-info"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?></button>
                    <button class="btn btn-sm btn-danger"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?></button>
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
