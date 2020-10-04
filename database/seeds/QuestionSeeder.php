<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Example Question 1',
                'options' => '["Question 1 Option 1","Question 1 Option 2","Question 1 Option 3","Question 1 Option 4","Question 1 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'Example Question 2',
                'options' => '["Question 2 Option 1","Question 2 Option 2","Question 2 Option 3","Question 2 Option 4","Question 2 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Example Question 3',
                'options' => '["Question 3 Option 1","Question 3 Option 2","Question 3 Option 3","Question 3 Option 4","Question 3 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'Example Question 4',
                'options' => '["Question 4 Option 1","Question 4 Option 2","Question 4 Option 3","Question 4 Option 4","Question 4 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'Example Question 5',
                'options' => '["Question 5 Option 1","Question 5 Option 2","Question 5 Option 3","Question 5 Option 4","Question 5 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => 'Example Question 6',
                'options' => '["Question 6 Option 1","Question 6 Option 2","Question 6 Option 3","Question 6 Option 4","Question 6 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => 'Example Question 7',
                'options' => '["Question 7 Option 1","Question 7 Option 2","Question 7 Option 3","Question 7 Option 4","Question 7 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            7 => 
            array (
                'id' => 8,
                'question' => 'Example Question 8',
                'options' => '["Question 8 Option 1","Question 8 Option 2","Question 8 Option 3","Question 8 Option 4","Question 8 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            8 => 
            array (
                'id' => 9,
                'question' => 'Example Question 9',
                'options' => '["Question 9 Option 1","Question 9 Option 2","Question 9 Option 3","Question 9 Option 4","Question 9 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            9 => 
            array (
                'id' => 10,
                'question' => 'Example Question 10',
                'options' => '["Question 10 Option 1","Question 10 Option 2","Question 10 Option 3","Question 10 Option 4","Question 10 Option 5"]',
                'answer' => '4',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
        ));
    }
}
