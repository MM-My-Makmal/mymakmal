@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Session</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('groups.create') }}"> Add New Session</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr class="table-active">
            <th>No</th>
            <th>Name</th>
            <th>Part</th>
            <th>Total Students</th>
            <th>Created At</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($group as $g)
        <tr>
            <td>{{ $g->id }}</td>
            <td>{{ $g->name }}</td>
            <td>{{ $g->part }}</td>
            <td>{{ $g->total_student }}</td>
            <td>{{ $g->created_at }}</td>
            <td>
                <form action="{{ route('groups.destroy',$g->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('groups.show',$g->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('groups.edit',$g->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>      
@endsection