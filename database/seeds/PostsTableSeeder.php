<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Tag;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::create([
            'name' => 'lokesh',
            'email' => 'lok@gmail.com',
            'password' => Hash::make('password')
        ]);
        $author2 = User::create([
            'name' => 'hello',
            'email' => 'hello@gmail.com',
            'password' => Hash::make('password')
        ]);
        $category1 = Category::create([
            'name' => 'News'
        ]);
        $category2 = Category::create([
            'name' => 'Marketing'
        ]);
        $category3 = Category::create([
            'name' => 'Patnership'
        ]);
        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'We relocated our office to a new designed garage',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
            'user_id' => $author1->id
        ]);
        $post2 = $author2->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'We relocated our office to a new designed garage',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg',
            'user_id' => $author1->id
        ]);
        $post3 = $author1->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'We relocated our office to a new designed garage',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',
            'user_id' => $author1->id
        ]);
        $post4 = $author2->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'We relocated our office to a new designed garage',
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg',
            'user_id' => $author1->id
        ]);
        $tag1 = Tag::create([
            'name' => 'job'
        ]);
        $tag2 = Tag::create([
            'name' => 'customer'
        ]);
        $tag3 = Tag::create([
            'name' => 'record'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post1->tags()->attach([$tag2->id, $tag3->id]);
        $post1->tags()->attach([$tag1->id, $tag2->id]);
    }
}
