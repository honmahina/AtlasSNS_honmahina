<?php
 use Illuminate\Database\Seeder;

 class UsersSeeder extends Seeder
 {
  /**
   * Run the database seeds
   *
   * @return void
   */

  public function run()
  {
    //初期ユーザー
    DB::table('users')->insert([
      ['username'=>'ほんま',
       'mail'=>'nattyan.0809@icloud.com',
       'password'=>bcrypt('honma1234')]
    ]);
  }
 }
?>
