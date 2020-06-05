<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         Post::create([
            'title'   => 'World-class publications. Undiscovered voices. Topics you love.',
            'body'    => 'From technology to business, true crime to climate change. Dive deeper on all the things you love, all in one place on Medium.'
         ]);
         Post::create([
         'title'   => '120 million curious readers and growing.',
         'body'    => 'As a member, I don’t just get the news, I get deep perspectives on national and world events. I get expert commentary on art, culture, tech, and science, even relationships, family, food, and spirituality, all in one place.'
         ]);
         Post::create([
            'title'   => 'Publish for free. Grow your audience. Earn for your work',
            'body'    => 'Post stories, create publications, and write what you care about. Join the Medium Partner Program to earn money when Medium members read your stories'
         ]);
         Post::create([
            'title'   => 'Become a member for unlimited access.',
            'body'    => 'The heart of Medium is our global community of writers, editors, and readers. Medium memberships help us pay creators for their best work, give you unlimited access, and keep your reading ad-free.'
         ]);      
    }
}
