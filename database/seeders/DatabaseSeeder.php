<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //se llama a la funcion que crea los roles
        //$this->call(RolSeeder::class);
        //$this->call(UserSeeder::class);
        $this->call(Curiosidades_p_r_Seeder::class);
        $this->call(Culturales_p_r_Seeder::class);
        $this->call(Adoraciones_p_r_Seeder::class);


    }
}
