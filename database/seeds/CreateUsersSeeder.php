<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@itsolutionstuff.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Owner',
               'email'=>'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Employee',
                'email'=>'employee@itsolutionstuff.com',
                 'is_admin'=>'3',
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Tenant',
                'email'=>'tenant@itsolutionstuff.com',
                 'is_admin'=>'2',
                'password'=> bcrypt('123456'),
             ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}