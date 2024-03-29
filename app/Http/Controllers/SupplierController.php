<?php

namespace App\Http\Controllers;

use Exception;
use Validator;
use App\Models\Gig;
use App\Models\User;
use App\Models\Skill;
use App\Models\Occupation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    public function becomeSupplier()
    {
        return view('/become-a-supplier');
    }

    public function create()
    {
        $occupations = Occupation::all();
        $skills = Skill::all();

        return view('/suppliers/registration', compact('occupations', 'skills'));
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'business_name' => ['required'],
                'address' => ['required'],
                'description' => ['required'],
                'occupations' => ['required'],
                'skills' => ['required'],
                'id_card' => ['required', 'image'],
                'selfie_photo' => ['required', 'image'],
            ]);

            // $validatedData = $request->validate([
            //     'first_name' => ['required'],
            //     'last_name' => ['required'],
            //     'business_name' => ['required'],
            //     'address' => ['required'],
            //     'description' => ['required'],
            //     'id_card' => ['required', 'image'],
            //     'selfie_photo' => ['required', 'image'],
            // ]);
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors(), 422]);
            }

            $personalInfo = $validator->safe()->only(['occupations', 'skills']);

            Auth::user()->occupations()->sync(json_decode($personalInfo['occupations']));
            Auth::user()->skills()->sync(json_decode($personalInfo['skills']));

            $validatedData = $validator->validated();

            $validatedData = $validator->safe()->except(['id_card', 'selfie_photo', 'occupations', 'skills']);

            $validatedData['id_card'] = $request->file('id_card')->storeAs(Auth::id(), 'id_card.'.$request->file('id_card')->getClientOriginalExtension() ,'public');
            $validatedData['selfie_photo'] = $request->file('selfie_photo')->storeAs(Auth::id(), 'selfie.'.$request->file('selfie_photo')->getClientOriginalExtension() ,'public');

            DB::beginTransaction();

            Auth::user()->update($validatedData);

            Auth::user()->assignRole('Supplier');

            DB::commit();

            return response()->json('successful');

        } catch (Exception $e)
        {
            // return response()->json("ERROR", 500);
            return response()->json($e->getMessage(), 422);
        }
    }

    public function updateAvatar(Request $request)
    {
        try {
            $user = Auth::user();

            $image = $request->input('image');
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);

            // $path = $request->file('id_card')->storeAs(Auth::id(), 'avatar.png', 'public');
            $disk = Storage::disk('public');
            $path = Auth::id().'/avatar.png';
            $disk->put($path, base64_decode($image));

            $user->update([
                'avatar' => $path,
            ]);

            return response()->json([
                'status' => 'Successfully updated avatar'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'errors' => [
                    'error' => $e->getMessage(),
                ]
            ]);
        }
    }

    public function myProfile()
    {
        $gigs = Gig::all();
        return view('suppliers.my-profile', compact('gigs'));
    }

    public function showGig(Gig $gig)
    {
        return view('suppliers.service-profile', compact('gig'));
    }

}
