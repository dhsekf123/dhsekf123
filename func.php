<?
   function latest_article($table, $loop, $char_limit) //table ����Ǿ��� table�� loop �˻��� �ִ��� chat limit ���ڿ� ��������  
   {
		include "dbconn.php";   //db ���� ���� php���� �����߰�

		$sql = "select * from $table order by num desc limit $loop";  //$table�� �ִ� $loop������ŭ Data�� num�� �������� ������������ �˻� ���� 
		$result = mysql_query($sql, $connect);  //���� ���� 

		while ($row = mysql_fetch_array($result))   //���� ������ ��ŭ �ݺ� 
		{
			$num = $row[num];    //num �÷��� ���� 
			$len_subject = strlen($row[subject]);    //subject �÷����� ���ڿ� ���� ���� 
			$subject = $row[subject];      //subject �÷��� ���� 

			if ($len_subject > $char_limit)     //�Է¹��� ����($char_limit)���� subject�÷��� ���ڿ� ���̰� ũ�� 
     									
      								
			{
				$subject = mb_substr($row[subject], 0, $char_limit, 'euc-kr');      //mb_substr�� ���������� �ѱ��� �ԷµǾ��� ��� ������ �ʰ� �ڸ��� ���ؼ�
			  }             //euc-kr���ڵ��� �°� ���ڿ� �ڸ���(0~$char_limit) 
				$subject = $subject."...";             //�ڸ��� ... �߰�     

			$regist_day = substr($row[regist_day], 0, 10);//regist_day �÷������� 10byte������ ����   //html�ڵ忡 DB���� ������ �� ��� 

			echo "      
				<div class='col1'><a href='./$table/view.php?table=$table&num=$num'>$subject</a></div> <div class='col2'>$regist_day</div>
				<div class='clear'></div>
			";
		}
		mysql_close();          //���� �ݱ� 
   }
?>