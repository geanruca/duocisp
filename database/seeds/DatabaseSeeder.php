<?php

use Illuminate\Database\Seeder;
use App\Tipo_analisis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Tipo_analisis::class, 1)->create();
        $tipos =['micotoxinas','metales pesados','plaguicidas','marea roja','bacterias nocivas'];
        foreach($tipos as $t){
            Tipo_analisis::insert([
                'nombre'=>$t
            ]);
        }
        factory(App\Particular::class, 20)->create();
        factory(App\Telefono::class, 20)->create();
        factory(App\Contacto::class, 20)->create();
        factory(App\Empresa::class, 20)->create();
        factory(App\Empleado::class, 20)->create();
        factory(App\Analisis_muestras::class, 20)->create();
        factory(App\Resultado_analisis::class, 20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
