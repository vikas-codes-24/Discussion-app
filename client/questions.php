<div class="container">
<div class="row">
<div class="col-8"> 
<h1 class="heading"> Questions</h1>

  <?php
  include('./common/db.php'); 

$cid = $_GET['c-id'] ?? 0;
$uid = $_GET['u-id'] ?? 0;
$search = $_GET['search'] ?? '';

  if(isset($_GET['c-id'])){
    $query="select * from questions where category_id=$cid";
  }
  else if(isset($_GET["u-id"])){
    $query = "select * from questions where user_id=$uid";
   }
   else if(isset($_GET["latest"])){
    $query = "select * from questions order by id desc";
   }
    else if(isset($_GET["search"])){
    $query = "select * from questions where `title` LIKE '%$search%' ";
   }
  else{
    $query="select * from questions";
  }
 
  $result=$conn->query($query);
  foreach($result as $row){
  $title=$row['title'];
  $id =$row['id'];
  echo "<div class='row question-list'>
  <h4 class='my-Question'><a href='?q-id=$id'>$title</a>";
  echo $uid?"<a href='./server/requests.php?delete=$id'>delete</a>":NULL;
  echo "</h4></div>";
  }
  ?>
  </div>
  <div class='col-4'>
  <?php
  include('categorylist.php');
  ?>

</div>
</div>
</div>