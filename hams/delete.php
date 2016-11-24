<?php
require_once 'inc/header.php';
require_once 'inc/dbcon.php';
?>
<?php
    session_start();

    if($_SESSION[userid] == "$userid")
    {
        echo "
        <html><head><title>삭제</title></head>
        <body>
        <center>삭제
        <form method='POST' action='delete_ok.php'>
            <input type=hidden name=idx value='$idx'>
            <center><input type='submit' value='삭제'>$nbsp; |<a href='sub1.php'>목록</a>
            </form>
            </center>
            </body>
            </html> ";
    }
else
{
    echo "
        <script language='javascript'>
            alert('글을 삭제하실수 없습니다.');
            history.back();
        </script> ";
}

?>