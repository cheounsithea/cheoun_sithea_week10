<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModel;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = CategoryModel::all();
        $post = DB::table('post')
        ->select('post.*', 'category.category', 'users.name')
        ->leftjoin('category', 'category.id', '=', 'post.category_id')
        ->leftjoin('users', 'users.id', '=', 'post.user_id')
        ->where('post.user_id','=',Auth::user()->id)
        ->paginate(10);
        return view('post',compact('post','categorys'));
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
        $this->validate($request, [
            'tittle' => 'required',
            'post' => 'required',
            'category_id' => 'required'
        ]);
        $request->merge([
            'user_id' => Auth::user()->id,
            
        ]);
        $post = PostModel::create($request->all());
        if($post) return redirect()->back();
            else return redirect()->back();
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
        $user=PostModel::findOrFail($id);
        $user->update($request->all());
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostModel::destroy($id);
        return redirect()->back();
    }
}
