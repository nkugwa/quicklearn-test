<?php
//connection to the server
//=========================================================================
$conn = mysqli_connect("localhost", "root", "seniorkiD") 
or die("Unable to connect to MySQL");
echo "Connected successfully ";
//=========================================================================
// Create database
//==========================================================================
$sql = "CREATE DATABASE smartup_connect";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully ";
} 
else {
echo "Error creating database : " . mysqli_error($conn);
}
//=========================================================================
//Selecting a database
//==========================================================================
mysqli_select_db($conn, "smartup_connect")
Or die("<p>The database is not available.</p>");
echo "<p>Successfully opened the database.</p>";
// additional statements that access the database

//========================================================================== 
//==========================================================================
// Create table admin
//==========================================================================
$sql = "CREATE TABLE admin(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 username varchar(255) NOT NULL,
 email varchar(255) NOT NULL,
 password varchar(300) NOT NULL,
 reg_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updation_date date NOT NULL)";

if (mysqli_query($conn, $sql)) {
echo "admin table created successfully ";
} 
else {
echo "Error creating admin table: " . mysqli_error($conn);
}


//=============================================================
//Insert into admin
//==============================================================
$sql = "INSERT INTO admin (id, username, email, password, reg_date, updation_date)
VALUES ('1', 'admin', 'admin@gmail.com', 'admin@123#', '2019-04-10 14:20:30', '2019-04-12')";

if (mysqli_query($conn, $sql)) {
    echo "New record for admin was created successfully :";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*
//=============================================================
// Create tables adminlog
//=============================================================
$sql = "CREATE TABLE adminlog(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  adminid int(11) NOT NULL,
  ip varbinary(16) NOT NULL,
  logintime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
echo "adminlog table created successfully ";
} 
else {
echo "Error creating adminlog table: " . mysqli_error($conn);
}


//===========================================================
// Create tables courses
//=============================================================
$sql = "CREATE TABLE courses(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  course_code varchar(255) NOT NULL,
  course_sn varchar(255) NOT NULL,
  course_fn varchar(255) NOT NULL,
  posting_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
echo "courses table created successfully ";
} 
else {
echo "Error creating courses table: " . mysqli_error($conn);
}

//===============================================================
// Create tables registration
//================================================================
$sql = "CREATE TABLE registration(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  roomno int(11) NOT NULL,
  seater int(11) NOT NULL,
  feespm int(11) NOT NULL,
  foodstatus int(11) NOT NULL,
  stayfrom date NOT NULL,
  duration int(11) NOT NULL,
  course varchar(500) NOT NULL,
  regno int(11) NOT NULL,
  firstName varchar(500) NOT NULL,
  middleName varchar(500) NOT NULL,
  lastName varchar(500) NOT NULL,
  gender varchar(250) NOT NULL,
  contactno bigint(11) NOT NULL,
  emailid varchar(500) NOT NULL,
  egycontactno bigint(11) NOT NULL,
  guardianName varchar(500) NOT NULL,
  guardianRelation varchar(500) NOT NULL,
  guardianContactno bigint(11) NOT NULL,
  corresAddress varchar(500) NOT NULL,
  corresCIty varchar(500) NOT NULL,
  corresState varchar(500) NOT NULL,
  corresPincode int(11) NOT NULL,
  pmntAddress varchar(500) NOT NULL,
  pmntCity varchar(500) NOT NULL,
  pmnatetState varchar(500) NOT NULL,
  pmntPincode int(11) NOT NULL,
  postingDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate varchar(500) NOT NULL)";
if (mysqli_query($conn, $sql)) {
echo "registration table created successfully ";
} 
else {
echo "Error creating registration table: " . mysqli_error($conn);
}

//============================================================
// Create tables rooms
//=============================================================
$sql = "CREATE TABLE rooms(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  seater int(11) NOT NULL,
  room_no int(11) NOT NULL,
  fees int(11) NOT NULL,
  posting_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
echo "rooms table created successfully ";
} 
else {
echo "Error creating rooms table: " . mysqli_error($conn);
}


//===========================================================
// Create tables states
//===========================================================
$sql = "CREATE TABLE states(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  State varchar(150) DEFAULT NULL)";
if (mysqli_query($conn, $sql)) {
echo "states table created successfully ";
} 
else {
echo "Error creating states table: " . mysqli_error($conn);
}


//========================================================
//Insert into state
//==========================================================

//==========================================================
// Create tables userlog
//===========================================================
$sql = "CREATE TABLE userlog(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userId int(11) NOT NULL,
  userEmail varchar(255) NOT NULL,
  userIp varbinary(16) NOT NULL,
  city varchar(255) NOT NULL,
  country varchar(255) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
echo "userlog table created successfully ";
} 
else {
echo "Error creating userlog table: " . mysqli_error($conn);
}

*/

//===========================================================
// Create tables userregistration
//===========================================================
$sql = "CREATE TABLE userregistration(
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  regNo varchar(255) NOT NULL,
  firstName varchar(255) NOT NULL,
  middleName varchar(255) NOT NULL,
  lastName varchar(255) NOT NULL,
  gender varchar(255) NOT NULL,
  contactNo bigint(20) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  regDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate varchar(45) NOT NULL,
  passUdateDate varchar(45) NOT NULL)";
if (mysqli_query($conn, $sql)) {
echo "userregistration table created successfully ";
} 
else {
echo "Error creating userregistration table: " . mysqli_error($conn);
}
/*
//=============================================================
//Insert into userregistration
//==============================================================
$sql = "INSERT INTO userregistration (id, regNo, firstName, middleName, lastName, gender, contactNo, email, password, regDate, updationDate, passUdateDate)
VALUES ('1', '1165-04054-09983', 'khamiisi', 'jamada', 'sisye', 'm', '+256756568475', 'jamadakhamiisi@gmail.com', '1234', '2019-04-10', '2019-04-12', '2019-04-13')";

if (mysqli_query($conn, $sql)) {
    echo "New record for admin was created successfully :";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

?>