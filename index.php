<?php
//header("Location: login/login.php");

require_once ("../common_assets/config.php");

$password1 = password_hash('UTEP$123',PASSWORD_DEFAULT);
$password2 = password_hash('admin1',PASSWORD_DEFAULT);
$password3 = password_hash('42',PASSWORD_DEFAULT);
$password4 = password_hash('123',PASSWORD_DEFAULT);
$password5 = password_hash('password',PASSWORD_DEFAULT);
$password6 = password_hash(' pwsd',PASSWORD_DEFAULT);
$password7 = password_hash('pwsd',PASSWORD_DEFAULT);
$password8 = password_hash('pwsd',PASSWORD_DEFAULT);
$password9 = password_hash('user1',PASSWORD_DEFAULT);
$password10 = password_hash('pwsd',PASSWORD_DEFAULT);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password1 ,'0');;
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password2 ,'1234567');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password3 ,'8675309');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password4 ,'11111111');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password5 ,'12345678');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password6 ,'13579246');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password7 ,'22224444');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password8 ,'88664422');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password9 ,'98765432');
mysqli_stmt_execute(stmt);

$sql = 'UPDATE User SET u_password = ? WHERE u_id = ?';
mysqli_stmt_bind_param($sql, 'si', $password10 ,'99887766');
mysqli_stmt_execute(stmt);

exit(0);
