<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Redirect;
use App\Http\Requests;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //on_post, from_user, body
        $input['user_id'] = $request->user()->id;
        $input['post_id'] = $request->input('on_post');
        $input['body'] = $request->input('body');
        Comment::create( $input );

        $url = action('PostController@show', ['id' => $request->input('on_post')]);
        return redirect($url)->with('message', 'Comment published');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
