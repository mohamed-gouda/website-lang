<?php


// here 2 function each function for lang , it's easy and all langs in one page.


function arabic ($word){
   static $words = array(

            "name"=>"محمد جودة",
            "age"=>"21",
            "page1"=>"اضغط هنا للدخول الى الصفحة الاولى",
            "page2"=>"اضغط هنا للدخول الى الصفحة الثانية",
            "welcome" => "مرحبا بك , انت الآن فى صفحة "
           
    );
    return $words[$word];
}



function english ($word){
    static  $words = array(

            "name"=>"mohamed Gouda",
            "age"=>"21",
            "page1"=>"click here to going to page1",
            "page2"=>"click here to going to page2",
            "welcome" => "Welcome , now u r in "
    );

    return $words[$word];
}


?>