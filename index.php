<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/app/core/initialize.php');

// Main Sections
Router::add('/', '/app/controllers/home.php');

//Customer
Router::add('/customer/form', '/app/controllers/customers/form.php');
Router::add('/customer/process_form', '/app/controllers/customers/process_form.php');
Router::add('/customers', '/app/controllers/customers/list.php');
Router::add('/customer/remove', '/app/controllers/customers/remove.php');
//on for every page that we can have.
//the path url and the path you want to hit.
// Issue Route
Router::route();