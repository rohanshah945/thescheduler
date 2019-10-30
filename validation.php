<?php

function check_min_length($fields_to_check_length){
   //initialize an array to store error messages
   $form_errors = array();

   foreach($fields_to_check_length as $name_of_field => $minimum_length_required){
       if(strlen(trim($_POST[$name_of_field])) < $minimum_length_required && $_POST[$name_of_field] != NULL){
           $form_errors[] = $name_of_field . " is too short, must be {$minimum_length_required} characters long";
       }
   }
   return $form_errors;
}

function show_errors($form_errors_array){
   $errors = "<p><ul style='color: red;'>";

   //loop through error array and display all items in a list
   foreach($form_errors_array as $the_error){
       $errors .= "<li> {$the_error} </li>";
   }
   $errors .= "</ul></p>";
   return $errors;
}