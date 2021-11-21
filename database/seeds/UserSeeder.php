<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Carpio',
                'fname' => 'Mark',
                'address' => 'Taiwan',
                'phone' => '0943873943',
                'email' => 'carpioM@example.com',
                'password' => bcrypt('awesome1')
            ],
            [
                'id' => 2,
                'lname' => 'Santos',
                'fname' => 'Genesis',
                'address' => 'Philippines',
                'phone' => '09438739435',
                'email' => 'Santos43@example.com',
                'password' => bcrypt('awesome2')
            ],
            [
                'id' => 3,
                'lname' => 'Sucajel',
                'fname' => 'Paguda',
                'address' => 'Indonesia',
                'phone' => '09438739435',
                'email' => 'paguda23@example.com',
                'password' => bcrypt('awesome3')
            ],
            [
                'id' => 4,
                'lname' => 'tucker',
                'fname' => 'james',
                'address' => 'Miami',
                'phone' => '09438739435',
                'email' => 'tucker@example.com',
                'password' => bcrypt('awesome4')
            ],
            [
                'id' => 5,
                'lname' => 'pucki',
                'fname' => 'moh',
                'address' => 'pakistan',
                'phone' => '09438739435',
                'email' => 'pukci@example.com',
                'password' => bcrypt('awesome5')
            ]
        ];
        foreach($user_list as $user){
            \App\User::create($user);
        }
    }
}
