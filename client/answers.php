<div class="container">
    <div class="offset-sm-1">
    <h5>Answer:</h5>
    <?php
    
    $query="select * from answers where question_id=$qid";
    $result=$conn->query($query);
    foreach($result as $row){
        $answer = $row['answer'];
        echo"<div class='row'>
        <p class='anwer-wrapper'>$answer</p>
        
        </div>";
    }
    
    ?>
 </div>
</div>