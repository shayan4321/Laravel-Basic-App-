<div>
    <h1>Update Student Data</h1>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" value="{{$data->name}}" placedolder="Name">
        <br><br>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Email">
        <br><br>
        <input type="text" name="phone" value="{{$data->phone}}" placeholder="Email">
        <br><br>
        <button>Update</button>
        <a href="/list">Cancel</a>
    </form>
</div>
