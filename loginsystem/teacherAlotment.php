<?php

    //Input the pool of teachers
    $teachers = array(
        "Bappa", "Bikash" , "Jayanto" , "madhav" , "Ram", "Sita", "Ganesh", "Ramcharam", "Gopal","Ava", "Olivia", "Isabella", "Sophia", "Mia", "Charlotte", "Amelia", "Emily", "Abigail", "Elizabeth", "Sofia", "Avery", "Ella", "Ellie", "Harper", "Aria", "Avery", "Evelyn", "Grace", "Hazel", "Audrey", "Victoria", "Aria", "Madison", "Lily", "Scarlett", "Aubrey", "Addison", "Lila", "Natalie", "Hannah", "Aaliyah", "Leah", "Nora", "Mila", "Zoe", "Chloe", "Penelope", "Lydia", "Ainsley", "Savannah", "Allison", "Stella", "Paisley", "Violet", "Claire", "Brielle", "Skylar", "Everly", "Anna", "Caroline", "Nova", "Genesis", "Emma", "Kennedy", "Samantha", "Maya", "Willow", "Kinsley", "Naomi", "Ariel", "Elena", "Sarah", "Arianna", "Allie", "Vivian", "Gianna", "Eliana", "Quinn", "Nevaeh", "Ivy", "Sadie", "Piper", "Lillian", "Alexis", "Isabelle", "Mary", "Julia", "Mackenzie", "Adalyn", "Londyn", "Avery", "Emmalyn", "London", "Lauren", "Iris", "Lila", "Molly", "Riley",
       
    );

    //input the details of days of exams and required rooms
    $exams = array(
        'day1 morning' => 5,
        'day1 evening' => 5,
        'day2 morning' => 6,
        'day2 evening' => 6,
        'day3 morning' => 8,
        'day3 evening' => 8,
        
    );

    // echo count($teachers);
    $big_room;//we have two big rooms
    $small_room;//we have Small rooms
    
    //available teacher to get alloted
    $available_teachers = $teachers;

    $count = 0;//pointer to the teachers array
    $teacher_assigned_in_half = array();
    $teacher_assigned_in_day = array();
    $check_available = true;

    //looping through the array to asssign teachers.....
    foreach($exams as $key => $value){
        $check_available ? $check_available = false: $check_available=true;

        if($value > 2){
            $big_room = 2;
            $small_room = $value - $big_room;
        }else{
            $big_room = $value;
            $small_room = 0;
        }   

        $no_of_teachers = 7*$big_room + 2*$small_room;
        //$no_of_teachers = 7;

        //exception case..........
        if($no_of_teachers > count($available_teachers)){
            echo "<h1>not sufficient teachers</h1>";
            return 0;
        }

        //assigned teachers
        for($i = 0; $i<$no_of_teachers;$i++){
            if($count == count($teachers)){
                $count = 0;
                //echo "hello";
            }
            $teacher_assigned_in_half[$i] = $available_teachers[$count];
            $count++;
        }
        echo "<br>";
        echo $key."=> ";

        foreach($teacher_assigned_in_half as $value){
            echo $value." , ";
        }

        $teacher_assigned_in_day = array_merge($teacher_assigned_in_day, $teacher_assigned_in_half);
       // print_r($teacher_assigned_in_day);

        echo "<br><br>";
        if($check_available){
            $available_teachers = array_diff($teachers , $teacher_assigned_in_day);
            echo "available teachers =>";
            foreach($available_teachers as $value){
                echo $value.",  ";
            }
            echo "<br><br>";
            $teacher_assigned_in_day = array();
        }
        
    }