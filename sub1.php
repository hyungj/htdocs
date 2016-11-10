<?php

$db_host="localhost";
$db_name="test1";
$db_type="mysql";
$dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";
$db_user="root";
$db_pass="";

try{
    $pdo=new PDO($dsn,$db_user,$db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print "";}
    catch(PDOException $Exception){
        die('오류'.$Exception->getMessage());
    
}

$sql = "select * from bor";
$stmh = $pdo->prepare($sql);
$stmh->execute();
$result = $stmh->fetchAll();
    
?>
<thead>
    <tr>
								<th scope="col"><span class="in">번호</span></th>
								<th scope="col"><span class="in">제목</span></th>
								<th scope="col"><span class="in">등록일</span></th>
								<th scope="col"><span class="in">조회수</span></th>
							</tr>
					</thead>
                    <br/>
					<tbody>
                        <?php                        
                        foreach($result as $row)
                        {?>
                        <tr>
                            <td><?=$row['idx']?></td>
                            <td><a href ="view.php?idx=<?=$row['idx']?>"><?=$row['title']?></a></td>
                            <td><?=$row['day']?></td>
                            <td><?=$row['viewcount']?></td>
                        </tr>
                        <?php        
                        }
                        ?> 
					</tbody>