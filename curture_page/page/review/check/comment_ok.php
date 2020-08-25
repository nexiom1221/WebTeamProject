<?php
  include "../../../common/db.php";

  $id = htmlspecialchars ($_SESSION['id'], ENT_QUOTES);
  $review_no = htmlspecialchars ($_POST['review_no'], ENT_QUOTES);
  $mem_no = htmlspecialchars ($_POST['mem_no'], ENT_QUOTES);
  $comment = htmlspecialchars ($_POST['comment'], ENT_QUOTES);

 //로그인 상태만 댓글달도록 -> 비로그인이면 로그인화면으로 보낸다.
 if(!isset($_SESSION['id'])){
    echo "<script>alert('댓글기능을 이용하기 위해서는 로그인이 필요합니다.'); location.href='../../../login/login.php';</script>";

   } 

  //댓글에 내용을 적어야지만 댓글이 작성
  if($review_no == "" ||$mem_no=="" || $comment==""){
    echo "<script>alert('내용을 입력하세요~!'); history.back();</script>";
  } else {
  $sql = mq("insert into comment(comment, reviewNum, comment_id, comment_date)
            values('".$comment."', '".$review_no."','".$id."', now())");
    if($sql){
      header("Location: ../../japan_review_read.php?review_no=$review_no");
    } else {
      echo "<script>alert('작성 실패했습니다.'); history.back();</script>";
    }
  }

 ?>
