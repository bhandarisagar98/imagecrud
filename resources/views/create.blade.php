<form action="/store" method="post" enctype="multipart/form-data">
    @csrf
    Name: <input type="text" name="name"> <br><br>
    Image Upload: <input type="file" name="imagefilename"><br><br>
    <button type="submit">Submit</button>
</form>