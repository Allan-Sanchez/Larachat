<?php

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
        $this->call(UserTablaSeeder::class);
        $this->call(ConversationsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
