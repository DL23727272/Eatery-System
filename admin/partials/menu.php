<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Online Food Order</title>

        <style>
            * {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
  padding: 1%;
  width: 80%;
  margin: 0 auto;
}

.text-center {
  text-align: center;
}

.clearfix {
  float: none;
  clear: both;
}

.tbl-full {
  width: 100%;
}
.tbl-30 {
  width: 30%;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th,
td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f5f5f5;
}

table tr th {
  border-bottom: 1px solid black;
  padding: 1%;
  text-align: left;
}

table tr td {
  padding: 1%;
}

.btn-primary {
  background-color: #1e90ff;
  padding: 1%;
  color: white;
  text-decoration: none;
  font-weight: bold;
}
.btn-primary:hover {
  background-color: #3742fa;
}

.btn-secondary {
  background-color: #1e90ff;
  padding: 1%;
  color: black;
  text-decoration: none;
  font-weight: bold;
}


.btn-danger {
  background-color: #d1001f;
  padding: 1%;
  color: white;
  text-decoration: none;
  font-weight: bold;
}
.btn-danger:hover {
  background-color: #ff1900;
}

.success {
  color: #2ed573;
}
.error {
  color:red;
}


.menu {
  border-bottom: 1px solid grey;
}
.menu ul {
  list-style-type: none;
}
.menu ul li {
  display: inline;
  padding: 1%;
}
.menu ul li a {
  text-decoration: none;
  font-weight: bold;
  color: #000000;
}


/* CSS for main-content */
.main-content {
  background-color: #f1f2f6;
  padding: 3% 0;
}

.col-4 {
  width: 18%;
  background-color: white;
  margin: 1%;
  padding: 2%;
  float: left;
}

/* CSS for Footer */
.footer {
 
}

/* CSS for Login */
.login {
  border: 1px solid grey;
  width: 20%;
  margin: 10% auto;
  padding: 2%;
}

        </style>

       
    </head>
    
    <body>
       
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>

                    <li><a href="manage-order.php">Order Section</a></li>
                  
                  
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        