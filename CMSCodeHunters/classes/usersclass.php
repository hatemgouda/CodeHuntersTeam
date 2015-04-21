<?php
 require_once 'databaseclass.php';

class users extends Database{
 private $user_id;
 private $username;
 private $password;
 private $email;
 private $aa;

 //login
 public function login(){
  $this->getdata();
  $this->query('select * from users where username=:username and password=:password');
  $this->bind(':username',$this->username);
  $this->bind(':password',$this->password);
  $this->execute();
  return $this->rowcount();

}
 //register or add new user
 public function AddUser(){
    $this->getdata();
    $this->query('insert into users set username=:username , password=:password , email=:email');
    $this->bind(':username',$this->username );
    $this->bind(':password',$this->password);
    $this->bind(':email',$this->email);
    return $this->execute();


}
 //edit user data
 public function editdata(){

     $this->getdata();
     $this->query('update users set username=:username , password=:password , email=:email where user_id=:user_id');
     $this->bind(':user_id',$this->user_id);
     $this->bind(':username',$this->username);
     $this->bind(':password',$this->password);
     $this->bind(':email',$this->email);
     return $this->execute();
}

//delete user
public function Delete(){
 $this->getdata();
 $this->query('delete from users where user_id=:user_id');
 $this->bind(':user_id',$this->user_id);
 return $this->execute();
}

//  view all  user main view
public function ViewAll(){

$this->query('select * from users order by user_id desc');
 $this->execute();
 return array($this->fetchall() , $this->rowcount());
}

//use to show profile and show data in edit mode
public function view(){
    $this->getdata();
    $this->query('select * from users where user_id=:user_id');
    $this->bind('user_id',$this->user_id);
    $this->execute();
    return $this->fetch() ;

}


//get data   from textbox
public function getdata(){
     $this->username=$this->clear($_POST['username']);
    $this->password=$this->salt($this->clear($_POST['password']));
    $this->email=$this->clear($_POST['email']);
    $this->user_id=(int)($_GET['user_id']) ;
    }
// clear data
public function clear($string){
  $string=trim($string);
  $string=stripslashes($string);
  $string=htmlspecialchars($string);
  return $string;

}

//encrypt data
public function salt($password){

$salt='oiq2^%&%uwoiqu^%#dfg$^%#fgdsgfgd&$^%&KJLKJLJL';
        $new_password=sha1($password.$salt);
        return $new_password;
}

public function promotionup (){
        $this->getdata();
     $this->query('update users set permission_level=1 where user_id=:user_id');
     $this->bind(':user_id',$this->user_id);
      return $this->execute();

}

public function promotiondown (){
        $this->getdata();
     $this->query('update users set permission_level=2 where user_id=:user_id');
     $this->bind(':user_id',$this->user_id);
      return $this->execute();

}

}




