<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\Profile;
use App\Models\Signature;
use App\Models\User;
use App\Traits\General;
use Carbon\Carbon;
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
                $users= User::findOrFail(auth()->user()->id);
                $users->update([
                    'status'=>'3',
                ]);
            } else {
                Signature::create([
                    'signature' => $file,
                    'user' => auth()->user()->first_name . " " . auth()->user()->last_name,
                    'user_id' => auth()->user()->id,
                ]);
                $users= User::findOrFail(auth()->user()->id);
                $users->update([
                    'status'=>'3',
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
                $users= User::findOrFail(auth()->user()->id);
                $users->update([
                    'status'=>'3',
                ]);
            } else {
                Signature::create([
                    'signature' => $file,
                    'user' => auth()->user()->first_name,
                    'user_id' => auth()->user()->id,
                ]);
                $users= User::findOrFail(auth()->user()->id);
                $users->update([
                    'status'=>'3',
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
                $users= User::findOrFail(auth()->user()->id);
                $users->update([
                    'status'=>'3',
                ]);
            } else {
                Signature::create([
                    'signature' => $file,
                    'user' => auth()->user()->first_name,
                    'user_id' => auth()->user()->id,
                ]);
                $users= User::findOrFail(auth()->user()->id);
                $users->update([
                    'status'=>'3',
                ]);
            }
            return redirect()->route('get.pdf')->with(['success' => "Add Signature Success"]);
        }
    }

    public function getVerify()
    {
        $code = auth()->user()->pin_code;
        Mail::to(auth()->user()->email)->bcc('laravle.test@gmail.com')->send(new VerifyEmail($code));
        return view('site.pages.signature.verify');
    }
    public function Verify(Request $request)
    {
        if (auth()->user()->pin_code == $request->pin_code) {
            $users= User::findOrFail(auth()->user()->id);
            $users->update([
                'status'=>'4',
            ]);
            return redirect()->route('portal.pending.home')->with(['success' => 'Add Success']);
        }
    }


    public function getPDF(){
        $date = Carbon::now();
        $date = $date->toRfc850String();
        $user = auth()->user();
        $id = $user->id;
        $profile=$user->profile;
        
        return view('site.pages.pdf',compact('profile', 'user', 'date'));
    }
    public function verifyButton(){
        $users= User::findOrFail(auth()->user()->id);
            $users->update([
                'status'=>'4',
            ]);
            return redirect()->route('portal.pending.home')->with(['success' => 'Add Success']);
    }
}