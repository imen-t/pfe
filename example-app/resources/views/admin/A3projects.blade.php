@extends('admin.defaultadmin')

@section('content')

<div class="col py-3">
    <h2 style="color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px;">
        A3 projects
    </h2>

    <div class="container table-responsive py-5">
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <div class="mb-3" style="display: flex; align-items: center;">
            <label for="entries" style="margin-right: 5px;">Show</label>
            <select id="entries" class="form-select" style="width: min-content;">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </select>
            <span style="margin-left: 5px;">entries</span>
        </div>
        <div class="input-group" style="flex: 1;margin-left:820px;">
            <div class="form-outline">
                <input type="search" id="search" class="form-control" />
            </div>
            <button type="button" class="btn btn-warning">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>


        <table id="projectsTable" class="table table-bordered table-hover">
            <thead style="background-color: #FBA51A;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Project Leader</th>
                    <th scope="col">Project Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->location }}</td>
                    <td>{{ $project->project_leader }}</td>
                    <td>{{ $project->project_type }}</td>
                    <td>{{ $project->date }}</td>
                    <td>
                        <div style="display: inline-block;">
                            <a type="submit" href="{{ route('projects.edit', $project->id) }}"
                                class="btn btn-warning">
                                Edit
                            </a>
                            <div style="display: inline-block;">
                        <div style="display: inline-block;">
                            <form method="POST" action="{{ route('projects.destroy', $project->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-icon">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <p>No History</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

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
            var title = $(this).find('td:nth-child(2)').text().toLowerCase(); // Get the title column text
            var location = $(this).find('td:nth-child(3)').text().toLowerCase(); // Get the location column text
            var projectLeader = $(this).find('td:nth-child(4)').text().toLowerCase(); // Get the project leader column text
            var dueDate = $(this).find('td:nth-child(6)').text().toLowerCase(); // Get the due date column text

            if (
                title.includes(search_string) ||
                location.includes(search_string) ||
                projectLeader.includes(search_string) ||
                dueDate.includes(search_string)
            ) {
                $(this).show();
            }
        });
    });
});
Th
</script>
@endsection