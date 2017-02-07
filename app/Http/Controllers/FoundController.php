<?php

namespace App\Http\Controllers;

use App\Found;
use App\FoundAttachment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class FoundController extends Controller
{


    // all post for admin
    public function allPost()
    {
        $founds = Found::all();
        return view('found.all', compact('founds'))->with('title',"All Post");
    }


    // all post for Auth user
    public function index()
    {
        $founds = Found::where('user_id', \Auth::user()->id)
                ->get();
        return view('found.mydata', compact('founds'))->with('title',"My Post");
    }


    //show post
    public function show($id){

        $found = Found::where('id', $id )->first();
        return view('found.show', compact('found'))->with('title',"My Post");
    }





//    public function search($id){
//        $founds = found::where('dept_id',\Auth::user()->dept->id)->get();
//        //$foundIds = found::where('id',$id)->first();
//        $al = found::findOrFail($id);
//        $photos = foundPhotos::where('found_id',$id)->get();
//        return view('found.index', compact('founds','photos','al'))->with('title','found - '.$al->found_title);
//    }



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
        return view('found.create', compact('is_lost'))->with('title',"Create New Post");
    }





    public function store(Request $request)
    {

        $found = new Found();
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
                    //resize and crop image using Image Intervention
                    // Image::make($file)->crop(558, 221, 30, 30)->save(public_path($img_url));


                    list($width, $height) = getimagesize($file);
                    $h = ($height/$width)*600;
                    Image::make($file)->resize(600, $h)->save(public_path($img_url));
                    Image::make($file)->save(public_path($img_url));

                    $foundFile = new FoundAttachment();
                    $foundFile->found_id = $found->id;
                    $foundFile->image = $img_url;
                    $foundFile->save();
                }
            }
            return redirect()->route('found.index')->with('success', 'Post Successfully Created');
        }
        return redirect()->route('found.index')->with('error', 'Something went wrong');
    }







    public function edit($id)
    {
        $is_lost = [
            'lost' => 'Lost',
            'found' => 'Found',

        ];
        $found = Found::findOrFail($id);
        return view('found.edit', compact('is_lost','found'))->with('title',"Edit Post");
    }





    public function update(Request $request, $id)
    {
        $found = Found::findOrFail($id);
        $found->is_lost = $request->is_lost;
        $found->title = $request->title;
        $found->lost_place = $request->lost_place;
        $found->lost_date = $request->lost_date;
        $found->lost_time = $request->lost_time;
        $found->description = $request->description;
        if( $found->save()){
           return redirect()->route('found.index')->with('success', 'Post Successfully Updated');
            }else{
           return redirect()->route('found.index')->with('error', 'Something went wrong');
       }

    }



    public function destroy($id)
    {
        Found::destroy($id);
        $photos = FoundAttachment::find($id);
        $filename = public_path().'upload/found/found-'.$photos->found_photo;

        if (\File::exists($filename)) {

            if(\File::delete($filename) && FoundAttachment::destroy($id)){
                return redirect()->route('found.index')->with('success',"Photo deleted Successfully.");
            }
            else{
                return redirect()->route('found.index')->with('error',"Something went wrong.Try again");
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
//                return redirect()->route('found.index')->with('success',"Photo deleted Successfully.");
//            }
//            else{
//                return redirect()->route('found.index')->with('error',"Something went wrong.Try again");
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
//            return redirect()->route('found.search', $data['found_id'])->with('success', 'Photos Successfully Updated');
//
//        }else{
//            return redirect()->route('found.search', $data['found_id'])->with('error', 'Something went wrong');
//        }
//
//
//
//    }

}
