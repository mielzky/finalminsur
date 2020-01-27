<?php
   
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Redirect;
use PDF;
use App\Deptsur;
use App\Survey;
use App\Surv;
   
class PdfController extends Controller
{
   
    public function pdfForm()
    {
        return view('pdf_form');
    }
 
    public function pdfDownload(Deptsur $deptsur){
 
        $deptsur->load('surveys.answers.responses.survs');
        $surv = Surv::get();
        // dd($surv);
        // return view('deptsur.show', compact('deptsur'));
    //    $data = request()->validate([
    //     'name' => 'required',
    //     'email' => 'required|email',
    //     'message' => 'required'
    //     ]);
      
    //     //  $data = 
    //     //  [
    //     //     'name' => $request->name,
    //     //     'email' => $request->email,
    //     //     'message' => $request->message
    //     //  ];
       $pdf = PDF::loadView('pdf_download', compact('deptsur'));
   
       return $pdf->download('pdfmake.pdf');
    }
    
 
}