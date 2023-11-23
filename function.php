<?php
# <<---------- Here I will implementation  some function ------------>>>>

// variable to use in function
$word = 'My   name is   Mohammed';
// <<-------  Function 1 ) countWord => to find number of words in string ------->>>

function countWord( $word ) {
    my_ltrim($word);
    $number = 0;
    for ( $i = 0; $i<mystrlen( $word );
    $i++ ) {
        $j = $i+1;
        if ( $word[ $i ] == ' ' && isset( $word[ $j ] ) && $word[ $j ] != ' ' ) {
            ++$number;
        };
    }; 
    return ++$number;
}
echo countWord( $word ).'<br>';
// <<------- Function2 )  revers => used to reverse string ------->>>

function myReverse( $word ) {
    $rev = '';
    for ( $i = mystrlen( $word )-1;
    $i >= 0 ;
    $i-- ) {
        $rev = $rev.$word[ $i ];
    }
    ;
    return $rev;
}
;
// echo myReverse( $word );

// <<------- Function3 ) mystrpo => used to return position for character in string ------->>>

function mystrpo( $W_string, $ch ) {
    $position = 0;
    for ( $i = 0; $i<strlen( $W_string );
    $i++ ) {
        if ( $W_string[ $i ] === $ch[ 0 ] ) {
            return $i;
        } else {
            $position = -1;
        }
    }
    return $position;
}
;
// echo mystrpo( $word, 's' );

// <<------- Function4 ) mystrlen => used to return length for string ------->>>

function mystrlen( $str ) {
    // echo $str;
    $count = 0;
    for ( $i = 0; isset( $str[ $i ] );
    $i++ )
 {
        ++$count;

    }
    return $count;

}
;
// echo mystrlen( $word );

// <<------- Function5 ) myIs_string => used to check is string ------->>>

$u = '888';
function my_is_string( $variable ) {

    if ( gettype( $variable ) === 'string' ) {
        return 1;
    } else return 0;
};

// echo my_is_string( $u );
// <<------- Function6 ) my_is_numeric => used to check is number ------->>>

function my_is_numeric( $variable ) {

    if ( gettype( $variable ) === 'integer' or gettype( $variable ) === 'double' ) {
        return 1;
    } else return 0;
}
// echo myIs_numeric( $x = 97676 );

// <<------- Function7 ) my_isset => Checks if a variable is set and not null. ------->>>

function my_isset( $x ) {
    if ( $x == null )
 {
        return 0;
    } else return 1;

};
// echo my_isset( $x )

// <<------- Function8 ) my_substr => Checks if a variable is set and not null. ------->>>

$string = 'Hello, World! Ahmed';

function my_substr( $string, $index, $len ) {
    $sub = '';
    $j = 0;
    for ( $i = $index; $j<$len; $i++ ) {
        //
        ++$j;
        $sub .= $string[ $i ];
    }
    return '<br>'.$sub;
}
;

// <<------- Function9 ) my_str_split => Checks if a variable is set and not null. ------->>>

$string = 'Hello';
// $array = str_split( $string );
// $array will be [ 'H', 'e', 'l', 'l', 'o' ];

function my_str_split( $string ) {
    $array = array();
    for ( $i = 0; $i<strlen( $string );
    $i++ )
 {
        $array[ $i ] = $string[ $i ];
    }
    return $array;
};
print_r( $x = my_str_split( $string ) );

// <<-- Function 10 )my_join =>used to concatenate elements of an array into a string -->>>

$array = array( 'apple', 'banana', 'orange' );

function my_join( $arr, $separator ) {
    $str = '';
    $len = count( $arr );
    for ( $i = 0; $i<$len; $i++ )
 {
        if ( $i == 0 ) {
            $str .= $arr[ $i ];
        } else $str .= $separator.$arr[ $i ];
    }
    return $str;
}
;
// echo my_join( $array, '/' );

// <<-- Function 11 )mystr_repeat =>used to repeat string  -->>>
$string = 'Hello my name';

function mystr_repeat( $string, $repeat ) {
    $repeatedString = '';

    for ( $i = 0; $i<$repeat; $i++ )
 {
        $repeatedString .= $string;

    }

    return $repeatedString;
}
;
// echo mystr_repeat( $string, 10 );

// <<-- Function 12 )sumArray =>used to find summation array  -->>>

$arr1 = [ 1, 5, 4, 5 ];

function sumArray( $arr1 ) {
    $len = count( $arr1 );
    $sum = 0;

    for ( $i = 0; $i<$len; $i++ )
 {
        $sum += $arr1[ $i ];
    }

    return $sum;
}
;

// echo sumArray( $arr1 );
$ar_num = array( -101, 2, 4, 6, 20, 4, -10, -100 );


