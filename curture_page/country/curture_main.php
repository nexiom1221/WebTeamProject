<!DOCTYPE html>
<?php
  include "../login/data/db.php";
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>일본페이지</title>
  <!-- 페비콘 가져오기 -->
  <link rel="icon" type="image/png" href="imgs/favicon.png">
  <link rel="stylesheet" href="./css/mainTextAndreviewLayout.css">

  <link rel="stylesheet" href="css/curture_main.css">

  <!-- 폰트 어썸 백터 아이콘 가져오기 -->
  <script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous">
  </script>

  <!-- 구글 폰트 가져오기 -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/style.css">

  <script src="js/main.js" defer></script>
</head>

<body>

<header>
  <div class="top clear">
      <h1><a href="../home/index.html" height="5" width"10"><img src="imgs/banner.png" alt="엔터트립"></a></h1>
  </div>

  <div class="search-box">
      <input type="text" class="search-txt" name="검색창" placeholder="검색어를 입력해주세요">
      <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>

  <!-- 네비게이션 바  -->
  <!-- clear : float 영역 지우기 -->
  <div class="btm clear ">


      <div id="menu1">
          <ul class="main">
              <li><a href="#">국가</a>
              <div class = "menu2">
              <ul class="sub">
                  <li><a href="#"><p>아시아</p></a></li>
                  <li><a href="#">한국</a></li>
                  <li><a href="../country/curture_main.html">일본</a></li>
              </ul>
              <ul class="sub">
                  <li><a href="#"><p>북아메리카</p></a></li>
                  <li><a href="#">Canada</a></li>
                  <li><a href="#">U.S.A</a></li>
              </ul>
              <ul class="sub">
                  <li><a href="#"><p>남아메리카</p></a></li>
                  <li><a href="#">Brazil</a></li>
                  <li><a href="#">칠레</a></li>
              </ul>
              <ul class="sub">
                  <li><a href="#"><p>유럽</p></a></li>
                  <li><a href="#">프랑스</a></li>
                  <li><a href="#">이탈리아</a></li>
              </ul>
           </div>
       </li>

              <li><a href="#">BEST리뷰</a>
                  <div class="menu2">
                          <ul class="sub">
                              <li><a href="#"><p>SUB</p></a></li>
                              <li><a href="#">SUB</a></li>
                              <li><a href="#">SUB</a></li>
                          </ul>
                          <ul class="sub">
                              <li><a href="#"><p>SUB</p></a></li>
                              <li><a href="#">SUB</a></li>
                              <li><a href="#">SUB</a></li>
                          </ul>
                          <ul class="sub">
                              <li><a href="#"><p>SUB</p></a></li>
                              <li><a href="#">SUB</a></li>
                              <li><a href="#">SUB</a></li>
                          </ul>
                          <ul class="sub">
                              <li><a href="#"><p>SUB</p></a></li>
                              <li><a href="#">SUB</a></li>
                              <li><a href="#">SUB</a></li>
                          </ul>
                          </div>
                      </li>
                      <li><a href="#">건의사항</a>
                          <div class="menu2">
                                  <ul class="sub">
                                      <li><a href="#"><p>SUB</p></a></li>
                                      <li><a href="#">SUB</a></li>
                                      <li><a href="#">SUB</a></li>
                                  </ul>
                                  <ul class="sub">
                                      <li><a href="#"><p>SUB</p></a></li>
                                      <li><a href="#">SUB</a></li>
                                      <li><a href="#">SUB</a></li>
                                  </ul>
                                  <ul class="sub">
                                      <li><a href="#"><p>SUB</p></a></li>
                                      <li><a href="#">SUB</a></li>
                                      <li><a href="#">SUB</a></li>
                                  </ul>
                                  <ul class="sub">
                                      <li><a href="#"><p>SUB</p></a></li>
                                      <li><a href="#">SUB</a></li>
                                      <li><a href="#">SUB</a></li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>


          <!-- 로그인/회원가입/검색 -->
          <div class="login">
              <a href="../login/login.php">로그인</a>
              <a href="../login/register.php">회원가입</a>

          </div>


          </div>

    <!-- 로그인/회원가입/검색 -->



</header>



<div class= "img">
  <img src="image/pic5.jpg">
    <div class= "content">
      <h1> 일본 </h1>
    </div>
</div>

<nav>
  <ul class="nav-container">
    <li class="nav-item"><a href="#">영화</a></li>
    <li class="nav-item"><a href="#">드라마</a></li>
    <li class="nav-item"><a href="#">애니메이션</a></li>
    <li class="nav-item"><a href="#">다큐</a></li>
  </ul>
</nav>

<br>
<br>

