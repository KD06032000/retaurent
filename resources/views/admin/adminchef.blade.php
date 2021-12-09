<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>

    <div class = "container-scroller"> 

        @include("admin.navbar")
        <div style="position:relative;top:70px;right:-150px;">
        <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div>
                <label for="">Name</label>
                <input style="color:blue;" type="text" name="name" required="" placeholder="Enter name">
            </div>

            <div>
                <label for="">Speciality</label>
                <input style="color:blue;" type="text" name="speciality" required="" placeholder="Enter the speciality">
            </div>

            <div>
                
                <input style="color:blue;" type="file" name="image" required="" placeholder="">
            </div>

            <div>
                
                <input style="color:black;" type="submit" value ="Save" >
            </div>

        </form>


        <table>
            <tr bgcolor = "black">
                <th style="padding: 30px;">Chef Name</th>
                <th style="padding: 30px;">Speciality</th>
                <th style="padding: 30px;">Image</th>
                <th style="padding: 30px;">Action</th>
                <th style="padding: 30px;">Action2</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="200" width="200" src="/chefimage/{{ $data->image }}" alt=""></td>
                <td><a href="{{ url('/updatechef', $data->id) }}">Update</a></td>
                <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>


    @include("admin.adminscript")
  </body>
</html>