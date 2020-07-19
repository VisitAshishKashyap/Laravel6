<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=new Post;

        $data=$posts->data();
         $profile=DB::insert('insert into profile (id, name, phone, country, city) values (?, ?, ?, ?, ?)', [3, 'Dayle','2222','india','CHD']);

        // dd($profile);
        return view('posts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {

      //     $filename=sprintf('logo_%s.jpg',random_int(1, 10));
      //     if($request->hasFile('photo'))
      //      $request->file('photo')->storeAs('images',$filename,'public');

      //     $data=['name'=>'akki','age'=>32];
      //     return $response("hello world",200)->header('Content-Type','text/plain');
      // return view('posts.show',compact('data'));
        $request->validated();
        return back()->with('message','Your form has been successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=[

                'name'=>'akki',
                'age'=>33
              ];
              return view('posts.show',compact('data'));

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
