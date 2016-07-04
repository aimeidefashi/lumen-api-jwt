<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call('DefaultPopulator');

        Model::reguard();
    }
}
/**
 * Class DefaultPopulator
 */
class DefaultPopulator extends Seeder
{
    public function run()
    {
        $user = App\Api\Models\Users::create(
            [
                'name' => 'Li Peng',
                'email' => 'lp@kuhui.com.cn',
                'password' => app('hash')->make('lipeng'),
            ]
        );

        unset($user);
        return;
    }


}
