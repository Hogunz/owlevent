<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Skill;
use App\Models\Occupation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;

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

            return response()->json($validatedData);

            $validatedData = $validator->safe()->except(['id_card', 'selfie_photo', 'occupations', 'skills']);

            $validatedData['id_card'] = $request->file('id_card')->storeAs(Auth::id(), 'id_card' ,'public');
            $validatedData['selfie_photo'] = $request->file('selfie_photo')->storeAs(Auth::id(), 'selfie' ,'public');

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
}
