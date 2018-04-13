    <?php

        include('dbkon.php'); 

            $searchTerm = $_GET['term'];

            $qry="SELECT * FROM `hospital` WHERE `location` LIKE '%$searchTerm%'";
            $res=mysqli_query($con,$qry);

            $data=array();
            if(mysqli_num_rows($res)>0)
            {
                while($row= mysqli_fetch_array($res))
                {
                    $data[]=$row['location'];

                }
                echo json_encode($data);
            }


    ?>