<h1>Edit task</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="user_id">User_id</label>
        <input readonly type="text" class="form-control" id="user_id" placeholder="Enter a user_id" name="user_id" value ="<?php if
         (isset($comment["user_id"])) echo $comment["user_id"];?>">
    </div>

    <div class="form-group">
        <label for="post_id">Post_id</label>
        <input readonly type="text" class="form-control" id="post_id" placeholder="Enter a post_id" name="post_id" 
        value ="<?php if (isset($comment["post_id"])) echo $comment["post_id"];?>">
    </div>
    
    
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" id="body" placeholder="Enter a body" name="body" 
        value ="<?php if (isset($comment["body"])) echo $comment["body"];?>">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>