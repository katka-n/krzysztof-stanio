<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Post;
use App\Graduates;
use App\Categories;
use App\Comments;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{

    //wyswietlanie 3 artykulow z bloga na stronie glownej (index)
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();


        $all_graduates = DB::table('graduates')->pluck('id');
        $arr = array();
        for ($i = 1; $i <= count($all_graduates); $i++) {
            $arr[$i - 1] = $all_graduates[$i - 1];
        }
        shuffle($arr);

        $graduates = [];
        foreach ($arr as $key => $value) {
            $graduate = Graduates::where('id', $value)->first();
            array_push($graduates, $graduate);
        }
        shuffle($graduates);

        return view('index', ['posts' => $posts, 'graduates' => $graduates]);

    }

    // wyswietlanie artykulow na podstronie blog
    public function blog_index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(2);
        $categories = Categories::all();
        return view('blog', ['posts' => $posts, 'categories' => $categories]);
    }

    //wyswietlanie notek po kategorii lub po id
    public function entry($name)
    {
        if (is_numeric($name)) {


            Carbon::setLocale('pl');


            $posts = Post::where('id', $name)->first();
            $categories = Categories::all();
            $comments = Comments::where('posts_id',$name)->where('parent','=',0)->get();
            $anscomments = Comments::where('parent','>',0)->where('posts_id',$name)->get();


            return view('blog_notka', ['anscomments'=>$anscomments,'posts'=>$posts, 'categories'=>$categories,'comments' => $comments]);

        } else {

            $categories = Categories::all();
            $post = DB::table('categories')
                ->where('name', '=', $name)
                ->leftJoin('posts', 'posts.category_id', '=', 'categories.id')
                ->get();
            $posts = json_decode($post, true);


            return view('blog_kategoria', ['posts' => $posts, 'categories' => $categories]);
        }


    }



    public function store(CreateCommentRequest $commentRequest, $posts){

            $comment = $commentRequest->input('comment_id');


        if(is_numeric($comment)){

            $id = $commentRequest->input('post_id');
            $anscomment = new Comments();
            $anscomment->comment = $commentRequest->input('comment');
            $anscomment->nick = $commentRequest->input('nick');
            $anscomment->posts_id = $posts;
            $anscomment->parent = $commentRequest->input('comment_id');
            $anscomment->save();

            Session::flash('message', 'Komentarz czeka na publikację.');

            return redirect()->route('posts', compact('id'));

        } else {
            $id = $commentRequest->input('post_id');
            $comment = new Comments();
            $comment->comment = $commentRequest->input('comment');
            $comment->nick = $commentRequest->input('nick');
            $comment->posts_id = $commentRequest->input('post_id');
            $comment->parent = 0;

            $comment->save();

            Session::flash('message', 'Komentarz czeka na publikację.');

            return redirect()->route('posts', compact('id'));

        }

//        $id = $commentRequest->input('post_id');
//        $anscomment = new Comments();
//        $anscomment->comment = $commentRequest->input('comment');
//        $anscomment->nick = $commentRequest->input('nick');
//        $anscomment->posts_id = $commentRequest->input('posts_id');
//        $anscomment->parent = intval($commentId);
//        $anscomment->save();
//
//        Session::flash('message', 'Komentarz czeka na publikację.');
//
//        return redirect()->route('posts', compact('id'));



    }

}