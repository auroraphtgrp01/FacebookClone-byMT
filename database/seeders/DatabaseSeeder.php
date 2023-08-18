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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
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
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
                'email' =>   'quanghuy2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-01-01',
                'count_follow' =>    '700',
                'about' =>   'Tui là Quang Huy đây',
                'avatar' =>  'https://scontent.fdad3-1.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-7&_nc_sid=2b6aad&_nc_ohc=-tIpWnFaNRwAX93Vkst&_nc_ht=scontent.fdad3-1.fna&oh=00_AfAZNfwMtzzcu6DFnes7xjGKHlaepDBjaSsMGGzNW3aj-Q&oe=6502AE78',
            ],
            [
                'firstname' =>   'Phan Trần',
                'lastname' =>    'Thiện Ân',
                'username' =>    'thienan2003',
                'password' =>    '$2y$10$EnirJdiCgiV4dTbHrQg4Vu1OncIg8YIOl2M/qAKq9zbK8Db3rDxkW',
                'email' =>   'thienan2003@gmail.com',
                'phone' =>   '09823748762',
                'dateofbirth' => '2003-01-01',
                'count_follow' =>    '700',
                'about' =>   'Tui là Thiện Ân đây',
                'avatar' =>  'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-1/272074306_1388901798191108_3391807968273272244_n.jpg?stp=dst-jpg_s320x320&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=f3lfKxCISucAX9-t--K&_nc_ht=scontent.fdad3-5.fna&oh=00_AfAJ6nZlCQQEZJJGCAGeihSqvGDVB2Akdi-ejN0iHB67xQ&oe=64E3A9FE',
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
        DB::table('picture_of_users')->delete();

        DB::table('picture_of_users')->truncate();

        DB::table('picture_of_users')->insert([
            [
                'id_user' => 1,
                'picture' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/273047918_1154538521752212_8550643428154506428_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=174925&_nc_ohc=cSjJHSBr-TgAX_ODkfQ&_nc_ht=scontent.fdad3-4.fna&oh=00_AfDSxuz66N1tyuUPyUGWvu7Bud7r_D2EswuMvQSsqjeINA&oe=64E43E4C',
            ],
            [
                'id_user' => 1,
                'picture' => 'https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/255426091_1101899617016103_4285581052569982254_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=174925&_nc_ohc=JeXXVR_odBsAX9FN68p&_nc_ht=scontent.fdad3-1.fna&oh=00_AfDHOiM3gIIIzabFHkKO9cZkdQAQapz_2kqQ1kzPNpL_cA&oe=64E3953E',
            ],
            [
                'id_user' => 1,
                'picture' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/281337570_1218221798717217_7787799554840921612_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=174925&_nc_ohc=QW2Sg3-YplIAX_jIcYr&_nc_ht=scontent.fdad3-4.fna&oh=00_AfCqNvA6IroUosyOZuTgwQvLWM_vF_C9ppM8xg0nAeSlRQ&oe=64E36F2A',
            ],
            [
                'id_user' => 1,
                'picture' => 'https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/292993017_1256235601582503_3962662766610435200_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_ohc=uzYo_oq3owkAX_7A-Fp&_nc_ht=scontent.fdad3-1.fna&oh=00_AfCg9PaPRAVGePPcZeFQ5-0SCkNIm6x9xoddhfH_88f23A&oe=64E40042',
            ],
            [
                'id_user' => 1,
                'picture' => 'https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/338107407_1304042410175403_2436172106845793271_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=sxNdk_0PikAAX_--hwl&_nc_ht=scontent.fdad3-1.fna&oh=00_AfBMAqefqvA5Oy2KDJr4IE3UndUbpuYXNdcpwUmzXLlS1Q&oe=64E43521',
            ],
            [
                'id_user' => 1,
                'picture' => 'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/364204296_1502618683610859_1545488365326818571_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=OifJSgrjbfsAX9qhVDS&_nc_ht=scontent.fdad3-5.fna&oh=00_AfAznUxMHcZQaLm-HppgtK2EtBgzRn0iIRC4BHQKBbnakg&oe=64E36FC2',
            ],
            [
                'id_user' => 2,
                'picture' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t1.6435-9/96117984_835874713572037_7208789047953588224_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=aMuzhTdXyFYAX9s55-o&_nc_ht=scontent.fdad3-4.fna&oh=00_AfDkvGK8QOsRns5F5WIkpnaNk2cYNZZAw5ijMKa5ctZrGg&oe=6506A0B0',
            ],
            [
                'id_user' => 2,
                'picture' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/306950319_1403051493521020_7395975958831425392_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=174925&_nc_ohc=mZLepJHV4OQAX_vE6Bf&_nc_ht=scontent.fdad3-4.fna&oh=00_AfCS1Y9YzlMwR7vEHjttPfAIRorLxrf7bNhv2kFdEpD9cQ&oe=64E381C6',
            ],
            [
                'id_user' => 2,
                'picture' => 'https://scontent.fdad3-5.fna.fbcdn.net/v/t1.6435-9/166064144_1060388274454012_8110725188872883973_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=19026a&_nc_ohc=h8gD2tcIx5MAX-_O48E&_nc_ht=scontent.fdad3-5.fna&oh=00_AfB9iHj4ylUfgyNk83dymEZhOCysZzwRlA0gVKRjmZT5TQ&oe=6506C2FF',
            ],
            [
                'id_user' => 4,
                'picture' => 'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/363776504_1831638607239549_7965198099069495108_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=vlHo9fBTGxwAX-O4Jb2&_nc_ht=scontent.fdad3-5.fna&oh=00_AfA1-YKgRy2zKz-_p8mfxagSiiNa-kJu868R3-yaczwmKQ&oe=64E36948',
            ],
            [
                'id_user' => 4,
                'picture' => 'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/363419295_1831638600572883_8215239112595805356_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=4ZaG7U_1dJ0AX9XVyes&_nc_oc=AQlnD0r6QBNJE2ExzWqhVJ9PrzlfjU6t7fWi5ZM0WtNSriLhVmCxGenfyhquVOOecBsLS0Udd_8ZnqFbIeHhdeLO&_nc_ht=scontent.fdad3-5.fna&oh=00_AfABOFjf32RRFKGzzlMwW6A_UVNWGJvGO9kp0mHL0OIEMw&oe=64E41456',
            ],
            [
                'id_user' => 4,
                'picture' => 'https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/365278438_1831638567239553_5972354579496237327_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=OPCQPv6ZrW8AX9CrRba&_nc_ht=scontent.fdad3-1.fna&oh=00_AfCj-JvAJXwiHT-iQBQ0qxC4hkCgwuIrzSoCW_bXrtYeFA&oe=64E45010',
            ],
            [
                'id_user' => 6,
                'picture' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/278965075_733320284746696_1612993942152355858_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=K2qMrcnQwoMAX_4DrUO&_nc_ht=scontent.fdad3-4.fna&oh=00_AfBB6O-QNfNUwd68SprGb_ZY_7quHflp2gvNhFhtvvDu6g&oe=64E43D55',
            ],
            [
                'id_user' => 6,
                'picture' => 'https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/361844959_1031359931609395_3468358335318119675_n.jpg?stp=cp6_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=gbNh0ZHOkFMAX-XydLo&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAoTfIaat4DiCoEs7ehe2RlnyFCwyw_Y99__n3i2zuZ0A&oe=64E4C6A4',
            ],
            [
                'id_user' => 6,
                'picture' => 'https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/330621640_662770638943899_6948787647085078162_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=L8ddNT1JnCkAX9sk1b3&_nc_ht=scontent.fdad3-1.fna&oh=00_AfBJSc36EEoqddMTRRre9PcInedidWgs1w3LYmrthxrj8g&oe=64E3D6AB',
            ],

        ]);
        DB::table('facebook_new_feeds')->delete();

        DB::table('facebook_new_feeds')->truncate();

        DB::table('facebook_new_feeds')->insert([
            [
                'id_user'   =>  1,
                'content'   =>  '<p>Họ nói anh đa nhân cách nhưng nghĩ mãi chưa có cách nào để mời em đi nhậu =))</p>',
                'id_picture'  =>  3,
                'count_react'   =>  992,
                'count_comment' =>  232,
                'like_status'   =>  0,
            ],
            [
                'id_user'   =>  1,
                'content'   =>  '<p>Hi, i am Auroraphtgrp ✌️</p>',
                'id_picture'  =>  5,
                'count_react'   =>  554,
                'count_comment' =>  121,
                'like_status'   =>  0,
            ],
            [
                'id_user'   =>  2,
                'content'   =>  '<p>Khi anh nông dân lên phố 🤡</p>',
                'id_picture'  =>  8,
                'count_react'   =>  223,
                'count_comment' =>  75,
                'like_status'   =>  1,
            ],
            [
                'id_user'   =>  4,
                'content'   =>  '<p>Anh dễ thương quá chời!!!!
                <br>Anh ăn cơm chưaaa</p>',
                'id_picture'  =>  10,
                'count_react'   =>  221,
                'count_comment' =>  45,
                'like_status'   =>  1,
            ],
        ]);
    }
}
