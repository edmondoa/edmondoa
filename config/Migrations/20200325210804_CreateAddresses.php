<?php
use Migrations\AbstractMigration;

class CreateAddresses extends AbstractMigration
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
        $table = $this->table('addresses')
                    ->addColumn('people_id',integer)
                    ->addColumn('address1', string)
                    ->addColumn('address2', string)
                    ->addColumn('city', string)
                    ->addColumn('zip', string)
                    ->addColumn('country', string);

        $table->create();
    }
}
