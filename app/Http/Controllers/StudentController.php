<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class StudentController extends Controller
{
    public function addStudent(){

        $studentsJson = Storage::disk('public')->get('Data/data.json');

        // Convert JSON string to Array
        $studentData = json_decode($studentsJson, true);
        // var_dump($studentData[0]);
      
        foreach($studentData as $row){
            // echo $row['Name'].'<br>';
          Storage::disk('public')->makeDirectory('Certificats/'.$row['Name']);
            $data = ['name'=> $row[ucfirst('name')]];
             
            $pdf = PDF::loadView('pages.certificate', $data)->setPaper('A4','landscape');
            // $dompdf->setPaper('A4', 'landscape');
            $save = $pdf->download();
           
            Storage::put('public/Certificats/'.$row[ucfirst('name')].'/'.$row[ucfirst('name')].'.pdf',$save);
        }
        return redirect('success');
        
        
    }
}
