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
            'shortName' => 'grpl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos frescos',
            'shortName' => 'grf'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos filtrados',
            'shortName' => 'grfl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos filtrados irradiados',
            'shortName' => 'grfli'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos irradiados',
            'shortName' => 'gri'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas',
            'shortName' => 'up'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas filtradas irradiadas',
            'shortName' => 'upfi'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas filtradas',
            'shortName' => 'upf'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas irradiadas',
            'shortName' => 'upi'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas pobres en leucocitos',
            'shortName' => 'ppl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas pobres en leucocitos irradiadas',
            'shortName' => 'ppli'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aferesis',
            'shortName' => 'ppa'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aferesis irradiadas',
            'shortName' => 'ppai'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plasma fresco congelado',
            'shortName' => 'pfc'
        ]);

        \DB::table('products')->insert([
            'name' => 'Crioprecipitado',
            'shortName' => 'criop'
        ]);
    }
}
