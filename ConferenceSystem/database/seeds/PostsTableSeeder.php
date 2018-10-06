<?php
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        $category = new Category;
        $category->name = "Laravel";
        $category->save();

        $category = new Category;
        $category->name = "Java";
        $category->save();

        $post = new Post;
        $post->title = "mi primer post";
        $post->excerpt = "extracto de mi primer post";
        $post->body = "<p>contenido de mi primer post</p>";
        $post->published_at = Carbon::now()->subDay(4);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "mi segundo post";
        $post->excerpt = "extracto de mi segundo post";
        $post->body = "<p>contenido de mi segundo post</p>";
        $post->published_at = Carbon::now()->subDay(3);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "mi tercer post";
        $post->excerpt = "extracto de mi tercer post";
        $post->body = "<p>contenido de mi tercer post</p>";
        $post->published_at = Carbon::now()->subDay(2);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "mi cuarto post";
        $post->excerpt = "extracto de mi cuarto post";
        $post->body = "<p>contenido de mi cuarto post</p>";
        $post->published_at = Carbon::now()->subDay(1);
        $post->category_id = 1;
        $post->save();
    }
}
