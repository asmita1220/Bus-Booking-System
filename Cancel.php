



<div id="content" class="clearfix">
          <table cellpadding="1" cellspacing="1" id="resultTable">
            <thead>
              <tr>
                <th  style="border-left: 1px solid #C1DAD7"> Firstname </th>
                <th> Lastname </th>
                <th> Address </th>
                <th> Contact </th>
                <th> Route </th>
                <th> Bus Type </th>
                <th> Time </th>
                <th> Seat Number </th>
                <th> Payable </th>
                <th> Status </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            <?php
              include('db.php');
              $result = mysqli_query($conn,"SELECT * FROM customer");
              while($row = mysqli_fetch_array($result))
                {
                  echo '<tr class="record">';
                  echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['fname'].'</td>';
                  echo '<td><div align="right">'.$row['lname'].'</div></td>';
                  echo '<td><div align="right">'.$row['address'].'</div></td>';
                  echo '<td><div align="right">'.$row['contact'].'</div></td>';
                  $rrad=$row['bus'];
                  $dddd=$row['transactionum'];
                  $results = mysqli_query($conn,"SELECT * FROM route WHERE id='$rrad'");
                  while($rows = mysqli_fetch_array($results))
                    {
                  echo '<td><div align="right">'.$rows['route'].'</div></td>';
                  echo '<td><div align="right">'.$rows['type'].'</div></td>';
                  echo '<td><div align="right">'.$rows['time'].'</div></td>';
                    }
                  $resulta = mysqli_query($conn,"SELECT * FROM reserve WHERE transactionnum='$dddd'");
                  while($rowa = mysqli_fetch_array($resulta))
                    {
                  echo '<td><div align="right">'.$rowa['seat'].'</div></td>';
                    }
                  
                  echo '<td><div align="right">'.$row['payable'].'</div></td>';
                  echo '<td><div align="right">'.$row['status'].'</div></td>';
                  echo '<td><div align="center"><a rel="facebox" href="editstatus.php?id='.$row['id'].'"></a> | <a href="#" id="'.$row['transactionum'].'" class="delbutton" title="Click To Delete">Cancel</a></div></td>';
                  echo '</tr>';
                }
              ?> 
            </tbody>
          </table>
        </div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
      {

 $.ajax({
   type: "GET",
   url: "deleteres1.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>