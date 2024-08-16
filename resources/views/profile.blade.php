<div>
    <h1>Profile Page</h1>
    <!-- <h2>{{session('user')}}</h2> -->
    @if(session('user'))
    <h2>welcome, {{session('user')}}</h2>
    @else
    <h2>No User Found in Session <a href="login">Login</a> </h2>
    @endif

    <a href="logout">Logout</a>

    <!-- {{print_r(session('allData'))}} -->
    {{session('allData')['user']}}
</div>
