<?php 

	//Database connection
	include('../../db.php');

?>


<?php


extract($_POST);

if(isset($_POST['activity_update']))
{

    
    $package_id=$_POST['package_id'];
    $price=$_POST['price'];
    $name=$_POST['name'];
    $discount=$_POST['discount'];
    $rank_1=$_POST['rank_1'];

    // $img=$_POST['img'];
    $img_1=$_POST['img_1'];

    // echo $img;

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['package_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrrnivaltrips_package_activities where package_id='".$_POST['package_id']."'";
        mysqli_query($conn,$qys);
  
    

        // var_dump($_POST['work_name']);

        //Update data
        foreach($_POST['name'] as $key=>$value) 
        {
            # code...


            // $sourcePath = $_FILES['img']['tmp_name'][$key];
            // $image=$_FILES['img']['name'][$key];
            // $targetPath = "../activities_img/" .basename($image);
            // move_uploaded_file($sourcePath, $targetPath);
            // $IMAGE=$_FILES['img']['name'][$key];
            // if(empty($IMAGE))
            // {
            //     $IMAGE=$_POST['img_1'][$key];
            // }



            $valid_extensions= array("jpg","jpeg","png","gif","JPG","JPEG","PNG","GIF","webp","WEBP");


            // for image 1
            if($_FILES["img"]["tmp_name"][$key] != '')
            {
                $img=$_FILES["img"]["name"][$key];
                $extension_1=pathinfo($img,PATHINFO_EXTENSION);


                if(!in_array($extension_1,$valid_extensions))
                {
                    echo "<script>alert('Invalid Image format. Only jpg / jpeg/ png /gif format allowed');</script>";
                }
                else
                {
                    $new_img1= rand().".".$extension_1;
                    $path1= "../activities_img/".$new_img1;
                    move_uploaded_file($_FILES["img"]["tmp_name"][$key],$path1);

                }

            }
            else
            {
                    $new_img1=$_POST['img_1'][$key];
            }






                 
            $query1="INSERT INTO carrrnivaltrips_package_activities (package_id,name, price, img, discount, rank_1 ) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'  ,  '$new_img1' , '".$_POST['discount'][$key]."' , '".$_POST['rank_1'][$key]."' )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                 echo "<script>alert('Successfully Update');</script>";
                 echo "<script>window.location='../slide4.php?id=$package_id';</script>";

            
            }
     


    }
    else
    {

      

         foreach($_POST['name'] as $key=>$value) 
        {
            # code...



            // $sourcePath = $_FILES['img']['tmp_name'][$key];
            // $image=$_FILES['img']['name'][$key];
            // $targetPath = "../activities_img/" .basename($image);
            // move_uploaded_file($sourcePath, $targetPath);
            // $IMAGE=$_FILES['img']['name'][$key];
            // if(empty($IMAGE))
            // {
            //     $IMAGE=$_POST['img_1'][$key];
            // }



            $valid_extensions= array("jpg","jpeg","png","gif","JPG","JPEG","PNG","GIF","webp","WEBP");


            // for image 1
            if($_FILES["img"]["tmp_name"][$key] != '')
            {
                $img=$_FILES["img"]["name"][$key];
                $extension_1=pathinfo($img,PATHINFO_EXTENSION);


                if(!in_array($extension_1,$valid_extensions))
                {
                    echo "<script>alert('Invalid Image format. Only jpg / jpeg/ png /gif format allowed');</script>";
                }
                else
                {
                    $new_img1= rand().".".$extension_1;
                    $path1= "../activities_img/".$new_img1;
                    move_uploaded_file($_FILES["img"]["tmp_name"][$key],$path1);

                }

            }
            else
            {
                    $new_img1=$_POST['img_1'][$key];
            }




                 
            $query1="INSERT INTO carrrnivaltrips_package_activities (package_id,name, price, img,discount,rank_1 ) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'   , '$new_img1' , '".$_POST['discount'][$key]."' , '".$_POST['rank_1'][$key]."' )";
            
            $result1=mysqli_query($conn,$query1);

           
         
        }

         if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                echo "<script>alert('Successfully Update');</script>";
                echo "<script>window.location='../slide4.php?id=$package_id';</script>";
            
            }

    }



}

?>


