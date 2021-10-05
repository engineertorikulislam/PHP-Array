<?php

// $person = [ 
// 	0 => [

// 		"name"     		=> ['Dipok Kumar Halder'],
// 		"phone"    		=> ["01710000", "0172000000"],
// 		"address"  		=> ["present" => 'Mirpur 1, Dhaka-1216', "permanent" => 'Bera, Pabna'],
// 		"gender"   		=> "Male",
// 		"parent"   		=> ["Father" => 'Harendra Halder', "Mother" => 'Shova Rani Halder'],
// 		"collection" 	=> [
// 			"Color"	=> [
// 				"dark"	=> ['Yellow Dark', 'Deep Dark'],
// 				"Light"	=> ["Green Light", "Yellow Light"],
// 			],
// 			"car"	=> ["BMW", "Audi"]
// 	    ]
// 	]
// ];

// echo "<pre>";
// print_r($person);
// echo "</pre>";

// echo "The color of Audi Car is ".$person[0]["address"]['present'][0];

 $person = [

 	0 => [

 	   'Name'    => [
	 	   	          'First Name' => ['Dipok Kumar'],
	 	   	          'Last Name'  => ['Halder']
 	   	           ],

 	   'Phone'   => [
	 	   	          'Office'    => ['+9608988','+96078645'],
	 	   	          'Personal'  => ['017100008','016709898'],
 	   	           ],
 	   'Address' => [
	 	   	           'Present'  => ['Mirpur 1, Dhaka-1216'],
	 	   	           'Permanent'=> ['Bera, Pabna']
 	   	            ],

 	   'Gender'  => ['Male','Female'],

 	   'Parent'  => [

	 	   	           'Father'  =>['Harendra Halder'],
	 	   	           'Mother'  =>['Shova Rani Halder']
 	   	           ],

 	   'Favorite'=> [

 	   	         'Color' => [

	 	   	         	   'Dark'  => ['Yellow Dark','White Ass Dark'],
	 	   	         	   'Light' => ['Green Light','Blue Light'],

 	   	         	       ],

 	   	         'Car'   => ['BMW','Audi','Ford'],
 	   	         'Food'  => [

 	   	         	      'Rice'  => ['Chicken Fried Rice','Vegetable Rice'],
 	   	         	      'Bread' => ['Normal Flour', 'White Flour'],

 	   	         	      ],

 	   	          
 	   	          ],
       

  ]

 ];

 echo "<pre>";
 print_r($person);
 echo"</pre>	";

 echo"";
?>