@extends('layouts.app')

@section('page-title')
Our Staff

@endsection


@section('main-content')


<div class="col-sm-10">
    <section class="panel panel-default">

        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Staff Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($all_staff as $staff)
                <tr>
                    <td> <?php echo $i;
                            $i++; ?></td>
                    <td>{{$staff-> name }}</td>
                    <td>{{$staff-> job_title }}</td>

                    <td><img style="width:50px;height:50px;" src="{{URL::to('public/photos/staff/'.$staff->photo)}}" alt=""></td>
                   
                    <td>

                        <a class="btn btn-sm btn-info" href="{{action('StaffManagement@show',$staff->id)}}">View</a>

                        <a class="btn btn-sm btn-warning" href="{{action('StaffManagement@edit',$staff->id)}}">Edit</a>

                        <form style="display:inline" action="{{action('StaffManagement@destroy',$staff->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="delete-btn" type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </section>
</div>

@endsection