// <<-- Function 13 )my_count =>used to find number of elements in array  -->>>

function my_count( $ar_num ) {
    $count1 = 0;
    for ( $i = 0; isset( $ar_num[ $i ] );
    $i++ )
 {
        ++$count1;

    }
    return $count1;
}
//  echo my_count( $ar_num );

$ar_num = array( -10, 2, 4, 6, 20, 4, -500, -200 );

// <<-- Function 14 )my_min =>used minimum value in array   -->>>

function my_min( $ar_num ) {
    $len = my_count( $ar_num );
    $small = $ar_num[ 0 ];

    for ( $i = 0; $i <$len; $i++ )
 {
        if ( $ar_num[ $i ]<$small ) {
            $small = $ar_num[ $i ];
        }
    }
    return $small;
}
;
echo my_min( $ar_num ).'<br>';
// <<-- Function 15 )my_max =>used maximum value in array   -->>>

function my_max( $ar_num ) {
    $len = my_count( $ar_num );
    $large = $ar_num[ 0 ];

    for ( $i = 0; $i <$len; $i++ )
 {
        if ( $ar_num[ $i ]>$large ) {
            $large = $ar_num[ $i ];
        }
    }
    return $large;
}
;
echo my_max( $ar_num );

// <<-- Function 16 )my_array_search =>used search for value in array  -->>>

$fruits = array( 'Apple', 'Banana', 'Orange', 'Jus', 'Rice' );
// echo '<br>'.array_search( 'Banana', $fruits );

function  my_array_search( $key, $ar ) {
    $exit = 0;
    foreach ( $ar as $v )
 {
        if ( $key === $v )
 {
            return 1;
        }
    }
    return $exit;
}
;
// echo '<br>'.my_array_search( 'banana', $fruits );

$std = array(
    'name' => 'John',
    'age' => 20,
    'grade' => 'A'
);

// <<-- Function 17 )my_array_key_exists =>used search for key in array  -->>>

// function  my_array_key_exists( $key, $ar ) {

//     foreach ( $ar as $k=>$value )
//  {
//         if ( $key === $k )
//  {
//             return 1;
//         }
//     }
//     return 0;
// }
;
// echo '<br>'.my_array_key_exists( 'name', $std );

// <<-- Function 18 )my_in_array =>check if element exist in array  -->>>

function  my_in_array( $key, $ar ) {

    foreach ( $ar as $v )
 {
        if ( $key === $v )
 {
            return true;
        }
    }
    return false;
}
;
// echo '<br>'.my_in_array( 'Banana', $fruits );
$fruits = array( 'Apple', 'Banana', 'Orange', 'Mango', 'Grape' );
// print_r( $fruits ) ;
// print_r( array_slice( $fruits, 1, 3 ) );
// $mmm = array( array_slice( $fruits, 1, 3 ) );

$string = 'Apple,Banana,Orange,Mango,Grape';

// <<-- Function 19 )my_toupper =>check if element exist in array  -->>>

$string = 'Hello World';

// function my_toupper( $string ) {
//     $convertedString = '';
//     for ( $i = 0; $i < strlen( $string );
//     $i++ ) {
//         $char = $string[ $i ];
//         $ascii = ord( $char );

//         if ( $ascii >= 97 && $ascii <= 122 ) {
//             // Check if the character is lowercase
//             $convertedChar = chr( $ascii - 32 );
//             // Convert to uppercase by subtracting 32 from ASCII value
//             $convertedString .= $convertedChar;
//         } else {
//             $convertedString .= $char;
//         }
//     }
//     return $convertedString;
// }
// echo '<pre>';
// echo my_toupper( $string );
echo '</pre>';

// <<-- Function 20 )my_lowercase =>check if element exist in array  -->>>

$string = 'Hello World';

// function my_lowercase( $string ) {
//     $convertedString = '';
//     for ( $i = 0; $i < strlen( $string );
//     $i++ ) {
//         $char = $string[ $i ];
//         $ascii = ord( $char );

//         if ( $ascii >= 65 && $ascii <= 90 ) {
//             // Check if the character is uppercase
//             $convertedChar = chr( $ascii + 32 );
//             // Convert to lowercase by adding 32 to ASCII value
//             $convertedString .= $convertedChar;
//         } else {
//             $convertedString .= $char;
//         }
//     }
//     ;
//     return $convertedString;
// }
// echo '<pre>';
// echo my_lowercase( $string );
// echo '</pre>';

$countries = [ 'Sudi', 'Yemen', 'Egt' ];
// foreach ( $array as $country=>$num ):
//     echo "the country is $country : number is: $num <br>";
// endforeach;

// <<-- Function 21 )myArrayPush =>add elements to  array  -->>>

