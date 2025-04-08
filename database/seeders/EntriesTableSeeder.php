<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entry;
use illuminate\Database\Eloquent\Factories\hasFactory;
use Database\Factories\EntryFactory;
use App\Models\User;

class EntriesTableSeeder extends Seeder
{
    use hasFactory;
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $users = User::all();
        $users->each(function($user){
            EntryFactory::new()->count(10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
