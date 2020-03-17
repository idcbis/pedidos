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
            'name' => 'Glóbulos rojos pobres en leucocitos frescos',
            'shortName' => 'grplf'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos filtrados',
            'shortName' => 'grfl'
        ]);

        \DB::table('products')->insert([
            'name' => 'Glóbulos rojos filtrados frescos',
            'shortName' => 'grflf'
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
            'name' => 'Unidades pediátricas filtradas irradiadas',
            'shortName' => 'upfi'
        ]);

        \DB::table('products')->insert([
            'name' => 'Unidades pediátricas filtradas',
            'shortName' => 'upf'
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
            'name' => 'Plaquetas por aféresis',
            'shortName' => 'ppa'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aféresis filtradas',
            'shortName' => 'ppaf'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aféresis irradiadas',
            'shortName' => 'ppai'
        ]);

        \DB::table('products')->insert([
            'name' => 'Plaquetas por aféresis filtradas irradiadas',
            'shortName' => 'ppafi'
        ]);

        \DB::table('products')->insert([
            'name' => 'Alícuota de plaquetas por aféresis',
            'shortName' => 'appa'
        ]);

        \DB::table('products')->insert([
            'name' => 'Alícuota de plaquetas por aféresis irradiada',
            'shortName' => 'appai'
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
