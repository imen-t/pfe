<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\dmaicProject;
use App\Models\User;
use App\Models\checklist;
use App\Models\DmaicProjectUser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Notifications\ProjectMemberAddedNotification;
use App\Models\ProjectUser;
use Illuminate\Support\Facades\DB;

class DmaicProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = dmaicProject::all();


        return view('projects.dmaic.list', compact('projects'));
    }
    public function index2()
    {
        $projects = dmaicProject::all();

        return view('admin.Dmaicprojects', compact('projects'));
    }
    public function create($id)
    {
        $action = Action::find($id);
        return view('projects.dmaic.create', compact('action'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projecttitle' => 'required',
        ]);
        $dmaicProject=dmaicProject::create($request->all());

        // return response()->json(['message' => 'Dmaic Project created successfully']);
        // return redirect()->route('projects.edit', ['project' => $project->id]);

        //  return view('projects.templates.dmaic', compact('dmaicProject'));
        if ($request->teams) {
            foreach ($request->teams as $member) {
                ProjectUser::create([
                    'user_id' => $member["id"],
                    'project_id' => $dmaicProject->id
                ]);
            }
        }
        return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);

    }
   
    public function Definestep1()
    {
        $dmaicProject = dmaicProject::first();
        return view('Define.step1', compact('dmaicProject'));
    }
    public function updatedefine1(Request $request, dmaicProject $dmaicProject)

    {
        //dd($dmaicProject);
        $request->validate([
            'identify_the_business_gap' => 'required',
           ]);

        $dmaicProject->update($request->all());
        return redirect()->route('Define.step2', $dmaicProject->id);
    }
    public function Definestep2()
    {
        $dmaicProject = dmaicProject::first();
        return view('Define.step2', compact('dmaicProject'));
    }
    public function updatedefine2(Request $request, dmaicProject $dmaicProject)
    {
        $request->validate([
            'Establish_preliminary' => 'required',

        ]);

        $dmaicProject->update($request->all());
      
        return redirect()->route('Define.step3', $dmaicProject->id);
    }
    public function Definestep3()
    {
        $dmaicProject = dmaicProject::first();
        return view('Define.step3', compact('dmaicProject'));
    }
    public function updatedefine3(Request $request, dmaicProject $dmaicProject)
    {
        $request->validate([
            'confirm_improvement_methodology' => 'required',

        ]);

        $dmaicProject->update($request->all());
      
        return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);

    }
    public function step1()
    {
        $dmaicProject = dmaicProject::first();
        return view('measure.step1', compact('dmaicProject'));
    }

   
    public function postStep1(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'crete_a_value_stream' => 'required',


        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        $option = $request->input('option');

        if ($option === 'block') {
            return redirect()->route('measure.step3',['dmaicProject' => $dmaicProject])->withInput();
        } else {
            return redirect()->route('measure.step2',['dmaicProject' => $dmaicProject])->withInput();
        }
        return redirect()->route('measure.step2', $dmaicProject->id);
     
    }
    public function step2()
    {
        $dmaicProject = dmaicProject::first();
        return view('measure.step2', compact('dmaicProject'));
    }

    public function postStep2(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'create_processflow_diagram' => 'required',

        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('measure.step3', $dmaicProject->id);
    }
    public function step3()
    {
        $dmaicProject = dmaicProject::first();
        return view('measure.step3', compact('dmaicProject'));
    }

    public function postStep3(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'analyse_measurememnts_systems' => 'required',
           


        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('measure.step1', $dmaicProject->id);
     
    }
    public function Analysestep1()
    {
        $dmaicProject = dmaicProject::first();
        return view('Analyse.step1', compact('dmaicProject'));
    }
    public function updateAnalyse1(Request $request, dmaicProject $dmaicProject)

    {
        $request->validate([
            'develop_list_of_potential_causes' => 'required',
           ]);

        $dmaicProject->update($request->all());
        return redirect()->route('Analyse.step2', $dmaicProject->id);
    }
    public function Analysestep2()
    {
        $dmaicProject = dmaicProject::first();
        return view('Analyse.step2', compact('dmaicProject'));
    }
    
    public function updateAnalyse2(Request $request, dmaicProject $dmaicProject)

    {
        //dd($dmaicProject);
        $request->validate([
            'collect_dataon_xs' => 'required',
           ]);

        $dmaicProject->update($request->all());
        return redirect()->route('Analyse.step3', $dmaicProject->id);
    }
    public function Analysestep3()
    {
        $dmaicProject = dmaicProject::first();
        return view('Analyse.step3', compact('dmaicProject'));
    }
    public function updateAnalyse3(Request $request, dmaicProject $dmaicProject)
    {
        $request->validate([
            'Evaluate_impact_of_the_x_and_y' => 'required',

        ]);

        $dmaicProject->update($request->all());
      
        return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);

    }
    /////////
    // public function improvestep1()
    // {
    //     $dmaicProject = dmaicProject::first();
    //     return view('improve.step1', compact('dmaicProject'));
    // }
    // public function updateimprove1(Request $request, dmaicProject $dmaicProject)

    // {
    //     $request->validate([
    //         'develop_list_of_potential_causes' => 'required',
    //        ]);

    //     $dmaicProject->update($request->all());
    //     return redirect()->route('improve.step2', $dmaicProject->id);
    // }
    // public function improvestep2()
    // {
    //     $dmaicProject = dmaicProject::first();
    //     return view('improve.step2', compact('dmaicProject'));
    // }
    
    // public function updateimprove2(Request $request, dmaicProject $dmaicProject)

    // {
    //     //dd($dmaicProject);
    //     $request->validate([
    //         'Revise_develop_process_documentation' => 'required',
    //        ]);

    //     $dmaicProject->update($request->all());
    //     return redirect()->route('improve.step3', $dmaicProject->id);
    // }
    // public function improvestep3()
    // {
    //     $dmaicProject = dmaicProject::first();
    //     return view('improve.step3', compact('dmaicProject'));
    // }
    // public function updateimprove3(Request $request, dmaicProject $dmaicProject)
    // {
    //     $request->validate([
    //         'develop_transition_plan' => 'required',

    //     ]);

    //     $dmaicProject->update($request->all());
      
    //     return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);

    // }
    ///////////////////////
    ////////////////////////
      /////////

      public function improve1()
    {
        $dmaicProject = dmaicProject::first();
        return view('improve.step1', compact('dmaicProject'));
    }

   
    public function updateimprove1(Request $request,string $id): RedirectResponse
    {
     
        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        $option = $request->input('option');

        if ($option === 'block') {
            return redirect()->route('improve.step3',['dmaicProject' => $dmaicProject])->withInput();
        } else {
            return redirect()->route('improve.step2',['dmaicProject' => $dmaicProject])->withInput();
        }
        return redirect()->route('improve.step2', $dmaicProject->id);
     
    }
    public function improve2()
    {
        $dmaicProject = dmaicProject::first();
        return view('improve.step2', compact('dmaicProject'));
    }

    public function updateimprove2(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs

        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('improve.step3', $dmaicProject->id);
    }
    public function improve3()
    {
        $dmaicProject = dmaicProject::first();
        return view('improve.step3', compact('dmaicProject'));
    }

    public function updateimprove3(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'Develop_implementation_plan' => 'required',
           


        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);
        
     
    }



      public function controlstep1()
      {
          $dmaicProject = dmaicProject::first();
          return view('control.step1', compact('dmaicProject'));
      }
      public function updatecontrol1(Request $request, dmaicProject $dmaicProject)
  
      {
          $request->validate([
              'Mistake_proof_the_process' => 'required',
             ]);
  
          $dmaicProject->update($request->all());
          return redirect()->route('control.step2', $dmaicProject->id);
      }
      public function controlstep2()
      {
          $dmaicProject = dmaicProject::first();
          return view('control.step2', compact('dmaicProject'));
      }
      
      public function updatecontrol2(Request $request, dmaicProject $dmaicProject)
  
      {
          //dd($dmaicProject);
          $request->validate([
              'Revise_develop_process_documentation' => 'required',
             ]);
  
          $dmaicProject->update($request->all());
          return redirect()->route('control.step3', $dmaicProject->id);
      }
      public function controlstep3()
      {
          $dmaicProject = dmaicProject::first();
          return view('control.step3', compact('dmaicProject'));
      }
      public function updatecontrol3(Request $request, dmaicProject $dmaicProject)
      {
          $request->validate([
              'develop_transition_plan' => 'required',
  
          ]);
  
          $dmaicProject->update($request->all());
        
          return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);
  
      }
    /**
     * Display the specified resource.
     */
    public function show(dmaicProject $dmaicProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dmaicProject $dmaicProject)
    {
        return view('projects.templates.dmaic', compact('dmaicProject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dmaicProject $dmaicProject)
    {
        //
    }
    // public function addProjectMember(Request $request)
    // {
    //     $request->validate([
    //         'user_id' => 'required',
    //         'project_id' => 'required',

    //     ]);

    //     ProjectUser::create([
    //         'user_id' => $request->user_id,
    //         'project_id' => $request->project_id
    //     ]);
    //         // Get the project
    //     $dmaicProject = dmaicProject::find($request->project_id);

    //     // Send notification to user
        
    //     $user = User::find($request->user_id);
    //     $user->notify(new ProjectMemberAddedNotification($dmaicProject));

    //     return redirect()->back();
    //     // // return response()->json(['message' => 'Project created successfully']);
    //     // return redirect()->route('projects.edit', ['project' => $project->id]);
    // }
    // public function deleteUser(dmaicProject $dmaicProject, User $user)
    // {
    //     // $projectUser = ProjectUser::where(['project_id' => $project->id])->where(['user_id' => $user->id])->first();
    //     $dmaicProject->users()->detach($user->id);
    //     return redirect()->back();
    // }


    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(dmaicProject $dmaicProject)
    // {
    //     $dmaicProject->delete();
    //     $dmaicProject->users();
    //     return redirect()->back();
    //     // return response()->json(['message' => 'Project deletted successfully']);
    // }
    public function search(Request $request)
    {
        
    
        $dmaicProject = dmaicProject::where('projecttitle', 'LIKE', '%' . $request->search_string. '%')
            ->orWhere('projectlocation', 'LIKE', '%' . $request->search_string . '%')
            ->orWhere('dmaic_project_leaders', 'LIKE', '%' . $request->search_string . '%')
            ->orWhere('project_reviewer', 'LIKE', '%' . $request->search_string . '%')
            ->orWhere('project_date', 'LIKE', '%' . $request->search_string . '%')
            ->orWhere('Enterproj', 'LIKE', '%' . $request->search_string . '%')
            ->orderBy('id','desc')
            ->get();
    
        return response()->json([
            'dmaicProject' => $dmaicProject,
        ]);
    }

    public function updateInfo1(Request $request, dmaicProject $dmaicProject)
    {
        // var_dump($request->location);
        $request->validate([
            'projectlocation' => 'required',
        ]);

        $dmaicProject->update($request->all());
        // return response()->json(['message' => 'Project updated successfully']);
        return redirect()->back();
    }
    public function deleteUser(dmaicProject $dmaicProject, User $user)
    {
        // $projectUser = ProjectUser::where(['project_id' => $project->id])->where(['user_id' => $user->id])->first();
        $dmaicProject->users()->detach($user->id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dmaicProject $dmaicProject)
    {
        $dmaicProject->delete();
        $dmaicProject->users();
        return redirect()->back();
        // return response()->json(['message' => 'Project deletted successfully']);
    }
    public function addProjectMember(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'dmaic_project_id' => 'required',

        ]);

        DmaicProjectUser::create([
            'user_id' => $request->user_id,
            'dmaic_project_id' => $request->dmaic_project_id
        ]);
            // Get the project
        $dmaicProject = dmaicProject::find($request->dmaic_project_id);

        // Send notification to user
        
        // $user = User::find($request->user_id);
        // $user->notify(new ProjectMemberAddedNotification($dmaicProject));

         return redirect()->back();
        // // return response()->json(['message' => 'Project created successfully']);
        // return redirect()->route('projects.edit', ['project' => $project->id]);
    }
    public function definecheck()
    {
        $dmaicProject = dmaicProject::first();
        return view('checklist.definechack', compact('dmaicProject'));
    }

    public function storedefinecheck(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'project_Charter_Completed' => 'required',

        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);

    }
       
}
