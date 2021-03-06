<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        $users->each(function ($user){
            for ($i = 1; $i <= 20; $i++) {
                $question = factory(\App\Question::class)->make();
                $question->user()->associate($user);
                $question->save();
            }
        });
    }
}