<?php
  

?>

<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8" />
    <title>課題2 Lalavel News</title>
    <link rel="stylesheet" href="stylesmysql.css">
 </head>
 
 <body>

   <h2 class="laravelnews">Laravel News</h2>
   <h3>さあ　最新ニュースをシェアしましょう</h3>
   <br>

   <p class="error"> 

   </p>


   <form method="post" >  
     <div class="atytle">
       <p>タイトル：</p>
       <input type="text" name="title" style="width:100%"> 
     </div><br>
     <div class="article">
       <p>記事：</p>
       <textarea name="article" rows="10" style="width:100%"></textarea>
     </div><br>
     <div class="submit">
       <input type="submit" value="投稿する" >
     </div>
   </form>
 
  
  </body>
</html>
    
    
