<?php

namespace App\Http\Controllers;

use App\Post;
use App\FoundAttachment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{


    // all post for admin
    public function allPost()
    {
        $founds = Post::all();
        return view('post.all', compact('founds'))->with('title',"All Post");
    }



    // all post for Front user
    public function index()
    {
        $founds = Post::orderBy('id', 'desc')->paginate(10);
        $count = Post::count();
        return view('post.index', compact('founds','count'))->with('title',"Posts");
    }








    public function foundAdvancedSearch(Request $request){

            //return $request->all();
        $type = $request->type;
        $title ='%'.$request->title.'%';
        $place ='%'.$request->place.'%';
        $date =  $request->date;

        if($type == 'all'){
            $founds = Post::where('title','LIKE', $title)
                ->where('lost_place', 'LIKE',$place )
                ->where('lost_date', 'LIKE',$date )
                ->orderBy('id', 'desc')
                ->paginate(10);

            $count = Post::where('title','LIKE', $title)
                ->where('lost_place', 'LIKE',$place )
                ->where('lost_date', 'LIKE',$date )
                ->count();

        }elseif($type == 'lost'){
            $founds = Post::where('is_lost', 'lost')
                ->where('title','LIKE', $title)
                ->where('lost_place', 'LIKE',$place )
                ->where('lost_date', 'LIKE',$date )
                ->orderBy('id', 'desc')
                ->paginate(10);
            $count = Post::where('is_lost', 'lost')
                ->where('title','LIKE', $title)
                ->where('lost_place', 'LIKE',$place )
                ->where('lost_date', 'LIKE',$date )
                ->count();

        }elseif($type == 'found'){
            $founds = Post::where('is_lost', 'found')
                ->where('title','LIKE', $title)
                ->where('lost_place', 'LIKE',$place )
                ->where('lost_date', 'LIKE',$date )
                ->orderBy('id', 'desc')
                ->paginate(10);

            $count = Post::where('is_lost', 'found')
                ->where('title','LIKE', $title)
                ->where('lost_place', 'LIKE',$place )
                ->where('lost_date', 'LIKE',$date )
                ->count();

        }else{
            $founds = [];
            $count = 0;
        }

        return view('post.index',compact('founds','count'))->with('title','Search Result');
    }









    public function foundSearch(Request $request){

        $keyword = '%'.$request->keyword.'%';
        $location ='%'.$request->location.'%';


        if($request->has('keyword') && $request->has('location')){
             $founds = Post::where('lost_place','LIKE', $location)->where(function($query) use ($keyword){
                $query->where('title', 'LIKE', $keyword)
                    ->orWhere('description', 'LIKE', $keyword);
            })->orderBy('id', 'desc')
                ->paginate(10);

            $count = Post::where('lost_place','LIKE', $location)->where(function($query) use ($keyword){
                $query->where('title', 'LIKE', $keyword)
                    ->orWhere('description', 'LIKE', $keyword);
            })->count();

        }else{
            $founds = [];
            $count = 0;
        }
        return view('post.index',compact('founds','count'))->with('title','Search Result');
    }







    // all post for specific user
      public function mypost(){
          $founds = Post::where('user_id', \Auth::user()->id)
              ->get();
          return view('post.mypost', compact('founds'))->with('title',"My Post");
      }



//    public function userFound(){
//        $founds = Post::where('is_lost', 'found')
//            ->get();
//        return view('post.index', compact('founds'))->with('title',"Found Post");
//    }
//
//
//    public function userLost(){
//        $founds = Post::where('is_lost', 'found')
//            ->get();
//        return view('post.index', compact('founds'))->with('title',"Lost Post");
//    }















    //show post
    public function show($id){

        $found = Post::where('id', $id )->first();
        return view('post.show', compact('found'))->with('title',str_limit($found->title , 50));
    }













    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $is_lost = [
            'lost' => 'Lost',
            'found' => 'Found',

        ];
        return view('post.create', compact('is_lost'))->with('title',"Create New Post");
    }









    public function store(Request $request)
    {

        $found = new Found();
        $found->user_id = \Auth::user()->id;
        $found->is_lost = $request->is_lost;
        $found->title = $request->title;
        $found->lost_place = $request->lost_place;
        $found->lost_date = $request->lost_date;
        $found->lost_time = $request->lost_time;
        $found->description = $request->description;


        if($found->save()){

            //file save
            if( $request->hasFile('file')) {
                $files = $request->file;
                foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                    //path set
                    $img_url = 'upload/found/found-'.$found->id.'_'.$fileName;
                    $icon_url = 'upload/found/icon/found-'.$found->id.'_'.$fileName;
                    //resize and crop image using Image Intervention
                    // Image::make($file)->crop(558, 221, 30, 30)->save(public_path($img_url));


                    list($width, $height) = getimagesize($file);
                    $h = ($height/$width)*620;
                    $w = ($height/$width)*413;
                    Image::make($file)->resize($w, $h)->save(public_path($img_url));
                    Image::make($file)->resize(240, 200)->save(public_path($icon_url));
                    Image::make($file)->save(public_path($img_url));

                    $foundFile = new FoundAttachment();
                    $foundFile->post_id = $found->id;
                    $foundFile->image = $img_url;
                    $foundFile->icon = $icon_url;
                    $foundFile->save();
                }
            }
            return redirect()->route('post.index')->with('success', 'Post Successfully Created');
        }
        return redirect()->route('post.index')->with('error', 'Something went wrong');
    }









    public function edit($id)
    {
        $is_lost = [
            'lost' => 'Lost',
            'found' => 'Found',

        ];
        $found = Post::findOrFail($id);
        return view('post.edit', compact('is_lost','found'))->with('title',"Edit Post");
    }







    public function update(Request $request, $id)
    {
        $found = Post::findOrFail($id);
        $found->is_lost = $request->is_lost;
        $found->title = $request->title;
        $found->lost_place = $request->lost_place;
        $found->lost_date = $request->lost_date;
        $found->lost_time = $request->lost_time;
        $found->description = $request->description;
        if( $found->save()){
           return redirect()->route('post.index')->with('success', 'Post Successfully Updated');
            }else{
           return redirect()->route('post.index')->with('error', 'Something went wrong');
       }

    }







    public function destroy($id)
    {
        Post::destroy($id);
        $photos = FoundAttachment::find($id);
        $filename = public_path().'upload/found/found-'.$photos->found_photo;
        $icon = public_path().'upload/found/icon/found-'.$photos->found_photo;

        if (\File::exists($filename)) {

            if(\File::delete($filename) && FoundAttachment::destroy($id)){
                \File::delete($icon) ;
                return redirect()->route('post.index')->with('success',"Photo deleted Successfully.");
            }
            else{
                return redirect()->route('post.index')->with('error',"Something went wrong.Try again");
            }
        }
        else{
            if(FoundAttachment::destroy($id)){
                return redirect()->back()->with('success',"Photo deleted Successfully.");
            }
            else{
                return redirect()->back()->with('error',"Something went wrong.Try again");
            }
        }
    }






  public function lostPost(){

      $founds = Post::where('is_lost', 'lost')
          ->orderBy('id', 'desc')
          ->paginate(10);

      $count = Post::where('is_lost', 'lost')
          ->count();

      return view('post.index',compact('founds','count'))->with('title','Lost Post');
  }




    public function foundPost(){

        $founds = Post::where('is_lost', 'found')
            ->orderBy('id', 'desc')
            ->paginate(10);

        $count = Post::where('is_lost', 'found')
            ->count();

        return view('post.index',compact('founds','count'))->with('title','Found Post');
    }















