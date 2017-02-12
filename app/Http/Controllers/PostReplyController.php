<?php

namespace App\Http\Controllers;

use App\PostReply;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postReply(Request $request)
    {
        //return $request->all();

        $post = new PostReply();
        $post->post_id = $request->post_id;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->description = $request->description;
        if($post->save()){
            return redirect()->route('post.show', $request->post_id)->with('success', 'Reply Successfully Submitted');
        }else{
            return redirect()->route('post.show', $request->post_id)->with('error', 'Something went wrong, Please try again');
        }

    }


}
