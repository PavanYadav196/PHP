<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>User Information - Sintex Industries Ltd</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <h2>System Allocation Form -IT Department</h2>
  <div class="container">
    <form action="work_logic.php" method="post">
      <h3>User Information</h3>
      <div class="input">
        <label for="">Employee ID:</label>
        <input type="text" name="employeeId" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">User Name:</label>
        <input type="text" name="userName" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">Department:</label>
        <input type="text" name="department" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">Location:</label>
        <input type="text" name="loc" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">Designation:</label>
        <input type="text" name="designation" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">Contact Number:</label>
        <input type="text" name="contact_number" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">Email Id:</label>
        <input type="text" name="email" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">Date of Issue:</label>
        <input type="text" name="date_of_issue" placeholder="Enter User Name">
      </div>
      <div class="input">
        <label for="">IP Address:</label>
        <input type="text" name="ip_address" placeholder="Enter User Name">
      </div>
      <h2>System Information</h2>
      <div class="radio-group">
        <label for="">Laptop</label>
        <input type="radio" name="asset" value="laptop" onclick="text(0)">

        <label for="">Desktop</label>
        <input type="radio" name="asset" value="desktop" onclick="text(1)">
      </div>
      <div class="input-container">
        <div class="desktop" id="code" style="display:none;">
          <div class="input">
            <label for="">Make</label>
            <input type="text" name="make_m" placeholder="Enter Make Value">
          </div>
          <div class="input">
            <label for="">Model</label>
            <input type="text" name="model_m" placeholder="Enter Model Number">
          </div>
          <div class="input">
            <label for="">Sr.No</label>
            <input type="text" name="sr_no_m" placeholder="Enter Sr. No">
          </div>


          <div class="input">
            <label for="">Moniter Make</label>
            <input type="text" name="moniter_make" placeholder="Enter Moniter Made By">
          </div>

          <div class="input">
            <label for="">Moniter Sr. No</label>
            <input type="text" name="moniter_sr_num" placeholder="Enter Serial Num">
          </div>

          <div class="input">
            <label for="">Ram</label>
            <input type="text" name="ram_m" placeholder="Enter Ram">
          </div>

          <div class="input">
            <label for="">Processor</label>
            <input type="text" name="pro_m" placeholder="Enter Processor">
          </div>

          <div class="input">
            <label for="">HDD</label>
            <input type="text" name="hdd_m" placeholder="Enter HDD">
          </div>

          <div class="input">
            <label for="">Moniter</label>
            <input type="text" name="moniter" placeholder="Enter Moniter">
          </div>

        </div>
        <div class="laptop" id="code1" style="display:none;">
          <div class="input">
            <label for="">Make</label>
            <input type="text" name="make" placeholder="Enter Make Value">
          </div>
          <div class="input">
            <label for="">Model</label>
            <input type="text" name="model" placeholder="Enter Model Number">
          </div>
          <div class="input">
            <label for="">Sr.No</label>
            <input type="text" name="sr_no" placeholder="Enter Sr. No">
          </div>

          <div class="input">
            <label for="">Mac ID</label>
            <input type="text" name="mac_id" placeholder="Enter MacId">
          </div>

          <div class="input">
            <label for="">Adopter Sr. No</label>
            <input type="text" name="apopter_sr_no" placeholder="Enter Adopter Sr No">
          </div>

          <div class="input">
            <label for="">Ram</label>
            <input type="text" name="ram" placeholder="Enter Ram">
          </div>

          <div class="input">
            <label for="">Processor</label>
            <input type="text" name="pro" placeholder="Enter Processor">
          </div>

          <div class="input">
            <label for="">HDD</label>
            <input type="text" name="hdd" placeholder="Enter HDD">
          </div>

          <div class="input">
            <label for="">Screen Size</label>
            <input type="text" name="screen_size" placeholder="Enter Screen Size">
          </div>

        </div>
      </div>
      <div class="buttons">
        <input type="submit" name="submit" value="Submit" class="sub-btn btn">
        <input type="reset" value="Reset" class="res-btn btn">
      </div>

    </form>
  </div>
  <script src="./main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>