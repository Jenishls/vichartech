<?php

require_once 'connection.php';

class User
{
	
	private $id;
    private $name;
    private $fname;
    private $lname;
    private $username;
    private $email;
    private $password;
    private $type;
    private $subject;
    private $message;


    private $connect;

       function __construct()
    {
        $this->connect = new Connection();
    }

    //setters

      public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

     public function setSubject($subject)
    {
      $this->subject = $subject;
    }

     public function setMessage($message)
    {
      $this->message = $message;
    }


    //getters
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getType()
    {
        return $this->type;
    }

       public function getSubject()
    {
        return $this->subject;
    }

       public function getMessage()
    {
        return $this->message;
    }

  public function AddUser()
 {
      
  $sql = "INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `email`, `password`, `type`) VALUES ('', '$this->fname', '$this->lname', '$this->username', '$this->email', '$this->password', 'User');";
          return $this->connect->Iud($sql);
         
  }

  public function Login()
  {
    echo $this->username;

    $dt=$this->connect->getData("SELECT * FROM user WHERE username='$this->username' and password='$this->password'");

            if(count($dt)==1)
            {
              $un=$dt[0]['username'];
              $tp=$dt[0]['type'];

              session_start();
              $_SESSION['permission']="granted";
              $_SESSION['username']= $un;
              $_SESSION['type']= $tp;
              // echo " un= ".$un;
              // echo "<br>".$_SESSION['type'];

              header("location:land.php");
            }
            else
            {
               
              echo ("<script type='text/javascript'>alert('Username or password incorrect!!! ')</script>");
               

            }
  }

  public function getSlider()
  {
    $query="SELECT * FROM slider WHERE id=''";

    return $this->connect->getData($query);
  }

  public function CustomerMail()
  {
    $query="INSERT INTO customer_mail VALUES ('', '$this->name','$this->email','$this->subject','$this->message')";
    return $this->connect->Iud($query);
  }




}
	
?>