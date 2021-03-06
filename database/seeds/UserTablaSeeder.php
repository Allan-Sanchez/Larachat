<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')]);

        User::create([
            'name' => 'secretary',
            'email' => 'secretary@gmail.com',
            'password' => bcrypt('admin123')]);
    }
}
