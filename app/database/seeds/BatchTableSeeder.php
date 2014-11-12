<?php

class BatchTableSeeder extends Seeder {

    public function run()
    {
        DB::table('batch')->delete();

        $batches = array(
        	array(
                'name'    =>  '2010-2011',
        		'created_at'	=>	date('Y-m-d H:i:s'),
        		'updated_at'	=>	date('Y-m-d H:i:s')
        	),
            array(
                'name'    =>  '2011-2012',
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            ),
            array(
                'name'    =>  '2012-2013',
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            )
        );

        DB::table('batch')->insert($batches);
    }

}