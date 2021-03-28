<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $inserts = [];

        // for ($i=0; $i < 100000; $i++) { 
        //     array_push($inserts, [
        //         'nome' => Str::random(10)
        //     ]);
        // }

        // foreach (collect($inserts)->chunk(1000) as $insertsChunk) {
        //     DB::table('alunos')->insert($insertsChunk->toArray());
        // }

        factory(App\AlunoTurma::class, 10000)->create();
    }
}
