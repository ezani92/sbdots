<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Game;
use App\Bank;
use App\Setting;
use App\Bonus;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('GameTableSeeder');
        $this->command->info('Game table seeded!');

        $this->call('BankTableSeeder');
        $this->command->info('Bank table seeded!');
        
        $this->call('SettingTableSeeder');
        $this->command->info('Setting table seeded!');

        $this->call('BonusTableSeeder');
        $this->command->info('Bonus table seeded!');
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Administrator',
        	'email' => 'admin@sbdots.com',
        	'password' => bcrypt('123456'),
        	'phone' => '60129718420',
            'role' => 1,
            'tac_no' => '123456',
            'phone_verification' => 1

    	));

        User::create(array(
            'name' => 'shaiful ezani',
            'email' => 'shaiful@naxpansion.com',
            'password' => bcrypt('123456'),
            'phone' => '60129718420',
            'role' => 3,
            'tac_no' => '123456',
            'phone_verification' => 1

        ));
    }

}

class GameTableSeeder extends Seeder {

    public function run()
    {
        DB::table('games')->delete();

        Game::create(array(
            'name' => 'live22',
            'logo' => 'live22.png',
            'category' => 'livecasino',
        ));



        Game::create(array(
            'name' => 'Winning FT',
            'logo' => 'winning-ft.png',
            'category' => 'sportsbook',
        ));
    }

}

class BankTableSeeder extends Seeder {

    public function run()
    {
        DB::table('banks')->delete();

        Bank::create(array(
            'name' => 'Maybank',
            'account_no' => '123456789',
            'account_name' => 'ABC Sdn Bhd',

        ));
    }

}

class SettingTableSeeder extends Seeder {

    public function run()
    {
        DB::table('settings')->delete();

        Setting::create(array(
            'meta' => 'SEO_TITLE',
            'value' => 'sbdots',
        ));

        Setting::create(array(
            'meta' => 'SEO_DESC',
            'value' => 'sbdots',
        ));

        Setting::create(array(
            'meta' => 'SEO_KEYWORD',
            'value' => 'sbdots',
        ));

        Setting::create(array(
            'meta' => 'GOOGLE_ANALYTIC_ID',
            'value' => '-',
        ));

        Setting::create(array(
            'meta' => 'MIN_DEPOSIT',
            'value' => '30',
        ));

        Setting::create(array(
            'meta' => 'MAX_WITHDRAWAL',
            'value' => '50',
        ));
    }

}

class BonusTableSeeder extends Seeder {

    public function run()
    {
        DB::table('bonuses')->delete();

        Bonus::create(array(
            'bonus_code' => 'DEPOSIT100',
            'name' => 'Welcome Bonus',
            'description' => 'Welcome Bonus',
            'type' => 'fixed',
            'value' => '100',
            'min_deposit' => '100',
            'allow_multiple' => 0,
        ));
    }
}