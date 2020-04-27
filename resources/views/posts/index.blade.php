@extends('layouts.app')

@section('page-title')
Our Posts

@endsection


@section('main-content')


<div class="col-sm-12">
<a class="btn btn-sm btn-primary mb-3" href="{{action('PostManagement@create')}}">Add New Post</a>
    <br>
    <br>
    <section class="panel panel-default">

        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Post Title</th>
                    
                    <th>Post Category</th>
                    <th>Photo</th>
                  
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <?php $i = 1;?>
                @foreach($all_post as $post)
                <tr>
                    <td> <?php echo $i;$i++; ?></td>
                    <td>{{$post-> post_title }}</td>
                    
                    <td>{{$post-> categoryName-> title }}</td>
                   
                    <td><img style="width:50px; height:50px;" alt="" src="{{URL::to('public/photos/post/'.$post->photo)}}"></td>
                   
                    <td>

                        <a class="btn btn-sm btn-info" href="{{action('PostManagement@show',$post->id)}}">View</a>

                        <a class="btn btn-sm btn-warning" href="{{action('PostManagement@edit',$post->id)}}">Edit</a>

                        <form style="display:inline" action="{{action('PostManagement@destroy',$post->id)}}" method="POST">
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