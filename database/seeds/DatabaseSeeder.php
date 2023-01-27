<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (!App\User::find(1)){
            factory(App\User::class, 1)->create();
        }

        // factory(App\ticket::class, 100)->create()->each(function ($ticket) {
        //     $ticket->messages()->saveMany(factory(App\message::class,5)->make());
        // });

    }
}
