<?php
use Migrations\AbstractMigration;

class CreateUser extends AbstractMigration
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
        $table = $this->table('users')
                ->addColumn('username',string,[
                    'default' => null,
                    'limit'   => 255,
                    'null'  => false
                ])
                ->addColumn('password',string,[
                    'default' => null,
                    'limit'   => 255,
                    'null'  => false
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
