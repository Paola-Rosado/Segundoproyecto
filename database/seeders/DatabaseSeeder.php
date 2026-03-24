<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
            /*'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        $user=new User();
        $user->name='Paola Pech Rosado';
        $user->email='paolapech@gmail.com';
        $user->password=bcrypt('123456');
        $user->save();

       /* $this->call([
         PaginasSeeder::class
         ]);*/
        }
}
