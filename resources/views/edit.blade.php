<form action="/update/{{$image->id}}" method="post" enctype="multipart/form-data">
    @csrf
    Name: <input type="text" name="name" value="{{$image->name}}"><br><br>
    <img src="{{asset('image/'.$image->image_filename)}}" alt="" height="200px"> <br><br>
    Image Upload: <input type="file" name="imagefilename" ><br><br>
    <button type="submit">Update Product</button>
</form>