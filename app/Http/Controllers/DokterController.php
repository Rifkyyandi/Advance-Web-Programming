<?php

namespace App\Http\Controllers;
use App\Models\dokterModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class dokterController extends Controller
{
    public function index() : view
    {
        $data['dokter'] = dokterModel::orderBy('id','desc')->paginate(5);    
        return view('dokter.index', $data);
    }
      
    
    public function create() : view
    {
        return view('dokter.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'spesialis' => 'required',
            'tempat_praktek' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['photo'] = $imageName;
        }
        dokterModel::create($validatedData);
         
        return redirect()->route('dokter.index')
                         ->with('success','dokter has been created successfully.');
    }
   
    public function show(dokterModel $dokter) : view
    {
        return view('dokter.show',compact('dokter'));
    } 
      
    
    public function edit(dokterModel $dokter) : view
    {
        return view('dokter.edit',compact('dokter'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        // Validate the request
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'spesialis' => 'required',
            'tempat_praktek' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the dokter record
        $dokter = dokterModel::find($id);

        // Check if dokter exists
        if (!$dokter) {
            return redirect()->route('dokter.index')
                            ->with('error', 'dokter not found');
        }

        // Update dokter attributes
        $dokter->nip= $request->nip;
        $dokter->nama= $request->nama;
        $dokter->jk= $request->jk;
        $dokter->spesialis= $request->spesialis;
        $dokter->tempat_praktek= $request->tempat_praktek;

        // Update photo jika ada
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $dokter->photo = $imageName;
        }

        // Save the updated dokter
        $dokter->save();

        // Redirect with success message
        return redirect()->route('dokter.index')
                        ->with('success', 'dokter has been updated successfully');
    }
     
    
    public function destroy(dokterModel $dokter) : RedirectResponse
    {
        $dokter->delete();    
        return redirect()->route('dokter.index')
                        ->with('success','dokter has been deleted successfully');
    }
}