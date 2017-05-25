<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();
        Status::create([
            'id_status'=>'1',
            'descricao'=>'pendente'
        ]);
        Status::create([
            'id_status'=>'2',
            'descricao'=>'enviando'
        ]);
        Status::create([
            'id_status'=>'3',
            'descricao'=>'enviado'
        ]);
    }
}
