<?php
include DOCROOT."models/contacts.php";

function action_index(){
    renderView("main",["title"=>"Main Page"]);
}

function action_contacts(){

    $phones = model_contacts_getPhones();
    $adress = model_contacts_getAddress();
    $emails = model_contacts_getEmail();

    renderView("contacts",[
        "title"=>"Contacts Page",
        "ph"=>$phones,
        "adr"=>$adress,
        "eml"=>$emails
    ]);
}

function action_about(){
    renderView("about",["title"=>"About Page"]);
}
