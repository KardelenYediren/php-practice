<?php 

    

    $array=[
        46546546645654654=>[
            "adı"=>"asdasd",
            "resim"=>"",
            "fiyatı"=>5,
            "stok"=>15
        ],
        "kalem2"=>4,
        46546546645654655=>[
            "stok"=>5,
            "fiyatı"=>6
        ]
    ];



 
    $array4=[3,5,6,7,8,9];
    for($i=0;$i<count($array4);$i++){
        if($array4[$i] % 2 == 0 ){
            echo $array4[$i].",";
        }
       
    }


 
    $array=["a","b","c"];
    for($i=0;$i<count($array);$i++){
        if(count($array)-1==$i){
            echo $array[$i];
        }else{
            echo $array[$i].", ";
        }
    }

  ?>  
  







<?php


$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;



$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest(); 
echo $y; 



$x = 5;
$y = 10;

function myTest1() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; 
} 

myTest1();
echo $y;



function myTest2() {
    static $x = 0;   
    echo $x;
    $x++;
}
  
  myTest();
  echo "<br>";
  myTest1();
  echo "<br>";
  myTest2();




  $x = 5985;

    $a="Hello";
    $b="World";
    $c="aa ";
    $c.=$a.$b;

  var_dump($x);   




    function asal($sayi){
    	if($sayi>0){
        	if(is_int($sayi)){
              	if($sayi==1 || $sayi==2){
                	$txt="sayı asal";
              	}else if($sayi%2==0 && $sayi!=2){
                	$txt="asal değildir";
               	}else{
                	$txt="Asal";
                    for($i=3;$i<$sayi;$i+=2){
                    	if($sayi%$i==0){
                        	$txt="asal değildir";	
                            break;
                        }
                    }
                }
            }else{
            	$txt="tam sayı değil"; 
            }
        }else{
        	$txt="sayı pozitif değildir";
        }
    	return $txt;
    }
    
    function muk($sayi){
    	$toplam=0;
        for($i=1; $i<$sayi; $i++){
        	if($sayi % $i==0){
            	$toplam += $i;
            }
        }
        
        if($toplam==$sayi){
        	$txt=["txt"=>"sayı mükemmel","sayi"=>$sayi];
            
        }else{
        	$txt=["txt"=>"sayı mükemmel değil","sayi"=>$sayi];
            
        }
        
        return $txt;
    }
    


    function muk2($sayi){
    	$toplam=0;
        for($i=1; $i<$sayi; $i++){
        	if($sayi % $i==0){
            	$toplam += $i;
            }
        }
        
        if($toplam==$sayi){
            $txt="sayı mükemmel";
        }else{
            $txt="sayı mükemmel değil";
        }
        
        return $txt;
    }
   

    

?>


