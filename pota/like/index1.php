<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Like and Dislike system</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>

 	
<div class="row col-12">
	<form action="index1.php" method="POST">
         <textarea rows="4" cols="76" name="msg"
             style="padding-left:5px; border: 2px solid rgb(181, 171, 171);margin-bottom:2px"
             id="msg" required>
		</textarea>
		<div class="row button">
             <input class="input_field"
                style="width: 100px;box-shadow: inset 3px 8px 7px 0px;" name="submit"
                type="submit" value="Post" />
        </div>
	 </form>
 </div>

 <?php 
 if(isset($_POST['submit'])){
	$comment=$_POST['msg'];
	print($comment);
	$insertion = "insert into posts values('','$comment')";
	$result= mysqli_query($conn, $insertion);
    
	
	
 }
 
 
 
 
 ?>






  <div class="posts-wrapper">
   <?php foreach ($posts as $post): ?>
   	<div class="post">
      <?php echo $post['text']; ?>
      <div class="post-info">
	    <!-- if user likes post, style button differently -->
      	<i <?php if (userLiked($post['id'])): ?>
      		  class="fa fa-thumbs-up like-btn" name="like-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-up like-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="likes"><?php echo getLikes($post['id']); ?></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	<i 
      	  <?php if (userDisliked($post['id'])): ?>
      		  class="fa fa-thumbs-down dislike-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-down dislike-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="dislikes"><?php echo getDislikes($post['id']); ?></span>
      </div>
   	</div>
   <?php endforeach ?>
  </div>

  <script src="script.js"></script>
</body>
</html>