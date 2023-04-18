@extends('layouts.app')

@section('content')

<div class="col py-3 ">
    <!--  -->
    <div class="row project-detail">
        <h3 class="text-center">{{$project->title}}</h3>
        <div class="col">

            <form method="POST" action="{{route('updateInfo',$project->id)}}">
                @csrf

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Location</th>
                            <th scope="col">project leader</th>
                            <th scope="col">project type</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input name="location" value="{{old('location', $project->location)}}" type="text" class="form-control" id="location" />
                            </td>
                            <td><input name="project_leader" value="{{old('project_leader', $project->project_leader)}}" type="text" class="form-control" id="project_leader" />
                                <!-- <td><input name="project_type" value="{{old('project_type', $project->project_type)}}" type="text" class="form-control" id="project_type" /> -->
                            <td> <select name="project_type" class="form-select" aria-label="Default select example">
                                    <option value="Strategic Project" {{$project->project_type=='Strategic Project' ? 'selected' : ''}}> Strategic Project</option>
                                    <option value="Critical Project" {{$project->project_type=='Critical Project' ? 'selected' : ''}}> Critical Project</option>
                                    <option value="Issue Resolution" {{$project->project_type=='Issue Resolution' ? 'selected' : ''}}> Issue Resolution</option>
                                </select>
                            <td><input name="date" value="{{old('date', $project->date)}}" type="date" class="form-control" id="date" />

                            <td> <button type="submit" class="btn btn-primary">Update</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- Background -->
    <div class="row">
        <div class="col-12 col-md-6 mb-4">

            <div class="card p-4">
                <h3 class="card-title">Background</h3>


                <form method="post" action="{{route('updateBackground',$project->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label for="problem_description" class="form-label">Problem description</label>
                        <textarea name="problem_description" value="{{old('problem_description', $project->problem_description)}}" type="problem_description" class="form-control" id="problem_description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">File</label>
                        <input type="file" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="commentaire" class="form-label">commentaire</label>
                        <textarea name="commentaire" value="{{old('commentaire', $project->commentaire)}}" type="commentaire" class="form-control" id="commentaire"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
        <div class="col-12 col-md-6">
            <div class="card p-4">
                <h3 class="card-title">Analysis</h3>


                <form method="post" action="{{route('updateAnalysis',$project->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label for="problem_analysis" class="form-label">Analysis description</label>
                        <textarea name="problem_analysis" value="{{old('problem_analysis', $project->problem_analysis)}}" type="problem_analysis" class="form-control" id="problem_analysis"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">File</label>
                        <input type="file" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="conclusion" class="form-label">Conclusion</label>
                        <textarea name="conclusion" value="{{old('conclusion', $project->conclusion)}}" type="conclusion" class="form-control" id="conclusion"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Action plan -->
    <div class="row project-actions mb-4">
        <h3 class="text-center">Action plan</h3>
        <div class="col">
          
            <!-- start Modal -->

 

<!-- Modal -->
<example-component></example-component>
 
            <!-- end  Modal -->







            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Impact</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Due date</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a class="btn btn-warning"> Edit </a>
                            <a class="btn btn-danger"> Delete </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Action plan -->
    <div class="row project-actions">
        <h3 class="text-center">Resulats</h3>
        <div class="col">
            <a class="btn btn-primary"> Add </a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Month</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>plan</option>
                                <option value="1">Fcst</option>
                                <option value="2">Act</option>
                            </select>
                        </td>
                        <td><span class="badge rounded-pill text-bg-success">On Target</span></td>
                        <td>
                            <a class="btn btn-warning"> Edit </a>
                            <a class="btn btn-danger"> Delete </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
@endsection