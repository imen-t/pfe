@extends('admin.defaultadmin')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Users managment</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('users.create') }}"class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    <div class="input-group" style="margin-left:820px; width:max-content;margin-top:-30px;">
                        <div class="form-outline">
                            <input type="search" id="search" class="form-control" />
                        </div>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table"  id="projectsTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Mobile</th>
                                        <th>Department</th>
                                        <th>ranking</th>
                                        <th>role</th>


                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->Mobile }}</td>
                                    <td>{{ $user->Department }}</td>
                                    <td>{{ $user->ranking }}</td>

                                    <td>{{ $user->role }}</td>


                                    <td>
                                       
                                        <a href="{{ route('users.edit', $user->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/user/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="if (!confirm('Confirm delete?')) return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <style>
        *{
            overflow-x: auto;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Handle entries select change event
    $('#entries').change(function() {
        var selectedValue = parseInt($(this).val());
        var rows = $('#projectsTable tbody tr');

        rows.hide(); // Hide all rows

        // Show selected number of rows
        for (var i = 0; i < selectedValue; i++) {
            $(rows[i]).show();
        }
    });

    // Handle search input keyup event
    $('#search').on('keyup', function(e) {
        e.preventDefault();
        var search_string = $(this).val().toLowerCase();
        var rows = $('#projectsTable tbody tr');

        rows.hide(); // Hide all rows

        // Show rows that match the search string
        rows.each(function() {
            var name = $(this).find('td:nth-child(2)').text().toLowerCase(); // Get the title column text
            var ranking = $(this).find('td:nth-child(3)').text().toLowerCase(); // Get the location column text
            var email = $(this).find('td:nth-child(4)').text().toLowerCase(); // Get the project leader column text
          

            if (
                name.includes(search_string) ||
                ranking.includes(search_string) ||
                email.includes(search_string) 
            ) {
                $(this).show();
            }
        });
    });
});

</script>