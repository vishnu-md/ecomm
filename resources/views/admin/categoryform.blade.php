@extends('admin.adminwelcome')

@section('admin.categoryform')

   <div class="container custom-login">
       <div class="row">
       <div class="col-sm-4 col-sm-offset-4">

        <form name="categoryForm" method="post">
            <div class="form-group">
              <label for="categoryName">Category Name:</label>
              <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="categoryName">Category Image:</label>
                <input type="file" class="form-control" id="category_image" name="category_image" >
              </div>
              
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

       </div>
       </div>
   </div>
@endsection