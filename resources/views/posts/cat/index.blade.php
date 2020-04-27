@extends('layouts.app')

@section('page-title')
Our Post Category

@endsection


@section('main-content')


<div class="col-sm-10">
    <a class="btn btn-sm btn-primary mb-3" href="{{action('PostCatManagement@create')}}">Add New Category</a>
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
                    <td>{{$cat-> title }}</td>
                   
                    <td>

                        <a class="btn btn-sm btn-info" href="{{action('PostCatManagement@show',$cat->id)}}">View</a>

                        <a class="btn btn-sm btn-warning" href="{{action('PostCatManagement@edit',$cat->id)}}">Edit</a>

                        <form style="display:inline" action="{{action('PostCatManagement@destroy',$cat->id)}}" method="POST">
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