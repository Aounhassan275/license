<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\License;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function MessageStore(Request $request)
    {
        Message::create($request->all());
        toastr()->success('Message Send To Support Successfully!');
        return redirect()->back();
    }
    public function verifyLicense(Request $request)
    {
        // dd(1);
        if($request->cnic)
        {
            $license = License::where('cnic',$request->cnic)->first();
            if($license == null)
            {
                toastr()->error('No License Found against This CNIC!');
                return back();
            }
            return view('front.verify_license.index',compact('license'));
        }elseif($request->pin)
        {
            $license = License::where('pin',$request->pin)->first();
            if($license == null){
                toastr()->warning('License Pin is Invalid!');
                return back();
            }
            $file= public_path(). $license->image;
            $headers = array(
            
                        'Content-Type: application/jpeg',
            
                        );
            
            
            
            return Response::download($file, 'License.jpeg', $headers);
        }
        else{
            $license = null;
            return view('front.verify_license.index',compact('license'));
        }
        
    }
    public function DownloadForm($id)
    {
        $form = Form::find($id);
        $file= public_path(). $form->image;
        $headers = array(
        
                    'Content-Type: application/jpeg',
        
                    );
        $name = $form->name.'.jpeg';
        return Response::download($file, $name, $headers);
        
    }
}