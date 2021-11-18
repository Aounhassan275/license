<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [ 'name' => 'aounhassan1',
            'email' => 'admin1@mail.com',
            'type' => '1',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aounhassan2',
            'email' => 'admin2@mail.com',
            'type' => '1',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);   
        DB::table('settings')->insert([
            [ 'download_button' => '1'],
        ]);

    }
}
