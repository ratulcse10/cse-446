<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        

		$roles = [
			[
				'role_title'	=>	'Admin'
				
			],
			[
				'role_title'	=>	'Student'
				
			],
			[
				'role_title'	=>	'Faculty'
				
			],
			[
				'role_title'	=>	'CR'
				
			]



		];

        DB::table('roles')->insert($roles);
    }

}