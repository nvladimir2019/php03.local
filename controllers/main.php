<?php
include DOCROOT."models/contacts.php";

function action_index(){
    renderView("main",["title"=>"Main Page"]);
}

function action_contacts(){

    $phones = model_contacts_getPhones();
    renderView("contacts",[
        "title"=>"Contacts Page",
        "ph"=>$phones
    ]);
}

function action_about(){
    renderView("about",["title"=>"About Page"]);
}
