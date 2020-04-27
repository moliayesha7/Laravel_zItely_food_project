@extends('layouts.app')

@section('page-title')
Our Menu Category

@endsection


@section('main-content')


<div class="col-sm-10">
    <a class="btn btn-sm btn-primary mb-3" href="{{action('MenuCatManagement@create')}}">Add New Category</a>
    <br>
    <br>
    <section class="panel panel-default">

        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                @foreach($all_cat as $cat)
                <tr>
                    <td> <?php echo $i;$i++; ?></td>
                    <td>{{$cat-> name }}</td>
                   
                    <td>
                        <a class="btn btn-sm btn-info" href="{{action('MenuCatManagement@show',$cat->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{action('MenuCatManagement@edit',$cat->id)}}">Edit</a>

                        <form style="display:inline" action="{{action('MenuCatManagement@destroy',$cat->id)}}" method="POST">
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