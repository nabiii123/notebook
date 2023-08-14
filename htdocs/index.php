<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>인천여자고등학교 창의과학부 노트북 대여</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        </head>
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

$currentDate = date('Y-m-d');
$currentTime = date('H:i:s');
?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">대여신청</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">대여현황</a></li>
                    
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Incheon Girls' High School</div>
                <div class="masthead-heading text-uppercase">창의과학부 노트북 대여</div>
                
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">노트북 대여 신청</h2>
                    <h3 class="section-subheading text-muted">잘 반납합시다</h3>
                </div>
                <div class="row text-center" >

                    <div class="col-md-4">
                        <span class="fa-stack fa-6x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">노트북 대여 신청</h4>
<head>
    <title>데이터 입력 폼</title>
</head>
<body>
    <form method="POST" action="process.php">
        <label for="stunum">학번 :</label>
        <input type="text" name="stunum" id="stunum" required><br><br>
        
        <label for="lapnum">노트북 번호:</label>
        <input type="text" name="lapnum" id="lapnum" required><br><br>
        
        <input type="submit" value="제출">
    </form>
</body> 
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?=$currentDate?> 대여 현황</h2>
                </div>

                <head>
  <title>테이블</title>
</head>
<body>
      <?php
    $query = "SELECT * FROM laptop";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>학번</th><th>노트북 번호</th><th>대여 날짜</th><th>대여 시간</th></tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['stunum'] . '</td>';
        echo '<td>' . $row['lapnum'] . '</td>';
        echo '<td>' . $row['rent_date'] . '</td>';
        echo '<td>' . $row['rent_time'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '데이터가 없습니다.';
}

$conn->close();
?>
</body>
</section>
        
        
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>

                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">30724최시온</a>
                        <a class="link-dark text-decoration-none" href="#!">31023이채은</a>
                    </div>
                </div>
            </div>
        </footer>
        
        
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
