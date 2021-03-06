<?php
  include "../common/db.php";
  include "review/lib/get_array.php";
  include "review/lib/comment_lib.php";
  include "review/lib/get_content.php";
  include "lib/get_genre.php";
  include "lib/make_paging.php";
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

  <link rel="stylesheet" href="../home/css/default.css" />
  <link rel="stylesheet" href="../header/style.css">

  <script src="../home/js/main.js" defer></script>

  <!--고정 headere-->
  <?php include "../header/header.php"; ?>
</head>
<body>

<div class= "img">
  <img src="curture/image/pic5.jpg">
    <div class= "content">
      <h1> 일본 </h1>
    </div>
</div>
<!--genre 부분을 가져오는 함수  -->
<?php echo get_genre(); ?>

<div class="dropdown">
  <button class="dropbtn">카테고리선택</button>
  <div class="dropdown-content">
    <?php if(isset($_GET['genre'])){ ?>
    <a href="Japan_review_page.php?genre=<?=$_GET['genre']?>&kategorie=음식">음식</a>
    <a href="Japan_review_page.php?genre=<?=$_GET['genre']?>&kategorie=장소">장소</a>
    <a href="Japan_review_page.php?genre=<?=$_GET['genre']?>&kategorie=놀거리">놀거리</a>
  <?php } else {?>
    <a href="Japan_review_page.php?kategorie=음식">음식</a>
    <a href="Japan_review_page.php?kategorie=장소">장소</a>
    <a href="Japan_review_page.php?kategorie=놀거리">놀거리</a>
  <?php } ?>
  </div>
</div>
<div class="main">
  <div class="main_title">
   review
  </div>
  <div class="main_subtitle">
    여기는 회원분들의 리뷰를 볼 수 있는 곳입니다. 매너있게 사용해주세요~!
  </div>
</div>
<div class="search">    <!--장르를 선택하고 검색하기 위해서 사용되는 form 태그-->
    <div class="search_title">
      <form method="post">
      <input type="text" name="search_title" size="30" placeholder="찾으시는 키워드를 입력해주세요">
      <input type="submit" name="submit" value="검색">
      <button type="button" name="button" onclick="location.href='review/review.php'">글쓰기</button>
      <button type="button" name="button" onclick="location.href='Japan_review_page.php'">홈으로</button></form>
    </div>
  </div>
  <div class="total">
  <?php
    // genre 와 kategorie 값이 없을경우 , 즉 처음에 화면 들어왔을때 모든 게시판이 보이도록 (limit 사용해서 최대 5개 ) 해주는 코딩
  if(!isset($_GET['genre']) && !isset($_GET['kategorie'])){
    $sql_total = mq("select * from review");
    $row_total = $sql_total -> num_rows;
    $page_total = $row_total/5;
    for($i=0; $i<=$page_total; $i++){ ?>
      <a href="Japan_review_page.php?page=<?=$i?>"><?=$i?></a>
    <?php }
    if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
       $sql = mq("select * from review where title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
    } else{
       $i = 0;
       while($i<1){
        $sql = make_paging($i);
        $i++;
       }
     }
     $row = $sql -> num_rows;
     for($i=1; $i<=$row; $i++){
       $result =$sql -> fetch_array();
  
      //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
      $fillarray = get_array($result); ?>

      <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
     <div class="review">
        <?php echo get_content($fillarray); ?>   
     </div>
     <?php }   // genre 만 선택하고 kategorie 는 선택하지 않았을경우의 게시글을 보여주는 코딩
   } else if (isset($_GET['genre']) && !isset($_GET['kategorie'])){
     if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
       $sql = mq("select * from review where genre = '".$_GET['genre']."' and title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
     } else{
       $sql = mq("select * from review where genre = '".$_GET['genre']."' order by review_no DESC limit 0,5");
     }
     $row = $sql -> num_rows;
     for($i=1; $i<=$row; $i++){
       $result =$sql -> fetch_array();

       //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
       $fillarray = get_array($result);
       ?>
       <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
       <div class="review">
         <?php echo get_content($fillarray); ?>
       </div>
                
       <?php }  // kategorie만 선택하고 genre는 선택하지 않았을경우의 게시글
    } else if (!isset($_GET['genre']) && isset($_GET['kategorie'])){
      if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
        $sql = mq("select * from review where kategorie = '".$_GET['kategorie']."' and title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
       } else{
         $sql = mq("select * from review where kategorie = '".$_GET['kategorie']."' order by review_no DESC limit 0,5");
       }
       $row = $sql -> num_rows;
       for($i=1; $i<=$row; $i++){
         $result =$sql -> fetch_array();

         //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
         $fillarray = get_array($result);
         ?>
         <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
         <div class="review">
           <?php echo get_content($fillarray); ?>
         </div>

         <?php }  // genre와 kategorie 모두를 선택해서 두가지 조건에 맞는 게시글을 보여주는 경우
    } else if (isset($_GET['genre']) && isset($_GET['kategorie'])){
      if(isset($_POST['search_title'])){  // + 추가적으로 키워드를 검색 했을경우에는 쿼리문에 like "키워드"를 통해서 원하는 title을 볼 수 있다.
        $sql = mq("select * from review where kategorie = '".$_GET['kategorie']."' and genre = '".$_GET['genre']."' and title like '%".$_POST['search_title']."%' order by review_no DESC limit 0,5");
      } else{
        $sql = mq("select * from review where kategorie = '".$_GET['kategorie']."' and genre = '".$_GET['genre']."' order by review_no DESC limit 0,5");
      }
      $row = $sql -> num_rows;
      for($i=1; $i<=$row; $i++){
        $result =$sql -> fetch_array();

        //result5에 fetch_array된 필드와 데이타들을 fillarray에 각 필드명별로 인덱스를 만들어서 데이터를 저장시키는 함수
        $fillarray = get_array($result);
        ?>
        <!--게시판에 장르/제목/작성자/시간/조회수등을 표시해주는 함수 -->
        <div class="review">
          <?php echo get_content($fillarray); ?>
        </div>
        <?php }
        } ?>
  </body>
</html>