<div>
    <h1>User Login Form</h1>
    <form action="/http-request" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="password" name="password" placeholder="Enter Password">
        <br><br>
        <button>Submit</button>
    </form>
</div>
