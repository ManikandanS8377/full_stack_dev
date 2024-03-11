<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Full Stack Development</title>
    <style type="text/css">
        .padm{
            padding: 0;
            margin: 0;
        }
       body{
            background: #fcb603;
            padding: 0px !important;
            margin: 0px !important;
       }     
       .logo{
        color: #01777d;
        font-weight: bold;
        margin-right: 100px;
       }
       .header{
            background: #fc6f03;
            height: 100px !important;
            margin: 0px !important;
            padding: 0px !important;

            display: flex;
            justify-content: center;
            align-items: center;
       }
       .content{
            background-image:url('http://localhost/test/assests/images/bg1.jpg');
            height: 500px !important;
            display: flex;
            justify-content: center;
            align-items: center;
       }
       a{
            text-decoration: none;
       }
       .nav{
        background: #a536c9;
        color: white;
        margin: 15px;
        padding: 10px 20px;
        border-radius: 10px;
        font-size: 20px;
       }
       .nav:hover{
        background: #39004d;
        box-shadow:  2px 2px 10px #6d0094;
        transition-delay:0.1s;
       }

       #Add_Form{
        background: rgba(43, 80, 214,0.5);
        padding: 80px 60px;
        border-radius: 10px;

       }
       .add_lable{
        color: #05ffd3;
        font-weight: bold;
        font-size: 15px;
       }
       .add_input{
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #02faf2;
        background:rgba(241, 252, 18, 0.5);
        color: white;
        font-size: 20px;
        margin-bottom: 10px;
       }
       .add_submit{
        background: #0e8f00;
        color: white;
        border-radius: 10px;
        padding: 10px 30px;
        border:none;
        box-shadow: 2px 3px 6px black;
        cursor: pointer;
       }
       .response{
        color: white;
        font-weight: bold;
        font-size: 20px;
       }
    </style>
</head>
<body>
    <header class="header">
        <h1 class="padm logo">MAMCET</h1>
        <a href="<?php echo base_url(); ?>" class="nav">Home</a>
        <a href="Add_Data" class="nav">Add Data</a>
        <a href="<?php echo base_url(); ?>DeleteData" class="nav">Delete Data</a>
        <a href="<?php echo base_url(); ?>EditData" class="nav">Edit Data</a>

    </header>
    <content class="content">

        <form action="<?php echo base_url(); ?>createValue" id="Add_Form">
          <p class="response"><?php echo($status);?></p>
          <label for="roll_number" class="add_lable">Roll number:</label><br>
          <input type="text" id="roll_number" name="roll_number" value="" class="add_input"><br>
          <label for="name" class="add_lable">Name:</label><br>
          <input type="text" id="name" name="name" value="" class="add_input"><br>
          <label for="mark" class="add_lable">Mark:</label><br>
          <input type="text" id="mark" name="mark" value="" class="add_input"><br><br>
          <input type="submit" class="add_submit" value="Submit">
        </form>
    </content>
    
    <footer class="footer">
        
    </footer>
</body>
</html>