<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    $firstName = htmlspecialchars($_POST["fname"]);
    $lastName = htmlspecialchars($_POST["lname"]);
    $dob = htmlspecialchars($_POST["dob"]);

    if (empty($firstName)) {
        echo "Please fill in the required details";
    }
    if (empty($lastName)) {
        echo "Please fill in the required details";
    }
    if (empty($dob)) {
        echo "Please fill in the required details";
    }
    echo "<br>";

    echo "Hi $firstName $lastName";
    echo "<br>";
    echo "<br>";


    $today = date('Y-m-d');
    if($dob == $today){
        echo "Today is your birthday:)";
    } else {
        echo "Today is not your birthday";
    }
    echo "<br>";
    echo "<br>";

    if(is_string($firstName)) {
        echo "Your first name is a string";
        echo "<br>";
        echo "<br>";

        echo "It has" . " " . strlen($firstName) . " " . "characters";
        echo "<br>";

        $reverseName = strrev($firstName);
        echo "<br>";
        echo "Are you looking for a new password?";
        echo "<br>";
        echo "What about $reverseName?";


    }
/*     if (($dob >= strtotime("21/03/date('Y')") && $dob <= strtotime("19/04/date('Y')"))) {
        echo "You are an Aries";
    }
    if (($dob >= strtotime("20 April") && $dob <= strtotime("20 May"))) {
        echo "You are a Taurus";
    }
    if (($dob >= strtotime("21 May") && $dob <= strtotime("20 June"))) {
        echo "You are a Gemini";
    }
    if (($dob >= strtotime("21 June") && $dob <= strtotime("22 July"))) {
        echo "You are a Cancer";
    }
    if (($dob >= strtotime("23 July") && $dob <= strtotime("22 August"))) {
        echo "You are a Leo";
    }
    if (($dob >= strtotime("23 August") && $dob <= strtotime("22 September"))) {
        echo "You are a Virgo";
    }
    if (($dob >= strtotime("23 September") && $dob <= strtotime("22 October"))) {
        echo "You are a Libra";
    }
    if (($dob >= strtotime("23 October") && $dob <= strtotime("21 November"))) {
        echo "You are a Scorpio";
    }
    if (($dob >= strtotime("22 November") && $dob <= strtotime("21 December"))) {
        echo "You are a Sagittarius";
    }
    if (($dob >= strtotime("22 December") || $dob <= strtotime("19 January"))) {
        echo "You are a Capricorn";
    }
    if (($dob >= strtotime("20 January") && $dob <= strtotime("18 February"))) {
        echo "You are an Aquarius";
    }
    if (($dob >= strtotime("19 February") && $dob <= strtotime("20 March"))) {
        echo "You are a Pisces";
    } */
    

/*  if($dob == (21/03 <> 19/04)) {
        echo "You are an Aries";
    }
    if($dob == (20/04 <> 20/05)) {
        echo "You are an Taurus";
    }
    if($dob == (21/05 <> 20/06)) {
        echo "You are an Gemini";
    }
    if($dob == (21/06 <> 22/07)) {
        echo "You are an Cancer";
    }
    if($dob == (23/07 <> 22/08)) {
        echo "You are an Leo";
    }
    if($dob == (23/08 <> 22/09)) {
        echo "You are an Virgo";
    }
    if($dob == (23/09 <> 22/10)) {
        echo "You are an Libra";
    }
    if($dob == (23/10 <> 21/11)) {
        echo "You are an Scorpio";
    }
    if($dob == (22/11 <> 21/12)) {
        echo "You are an Sagittarius";
    }
    if($dob == (22/12 <> 19/01)) {
        echo "You are an Capricorn";
    }
    if($dob == (20/01 <> 18/02)) {
        echo "You are an Aquarius";
    }
    if($dob == (19/02 <> 20/03)) {
        echo "You are an Pisces";
    } */
    
/*     switch ($dob) {
        case 21/03 <> 19/04:
            echo "You are an Aries";
            break;
        case 20/04 <> 20/05:
            echo "You are an Taurus";
            break;
        case 21/05 <> 20/06:
            echo "You are an Gemini";
            break;
        case 21/06 <> 22/07:
            echo "You are an Cancer";
            break;
        case 23/07 <> 22/08:
            echo "You are an Leo";
            break;
        case 23/08 <> 22/09:
            echo "You are an Virgo";
            break;
        case 23/09 <> 22/10:
             echo "You are an Libra";
            break;
        case 23/10 <> 21/11:
            echo "You are an Scorpio";
            break;
        case 22/11 <> 21/12:
            echo "You are an Sagittarius";
            break;
        case 22/12 <> 19/01:
            echo "You are an Capricorn";
            break;
        case 20/01 <> 18/02:
            echo "You are an Aquarius";
            break;
        case 19/02 <> 20/03:
            echo "You are an Pisces";
            break;
    } */

} else {
    header:"Location:..index.php";
}