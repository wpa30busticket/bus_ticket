<?php
use Illuminate\Database\Seeder;
use App\Backend;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Backend::create([
        	'name'	=> 'admin',
        	'email'	=> 'admin@gmail.com',
        	'password'	=> Hash::make("123456")
        ]);
    }
}
