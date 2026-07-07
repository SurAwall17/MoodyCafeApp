<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;


class ProfileController extends Controller
{

    public function edit(){
        $title = "profile";
        $dataUser = User::findOrFail(Auth::user()->id);

        $dataAddress = Address::where('user_id', $dataUser->id)->first();
        return view('user.profile', compact('title','dataUser', 'dataAddress'));
    }

    public function update(Request $request){
        $user = User::findOrFail(Auth::id());

        if($request->filled('name')){
            $request->validate([
                'name' => 'required|max:100|string',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'photo' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048',
                'phone' => 'required|string',
            ]);

            try{
                $data = [
                    'name'  => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ];

                if ($request->hasFile('photo')) {

                    if ($user->photo && File::exists(public_path($user->photo))) {
                        File::delete(public_path($user->photo));
                    }

                    $file = $request->file('photo');

                    $filename = time() . '.' . $file->getClientOriginalExtension();

                    $file->move(public_path('uploads/profile'), $filename);

                    $data['photo'] = 'uploads/profile/' . $filename;
                }

                $user->update($data);

                return redirect()->back()->with('success', 'Data Berhasil Diubah');
            }catch(\Exception $e){
                return redirect()->back()->with('error', $e->getMessage());
            }

        }elseif ($request->filled('latitude')) {
            $request->validate([
                'latitude' => 'required|max:100',
                'longitude' => 'required|max:100',
                'desa' => 'required|max:100|string',
                'kabupaten' => 'required|max:100|string',
                'provinsi' => 'required|max:100|string',
                'full_address' => 'required|max:100|string',
                'jarak' => 'required|max:100|string',
            ]);

            try {
                Address::updateOrCreate(
                    [
                        'user_id' => Auth::id()
                    ],
                    [
                        'latitude' => $request->latitude,
                        'longitude' => $request->longitude,
                        'desa' => $request->desa,
                        'kabupaten' => $request->kabupaten,
                        'provinsi' => $request->provinsi,
                        'full_address' => $request->full_address,
                        'jarak' => $request->jarak,
                    ]
                    );

                return redirect()->back()->with('success', 'Data Berhasil Diubah');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    }
}
