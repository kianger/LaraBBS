<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $users = factory(User::class)->times(10)->create();

        // 单一处理第一条用户数据
        $user = User::find(1);
        $user->name = 'wheatera';
        $user->email = 'wheatera@coa-lab.com';
        $user->avatar = "https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png";
        $user->save();
    }
}
