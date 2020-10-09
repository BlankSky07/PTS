<!--About Section–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  
  <section id="admin">

    <div class="container">

      <div class="row">

        <h1>Dashboard</h1>
        <div class="block"></div>

      </div>

      <div class="row">

        <h3><span class="typcn typcn-pen icon"></span>Request</h3>

        <table>

            <tr>
            <th>ID</th>
            <th>Requestor</th>
            <th>Email</th>
            <th>Date</th>
          </tr>

          <?php
            require_once('connection.php');
            $result = $conn->prepare("SELECT Request_ID, Full_Name,Email, Date_ FROM tblrequest ORDER BY Date_ ASC");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
           ?>

          <tr>
            <td><label><?php echo $row['Request_ID']; ?></label></td>   
            <td><label><?php echo $row['Full_Name']; ?></label></td>           
            <td><label><?php echo $row['Email']; ?></label></td>
            <td><label><?php echo $row['Date_']; ?></label></td>
          </tr>
             
          <?php } ?>
        </table>

      </div>
   
    </div>

  </section>