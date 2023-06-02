<?php

$sample = '{"getemployee":{"id":1,"role_type":"SUPER ADMIN","roles_permission":"1","name":"admin","last_name":"ADMIN","first_name":"SUPER","middle_name":"ADMIN","suffix":"JR","office":null,"employee_id":"7777-7777","position":"ADMIN","department":"1D-HR","supervisor":"1111-1111","weekly_schedule":"1|2|3|4|5","country":"PH","nationality":"FILIPINO","province":"NATIONAL CAPITAL REGION (NCR)","city":"QUEZON CITY","barangay":"LAGING HANDA","home_address":"85 DON A ROCES","zip_code":1103,"email_verified_at":"2022-12-13 14:10:10","email":"yhangbert@hotmail.com","contact_number":"123456789","mobile_number":null,"height":null,"weight":null,"gender":"M","civil_status":"SINGLE","citizenship":null,"religion":"BAPTIST","birthdate":"2004-02-27","birth_place":"QUEZON CITY","password":"$2y$10$teSEyIbiEvPbQHEsMCbqUO8i.Z6jpiTuUWaBF\/h54mn\/dJqMfg13.","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"date_hired":"2022-07-28","employment_status":"PROBATIONARY","access_code":null,"remember_token":"iT7TicGK9Z2cph49d4mHUJFpE0QuWD9SAptsu1vwyLabWmsHLdBpXk1pfTF0","current_team_id":null,"profile_photo_path":"profile-photos\/M0AmuyQVVubYjGfbLlc5p169Nyfi8hGPuuOLbp8F.jpg","is_deleted":null,"deleted_by":null,"date_deleted":null,"created_at":null,"updated_at":"2023-04-26 09:30:29","expires_at":null},"getLeaves":{"id":1,"employee_id":"7777-7777","VL":10,"SL":10,"ML":0,"PL":3,"EL":5,"others":3,"created_at":null,"updated_at":null}}';

var_dump(json_decode($sample));

// $host = "192.168.1.196";
// $username = "root";
// $password = "root";
// $dbname ="laravel_app2";

// $conn = mysqli_connect($host, $username, $password, $dbname);

// if(!$conn){

//    die("Connection Failed:" . mysqli_connect_error());
   
// }
?> 