<?php
  include "../common/db.php";
  include "review/lib/get_array_review.php";
  include "review/lib/modify_form.php";
  include "lib/get_genre.php";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="titleImg" href="../home/imgs/favicon.png">
  <link rel="stylesheet" href="curture/css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="curture/css/curture_main.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>
 
  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
 
 <!-- 자바스크립트 가져오기 -->
 <link rel="stylesheet" href="../header/css/bootstrap.min.css">
  <!-- 헤더 CSS -->
  <link rel="stylesheet" href="../header/css/header.css">
  <!-- 제이쿼리 -->
  <script src="../header/js/jquery-3.5.1.min.js"></script>
  <!-- 부트스트랩 JS -->
  <script src="../header/js/bootstrap.min.js"></script>
  <!-- <script src="../home/js/main.js" defer></script> -->
  
  <!-- review_modify_page css -->
  <link rel="stylesheet" href="./css/review_modify.css">
  <!--고정 headere-->
  <?php include "../header/header.php"; ?>

</head>
<body>
  <?php
  $sql = mq("select * from review where review_no = ".$_GET['review_no']."");
  $result = $sql -> fetch_array();
  $fillarray = get_array_review($result);
  ?>
  
  <div class="main">
    <!-- 게시글을 불러오는 함수  -->
    <div class="kategorie">
      <?php echo modify_form($fillarray); ?>
    </div>


    <!-- 글쓴 사람에게만 글삭제 권한을 줄 수 있게 해주는 코드  -->

  </div>
</body>
</html>