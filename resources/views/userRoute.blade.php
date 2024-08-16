<div>
    <h2>User Route (Route Function Any or Match) From</h2>
    <form action="/user-match" method="post"> {{-- is m sirf get ya post method hi use ho sakta h, put, delte k liye niche jesy hamne hidden li field wesy hi krna h, or jb put delete use karen gen to oper form m methodn post hi rakhna h. --}}
        <input type="hidden" name="_method" value="DELETE">
        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        @csrf
        <input type="text" name="user" placeholder="Enter Name">
        <br><br>
        <input type="password" name="password" placeholder="Enter Password">
        <br><br>
        <button>Submit</button>
    </form>
</div>
