<?php

namespace App\Http\Controllers;

use Image;
use File;
use App\Donate;
use App\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donates = Donate::all();
        return view('pages.donate.index')->with('donates',$donates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Donate $donate)
    {
        //
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'profession' => 'required|string|max:255',
                'daten' => 'required',
                'lieun' => 'required|string|max:255',
                'telephone' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',
                'adresse' => 'required|string|max:255',
                'ville' => 'required|string|max:255',
                'wilaya' => 'required|string|max:255',
                'pic' => 'mimes:jpeg,jpg,png,gif',
                'groupage' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()->with('error', 'work');
            }
            $donate->nom = $request->input('nom');
            $donate->prenom = $request->input('prenom');
            $donate->profession = $request->input('profession');
            $donate->daten = $request->input('daten');
            $donate->lieun = $request->input('lieun');
            $donate->telephone = $request->input('telephone');
            $donate->mobile = $request->input('mobile');
            $donate->email = $request->input('email');
            $donate->adresse = $request->input('adresse');
            $donate->ville = $request->input('ville');
            $donate->wilaya = $request->input('wilaya');
            $donate->groupage = $request->input('groupage');
            if ($request->hasFile('pic')) {
                $path = public_path('img/profile/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $avatar = $request->file('pic');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $path = public_path('img/profile/' . $filename);
                Image::make($avatar->path())->crop((int) $request->get('width'), (int) $request->get('height'), (int) $request->get('x'), (int) $request->get('y'))->save($path);
                $donate->photo = $filename;
            }
            $donate->save();
            return back()->with('message','work');
        } else {
            $wilaya = Country::all();
            return view('pages.donate.store')->with('wilaya',$wilaya);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit(Donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donate $donate)
    {
        //
        $donate = Donate::where('id',$request->id)->first();
        
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'profession' => 'required|string|max:255',
                'daten' => 'required',
                'lieun' => 'required|string|max:255',
                'telephone' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',
                'adresse' => 'required|string|max:255',
                'ville' => 'required|string|max:255',
                'wilaya' => 'required|string|max:255',
                'groupage' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()->with('error', 'work');
            }
            $donate->nom = $request->input('nom');
            $donate->prenom = $request->input('prenom');
            $donate->profession = $request->input('profession');
            $donate->daten = $request->input('daten');
            $donate->lieun = $request->input('lieun');
            $donate->telephone = $request->input('telephone');
            $donate->mobile = $request->input('mobile');
            $donate->email = $request->input('email');
            $donate->adresse = $request->input('adresse');
            $donate->ville = $request->input('ville');
            $donate->wilaya = $request->input('wilaya');
            $donate->groupage = $request->input('groupage');
            $donate->existance = $request->input('existance');
            if ($request->hasFile('pic')) {
                $validator = Validator::make($request->all(), [
                    'pic' => 'mimes:jpeg,jpg,png,gif',
                ]);
                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator)
                        ->withInput()->with('error', 'work');
                }
                $path = public_path('img/profile/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $avatar = $request->file('pic');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $path = public_path('img/profile/' . $filename);
                Image::make($avatar->path())->crop((int) $request->get('width'), (int) $request->get('height'), (int) $request->get('x'), (int) $request->get('y'))->save($path);
                unlink(public_path('img/profile/') . $categories->first()->pic);
                $donate->photo = $filename;
            }
            $donate->save();
            return back()->with('message','work');
        } else {
            $wilaya = Country::all();

            return view('pages.donate.update')->with('wilaya',$wilaya)->with('donate',Donate::where('id',$request->id)->first());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Donate $donate)
    {
        //

    }
}
