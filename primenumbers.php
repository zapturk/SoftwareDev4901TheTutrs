<?php
/**Code assessment. 
 *Name: Ndede, George M.
 *Program: A PHP program to generate prime numbers starting from 2 to 1000.
 *date: 10/12/2016
 */
// setting properties of the page during rendering.
//header("content-type:application/json");  
/** 
 *Method to generate prime numbers between 2 and 1000 
 *@param $n Integer
 */
function generatePrimeNumbers($number){
 
   /* Initialize and array to hold the generated prime numbers in question */
 
   $primeNumber = array();
 
   /* 
    *Generate prime numbers and mark the values of all elements as 0  
   */
   for($index = 1; $index <= $number; $index++) { 
       $primeNumber[$index] = 0;
   } 
                
   $kilo = 2;
   $multiple = 0;
 
  while($kilo < sqrt($number)){     
    for($jet = 2 ; $number >= $kilo*$jet; $jet++) {
         $multiple = $jet * $kilo;
         /* strike out the multiples of a numbers. */
         $primeNumber[$multiple] = 1;
   }
   $kilo++;
}
 //for loop to get the iteration of the numbers from 2 to 1000
  for($index = 2; $index <= $number; $index++){
     /* If the number is 0 equiv then it is a prime number. */ 
     if($primeNumber[$index] == 0) 
  	  
	echo "$index\n";
  //$data = file_get_contents($i); //read the file
  //echo $data;
    } 
 }
 //Program to Generate Primary numbers between 2 and 1000 
 generatePrimeNumbers(1000);

?>  