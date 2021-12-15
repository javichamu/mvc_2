<?php

class commentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Comment.php');

        $comments = new Comment();

        $d['comments'] = $comments->showAllComments();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["user_id"]))
        {
            require(ROOT . 'Models/Comment.php');

            $comment= new Comment();

            if ($comment->create($_POST["user_id"], $_POST["post_id"],$_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }

        $this->render("create");
    }

    function show($id)
    {
        require(ROOT . 'Models/Comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComments($id);

        $this->set($d);
        $this->render("show");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComments($id);

        if (isset($_POST["user_id"]))
        {
            if ($comment->edit($id, $_POST["user_id"], $_POST["post_id"],$_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Comment.php');

        $comment = new Comment();

        
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "comments/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>