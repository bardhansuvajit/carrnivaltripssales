<?php 
require_once '../../db.php';



 if (isset($_POST['submit_edit_lead'])) {
        $name = $_POST['name'];
        $ph_no = $_POST['ph_no'];
        $whatsapp_no = $_POST['whatsapp_no'];
        $email = $_POST['email'];
        $destination = $_POST['destination'];
        $no_of_day = $_POST['no_of_day'];
        $no_of_night = $_POST['no_of_night'];
        $status = $_POST['status'];
        $id = $_POST['id'];


        $lead_date = $_POST['lead_date'];
        $travel_date = $_POST['travel_date'];
        $note = $_POST['note'];



        // Update the lead information in the database
        $update_query = "UPDATE carrnivaltrips_lead SET 
            name='$name', 
            ph_no='$ph_no', 
            whatsapp_no='$whatsapp_no', 
            email='$email', 
            destination='$destination', 
            no_of_day='$no_of_day', 
            no_of_night='$no_of_night', 
            lead_date='$lead_date' ,
            travel_date='$travel_date', 
            note='$note', 
            status='$status' 
            WHERE id='$id'";

        if ($conn->query($update_query) === TRUE) {
            echo "<script>alert('Lead successfully updated!'); window.location.href='../../index.php';</script>";
        } else {
            echo "<script>alert('Error while updating lead: " . $conn->error . "');window.location.href='../../index.php';</script>";
        }
    }
    

?>