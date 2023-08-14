//process.php
<?php
$host = 'localhost'; // 예: localhost
$dbname = 'laptop_rental';
$username = 'root';
$password = '';

// MySQLi 객체를 생성하여 데이터베이스에 연결합니다.
$conn = new mysqli($host, $username, $password, $dbname);

// 연결에 실패한 경우 오류를 처리합니다.
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Seoul');
// 전송된 데이터 받기
$stunum = $_POST['stunum'];
$lapnum = $_POST['lapnum'];
$currentDate = date('Y-m-d');
$currentTime = date('H:i:s');

// 데이터 삽입 쿼리 작성
$query = "INSERT INTO laptop (stunum, lapnum, rent_date, rent_time) VALUES ('$stunum', '$lapnum', '$currentDate', '$currentTime')";

if ($conn->query($query) === TRUE) {
    echo "데이터가 성공적으로 삽입되었습니다.";
} else {
    echo "삽입 오류: " . $conn->error;
}

$conn->close();
header("Location: http://localhost/");
exit;
?>


