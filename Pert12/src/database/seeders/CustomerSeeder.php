<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'name' => 'iqbal bn',
        ]);

        Customer::create([
            'name' => 'Jarsex',
        ]);
    }
}
