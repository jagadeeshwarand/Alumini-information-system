<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];
 
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
?>
 
<html>

<head>
    <style>
        /* Style the anchor tag as a button */
a.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff; /* Button background color */
    color: #fff; /* Text color */
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
    position: fixed;
    left: 610px;
    top: 580px;
}
      h2 {
    background-image:url("admin/image/b5.jpg");
    color: white;
    padding: 10px;
    text-align: center;
}
.container {
    max-width: 800px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    border: 2px solid black;
    
}
/* Add your custom CSS styles here */
.bottom-link {
        
        text-align: center;
        margin-top: 500px;
        font-size: 18px;
        text-decoration: none;
        color: red; /* You can choose your preferred color */
    }

    .bottom-link:hover {
        text-decoration: underline;
    }
       
        .sidebar button a {
            height: 100%;
            width: 200%;
            line-height: 30px;
            font-size: 15px;
            color: white;
            box-sizing: content-box;
            border-top: 1px solid rgba(250, 250, 250, .1);
            border-bottom: 1px solid black;
            transition: .15s;
        }

        button {
            padding-left: 10px;
        }

        .sidebar button a i {
            margin-right: 10px;
        }
    /* Add your custom CSS styles here */
    .bottom-link {
        text-align: center;
        margin-top: 500px;
        font-size: 18px;
        text-decoration: none;
        color: #007BFF; /* You can choose your preferred color */
    }

    .bottom-link:hover {
        text-decoration: underline;
    }
        .sidebar ul i {
            height: 100%;
            width: 110%;
            line-height: 30px;
            font-size: 15px;
            color: red;
            box-sizing: none;
            border-top: 1px solid rgba(250, 250, 250, .1);
            border-bottom: 1px solid black;
            transition: .15s;
        }

        ul {
            padding-left: 10px;
        }
 /* Add custom CSS styles to buttons with the .custom-btn-success class */
 .custom-btn-success {
            /* Add your custom styles here */
            background-color: red; /* Change the background color */
            color: red; /* Change the text color */
            border: none; /* Remove borders */
        }

        .custom-btn-success:hover {
            /* Add custom hover styles here */
            background-color: blue; /* Change the hover background color */
        }

        .sidebar ul i {
            margin-right: 10px;
        }

        .logo {
            float: left;
            width: 107px;
            height: 112px;
            margin: 5px 0 0 10px;
        }

        .top_banner {
            height: 120px;
            width: 100%;
            position: fixed;
            top: 10px;
            left: 50px;
            right: 0px;
            text-align: center;
            padding: 50px;
            font-weight: bolder;
        }
        body{
            background-image:url("admin/image/c2.jpg");
            background-size: cover;
        background-repeat: no-repeat;
        }
    </style>
    <meta charset="utf-8">
    <title></title>
    <!-- <link href="table.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous"/>

    <script type="text/javascript"
            src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"
            crossorigin="anonymous"></script>
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"
            crossorigin="anonymous"></script>
    <script language="javascript" src="JQueries Libraries/dist/jquery.js"
            type="text/javascript"></script>
    <script language="javascript" src="JQueries Libraries/src/dimensions.js"
            type="text/javascript"></script>
    <script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
    <script src="jquery-mobile/jquery.mobile-1.0.min.js"
            type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        var name = "div#floatMenu";
        var menuYloc = null;
        $(document).ready(function () {
            menuYloc = parseInt($(name).css("top").substring(0, $(name).css("top").indexOf("px")))
            $(window).scroll(function () {
                var offset = menuYloc + $(document).scrollTop() + "px";
                $(name).animate({top: offset}, {duration: 800, queue: false});
            });
        });

        function MM_popupMsg(msg) { //v1.0
            alert(msg);
        }

        function MM_effectAppearFade(targetElement, duration, from, to, toggle) {
            Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
        }

        function MM_effectShake(targetElement) {
            Spry.Effect.DoShake(targetElement);
        }

        function MM_effectBlind(targetElement, duration, from, to, toggle) {
            Spry.Effect.DoBlind(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
        }
    </script>
</head>

<body >
    <center>
        <div class="top_banner" style="margin-left: 30px;">
            <div class="in_banner">
                <div class="logo">
                    <img alt="" src="image/a1.jpg" align="right" width="200%">
                </div>
                <div class="banner_text" style="font-weight: bolder; width: 1100px">
                    <h1>
                        MUTHURANGAM GOVERNMENT ARTS COLLEGE (AUTONOMOUS)
                    </h1>
                </div>    
                <div class="banner_text" style="width: 950px; margin-left: 140px; padding-top: 30px;">
                    <h2>
                        <marquee>DEPARTMENT OF COMPUTER SCIENCE</marquee>
                    </h2>
                </div>
            </div>
        </div>
        
    </center>

    <br>
    <br>
    <div><a href='index.html' class='button'>Go Back</a></div>

    <div class="sidebar" style="background-color: transparent; position: absolute; top: 300px; margin-left: 450px">
        <br>

        <div class="container">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#itModal">Fill-in the Form as B.SC COMPUTER SCIENCE GRADUATES
            </button>
        </div>
        <div class="modal fade " role="dialog" id="itModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h11 class="modal-title">
                            <b>Dear B.SC.COMPUTER SCIENCE Graduates Please Fill-in The Tracer Study Form:</b></h11>
                        <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
                    </div>
                    <form name="aspnetForm" method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-body" style="background-color: gainsboro;">
                            <?php include 'bsc.php'; ?>
                        </div>

                        <div class="modal-footer" style="justify-content:center;">
                            <button type="create" class="btn btn-primary" name="create">Submit</button>
                        </div>
                            <?php
                                include('admin/dbcon.php');
                                    if (isset($_POST['create']))
                                        {
                                            /*bsc*/
                                                $regno = $_POST['regno'];
                                                $fullname = $_POST['fullname'];
                                                $age = $_POST['age'];
                                                $gender = $_POST['gender'];
                                                $dob = $_POST['dob'];
                                                $cs = $_POST['cs'];
                                                $religion = $_POST['religion'];
                                                $home_address = $_POST['home_address'];
                                                $pincode = $_POST['pincode'];
                                                $course = $_POST['course'];
                                                $batch = $_POST['batch'];
                                                $phonenumber = $_POST['phonenumber'];
                                                $email = $_POST['email'];
                                                $estatus = $_POST['estatus'];
                                                $organization = $_POST['organization'];
                                                $profession = $_POST['profession'];
                                                $etype = $_POST['etype'];
                                                $location = $_POST['location'];
                                                $status = $_POST['status'];
                                                $year = $_POST['year'];
                                                $income = $_POST['income'];
                                                $c_name = $_POST['c_name'];
                                                $university = $_POST['university'];
                                                $course_name = $_POST['course_name'];
                                                $c_address = $_POST['c_address'];
                                                $reason = $_POST['reason'];
                                                $consider = $_POST['consider'];
                                                $b_name = $_POST['b_name'];
                                                $b_address = $_POST['b_address'];
                                                $b_income = $_POST['b_income'];
                                                
                                                $filename = $_FILES["uploadfile"]["name"];
                                                $tempname = $_FILES["uploadfile"]["tmp_name"];
                                                $folder = "./images/" . $filename;

                                                /*bsc*/
                                                $query = "INSERT INTO `bsc` (`regno`, `fullname`, `age`, `gender`, `dob`, `cs`, `religion`, `home_address`, `pincode`, `course`, `batch`, `phonenumber`, `email`, `estatus`, `organization`, `profession`, `etype`, `location`, `status`, `year`, `income`, `c_name`, `university`, `course_name`, `c_address`, `reason`, `consider`, `b_name`, `b_address`, `b_income`, `filename`) VALUES ('$regno','$fullname','$age','$gender','$dob','$cs','$religion','$home_address','$pincode','$course','$batch','$phonenumber','$email','$estatus','$organization','$profession','$etype','$location','$status','$year','$income','$c_name','$university','$course_name','$c_address','$reason','$consider','$b_name','$b_address','$b_income','$filename')";
                                                    mysqli_query($conn, $query) or die(mysqli_error($conn));

                                                    echo "<script>alert('Thank you B.SC. COMPUTER SCIENCE Alumni for your Cooperation in our School Department... your data was inserted successfully!!!!')</script>";
                                              // Now let's move the uploaded image into the folder: image
                                                if (move_uploaded_file($tempname, $folder)) {
                                                    echo "<h3> Image uploaded successfully!</h3>";
                                                } else {
                                                    echo "<h3> Failed to upload image!</h3>";
                                                }}
                                                                                        ?>
                                                
                    </form>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div class="container">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#csModal">Fill-in the Form as M.SC COMPUTER SCIENCE GRADUATES</button>
        </div>
        <div class="modal fade " role="dialog" id="csModal">
            <div class="modal-dialog modal-lg">
            <?php 
                        if(isset($_SESSION['estatus']) && $_SESSION !='')
                        {
                            echo $_SESSION['estatus'];
                            ?>
                            <?php
                            unset($_SESSION['estatus']);
                        }
                        ?>
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h11 class="modal-title">
                            <b>Dear M.SC COMPUTER SCIENCE Graduates Please Fill-in The Tracer Study Form:</b></h11>
                        <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
                    </div>

                    <form name="aspnetForm" method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-body" style="background-color: gainsboro;">
                            <?php include 'msc.php'; ?>
                        </div>

                        <div class="modal-footer" style="justify-content:center;">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>

                        <?php
                                include('admin/dbcon.php');
                                    if (isset($_POST['submit']))
                                        {
                                            /*bsc*/
                                                $regno = $_POST['regno'];
                                                $fullname = $_POST['fullname'];
                                                $age = $_POST['age'];
                                                $gender = $_POST['gender'];
                                                $dob = $_POST['dob'];
                                                $cs = $_POST['cs'];
                                                $religion = $_POST['religion'];
                                                $home_address = $_POST['home_address'];
                                                $pincode = $_POST['pincode'];
                                                $course = $_POST['course'];
                                                $batch = $_POST['batch'];
                                                $phonenumber = $_POST['phonenumber'];
                                                $email = $_POST['email'];
                                                $estatus = $_POST['estatus'];
                                                $organization = $_POST['organization'];
                                                $profession = $_POST['profession'];
                                                $etype = $_POST['etype'];
                                                $location = $_POST['location'];
                                                $c_address = $_POST['c_address'];
                                                $status = $_POST['status'];
                                                $year = $_POST['year'];
                                                $income = $_POST['income'];
                                                $c_name = $_POST['c_name'];
                                                $university = $_POST['university'];
                                                $course_name = $_POST['course_name'];
                                                $reason = $_POST['reason'];
                                                $consider = $_POST['consider'];
                                                $b_name = $_POST['b_name'];
                                                $b_address = $_POST['b_address'];
                                                $b_income = $_POST['b_income'];
                                                
                                                $filename = $_FILES["file"]["name"];
                                                $tempname = $_FILES["file"]["tmp_name"];
                                                $folder = "./images/" . $filename;

                                                if (move_uploaded_file($tempname, $folder)) {
                                                    // Image uploaded successfully
                                                    // Insert data into the database
                                                    $image_data = file_get_contents($folder);
                                                    $image_data = mysqli_real_escape_string($conn, $image_data);
                                                /*bsc*/
                                                $query = "INSERT INTO msc (regno, fullname, age, gender, dob, cs, religion, home_address, pincode, course, batch, phonenumber, email, estatus, organization, profession, etype, location, status, year, income, c_name, university, course_name, c_address, reason, consider, b_name, b_address, b_income, filename, image_data) VALUES ('$regno','$fullname','$age','$gender','$dob','$cs','$religion','$home_address','$pincode','$course','$batch','$phonenumber','$email','$estatus','$organization','$profession','$etype','$location','$status','$year','$income','$c_name','$university','$course_name','$c_address','$reason','$consider','$b_name','$b_address','$b_income','$filename', '$image_data')";
                                                if (mysqli_query($conn, $query)) {
                                                    echo "<script>alert('Thank you for your cooperation! Your data was inserted successfully. Image uploaded successfully.');</script>";
                                                } else {
                                                    echo "<script>alert('Failed to insert data into the database.');</script>";
                                                }
                                            } 
                                            else {
                                                echo "<script>alert('Failed to upload image.');</script>";
                                            }
                                        }
                                        ?>                 
                    </form>
                </div>
            </div>
        </div>  
    </div>
   

<!-- Your existing HTML and PHP code above -->

    
   
</body>

</html>

</body>

</html>
