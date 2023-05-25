<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pakar;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
    
class PakarController extends Controller
{
	function __construct()
    {
        //  $this->middleware('permission:member-list|member-create|member-edit|member-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:member-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:member-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:member-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $pakars = Pakar::paginate(10);
        return view('admin.pakar.index',compact('pakars'));
    }
    
    public function create()
    {
        return view('admin.pakar.create');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $user = Pakar::create($input);
     
        return redirect()->back()
                        ->with('success','Pakar created successfully');
    }
    
    public function edit($id)
    {
        $user = Pakar::find($id);
    
        return view('admin.pakar.edit',compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $input = $request->all();
    
        $pakar = Pakar::find($id);
        $pakar->update($input);
    
        return redirect()->route('admin.pakar_member')
                        ->with('success','Pakar updated successfully');
    }
    
    public function destroy($id)
    {
        Pakar::find($id)->delete();
        return redirect()->route('admin.pakar_member')
                        ->with('success','Pakar deleted successfully');
    }
}