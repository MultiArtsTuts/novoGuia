<?php

use Illuminate\Database\Seeder;
use guiasbn\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 30;
        factory(Client::class, $count)->create();
    }
}