<div class="dropdown">
  <button class="dropbtn">카테고리선택</button>
  <div class="dropdown-content">
    <a href="#">음식</a>
    <a href="#">장소</a>
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
<div class="search">
  <div class="search_genre">
    <form method="post">     <!--장르를 선택하고 검색하기 위해서 사용되는 form 태그-->
      <select name="kategorie">
        <option></option>
        <option value="음식">음식</option>
        <option value="장소">장소</option>
        <option value="놀거리">놀거리</option>
      </select>
  </div>
    <div class="search_title">
      <input type="text" name="search_title" size="30" placeholder="찾으시는 키워드를 입력해주세요">
      <input type="submit" name="submit" value="검색">
      <button type="button" name="button" onclick="location.href='../login/review.php' ">글쓰기</button>
      <button type="button" name="button" onclick="location.href='../login/review_read.php' ">홈으로</button>
    </div>
    </form>
  </div>
  <?php
    // 카테고리와 검색내용이 있을경우에만 해당하는 카테고리와 키워드에 맞는 리뷰를 보여주게하는 코딩
    if(isset($_POST['kategorie']) && isset($_POST['submit'])){
      $sql = mq("select * from review where genre= '".$_POST['kategorie']."' and title like '%".$_POST['search_title']."%' order by review_no DESC");
      $low = $sql -> num_rows;
      for($i=1; $i<=$low; $i++){
        $result =$sql -> fetch_array();
        $fillarray = array(
          'review_no' => $result['review_no'],
          'id' => $result['id'],
          'title' => $result['title'],
          'description'=> $result['description'],
          'file' => $result['file'],
          'mem_no' => $result['memberNum'],
          'genre' => $result['genre']);
          ?>
          <div class="review">
            <div class ="review_user_img">
              <div class="review_user">
                작성자 <?=$fillarray['id']?>
              </div>
              <div class="review_image">
                <img src="http://localhost/curture_page/login/media/<?= $fillarray['file']?>" width="20%" height="20%">
              </div>
            </div>

            <div class="review_title_des">
              <div class="review_title">
                제목<?= $fillarray['title']?>
              </div>
              <div class="review_des">
                내용<?= $fillarray['description']?>
              </div>
              <div class="review_comment">
                장르<?= $fillarray['genre']?>
              </div>
              <div class="review_delete">
                <?php if($_SESSION['id'] == $fillarray['id']){?>
                <form action="../login/check/review_delete.php" method="post">
                  <input type="submit" value="삭제">
                  <input type="hidden" name="delete" value="<?=$fillarray['review_no']?>">
                </form>
               <?php } ?>
              </div>
            </div>
            <div class="comment">
              <?php
             // 리뷰db와 댓글db를 join해서 만약 댓글이 존재한다면 댓글이 보이게 해주는 코딩
              $sql2 = mq("select * from comment, review where comment.reviewNum=review.review_no and comment.reviewNum ='".$fillarray['review_no']."'");
              $low2 = $sql2 ->num_rows;
              if(!$low2 == 0){
              for($j=1; $j<=$low2; $j++){
                $result2 =$sql2 -> fetch_array();

                echo "작성자   " .$result2['id']."<br>";
                echo "내용     ".$result2['comment']."<br><br>";

                }
              } ?>


                <form action="../login/check/comment_ok.php" method="post">
                <input type="hidden" name="mem_no" value="<?=$fillarray['mem_no']?>">
                <input type="hidden" name="review_no" value="<?=$fillarray['review_no']?>">
                <textarea name="comment" rows="10" cols="40"></textarea>
                <input type="submit" name="submit" value="댓글">
              </form></td>
            </tr>
            </div>
          </div>
          <?php }
        } else {
    //검색이 없을경우에는 최신글 순으로 장르상관없이 보여주게 하도록 하는 코딩
    $sql3= mq("select * from review order by review_no DESC");
    $low3 = $sql3 -> num_rows;
    for($i=1; $i<=$low3; $i++){
      $result3 =$sql3 -> fetch_array();
      $fillarray2 = array(
        'review_no' => $result3['review_no'],
        'id' => $result3['id'],
        'title' => $result3['title'],
        'description'=> $result3['description'],
        'file' => $result3['file'],
        'mem_no' => $result3['memberNum'],
        'genre' => $result3['genre']);
        ?>

          <div class="review">
            <table>
              <tr>
                <td>작성자<?= $fillarray2['id']?></td>
              </tr>
              <tr>
                <td rowspan='3'><img src="http://localhost/curture_page/login/media/<?= $fillarray2['file']?>" width="200" height="200"></td>
                <td width="100">제목</td>
                <td width="300"><?= $fillarray2['title']?></td>
              </tr>
              <tr>
                <td>내용</td>
                <td><?= $fillarray2['description']?></td>
              </tr>
              <tr>
                <td>장르</td>
                <td><?= $fillarray2['genre']?></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <?php if($_SESSION['id'] == $fillarray2['id']){?>
                  <form action="../login/check/review_delete.php" method="post">
                  <input type="submit" value="삭제">
                  <input type="hidden" name="delete" value="<?=$fillarray2['review_no']?>"></form>
                <?php } ?>
                </td>
              </tr>
              <tr>
                <td>
              <?php
              //검색기능이 없을경우 보여지는 게시글들에 대한 댓글관련 코딩
              $sql4 = mq("select * from comment, review where comment.reviewNum=review.review_no and comment.reviewNum ='".$fillarray2['review_no']."'");
              $low4 = $sql4 ->num_rows;
              if(!$low4 == 0){
              for($j=1; $j<=$low4; $j++){
                $result4 =$sql4 -> fetch_array();

                echo "작성자   " .$result4['id']."<br>";
                echo "내용     ".$result4['comment']."<br><br>";

                }
              } ?>


                <form action="../login/check/comment_ok.php" method="post">
                <input type="hidden" name="mem_no" value="<?=$fillarray2['mem_no']?>">
                <input type="hidden" name="review_no" value="<?=$fillarray2['review_no']?>">
                <textarea name="comment" rows="10" cols="40"></textarea>
                <input type="submit" name="submit" value="댓글">
              </form></td>
            </tr>
           </table>
          </div>
    <?php }
  }

?>
  </body>
</html>
