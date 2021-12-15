<h1>Edit user</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if
         (isset($user["name"])) echo $user["name"];?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter a email" name="email" 
        value ="<?php if (isset($user["email"])) echo $user["email"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>