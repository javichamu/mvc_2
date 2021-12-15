<?php
class User extends Model
{
    public function create($name, $email,$password,$remember_token)
    {
        $sql = "INSERT INTO users (name, email, password, remember_token ,created_at, updated_at) VALUES (:name, :email, :password, :remember_token, :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'remember_token' => $remember_token,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showUsers($id)
    {
        $sql = "SELECT * FROM users WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showAllUsers()
    {
        $sql = "SELECT * FROM users";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function edit($id, $name, $email)
    {
        $sql = "UPDATE users SET name = :name, email = :email, updated_at = :updated_at WHERE id = :user_id";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'user_id' => $id,
                'name' => $name,
                'email' => $email,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
    public function buscarPosts($id){
        $sql = "SELECT * FROM posts WHERE user_id = $id";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }

    }
    
    public function buscarComments($id){
        $sql = "SELECT * FROM comments WHERE user_id = $id";
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
 
        $sql = 'DELETE FROM users WHERE id = ?';
        try{
            $req = Database::getBdd()->prepare($sql);
            $ex = $req->execute([$id]);
            return $ex;
        }catch(PDOException $e){
            print_r($e->getMessage());
        }
    }



}
?>