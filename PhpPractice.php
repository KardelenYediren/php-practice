<?php 

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
    
//asal sayı bulma

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
    
//mükemmel sayı bulma

?>    