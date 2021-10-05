<?php

$adtocart = [
  	0 	=> [
     	'type' 		=>[
     	   'Shirt'	=>  [
		    	'Size'  	=> ['M','XL','XXL'],
		    	'Color' 	=> ['Green','Blue','Red'],
		    	'Brand' 	=> ['Gentale Man','Jara','Easy Point'],
		    	'Made'  	=> [
			    	'Foreign' 	=> [
			    		'USA' 	=> [
			    			'Company Name' 	=> ['Example1','Example 2'],
							'Address'      	=> ['Newyork','Los Angles'], 
							'Manager Name' 	=> ['Romain Range','Jhon Cina'],
							'Phone'        	=> ['02190191','02790']      
						], 
						'China',
						'India'
			    	],
			    	'Local'   => ['Gazipur', 'Savar', 'Islampur'],
			    	'Self Made'
			    ]
			]
     	], 
  		'Model' 	=> ["TS101"],
  		'Name'  	=> ["Exclusive"]
  	]
];

// echo "<pre>";
// print_r($adtocart);
// echo "</pre>";

// echo" USA manager moile number is " .$adtocart[0]['Type']['Shirt']['Made']['Foreign']['USA']['Address'][1];


function type() 
{
	return $adtocart['type'];
}


function foreign_information($adtocart, $index, $type) 
{
	return $adtocart[$index]['type'][$type]['Made']['Foreign'];
}

echo "<pre>";
print_r(foreign_information($adtocart, 0, 'Shirt'));
echo "</pre>";


?>