function myArrayPush( &$array, ...$elements ) {
    foreach ( $elements as $element ) {
        $array[] = $element;
    }
    return $array;
}
;
echo '<pre>';
print_r( myArrayPush( $countries, 'Sudan', 'USA', 'Moroco', 'Egept', 877, 'Ali' ) );
//  print_r( $countries );
echo '</pre>';

// <<-- Function 22 )myArrayPop =>delete last elements from  array  -->>>

function myArrayPop( array &$array ) {
    $lastIndex = count( $array ) - 1;
    $lastElement = $array[ $lastIndex ];
    unset( $array[ $lastIndex ] );
    return $lastElement;
}
;
// $lastcountry = myArrayPop( $countries );
// echo $lastcountry;
echo '<br>';
print_r( $countries );

// <<-- Function 23 )my_abs =>return absolute value for number  -->>>

function my_abs( $number ) {
    if ( $number<0 ) {
        $number *= -1;
    }
    return $number;

}
echo '<br>';
echo my_abs( 200 );
echo '<br>';


// <<-- Function 24 )my_ceil =>return   -->>>
// echo my_ceil(4.3);    // 5
// echo my_ceil(9.999);  // 10
// echo my_ceil(-3.14);  // -3
function my_ceil($number){
    $type = gettype($number);
    if($number<0){
       return  (int) $number;
    }
    else if($type=='double'){
        return (int) ++$number;
    }
    else{
      return  $number;   }
};
echo '<br>';
echo my_ceil(-4.33333);

// <<-- Function 25 )my_floor =>return   -->>>

// echo floor(4.3);   // 4
// echo floor(9.999); // 9
// echo floor(-3.14); // -4
// echo floor(0); // 0
function my_floor($number){
    $type = gettype($number);
    if($number<0){
       return  (int) $number+-1;
    }
    else if($type=='double'){
        return (int) $number;
    }
    else{
      return  $number;   }
};
 
echo '<br>';
echo my_floor(-3.14);

// <<-- Function 26 )my_pow =>return   -->>>

function my_pow($number, $pow) {
    if ($pow === 0) {
        return 1;
    }
    $result = $number;
    $abspow = my_abs($pow);

    for ($i = 1; $i < $abspow; $i++) {
        $result *= $number;
    }

    return ($pow > 0) ? $result : 1 / $result;
}
echo '<br>';
echo my_pow(2, -4);
echo '<br>';
echo date('H:i:s');
echo '<br>';

// <<-- Function 27 )my_date =>used for return year or month or day -->>>
// my_date('2020-10-20', 'd') => return day
// my_date('2020-10-20', 'y') => return year
// my_date('2020-10-20', 'm') => return month
function my_date($date1,$chr){
    $separate_date=explode('-',$date1);
    if($chr=='Y' or $chr=='y'){
        return $separate_date[0];
    
    }
    else if($chr=='m' or $chr=='M'){
        return $separate_date[1];
    
    }
    else if($chr=='d' or $chr=='D'){
        return $separate_date[2];
    }
}
echo my_date('2020-10-25', 'm');
echo '<br>';
// <<-- Function 28 )date_year =>used for return year just -->>>

function date_year($date1){
    $separate_date=explode('-',$date1);
        return $separate_date[0];  
}
echo date_year('2020-10-25');
echo '<br>';
// <<-- Function 29 )date_month =>used for return month just -->>>

function date_month($date1){
    $separate_date=explode('-',$date1);
        return $separate_date[1];  
}
echo date_month('2020-10-25');
echo '<br>';

// <<-- Function 30 )date_day =>used for return day just -->>>

function date_day($date1){
    $separate_date=explode('-',$date1);
        return $separate_date[2];  
}
echo date_day('2020-10-25');
echo '<br>';


// <<-- Function 31 )my_date =>used for return horse minute and seconds -->>>
// my_time('12:10:25', 'h') => return horse
// my_time('12:10:25', 'i') => return minute
// my_time('12:10:25', 's') => return seconds

function my_time($time1,$chr){
    $separate_time=explode(':',$time1);
    if($chr=='H' or $chr=='h'){
        return $separate_time[0];
    
    }
    else if($chr=='I' or $chr=='i'){
        return $separate_time[1];
    
    }
    else if($chr=='S' or $chr=='s'){
        return $separate_time[2];
    }
}
echo my_time('12:15:25', 's');
echo '<br>';

// <<-- Function 32 )time_horse =>used for return horse just -->>>

function time_horse($time1){
    $separate_time=explode(':',$time1);
        return $separate_time[0];
  
}
echo time_horse('12:15:25');
echo '<br>';
// <<-- Function 33 )time_minute =>used for return minute  -->>>

