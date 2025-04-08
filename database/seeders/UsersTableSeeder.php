<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
			'name' => 'Juan',
			'email' => 'hola@email.com',
			'password' => bcrypt('juan1234')
		]);
 
		User::factory(10)->create();
    }
}
