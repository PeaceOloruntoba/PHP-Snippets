$length = 8;
$characters = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*-_');
$randomPassword = substr($characters, 0, $length);
echo "Generated Password: $randomPassword";