function time_minute($time1){
    $separate_time=explode(':',$time1);
        return $separate_time[1];
  
}
echo time_minute('12:15:25');
echo '<br>';
// <<-- Function 34 )time_minute =>used for return second  -->>>

function time_second($time1){
    $separate_time=explode(':',$time1);
        return $separate_time[2];
  
}
echo time_second('12:15:25');
echo '<br>';


// <<-- Function 35 )my_factorial =>used for  -->>>

function my_factorial($n){
    if($n==1)
    {
        return 1;
    }
    else {
        return $n * my_factorial($n-1);
    }
};
echo my_factorial(5);



// <<-- Function 36 )array_key_first =>used for  -->>>
echo '<pre>';
$arr = [ 1, 2, 3, 6, 5 ,'h',1,2];
$arr2 = [ 'Y'=>'yemen','Sud'=>'Sudan'];
echo '</pre>';
///
echo array_key_first($arr2);
function my_array_first_key( $array ) {
    foreach ( $array as $key=>$value ) {
        return $key;
    }
}
echo '<pre>';
echo my_array_first_key( $arr2 ) ;
echo '</pre>';

// <<-- Function 37 )my_array_last_key =>used for  -->>>

function my_array_last_key( $array ) {
   if(is_array($array)){
    foreach ( $array as $key=>$value  ) {
        $last_key=$key;
        
    }
    return $last_key;
   }
   else return null;
};
echo '<pre>';
echo my_array_last_key( $arr2 ) ;
echo '</pre>';
// <<-- Function 38 )my_array_key_exists =>used for  -->>>


 function my_array_key_exists( $key, $array ) {
    if(is_array($array)){
        foreach ( $array as $k=>$v  ) {
            if($k==$key)
            return true;
        }
        return false;
    }
    else return null;
 }

 echo '<pre>';
echo my_array_key_exists( 'Y', $arr2 ) ;
echo '</pre>';
echo '<br>';
// echo end($arr2);

// <<-- Function 39 )my_array_key_exists =>used for  -->>>

function my_end($array){
    if(is_array($array)){
        foreach ( $array as $key=>$value  ) {
            $last_value=$value;
            
        }
        return $last_value;
       }
       else return null;
}
echo '<br>';
// echo my_end($arr2);

// <<-- Function 40 )my_array_key_exists =>used for  -->>>

function my_array_count_values( $array ) {
    $result = [];
    foreach ( $array as $key=>$value ) {
        if ( ! isset( $result[ $value ] ) ) {
            $result[ $value ] = 0;
        }
        $result[ $value ]++;
    }
    return $result;
}

echo '<br>';
// print_r( my_array_count_values($arr));
echo '<br>';

// <<-- Function 41 )my_array_key_exists =>used for  -->>>

function my_array_shift( &$array ) {
    for($i=0;$i<count($array);$i++){
        if($i==0){
            $first_value=$array[$i];
            unset($array[$i]);
        }
        else{ 
            $array[$i-1]=$array[$i];
        
        }
    }
    return $first_value;
}
 $element = my_array_shift($arr);
echo $element;
print_r($arr);

// <<-- Function 42 )my_array_fill_keys =>used for  -->>>

$keys = array('x'=>'foo', 'y'=>'yemen', 's'=>'sudi');
echo '<pre>';
print_r(array_chunk($keys,2));
echo '</pre>';
print_r($keys);
function my_array_fill_keys( $keys, $value ) {
    $result = [];
    foreach ( $keys as $key ) {
        $result[ $key ] = $value;
    }
    return $result;
}
$a=my_array_fill_keys($keys,'banana');
echo '<pre>';
print_r($a);
echo '</pre>';

// <<-- Function 43 )my_ltrim =>used for remove space from left -->>>
$str='Hello my name is Mohammed   ';
echo $str.'<br>';
echo strlen($str).'<br>';

function my_ltrim($string){
    $flag=false;
    $str_trim=''; // take string without space in left
    for($i=0;$i<strlen($string);$i++){
        if ($flag){
            $str_trim.=$string[$i];
        }
         else if($string[$i]!=' ')
           {
            $flag=true;
            $str_trim.=$string[$i]; 
           }          
}
return $str_trim;
};

echo my_ltrim($str);

// <<-- Function 43 )my_rtrim =>used for remove space from right -->>>
function my_rtrim($string){
    $index=0;
    $str_trim=''; // take string without space in right
    for($i=strlen($string)-1;$i>=0;$i--){
          if($string[$i]!=' ')
           {
            $flag=true;
            $index=$i;
            break;
           } 
        };
     for($i=0;$i<=$index;$i++)
      {
        $str_trim.=$string[$i];
      }
return $str_trim;
};
echo my_rtrim($str).'<br>';
?>

