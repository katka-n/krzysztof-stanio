<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Mail\RegisterMail;
use App\Movie;
use App\Moviescategory;
use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;


class MoviesController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->paginate(2);

        $moviescategories = Moviescategory::all();


        $postModel = new Post();
        $postsByDates = $postModel->archive();

        return view('movies', ['movies' => $movies, 'moviescategories' => $moviescategories,
        'postsByDates' => $postsByDates]);

    }

    public function acces(){


        return view('dostep');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User();
        $password = (str_random(8));
        $data = [ 'password' => $password ];
        $name = $request->input('email');
        $exploadedEmail =  explode("@", $name);
        $user->name = $exploadedEmail[0];
        $user->email = $request->input('email');
        $user->password = bcrypt($password);
        $user->avatar = 'users/default.png';
        $user->role_id = 2;
        $user->updated_at = time();
        $user->save();


        Mail::to($name)->send(new RegisterMail($user, $password));



       // return redirect()->route('index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
