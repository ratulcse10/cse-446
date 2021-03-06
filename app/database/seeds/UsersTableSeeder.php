<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(
        	array(
                'email'    =>  'admin@sust.edu',
                'name'    =>  'Admin',
                'password'      =>  Hash::make('admin'),

        		'role_id'	    =>	1,
                
        		'created_at'	=>	date('Y-m-d H:i:s'),
        		'updated_at'	=>	date('Y-m-d H:i:s')
        	),
            array(
                'email'    =>  'faculty@sust.edu',
                'name'    =>  'Faculty',
                'password'      =>  Hash::make('faculty'),
                'role_id'       =>  3,
                
                'created_at'    =>  date('Y-m-d H:i:s'),

                'updated_at'    =>  date('Y-m-d H:i:s')
            ),
            array(
                'email'    =>  'student@sust.edu',
                'name'    =>  'Student',
                'password'      =>  Hash::make('student'),
                'role_id'       =>  2,
                
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            ),
             array(
                'email'    =>  'cr@sust.edu',
                'name'    =>  'CR',
                'password'      =>  Hash::make('cr'),
                'role_id'       =>  4,
                
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            )

        );

        DB::table('users')->insert($users);
    }

}