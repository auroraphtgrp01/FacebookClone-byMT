<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_facebooks')->delete();

        DB::table('user_facebooks')->truncate();

        DB::table('user_facebooks')->insert([
            [
                'firstname' =>   'Lê',
                'lastname' =>    'Minh Tuấn',
                'username' =>    'minhtuan2003',
                'password' =>    '123',
                'email' =>   'sliverknight4869@gmail.com',
                'phone' =>   '0982038201',
                'dateofbirth' => '30/10/2003',
                'friend' =>  '2,3,4,5',
                'count_follow' =>    '1000',
                'about' =>   'Tui là Minh Tuấn',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX8xhm75&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAXyV2i7BjCsU6DxXbwGzmnnS9FCG8t-t2CRbeSWScYtg&oe=64DFAEC6',
            ],
            [
                'firstname' =>   'Mai',
                'lastname' =>    'Phước Đức',
                'username' =>    'phuocduc2003',
                'password' =>    '12345',
                'email' =>   'phuocduc2003@gmail.com',
                'phone' =>   '0982738492',
                'dateofbirth' => '05/05/2003',
                'friend' =>  '1,3,4,5',
                'count_follow' =>    '500',
                'about' =>   'Tui là Đức Đây',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/361588931_1605924319900402_4153018101253254393_n.jpg?stp=dst-jpg_s320x320&_nc_cat=104&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=QjgJ9ZMB-LsAX9IFphs&_nc_ht=scontent.fdad3-4.fna&oh=00_AfBDtdDQ3ey6zyN6IM1ZJSi8_lbRdd2KFdEhsBQitF89TA&oe=64E1171C',
            ], [
                'firstname' =>   'Huỳnh',
                'lastname' =>    'Huy Hoàng',
                'username' =>    'huyhoang2003',
                'password' =>    '321',
                'email' =>   'huyhoang2003@gmail.com',
                'phone' =>   '0827384923',
                'dateofbirth' => '09/08/2003',
                'friend' =>  '2,1,4,5',
                'count_follow' =>    '900',
                'about' =>   'Tui là Hoàng đây',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/366380399_668772025157259_2104538913295486493_n.jpg?stp=dst-jpg_p320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=5u2Wa3iWptoAX-kJUhJ&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAxzBBpnVFB6Dit2BuT8zVRW70DJ9hNSWewxS6ToO2n-g&oe=64E00790',
            ], [
                'firstname' =>   'Phan',
                'lastname' =>    'Trần Thiện Ân',
                'username' =>    'thienan2003',
                'password' =>    '12345',
                'email' =>   'thienan2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '01/01/2003',
                'friend' =>  '2,3,1,5',
                'count_follow' =>    '700',
                'about' =>   'Tui là Thiện Ân đây',
                'avatar' =>  'https://scontent.fdad3-1.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=-tIpWnFaNRwAX93Vkst&_nc_ht=scontent.fdad3-1.fna&oh=00_AfAZNfwMtzzcu6DFnes7xjGKHlaepDBjaSsMGGzNW3aj-Q&oe=6502AE78',
            ],
        ]);
    }
}
