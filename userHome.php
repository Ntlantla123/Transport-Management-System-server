<?php
$query="select * from trans_detail";
$run=mysqli_query($con,$query);
while ($rowfetch=mysqli_fetch_assoc($run)){
    echo" <tr><td>".$rowFetch['id']."</td>
    <td>".$rowFetch['model']."</td>
    <td>".$rowFetch['seats']."</td>
    <td>".$rowFetch['fee']."</td>
    <td>".$rowFetch['str_pnt']."</td>

    <td>".$rowFetch['end_pnt']."</td>

    <td><a class='submitBtn' href='seatsBooking.php?model=$rowFetch[model]
    &seats=$rowFetch[seats]&fee=$rowFetch[fee]&str_pnt=$rowFetch[str_pnt]
    end_pnt=$rowFetch[end_pnt]'>Book </a>
</td></tr>";

}


?>