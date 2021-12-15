<?php
class Post extends Model
{
    public function showAllPosts()
    {
        $sql = "SELECT * FROM posts";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }



    public function delete($id)
    {
        $sql = 'DELETE FROM posts WHERE id = ?';
        try{   
            $req = Database::getBdd()->prepare($sql);
            $ex = $req->execute([$id]);
            return $ex;
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

}
?>