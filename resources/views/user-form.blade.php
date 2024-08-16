<div>
    <h1>User Form</h1>
    <form action="adduser" method="post">  
        @csrf
        <div class="input-wrapeer">
            <input type="text" placeholder="Enter User Name" name="username">
        </div>
        <div class="input-wrapeer">
            <input type="text" placeholder="Enter User Email" name="useremail">
        </div>
        <div class="input-wrapeer">
            <input type="text" placeholder="Enter User City" name="usercity">
        </div>
        <div class="input-wrapeer">
            <h4>User Skill</h4>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label>
        </div> 
        <div class="input-wrapeer">
            <h4>Gender</h4>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div> 
        <div class="input-wrapeer">
            <h4>City</h4>
            <select name="city" id="">
                <option value="Karachi">Karachi</option>
                <option value="Lahore">Lahore</option>
                <option value="Islamabad">Islamabad</option>
            </select>
        </div>   
        <div>
            <h4>Age</h4>
            <input type="range" name="age" min="18" max="100">
        </div>
        <div class="input-wrapeer">
            <button>Add New User</button>
        </div>
        

    </form>
</div>
<style>
    .input-wrapeer{
        margin: 10px;
    }
</style>
