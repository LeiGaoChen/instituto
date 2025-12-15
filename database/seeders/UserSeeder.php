
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()-> count(5)-> create()-> each (fn (($user)=>$user->assignRole('alumno'));
        User::factory()-> count(5)-> create()-> each (fn (($user)=>$user->assignRole('Profesor'));
        $user = User::create([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => 'password',
            'apellido' => 'admin',
            'fechaNacimiento' => '2000-01-01'
        ]);
        
    }
}
