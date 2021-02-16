@extends("master")
@section("content")
<div class="new-blog-container">
    <div class="card new-blog-card">
        <div class="card-header">
            New Blog
        </div>
        <div class="card-body ">
            <form action="/add-article" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col">
            <label for="name" class="form-center">Title :</label>

            <div class="row-md-6">
            <input name="title" id="title" type="text" class="form-control" value="">
                        
            </div>
            </div>
            <div class="form-group col">
            <label for="email" >Category :</label>

            <div class="row-md-6">
            <select name="category" id="category">
                @foreach($categories as $category)
                <option value ="{{$category->name}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>
            </div>
            <div class="form-group col">
            <label for="Image">Image :</label>

            <div class="row-md-6">
            <input name="image" id="image" type="file" class="form-control file-input" value="">
                        
            </div>
            </div>
            <div class="form-group col">
            <label for="phone">Story :</label>
            <div class="row-md-6">
            <textarea name="description" id="description" cols="50" rows="5" maxlength=255></textarea>
                        
            </div>
            </div>
            <input type="submit" value="Insert" class="btn btn-primary update-btn">
            </form>
        </div>
    </div>
</div>
@endsection