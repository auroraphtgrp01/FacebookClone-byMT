<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('user_facebooks')->delete();

        DB::table('user_facebooks')->truncate();

        DB::table('user_facebooks')->insert([
            [
                'firstname' =>   'Lê',
                'lastname' =>    'Minh Tuấn',
                'username' =>    'minhtuan2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'sliverknight4869@gmail.com',
                'phone' =>   '0982038201',
                'dateofbirth' => '2003-10-30',
                'count_follow' =>    '1000',
                'about' =>   'Tui là Minh Tuấn',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/366670743_1504730726732988_8894476486680721584_n.jpg?stp=dst-jpg_s320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=qj0DWeBr16wAX8xhm75&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAXyV2i7BjCsU6DxXbwGzmnnS9FCG8t-t2CRbeSWScYtg&oe=64DFAEC6',
            ],
            [
                'firstname' =>   'Mai',
                'lastname' =>    'Phước Đức',
                'username' =>    'phuocduc2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'phuocduc2003@gmail.com',
                'phone' =>   '0982738492',
                'dateofbirth' => '2003-05-05',
                'count_follow' =>    '500',
                'about' =>   'Tui là Đức Đây',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/361588931_1605924319900402_4153018101253254393_n.jpg?stp=dst-jpg_s320x320&_nc_cat=104&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=QjgJ9ZMB-LsAX9IFphs&_nc_ht=scontent.fdad3-4.fna&oh=00_AfBDtdDQ3ey6zyN6IM1ZJSi8_lbRdd2KFdEhsBQitF89TA&oe=64E1171C',
            ], [
                'firstname' =>   'Huỳnh',
                'lastname' =>    'Huy Hoàng',
                'username' =>    'huyhoang2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'huyhoang2003@gmail.com',
                'phone' =>   '0827384923',
                'dateofbirth' => '2003-08-09',
                'count_follow' =>    '900',
                'about' =>   'Tui là Hoàng đây',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/366380399_668772025157259_2104538913295486493_n.jpg?stp=dst-jpg_p320x320&_nc_cat=100&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=5u2Wa3iWptoAX-kJUhJ&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAxzBBpnVFB6Dit2BuT8zVRW70DJ9hNSWewxS6ToO2n-g&oe=64E00790',
            ], [
                'firstname' =>   'Mai',
                'lastname' =>    'Thuỳ Nhung',
                'username' =>    'tnhung2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'tnhung2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-04-23',
                'count_follow' =>    '700',
                'about' =>   'Tui là Nhung Q đây',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/366642140_1831264517276958_5076936335871008733_n.jpg?stp=dst-jpg_p320x320&_nc_cat=104&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=hamm63dkc3oAX8qfvF5&_nc_ht=scontent.fdad3-4.fna&oh=00_AfDcc14ki-yy7wjjgz5NO3qaQhhObUDvZdaGIbaZezNf6A&oe=64DF4DF1',
            ],
            [
                'firstname' =>   'Trần',
                'lastname' =>    'Thị Hiền',
                'username' =>    'hientran2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'hientran2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-09-15',
                'count_follow' =>    '700',
                'about' =>   'Tui là Hiền đây',
                'avatar' =>  'https://scontent.fdad3-1.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=-tIpWnFaNRwAX93Vkst&_nc_ht=scontent.fdad3-1.fna&oh=00_AfAZNfwMtzzcu6DFnes7xjGKHlaepDBjaSsMGGzNW3aj-Q&oe=6502AE78',
            ],
            [
                'firstname' =>   'Nguyễn',
                'lastname' =>    'Anh Quốc',
                'username' =>    'quocbeo2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'quocbeo2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-01-01',
                'count_follow' =>    '700',
                'about' =>   'Tui là Quốc Béo đây',
                'avatar' =>  'https://scontent.fhan5-11.fna.fbcdn.net/v/t39.30808-1/330927643_6326196167400312_7836379259075371088_n.jpg?stp=dst-jpg_p320x320&_nc_cat=111&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=oyoiUpp-NVoAX_8YZN4&_nc_ht=scontent.fhan5-11.fna&oh=00_AfB5uZObjzN_l8wNvrsE7zb-weBcDCxXW9sZX5_aMzpNRw&oe=64DF4117',
            ],
            [
                'firstname' =>   'Nguyễn',
                'lastname' =>    'Hồng Nhung',
                'username' =>    'nhungbinh2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'nhungbinh2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-04-15',
                'count_follow' =>    '700',
                'about' =>   'Tui là Nhung Bình đây',
                'avatar' =>  'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-1/363411237_1281442829407111_3444311202607650134_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=xWQXqLr9MkMAX_3aUtg&_nc_ht=scontent.fdad3-5.fna&oh=00_AfASdcWGZq7rIrRjHjJ9yz0aPE8ES0t60YDcGxOQbQbZbg&oe=64E0C3D4',
            ],
            [
                'firstname' =>   'Trần Đặng',
                'lastname' =>    'Hoàng My',
                'username' =>    'mydientien2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'mydientien2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-11-07',
                'count_follow' =>    '700',
                'about' =>   'Tui là My Điện Tiến đây',
                'avatar' =>  'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-1/366352652_674771241223813_8805945456621441420_n.jpg?stp=dst-jpg_p320x320&_nc_cat=104&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=YBJ5gDZFX60AX9d4L-Y&_nc_ht=scontent.fdad3-4.fna&oh=00_AfDbADf4xllYmpT8qfhYscaQLIR9tcZYkyb4g8HAQLPkEA&oe=64DF7F4F',
            ],
            [
                'firstname' =>   'Quang',
                'lastname' =>    'Huy',
                'username' =>    'quanghuy2003',
                'password' =>    '$10$kRAUfKqoF7fYKFNtAZeTP.eZ5eLjK8q.fluecsirWm6J5e1URNQPK',
                'email' =>   'quanghuy2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-01-01',
                'count_follow' =>    '700',
                'about' =>   'Tui là Quang Huy đây',
                'avatar' =>  'https://scontent.fdad3-1.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=-tIpWnFaNRwAX93Vkst&_nc_ht=scontent.fdad3-1.fna&oh=00_AfAZNfwMtzzcu6DFnes7xjGKHlaepDBjaSsMGGzNW3aj-Q&oe=6502AE78',
            ],
        ]);
        DB::table('friend_requests')->delete();

        DB::table('friend_requests')->truncate();

        DB::table('friend_requests')->insert([
            [
                'id_user_request' =>   5,
                'id_user_receive' =>   1,
            ],
            [
                'id_user_request' =>   6,
                'id_user_receive' =>   1,
            ],
            [
                'id_user_request' =>   7,
                'id_user_receive' =>   1,
            ],
            [
                'id_user_request' =>   8,
                'id_user_receive' =>   1,
            ],
            [
                'id_user_request' =>   9,
                'id_user_receive' =>   1,
            ],

        ]);
        DB::table('relationships')->delete();

        DB::table('relationships')->truncate();

        DB::table('relationships')->insert([
            [
                'user_x' => 1,
                'user_y' => 2,
            ],
            [
                'user_x' => 1,
                'user_y' => 3,
            ],
            [
                'user_x' => 1,
                'user_y' => 4,
            ],
            [
                'user_x' => 1,
                'user_y' => 5,
            ],
        ]);
    }
}
