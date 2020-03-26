<?php
use Migrations\AbstractMigration;

class CreatePhones extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('phones')
                    ->addColumn('people_id',integer)
                    ->addColumn('mobile_number', string)
                    ->addColumn('office_number', string);
        $table->create();
    }
}
