<?php

use Illuminate\Database\Seeder;

class TownshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('townships')->insert([
        	[
        	'name'	=>	'Yangon',
        	'created_at'	=>	now(),
        	'updated_at'	=>	now(),
       		],        
       		[
        	'name'	=>	'Mandalay',
        	'created_at'	=>	now(),
        	'updated_at'	=>	now(),
       		],   		
       		[
        	'name'	=>	'Pyin Oo Lwin',
        	'created_at'	=>	now(),
        	'updated_at'	=>	now(),
       		],
       		[
        	'name'	=>	'Taunggyi',
        	'created_at'	=>	now(),
        	'updated_at'	=>	now(),
       		],
        ]);
    }
}
