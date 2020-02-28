<?php
header("https://paulduval.yj.fr/");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$to      = 'paul.duval30@gmail.com';
$subject = $_POST["subject"];
$message = $_POST["message"];
$headers = array(
    'From' => "FROM : $_POST[name] <no-reply@paulduval.yj.fr>",
    'Reply-To' => $_POST['email'],
    'X-Mailer' => 'PHP/' . phpversion()
);

if(mail($to, $subject, $message, implode("\r\n",$headers)))
{
    echo "<script>
    document.location(\"paulduval.yj.fr\")
</script>
    ";
}
else
{
    echo "ERROR";
}
?>