<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    private $users = [
        [
            'name' => 'Testpersoon 1',
            'will_earn_medals' => false,
        ],
        [
            'name' => 'Testpersoon 2',
            'will_earn_medals' => false,
        ],
        [
            'name' => 'Testpersoon 3',
            'will_earn_medals' => false,
        ],
        [
            'name' => 'Testpersoon 4',
            'will_earn_medals' => false,
        ],
        [
            'name' => 'Testpersoon 5',
            'will_earn_medals' => true,
        ],
        [
            'name' => 'Testpersoon 6',
            'will_earn_medals' => true,
        ],
        [
            'name' => 'Testpersoon 7',
            'will_earn_medals' => true,
        ],
        [
            'name' => 'Testpersoon 8',
            'will_earn_medals' => true,
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users as $user) {
            User::create([
                'name' => $user['name'],
                'slug' => Str::slug($user['name']),
                'will_earn_medals' => $user['will_earn_medals'],
            ]);
        }
    }
}
