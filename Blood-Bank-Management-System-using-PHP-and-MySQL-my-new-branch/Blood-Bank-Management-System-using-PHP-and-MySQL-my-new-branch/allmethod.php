<?php
   function detabaseconnect(){

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "donor_reg";
            
            $con = mysqli_connect($hostname,$username,$password,$dbname);

            return $con;

   }
   

   function registeruser($data)
   {
     $conn = detabaseconnect();

      $Name = $data["Name"];
      $Email = $data["Email"];
      $Password = $data["Password"];
      $Address = $data["Address"];
      $Phone = $data["Phone"];

      if($conn){

        $base = "insert into user(Name,Email,Password,Address,Phone) values('$Name','$Email','$Password','$Address','$Phone')";

        $resp = mysqli_query($conn,$base);
        return $resp;

      }
      else{
        echo "Detabase not connected....!";
      }
   }


   //=====================================================================================
   //  update

   function updateuser($data)
   {
     $conn = detabaseconnect();

      $Name = $data["Name"];
      $Email = $data["Email"];
      $Password = $data["Password"];
      $Address = $data["Address"];
      $Phone = $data["Phone"];

      if($conn){

        $base = "insert into reg_user(Name,Email,Password,Address,Phone) values('$Name','$Email','$Password','$Address','$Phone')";

        $resp = mysqli_query($conn,$base);
        return $resp;

      }
      else{
        echo "Detabase not connected....!";
      }
   }

//    ===========================
//    login method

function loginuser($data){

            $Email = $data["Email"];
            $Password = $data["Password"];

            $conn = detabaseconnect();
            if($conn){
                $base = "select * from user where Email = '$Email' and Password = '$Password'";

                $responce = mysqli_query($conn,$base);
                return $responce;
      }
      else{
        echo "not connected";
      }

}

?>


<!-- ========================================================================
Donor method -->
<?php
   //register
   function registerdonor($data)
   {
     $cone = detabaseconnect();

      $Name = $data["Name"];
      $Email = $data["Email"];
      $Password = $data["Password"];
      $Address = $data["Address"];
      $Blood = $data["Blood"];
      $Phone = $data["Phone"];

      if($cone){

        $base = "insert into dreg(Name,Email,Phone,Password,Blood,Address) values('$Name','$Email','$Phone','$Password','$Blood','$Address')";

        $resp = mysqli_query($cone,$base);
        return $resp;

      }
      else{
        echo "Detabase not connected....!";
      }
   }

  //login
  function logidonor($data){

    $Email = $data["Email"];
    $Password = $data["Password"];

    $conn = detabaseconnect();
    if($conn){
        $base = "select * from dreg where Email = '$Email' and Password = '$Password'";

        $responce = mysqli_query($conn,$base);
        return $responce;
}
        else{
        echo "not connected";
        }

}

?>

<!-- search -->

<?php
function getalldonor($bg){
  $conn = detabaseconnect();

  $sql = "select * from dreg where Blood = '$bg' ";

  $responce = mysqli_query($conn,$sql);
  return $responce;

}

?>

<!-- request method -->

 <?php
   function request($deta){

   $conn = detabaseconnect();

   $requestby = $deta["Requestedby"];
   $requestto = $deta["Requestto"];
   $date = $deta["Date"];
   $purpose = $deta["Purpose"];
   $Address = $deta["Address"];

   if($conn){
    $bse = "insert into request(RequestedBy,RequestTo,Date,Purpose,Address)values('$requestby','$requestto','$date','$purpose','$Address')";

    $resp = mysqli_query($conn,$bse);
 
    return $resp;
 
   }
   else{
      echo "Detabase not connected";
   }
}

?>
<?php
function dbcon()
{
   $hostname "localhost";
   $password "";
   $dbname "adi";
   $username "root";

   $conn =  mysqli_connect($hostname,$password,$dbname,$username);

   return $conn;

}

function dbinsert($deta){
  
  $commm = dbcon();

   $name = $deta["name"];
   $email = $deta["name"];
   
   
   if($commm){

    $base = "insert into adi(name,name)valuse('$name','$email')";

    $detaaa = mysqli_query($commm,$base);
    return $detaaa;
   }
   else{
    echo "detabase not connected";
   }

}
?>
