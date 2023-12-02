<html>

<head>
  <title>Med Stock Management</title>
  <?php include_once('layouts/header_links.php'); ?>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: url(./img/med.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 40px;
    }

    .regform {
      width: 800px;
      background-color: rgb(0, 0, 0, 0.6);
      margin: auto;
      color: #ffffff;
      padding: 10px 0px 10px 0 px;
      text-align: center;
      border-radius: 15px 15px 0px 0px;
    }

    .main {
      background-color: rgb(0, 0, 0, 0.5);
      width: 800px;
      margin: auto;
    }

    form {
      padding: 10px;
    }

    #name {
      width: 100%;
      height: 100px;
    }

    .name {
      margin-left: 25px;
      margin-top: 30px;
      width: 125px;
      color: white;
      font-size: 18px;
      font-weight: 700;
    }


    #med_Id,
    #med_name,
    #med_type,
    #store_con,
    #amount,
    #st_loc,
    #f_name,
    #tel_no {
      position: relative;
      left: 200px;
      top: -37px;
      line-height: 40px;
      width: 480px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }


    #m_date,
    #x_date {
      position: relative;
      left: 200px;
      top: -37px;
      line-height: 40px;
      width: 480px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }

    .code {
      position: relative;
      left: 200px;
      top: -37px;
      line-height: 40px;
      width: 95px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }


    button,
    .previous {
      background-color: #3baf9f;
      display: block;
      margin: 20px 0px 0px 20px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;

    }

    button:hover {
      background-color: #5390f5;
    }

    clear {
      background-color: #3baf9f;
      display: block;
      margin: 20px 0px 0px 20px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;
    }

    .previous {
      background-color: #0FF063;
      color: black;
    }

    .footer {
      height: 70px;
      background-color: #49E980;
      text-align: center;
      margin: 20px 20px 20px 20px;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
    }
  </style>
</head>

<body>

  <div class="regform">
    <h1>Add New Medicine</h1>
  </div>
  <div class="main">
    <form action="./functions/add_product.php" method="post" autocomplete="off" id="addform">

      <!-- <h2 class="name"> Medicine ID </h2>
<input id= "med_Id" type ="text" name= "med_Id" required><br> -->

      <h2 class="name"> Med Name </h2>
      <input id="med_name" type="text" name="med_name" required><br>

      <h2 class="name"> Med Type </h2>
      <input id="med_type" type="text" name="med_type" required><br>

      <h2 class="name"> Storage Condition (°C) </h2>
      <input id="store_con" type="number" name="store_con" required><br>

      <!-- <h2 class="name"> Stock Amount </h2>
<input id= "amount" type ="number" name= "amount" required><br> -->

      <h2 class="name"> Storage Location </h2>
      <input id="st_loc" type="text" name="st_loc" required><br>

      <h2 class="name"> Manufacture Date </h2>
      <input id="m_date" type="date" name="m_date" required><br>

      <h2 class="name"> Expiry Date </h2>
      <input id="x_date" type="date" name="x_date" required><br>

      <h2 class="name"> Supplier Company </h2>
      <input id="f_name" type="text" name="f_name" required><br>

      <h2 class="name"> Contact No </h2>
      <input id="tel_no" type="text" name="tel_no">


      <button type="submit" value="add" name="add_medicine"> Add </button>
      <button type="reset"> Clear </button>

      <a style="display: inline-block;padding: 8px 16px;text-align:center;" href="location.php" class="previous"> Previous</a>

      <div class="footer">
        © copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color:#0F762F; font-weight:bold;">Group No: 05</a></div>

    </form>
  </div>
</body>

</html>