@extends('layouts.app')

@section('page-title')
Our Menu

@endsection


@section('main-content')


<div class="col-sm-10">
<a class="btn btn-sm btn-primary mb-3" href="{{action('MenuManagement@create')}}">Add New Menu</a>
    <br>
    <br>
    <section class="panel panel-default">

        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Menu Category</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <?php $i = 1; ?>
                @foreach($all_menu as $menu)
                <tr>
                    <td> <?php echo $i;$i++; ?></td>
                    <td>{{$menu-> name }}</td>
                    <td>{{$menu-> cat_name }}</td>
                    <td><img style="width:50px; height:50px;" alt="" src="{{URL::to('public/photos/menu/'.$menu->photo)}}"></td>
                    <td>

                        <a class="btn btn-sm btn-info" href="{{action('MenuManagement@show',$menu->id)}}">View</a>

                        <a class="btn btn-sm btn-warning" href="{{action('MenuManagement@edit',$menu->id)}}">Edit</a>

                        <form style="display:inline" action="{{action('MenuManagement@destroy',$menu->id)}}" method="POST">
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