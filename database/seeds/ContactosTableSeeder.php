<?php

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            'Nombre' => str_random(10),
            'Apellido' => str_random(10),
            'Telefeno' => str_random(10),
            'Correo' => str_random(10).'@gmail.com'
        ]);
    }
}
