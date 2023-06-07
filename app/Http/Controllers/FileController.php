<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index() {
        return view('file-uploads', [
            'title' => "Input Data",
        ]);
    }
    // public function index() {
    //     return "Helloo";
    // }
    public function create() {
        $files = File::all();
        return view('file-index',[
            'title' => 'Table Data',
        ], compact('files'));
    }

    public function upload(Request $request){
        $this->validate($request, [
            'files'     => 'required',
            'files.'    => 'mimes:jpeg,jpg,png,pdf|max:10485760'
        ]);

        $files = [];
        // $uploadStatus = [];

        if ($request->hasFile('files')){
            foreach($request->file('files') as $file){
                $name = time().rand(1,100).'.'. $file->extension();
                $originame = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                if($file->move(public_path('uploads'),$name)){
                    $files[]=$name;
                    File::create([
                        'filename'=>$name,
                        'originame'=>$originame,
                    ]);
                }
            }
        }
        if(count($files) > 0){
            return back()->with('success','Berhasil!! Upload File');
        }else{
            return back()->with('failed','Gagal!! Upload File');
        }
    }

    public function download($filename){
        $file = File::where('filename',$filename)->firstOrFail();
        $pathToFile = public_path('uploads/'.$file->filename);
        return response()->download($pathToFile);
    }
}
