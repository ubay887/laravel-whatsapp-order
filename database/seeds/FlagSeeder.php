<?php

use Illuminate\Database\Seeder;

use App\Flag;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flag::create([
            'name' => 'Promo',
            'name' => 'primary',
        ]);
        
        Flag::create([
            'name' => 'Top-seller',
            'name' => 'success',
        ]);
    }
}
