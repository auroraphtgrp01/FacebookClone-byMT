<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendRequest extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
    }
}
