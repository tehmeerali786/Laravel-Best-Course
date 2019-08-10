<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $r1 = [


        	'user_id' => 1,
        	'discussion_id' => 1,
        	'content' => 'Maecenas id nunc scelerisque, pulvinar dolor et, semper dolor. Aliquam vestibulum iaculis justo, efficitur tincidunt nunc dapibus vitae. Phasellus tincidunt tempor augue, quis commodo neque. Cras ac sollicitudin erat.',

        ];

        $r2 = [


        	'user_id' => 1,
        	'discussion_id' => 2,
        	'content' => 'Maecenas id nunc scelerisque, pulvinar dolor et, semper dolor. Aliquam vestibulum iaculis justo, efficitur tincidunt nunc dapibus vitae. Phasellus tincidunt tempor augue, quis commodo neque. Cras ac sollicitudin erat.',

        ];

        $r3 = [


        	'user_id' => 2,
        	'discussion_id' => 3,
        	'content' => 'Maecenas id nunc scelerisque, pulvinar dolor et, semper dolor. Aliquam vestibulum iaculis justo, efficitur tincidunt nunc dapibus vitae. Phasellus tincidunt tempor augue, quis commodo neque. Cras ac sollicitudin erat.',

        ];

        $r4 = [


        	'user_id' => 4,
        	'discussion_id' => 4,
        	'content' => 'Maecenas id nunc scelerisque, pulvinar dolor et, semper dolor. Aliquam vestibulum iaculis justo, efficitur tincidunt nunc dapibus vitae. Phasellus tincidunt tempor augue, quis commodo neque. Cras ac sollicitudin erat.',

        ];

        App\Reply::create($r1);
        App\Reply::create($r2);
        App\Reply::create($r3);
        App\Reply::create($r4);
    }
}
