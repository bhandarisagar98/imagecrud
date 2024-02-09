<table border="2">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Image</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($images as $key=>$image)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$image->name}}</td>
            <td><img src="{{asset('image/'.$image->image_filename)}}" height="200px" alt=""></td>
            <td>
                <a href="{{route('producteditpage',$image->id)}}">edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>