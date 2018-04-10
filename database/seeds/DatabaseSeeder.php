<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into encomendas (nome_cliente, numero_encomenda, cpf, data_expedicao) values (?,?,?,?)', array('Deangelles Debastiani', 523645, '529.714.572.49', '2018-12-01'));

    }
}
