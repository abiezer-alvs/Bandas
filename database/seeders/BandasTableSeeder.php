<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bandas')->insert([
            'banda' => 'Terno Rei',
            'musica' => 'Solidão de Volta',
            'comentario' => 'Minha favorita!!!',
            'imagem' => 'imagens/terno_rei.jpg'
        ]);

        DB::table('bandas')->insert([
            'banda' => 'Selvagens à procura de lei',
            'musica' => 'Carrossel em câmera lenta',
            'comentario' => 'Muito boa!!',
            'imagem' => 'imagens/selvagens_a_procura_de_lei.jpg'
        ]);

        DB::table('bandas')->insert([
            'banda' => 'O grilo',
            'musica' => 'Serenata existencialista',
            'comentario' => 'Maravilhosa',
            'imagem' => 'imagens/o_grilo.jpg'
        ]);
    }
}
