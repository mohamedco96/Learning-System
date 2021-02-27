<?php
   
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
  
class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost1(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        // $fileName = Auth::user()->email.'_'.$req->file->getClientOriginalName();

        $fileName ='Module1'.'_'.Auth::user()->email.'_'.$request->file->getClientOriginalName();  
   
        $request->file->move(public_path('uploads/module1'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost2(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        // $fileName = Auth::user()->email.'_'.$req->file->getClientOriginalName();

        $fileName ='Module2'.'_'.Auth::user()->email.'_'.$request->file->getClientOriginalName();  
   
        $request->file->move(public_path('uploads/module2'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost3(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        // $fileName = Auth::user()->email.'_'.$req->file->getClientOriginalName();

        $fileName ='Module3'.'_'.Auth::user()->email.'_'.$request->file->getClientOriginalName();  
   
        $request->file->move(public_path('uploads/module3'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }
}