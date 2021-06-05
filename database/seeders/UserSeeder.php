<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Snehashis Roy',
            'email' => 'snehashis.roy.bd@gmail.com',
            'password' => \Hash::make('password'),
        ]);

        Role::create(['name' => 'admin']);

        User::find(1)->assignRole('admin');
    }
}
