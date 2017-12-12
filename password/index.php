<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 13/09/2017
 * Time: 10:40 AM
 */

$password = password_hash('satish', PASSWORD_DEFAULT)."\n";
echo "{$password}\n";
$match = password_verify('anil', $password);
echo "{$match}\n";
$hash='$2y$10$g/gCiKNoJjVMc3tpFWfq2O.nR8ZjVgn8VgZwkeNXI7cZYtpq4TQfm';

if(password_verify('satish', $password)) {
    echo "password is valid";
}
else{
    echo "password does not match";
}

