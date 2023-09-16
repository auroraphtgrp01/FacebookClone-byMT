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
                'avatar' =>  '/assets/avatar/tuan.jpg'
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
                'avatar' =>  '/assets/avatar/duc.jpg'
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
                'avatar' =>  '/assets/avatar/hoang.jpg'
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
                'avatar' =>  '/assets/avatar/nhungq.jpg'
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
                'avatar' =>  '/assets/avatar/default.png'
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
                'avatar' =>  '/assets/avatar/quoc.jpg'
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
                'avatar' =>  '/assets/avatar/nhung.jpg'
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
                'avatar' =>  '/assets/avatar/my.jpg'
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
                'avatar' =>  '/assets/avatar/default.png'
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
                'avatar' =>  '/assets/avatar/default.png'
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
                'picture' => '/assets/status/1.jpg',
            ],
            [
                'id_user' => 1,
                'picture' => '/assets/status/2.jpg',
            ],
            [
                'id_user' => 1,
                'picture' => '/assets/status/3.jpg',
            ],
            [
                'id_user' => 1,
                'picture' => '/assets/status/4.jpg',
            ],
            [
                'id_user' => 1,
                'picture' => '/assets/status/5.jpg',
            ],
            [
                'id_user' => 1,
                'picture' => '/assets/status/6.jpg',
            ],
            [
                'id_user' => 2,
                'picture' => '/assets/status/7.jpg',
            ],
            [
                'id_user' => 2,
                'picture' => '/assets/status/8.jpg',
            ],
            [
                'id_user' => 2,
                'picture' => '/assets/status/9.jpg',
            ],
            [
                'id_user' => 4,
                'picture' => '/assets/status/10.jpg',
            ],
            [
                'id_user' => 4,
                'picture' => '/assets/status/11.jpg',
            ],
            [
                'id_user' => 4,
                'picture' => '/assets/status/12.jpg',
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
