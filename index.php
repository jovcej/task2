<?php

//price of day
fwrite(STDOUT, "Enter price of day:" . " ");
    $price = fgets(STDIN);
    $day = (preg_replace("/[^0-9\.]/", "", $price));
fwrite(STDOUT, "Price of the day is: $day\n");

//additional package
fwrite(STDOUT, "Enter price for additional package:" . " ");
    $package = fgets(STDIN);
    $add = (preg_replace("/[^0-9\.]/", "", $package));
fwrite(STDOUT, "Price for additional package is: $add\n");

//start date
fwrite(STDOUT, "Enter start date(format: mm/dd/yyyy):" . " ");
    $date = date_create(fgets(STDIN));
    $d = date_format($date, 'm/d/Y');
fwrite(STDOUT, "Start date: $d\n");

//finish date
fwrite(STDOUT, "Enter finish date(format: mm/dd/yyyy):" . " ");
    $finish_date = date_create(fgets(STDIN));
    $f_date = date_format($finish_date, 'm/d/Y');
fwrite(STDOUT, "Finish date: $f_date\n");

//id number
fwrite(STDOUT, "Enter identification number:" . " ");
    $id_number = fgets(STDIN);
    strlen ($id_number );
    $id = (preg_replace("/[^0-9]/", "", $id_number));
fwrite(STDOUT, "Your id number: $id\n");

//info
fwrite(STDOUT, "Enter additional info:" . " ");
    $info = fgets(STDIN);
fwrite(STDOUT, "Additional info: $info\n");

//total price
if($day > 0 && $d > 0 && $f_date > 0){
    $datetime1 = new DateTime($d);
    $datetime2 = new DateTime($f_date);
    $interval = $datetime1->diff($datetime2);
    $sub = $day * $interval->format('%a days') + $add;
    fwrite(STDOUT, "Successful response\n");
    fwrite(STDOUT, "Total price: $sub");
}elseif($day == 0 ||  $d == 0 || $f_date == 0 ){
    fwrite(STDERR, "ERROR\n");
    fwrite(STDERR, "Must enter price of day, start and finish date");
}

