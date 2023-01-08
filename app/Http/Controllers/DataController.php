<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Client\Events\RequestSending;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Scalar\MagicConst\Function_;

class DataController extends Controller
{
    public  function index()
    {
        return view('BigData.index', [
            'Data' => Data::latest()->filter(request(['tag', 'search']))->paginate(6)
            
        ]);
    }

    public  function show(data $data)
    {
        return view ('BigData.show', [
            'Data' => $data
        ]);
    }

    public  function create()
    {
        return view('BigData.create');
    }

    public  function store(Request $request)
    {
        //dd($request->file('logo')->store());
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('data', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
            //'logo' => 'required'
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        data::create($formFields);
        return redirect('/')->with('message', 'Listing Created Sucessfully');
    }
}
