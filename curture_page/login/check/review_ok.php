<?php
  include "../data/db.php";
  $title = $_POST['title'];
  $description = $_POST['description'];
  $genre = $_POST['select_genre'];
  $kategorie = $_POST['select_kategorie'];
  $tmpfile = $_FILES['file']['tmp_name']; //$_FILES는 'file'에 대한 것에 대해서 많은 array값의 형태로 가져오는데 그중에서 tep_name의 값을 가져와라
  $o_name = $_FILES['file']['name'];      //$_FILES는 'file'에 대한 것에 대해서 많은 array값의 형태로 가져오는데 그중에서 name의 값을 가져와라
  $filename = iconv("UTF-8", "EUC-KR", $_FILES['file']['name']); // 파일이 깨지지 않도록 인코딩해주는 것
  $folder ="../media/".$filename;        //같은 이미지를 폴더에 새롭게 복사하는 것
  move_uploaded_file($tmpfile,$folder); //move_uploaded_file()은 서버로 전송된 파일을 저장할 때 사용하는 함수입니다.

  $sql = mq("select * from members where id = '".$_SESSION['id']."'"); // 현제 접속중인 유저의 mem_no를 가져와서 review 테이블이 넣어주기 위해서 만든 쿼리문
  $member_no = $sql -> fetch_array();

  if(isset($_SESSION['id'])){
    if($title == null || $description ==null || $genre == null || $kategorie ==null){
      echo "<script>alert('내용을 모두 기입해주세요.'); location.href='../review.php';</script>";
    }

    // 사진을 넣었을 경우와 안넣었을 경우 따로 따로 되도록 해놨음
    if(isset($o_name)){
    $sql = mq("insert into review(id, title, description, file, memberNum, genre, kategorie)
                values('".$_SESSION['id']."', '".$title."', '".$description."', '".$o_name."', '".$member_no['mem_no']."', '".$genre."', '".$kategorie."')");
    echo "<script>alert('글쓰기 성공했습니다.'); location.href='http://localhost/curture_page/country/curture_main.php';</script>";
    } else {
      $sql = mq("insert into review(id, title, description, memberNum, genre, kategorie)
                  values('".$_SESSION['id']."', '".$title."', '".$description."', '".$member_no['mem_no']."', '".$genre."', '".$kategorie."')");
      echo "<script>alert('글쓰기 성공했습니다.'); location.href='http://localhost/curture_page/country/curture_main.php';</script>";
  }
}
 ?>
