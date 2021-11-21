<?php

use Illuminate\Database\Seeder;

class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investor_list =[
            [
                'id' => 1,
                'user_id' => 2,
                'name' => 'Lyca',
                'address' => 'Philippines',
                'phone' => '94398409',
                'investment' => 70000.00
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'name' => 'James',
                'address' => 'Germany',
                'phone' => '758934',
                'investment' => 65000.00
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'name' => 'vlademir',
                'address' => 'thailand',
                'phone' => '94398409',
                'investment' => 30000.00
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'name' => 'shiela',
                'address' => 'Taiwan',
                'phone' => '9085483',
                'investment' => 80000.00
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'name' => 'zxkech',
                'address' => 'Ireland',
                'phone' => '458993',
                'investment' => 40000.00
            ]
            
        ];
        foreach($investor_list as $investor){
            \App\Investor::create($investor);
        }
    }
}
