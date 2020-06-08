 <?php  

 $number = ($_POST["name"]);  
print_r ($_POST["name"]);

$sum1 = $number[2]*$number[3];
echo "Sum1 = " . $sum1;

$sum2 = $number[7]*$number[8];
echo "Sum2 = " . $sum2;

$sum3 = $number[12]*$number[13];
echo "sum3 = " . $sum3;

$sum4 = $number[17]*$number[18];
echo "sum4 = " . $sum4;

$sum5 = $number[22]*$number[23];
echo "sum5 = " . $sum5;
echo "<br>";

$total_sum = $sum1+$sum2+$sum3+$sum4+$sum5;
echo "total sum = " . $total_sum;
echo "<br>";

$discount = $total_sum*(20/100);
echo "Discount rate = ". $discount; 

$grand_final = $total_sum - $discount;
echo "Grand final = ". $grand_final;
 ?> 
   