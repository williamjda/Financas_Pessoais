<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoryCosts extends AbstractMigration
{
    //o metodo UP para criar algo no banco de dados ou alterar
    public function up()
    {
        $this->table('category_costs')
            -> addColumn('name', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }
    //o metodo DOWN é quando vc quer reverter algo no banco de dados (desfazer o que o UP fez)
    public function down()
    {
        $this->dropTable('category_costs');
    }
}
