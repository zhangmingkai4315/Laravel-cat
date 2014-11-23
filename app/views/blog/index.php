<?php
  if($posts->count())
  {
   echo "<table class=\"table table-striped table-bordered\">
    <thead>
    <tr>
        <th>序号</th>
        <th>标题</th>
        <th>简介</th>
        <th>评论次数</th>
        <th>更新日期</th>
    </tr>
    </thead>
    <tbody>";
    $i=1;
    foreach ($posts as $post)
    {
       echo  "<tr>";
       echo  "<td>".$i++."</td>";
       echo  "<td>".$post->title."</td>";
       echo "<td><a href=\"/blog/".$post->id."\">".$post->read_more."</a></td>";
       echo "<td>".$post->comment_count."</td>";
       echo  "<td>".$post->updated_at."</td>";
       echo "</tr>";
    }

   echo "</tbody></table>";



  }

else
    echo "<p>您还未添加任何blog,尝试添加一篇<a href='/create.php'>新日志</a></p>";



?>

