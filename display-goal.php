<?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
    header('Location:login.php');
  }
  $id = $_SESSION['user_id']; 
?>


<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    marquee {
        color: #00BBF0;
        font-size: 40px;
        text-shadow: 2px 2px solid #1F4068;
    }
    body{
      background-color:#F0FFF3;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="row">
                    <div class="container-fluid">
                        <marquee behavior="" direction="">Your Goal</marquee>
                    </div>
                </div>
                <hr />
                <?php
                        include('db/connect.php');
                        $query = "SELECT * FROM goals WHERE user_id='$id'"; 
                        $result = mysqli_query($conn,$query);
                        ?>
                <table class="table">
                    <thead>
                        <th>Title</th>
                        <th>Discriptions</th>
                        <th>Post Date</th>
                    </thead>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['title'];  ?></td>
                        <td><?php echo $row['discriptions']; ?></td>
                        <td><?php echo$row['postDate'];?></td>
                    </tr>

                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    </script>
</body>
<script src="https://kit.fontawesome.com/a74baea4b2.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/82f2c2ba8a.js" crossorigin="anonymous"></script>
<script src="js/bootbosx/bootbox.min.js"></script>

</html>