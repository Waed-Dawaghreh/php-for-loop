<?php
    //1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
//hyphen(-) at the starting and ending position.
echo "1. Create a script that displays 1-2-3-4-5-6-7-8-9-10";
echo "<br>";
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
echo "<hr>";
echo "<br>";

//2. Create a script using a for loop to add all the integers between 0 and 30 and
// display the total.
echo "2. Create a script using a for loop to add all the integers between 0 and 30";
echo "<br>";
$total = 0;
for($i=1; $i<=30; $i++)
{
$total +=$i;
}
echo " Output = $total";
echo "<br>";
echo "<hr>";

//3c. Create a script to construct the following pattern
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E
echo "3. Create a script to construct the following pattern";
echo "<br>";
for($x = 1; $x <= 5; $x++){ 
    for($i = 'A'; $i <= 'E'; $i++){
      echo str_repeat("A", 5 - $x) . str_repeat($i, $x) . "<br>";
      if($x++ > $x){
      break;
        }
    }
}
     echo "<hr>";
// 3b. Create a script to construct the following pattern, using nested for loop.
        // 1 1 1 1 1
        // 1 1 1 2 2
        // 1 1 3 3 3
        // 1 4 4 4 4
        // 5 5 5 5 5


     echo "3b- Create a script to construct the following pattern, using nested for loop.2";
     echo "<br>";
 
     for($x = 1; $x <= 5; $x++){ 
       for($i = '1'; $i <= '5'; $i++){
         echo str_repeat("1", 5 - $x) . str_repeat($i, $x) . "<br>";
         if($x++ > $x){
         break;
        }
    }
 }
 
    echo "<hr>";

    //4. Create a script to construct the following pattern, using a nested for loop.
    //    1 0 0 0 0
    //    0 2 0 0 0
    //    0 0 3 0 0
    //    0 0 0 4 0
    //    0 0 0 0 5
    echo "4- Create a script to construct the following pattern, using a nested for loop 3";
    echo "<br>";

    for($x = 5; $x >= 1; $x--){ 
      for($i = '1'; $i <= '5'; $i++){
        echo str_repeat(0, 5 - $x).$i . str_repeat(0, 5-$i) . "<br>";
        if($x-- < $x){
        break;
            }
         }
    }
    echo "<hr>";

    //5. Write a program to calculate and print the factorial of a number using a for
        // loop. The factorial of a number is the product of all integers up to and including
        // that number
    echo "5- Write a program to calculate and print the factorial of a number using a for loop";
    echo "<br>";
     $n = 6;
     $x = 1;
     for($i=1;$i<=$n-1;$i++)
     {
      $x*=($i+1); 
     }
     echo "The factorial of  $n = $x";
     echo "<hr>";
     //6. Write a program to calculate and print the Fibonacci sequence using a for loop.
     echo "6- Write a program to calculate and print the Fibonacci sequence using a for loop.";
     echo "<br>";

     $i=0;
     $x=0;
     $y = 0;
  
     while ($i<=6) {
     $i++;
       while ($y<=6){
          $x+=$i; 
          echo $x.' ';
          $i+=$x; 
          echo $i.' '; 
          $y++;
       }  
  }
  echo "<hr>";
  //7. Write a program which will count the "c" characters in the text
// "OrangeAcademy"

echo "7- Write a program which will count the c characters in the text OrangeAcademy:";
echo "<br>";
$text="OrangeAcademy";
$searchChar="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$searchChar)
    {
    $count=$count+1;
    }
  }
  echo "The char $searchChar has been found $count times in $text <br>";
  echo $count;
echo "<hr>";

echo "8- Write a PHP script that creates the following table using for loops. Add cellpadding= 3px and cellspacing= 0px to the table tag:";
echo "<br> ";
?>

<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
    for($row=1;$row<=6;$row++)
    {
     echo "<tr>";
         for ($col=1;$col<=5;$col++)
           {
             echo "<td>$row * $col = ".$row*$col."</td>";
           }
             echo "</tr>";
    }
?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   
      <?php
      echo "9. Write a PHP script using nested for loop that creates a chess board as shown below.";
      echo "<br> ";
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
</body>
</html>
<?php
echo "<hr>";
 echo "10- Write a PHP script using nested for loop that creates a chess board as shown below:";
 echo "<br>";
echo "<table border ='1' 'style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
        echo "</table>";
        echo "<hr>";


        echo "11- Write a PHP program which iterates the integers from 1 to 50. For multiples of three print Fizz instead of the number and for the multiples of five print Buzz.
        For numbers which are multiples of both three and five print FizzBuzz:";
        echo "<br>";
        for ($i = 1; $i <= 100; $i++)
            {
              if ( $i%3 == 0 && $i%5 == 0 )
               {
                 echo $i . " FizzBuzz"."<br>" ;
               }
              else if ( $i%3 == 0 ) 
               {
                 echo $i. " Fizz"."<br>";
               }
                 else if ( $i%5 == 0 ) 
               {
                 echo $i. " Buzz"."<br>";
               }
                 else
               {
                 echo $i."<br>";
               }
             }
      
        echo "<hr>";

        echo "12- Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows):";
        echo "<br>";
        $n = 5; 
        $count = 1;
        for ($i = $n; $i > 0; $i--) 
        {
          for ($j = $i; $j < $n + 1; $j++) 
           {
             echo $count . " ";
             $count++;
           } 
        	echo "<br>";
       }
       echo "<hr>";

       echo "13. Write a PHP program to print alphabet pattern 'A'.";
       echo "<br>";
       for ($row=0; $row<=7; $row++)
        {
          for ($column=0; $column<=7; $column++)
        	{
                if ((($column == 1 or $column == 5) and $row != 0) || (($row == 0 or $row == 3) && ($column > 1 and $column < 5)))
                    echo "*";    
                else  
                    echo "&nbsp&nbsp";     
        	}        
          echo "<br>";
        }
        echo "<br>";

        echo "<hr>";

        echo "14. Write a PHP program to print alphabet pattern 'B'";
        echo "<br>";
        for ($row=0; $row<7; $row++)
            {
              for ($column=0; $column<=7; $column++)
            	{
                  if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
                        echo "*";    
                    else  
                        echo "&nbsp&nbsp";     
            	}        
              echo "<br>";
            }
            echo "<hr>";

            echo "15. Write a PHP program to print alphabet pattern 'C'.";
            echo "<br>";
            for ($row=0; $row<7; $row++)
                {
                  for ($column=0; $column<=7; $column++)
                	{
                     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
                            echo "*";    
                        else  
                            echo "&nbsp&nbsp";     
                	}        
                  echo "<br>";
                }
                echo "<hr>";

                echo "16. Write a PHP program to print alphabet pattern.";
                echo "<br>";
                $alpha = range('A', 'Z');  
                for ($i=5; $i>=1; $i--) {    
                  for($j=0; $j<=$i; $j++) {    
                     echo '&nbsp';    
                  }  
                  $j--;  
                for ($k=0; $k<=(5-$j); $k++) {    
                    echo $alpha[$k];   
                }    
                echo "<br>";  
                }  
                $alpha = range('A', 'Z');  
                for ($i=1; $i<=5; $i++) { 
                    // echo '&nbsp';      
                  for($j=0; $j<=$i; $j++) {    
                     echo '&nbsp';    
                  }  
                  $j--;  
                for ($k=0; $k<=(5-$j); $k++) {    
                    echo $alpha[$k];   
                }    
                echo "<br>";  
                }  
             
?>