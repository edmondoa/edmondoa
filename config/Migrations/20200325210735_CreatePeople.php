<?php
use Migrations\AbstractMigration;

class CreatePeople extends AbstractMigration
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
        $table = $this->table('people')
                ->addColumn('name',string,[
                    'default' => null,
                    'limit'   => 255,
                    'null'  => false
                ])
                ->addColumn('gender', integer,[
                    'default'   => null,
                    'limit'     => 2,
                    'null'      => false
                ])
                ->addColumn('birthdate', date,[
                    'default'   => null,
                    'null'      => false
                ])
                ->addColumn('created_at', datetime,[
                    'default'   => null,
                    'null'      => false
                ])
                ->addColumn('updated_at', datetime,[
                    'default'   => null,
                    'null'      => false
                ]);
        $table->create();
    }
}
