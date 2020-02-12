<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos pobres en leucocitos',
            'short-name' => 'grpl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos frescos',
            'short-name' => 'grf'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos filtrados',
            'short-name' => 'grfl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos filtrados irradiados',
            'short-name' => 'grfli'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos irradiados',
            'short-name' => 'gri'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas',
            'short-name' => 'up'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas filtradas irradiadas',
            'short-name' => 'upfi'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas filtradas',
            'short-name' => 'upf'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas irradiadas',
            'short-name' => 'upi'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas pobres en leucocitos',
            'short-name' => 'ppl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas pobres en leucocitos irradiadas',
            'short-name' => 'ppli'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aferesis',
            'short-name' => 'ppa'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aferesis irradiadas',
            'short-name' => 'ppai'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plasma fresco congelado',
            'short-name' => 'pfc'
        ]);

        \DB::table('products')->insert([
            'name' => 'Crioprecipitado',
            'short-name' => 'criop'
        ]);
    }
}
