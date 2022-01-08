<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public const BASE_GALLERY_IMAGE = '/images/post/1626947357.jpg';
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Storage::deleteDirectory('posts');
        Storage::deleteDirectory('banners');
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '12345678',
        ]);
        DB::table('blog_categories')->insert([
            'name' => 'Laravel',
        ]);
        DB::table('blog_categories')->insert([
            'name' => 'IT/CS',
        ]);
        DB::table('blog_categories')->insert([
            'name' => 'CodeIgniter',
        ]);
        DB::table('blog_categories')->insert([
            'name' => 'React Js',
        ]);
        DB::table('blog_categories')->insert([
            'name' => 'Angular Js',
        ]);
        for ($i=0; $i <=10; $i++) {
            DB::table('blog_posts')->insert([
                'title' => 'Heading Blog '.rand(1,10),
                'metatitle' => Str::random(30),
                'content' => 'A long description is a way to provide long alternative text for non-text elements,'.
                ' such as images. Generally, alternative text exceeding 250 characters, '.
                'which cannot be made more concise without making it less descriptive or meaningful,'.
                ' should have a long description. Examples of suitable use of long description are charts,'.
                ' graphs, maps, infographics, and other complex images.'.'
                Like alternative text, long description should be descriptive and meaningful.'.
                ' It should also include all text that is incorporated into the image. '.
                'A long description should provide visually-impaired users with as much '.
                'information as sighted users would understand from the image.'.'
                There are four components to creating a long description in the Waterloo Content Management System (WCMS):'.'
                A web page containing the long description.'.'
                An alternative text that describes the overall image.'.'
                A URL to the web page in the "Long Description URL" field.'.'
                A link to the long description web page for sighted users (recommended).',
                'image'=> self::BASE_GALLERY_IMAGE,
                'categories_id' => rand(1,5),
                'created_at' => new DateTime,
            ]);
        }
        DB::table('blog_banners')->insert([
            'title' => 'Life is what happens when you'.'re busy making other plans.',
            'metatitle' => 'Keep calm and carry on.',
            'image'=> self::BASE_GALLERY_IMAGE,
        ]);
    }
}
