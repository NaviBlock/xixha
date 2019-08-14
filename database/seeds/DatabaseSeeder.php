<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        factory(xixha\User::class)->create();
        //factory(App\User::class)->create();
    }
} 
 