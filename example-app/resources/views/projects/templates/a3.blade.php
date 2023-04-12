@extends('layouts.app')

@section('content')

<div class="col py-3 ">
    <!--  -->
    <div class="row project-detail">
        <h3 class="text-center">Project details</h3>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td> <a class="btn btn-warning"> Edit </a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--  -->
    <div class="row">
        <div class="col-12 col-md-6 mb-4">

            <div class="card p-4">
                <h3 class="card-title">Background</h3>


                <form>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <input type="description" class="form-control" id="description" aria-describedby="description">
                        <div id="description" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">File</label>
                        <input type="file" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
        <div class="col-12 col-md-6">
            <div class="card p-4">
                <h3 class="card-title">Analysis</h3>


                <form>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <input type="description" class="form-control" id="description" aria-describedby="description">
                        <div id="description" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">File</label>
                        <input type="file" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Action plan -->
    <div class="row project-actions mb-4">
        <h3 class="text-center">Action plan</h3>
        <div class="col">
            <a class="btn btn-primary"> Add </a>

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