<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('messages')->insert([
            'sent_by' => 2,
            'received_by' => 1,
            'subject' => 'Do I need to lose or gain weight for my health?',
            'body' => 'So my weight has been increasing since last year, Even so, I don\'t eat that much and most of my meals are healthy and organic. Also, I start feeling like my body is tired all the time and recently started to feel some pain in my hear.what should I do, Please?',
            'phone_num' => '134134',
            'age' => 25,
            'sex' => 'male',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 3,
            'received_by' => 1,
            'subject' => 'Am I at risk for stroke?',
            'body' => " I am feeling some pain in my heart when I do some small exercises. Should I go to the doctor and get diagnose or it is a normal thing happen to people.",
            'phone_num' => '567567',
            'age' => 24,
            'sex' => 'male',
            'status' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 1,
            'received_by' => 2,
            'subject' => 'Do I need to lose or gain weight for my health?',
            'body' => 'Definitely, I recommend you to see a doctor and do some tests on your Thyroid, maybe you have some hormone issues.',
            'status' => '1',
            'reply_on' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 1,
            'received_by' => 3,
            'subject' => 'Am I at risk for stroke?',
            'body' => 'I recommend you do some blood tests and after that, you can see a doctor and give it to him and he will guide you to what you should do. ',
            'status' => '1',
            'reply_on' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('messages')->insert([
            'sent_by' => 3,
            'received_by' => 1,
            'subject' => 'What kind of physical activity is right for me?',
            'body' => 'I am 56 years old, and I love being active and do exercises to re-fill my energy. However, sometimes I feel some pain in my back and shoulder. Should you give me some good advice on what is the best exercise that I can do without hearting my body.',
            'phone_num' => '567567',
            'age' => 24,
            'sex' => 'male',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 3,
            'received_by' => 1,
            'subject' => 'Fears of heart diseases',
            'body' => "Based on my history and risk factors, what can I do to lower my risk of heart disease and stroke?",
            'phone_num' => '567567',
            'age' => 24,
            'sex' => 'male',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
