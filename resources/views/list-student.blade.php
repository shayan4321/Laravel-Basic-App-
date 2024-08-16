<div>
    <h1>Student List</h1>
    <!-- {{print_r($students)}} -->

    <table border="1">
        <tr>    
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        @foreach($students as $studentdata)
            <tr>
                <td>{{$studentdata->name}}</td>
                <td>{{$studentdata->email}}</td>
                <td>{{$studentdata->phone}}</td>
                <td>{{$studentdata->created_at}}</td>
                <td><a href="{{'delete/'.$studentdata->id}}">Delete</a> || <a href="{{'edit/'.$studentdata->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>
