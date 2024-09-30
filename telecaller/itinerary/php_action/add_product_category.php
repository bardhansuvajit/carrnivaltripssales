
<?php 

// include('../../db.php');
require_once '../../db.php';
// $today = date("Y-m-d H:i:s");

  session_start();
  if(!isset($_SESSION["sess_admin_user"]))
  {
    header("location: login/index.php");
  } 



// ------------------society_registration-----------------

// if(isset($_POST['submit_product_category']))
// {
//   $seller_id = $_POST['seller_id'];
  
//   $p_name = $_POST['p_name'];
//   $p_price = $_POST['p_price'];
//   $p_category = $_POST['p_category'];
//   $p_discription = $_POST['p_discription'];






//     $sql1 = "INSERT INTO fishfed_product (seller_id, p_name, p_price, p_category, p_discription, p_img1, p_img2, p_img3) VALUES ('$seller_id', '$p_name', '$p_price', '$p_category', '$p_discription', '$new_img1', '$new_img2', '$new_img3')";

//     if($conn->query($sql1) === TRUE) 
//     {

//       echo "<script>alert('You have successfully inserted the data');</script>";
//       echo "<script type='text/javascript'> document.location ='../display_product.php'; </script>";

//       // echo "<script>alert('New Record Successfully Insert');</script>";
//       // echo "<p>New Record Successfully Insert</p>";
//       // echo "<a href='../create.php'><button type='button'>Back</button></a>";
//       // echo "<a href='../index.php'><button type='button'>Home</button></a>";
//     }
//      else 
//     {
//       echo "Error " . $sql1 . ' ' . $connect->connect_error;
//     }










  
// }


// ------------------society_registration End-----------------








if (isset($_POST['submit_product_category']))
{
   if(!empty($_POST['product_category']))
   {
      $category=$_POST['product_category'];


      $query=$conn->query("SELECT * FROM fishfed_product_category WHERE category='".$category."'");
      $numrows=mysqli_num_rows($query);
      if($numrows==0)
      {
          $sql="INSERT into fishfed_product_category(category) VALUES('$category')";
          
          $result=$conn->query($sql);

          if($result)
          {
            echo '<script>alert("Category added")</script>';
            header("Location:../add_product_category.php");
          } 
          else 
          {
            echo "Failure!";
          }

      } 
      else 
      {
        echo "<script>alert('This Category already exists! Please try again with another.');window.location.href='../add_product_category.php';</script>";
        
      }

    }
    else 
    {
      echo '<script>alert("Please enter a Category!")</script>';
    }
}

 ?>