//
//    /**
//     * Destroy the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function photoDestroy($id)
//    {
//        $photos = FoundAttachment::find($id);
//
//        $filename = public_path().'upload/found/found-'.$photos->found_photo;
//
//        if (\File::exists($filename)) {
//
//            if(\File::delete($filename) && FoundAttachment::destroy($id)){
//                return redirect()->route('post.index')->with('success',"Photo deleted Successfully.");
//            }
//            else{
//                return redirect()->route('post.index')->with('error',"Something went wrong.Try again");
//            }
//        }
//        else{
//            if(FoundAttachment::destroy($id)){
//                return redirect()->back()->with('success',"Photo deleted Successfully.");
//            }
//            else{
//                return redirect()->back()->with('error',"Something went wrong.Try again");
//            }
//        }
//
//    }
//
//
//
//
//
//
//
//
//    public function updatefoundImage()
//    {
//        $data = \Input::all();
//
//        //file save
//        if (\Input::hasFile('file')) {
//            $files = $data['file'];
//            foreach ($files as $file) {
//                $extension = $file->getClientOriginalExtension();
//                $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
//                //path set
//                $img_url = 'upload/foundImage/found-' . $data['found_id'] . '_' . $fileName;
//                //resize and crop image using Image Intervention
//                // Image::make($file)->crop(558, 221, 30, 30)->save(public_path($img_url));
//                list($width, $height) = getimagesize($file);
//                $h = ($height/$width)*600;
//                Image::make($file)->resize(600, $h)->save(public_path($img_url));
//                Image::make($file)->save(public_path($img_url));
//
//                $foundFile = new FoundAttachment();
//                $foundFile->found_id = $data['found_id'];
//                $foundFile->image = $img_url;
//                $foundFile->save();
//            }
//            return redirect()->route('post.search', $data['found_id'])->with('success', 'Photos Successfully Updated');
//
//        }else{
//            return redirect()->route('post.search', $data['found_id'])->with('error', 'Something went wrong');
//        }
//
//
//
//    }

}
