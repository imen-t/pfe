<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class usersController extends Controller
{
    public function index()
    {
       
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
      
        return view('admin.users.create', );
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        User::create($input);
        return redirect()->route('users.index')->with('flash_message', 'User Added!');

    }

    public function edit(string $id): View
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('users', $user);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect()->route('users.index')->with('flash_message', 'User Updated!');  
    }

    public function show(string $id): View
    {
        $user = User::find($id);
        return view('admin.users.show')->with('students', $user);
    }

    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('admin.users.index')->with('flash_message', 'User deleted!');
    }
    public function search(Request $request)
    {
        
    
        $User = User::where('name', 'LIKE', '%' . $request->search_string. '%')
            ->orWhere('email', 'LIKE', '%' . $request->search_string . '%')
            ->orWhere('ranking', 'LIKE', '%' . $request->search_string . '%')
            ->orderBy('id','desc')
            ->get();
    
        return response()->json([
            'projects' => $User,
        ]);
    }

    public function count()
    {
        $users = User::withCount('projects', 'dmaicProjects')->get();
    
        return view('admin.dashboard', compact('users'));
    //     $users = User::select('users.*')
    //     ->selectRaw('(SELECT COUNT(*) FROM projects WHERE projects.user_id = users.id) AS projects_count')
    //     ->selectRaw('(SELECT COUNT(*) FROM dmaicProjects WHERE dmaic_projects.user_id = users.id) AS dmaicProjects_count')
    //     ->get();

    // return view('admin.dashboard', compact('users'));
    }
}

