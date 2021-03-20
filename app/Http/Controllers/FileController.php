<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $files = DB::table('files')->get();
        return view('file.index', compact('files'));
    }

    public function addFile()
    {
        return view('file.add');
    }

    public function addFileSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|max:2048',
        ]);

        $fileOriginalName = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($fileOriginalName, PATHINFO_FILENAME);
        $filetype = $request->file('file')->getClientOriginalExtension();

        DB::table('files')->insert([
            'filename' => $filename,
            'filetype' => $filetype
        ]);

        $request->file('file')->storeAs('public/files', $fileOriginalName);
        return back()->with('file_uploaded', 'File has been uploaded successfully!');
    }

    public function viewFile($id)
    {
        //filetypes
        $image = ['jpg', 'jpeg', 'jfif', 'png', 'gif'];
        $document = ['doc', 'docx', 'pdf', 'ppt'];

        //fetching the file to be viewed
        $file = DB::table('files')->where('id', $id)->first();
        $filename = $file->filename;
        $fileOriginalName = $filename . '.' . $file->filetype;

        //if file is not an image
        if(! in_array($file->filetype, $image)){
            $filepath = "storage/files/docThumnail.jpg";
            return view('file.view', compact('file', 'filepath'));
        }
        
        //images as default file
        $filepath = "storage/files/" . $fileOriginalName;
        return view('file.view', compact('file', 'filepath'));
    }

    public function deleteFile($id)
    {
        $file = DB::table('files')->where('id', $id)->first();
        $filename = $file->filename;
        $fileOriginalName = $filename . '.' . $file->filetype;
        Storage::disk('public')->delete('files/' . $fileOriginalName);

        DB::table('files')->where('id', $id)->delete();
        return back()->with('delete_file', 'File has been deleted!');
    }

    public function editFile($id)
    {
         //filetypes
         $image = ['jpg', 'jpeg', 'jfif', 'png', 'gif'];
         $document = ['doc', 'docx', 'pdf', 'ppt'];
 
         //fetching the file to be viewed
         $file = DB::table('files')->where('id', $id)->first();
         $filename = $file->filename;
         $fileOriginalName = $filename . '.' . $file->filetype;
 
         //if file is not an image
         if(! in_array($file->filetype, $image)){
             $filepath = "storage/files/docThumnail.jpg";
             return view('file.edit', compact('file', 'filepath'));
         }
         
         //images  as default file
         $filepath = "storage/files/" . $fileOriginalName;
         return view('file.edit', compact('file', 'filepath'));
    }

    public function updateFile(Request $request)
    {
        $validatedData = $request->validate([
            'filename' => 'required'
        ]);

        //rename the file on the directory
        $file = DB::table('files')->where('id', $request->id)->first();
        $old_name = $file->filename . '.' . $file->filetype;
        $new_name = $request->filename. '.' . $file->filetype;

        Storage::move('public/files/' . $old_name, 'public/files/' . $new_name);

        //rename on database
        DB::table('files')->where('id', $request->id)->update([
            'filename' => $request->filename,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('file_updated', 'File has been updated successfully!');
    }

}
