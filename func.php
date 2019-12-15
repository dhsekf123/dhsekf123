<?
   function latest_article($table, $loop, $char_limit) //table 저장되어진 table명 loop 검색할 최대행 chat limit 문자열 길이제한  
   {
		include "dbconn.php";   //db 접속 관련 php파일 내용추가

		$sql = "select * from $table order by num desc limit $loop";  //$table에 있는 $loop개수만큼 Data를 num을 기준으로 내림차순으로 검색 쿼리 
		$result = mysql_query($sql, $connect);  //쿼리 실행 

		while ($row = mysql_fetch_array($result))   //행이 존재한 만큼 반복 
		{
			$num = $row[num];    //num 컬럼값 저장 
			$len_subject = strlen($row[subject]);    //subject 컬럼값의 문자열 길이 저장 
			$subject = $row[subject];      //subject 컬럼값 저장 

			if ($len_subject > $char_limit)     //입력받은 길이($char_limit)보다 subject컬럼의 문자열 길이가 크면 
     									
      								
			{
				$subject = mb_substr($row[subject], 0, $char_limit, 'euc-kr');      //mb_substr를 쓰는이유는 한글이 입력되었을 경우 깨지지 않게 자르기 위해서
			  }             //euc-kr인코딩에 맞게 문자열 자르기(0~$char_limit) 
				$subject = $subject."...";             //자른후 ... 추가     

			$regist_day = substr($row[regist_day], 0, 10);//regist_day 컬럼값에서 10byte까지만 저장   //html코드에 DB에서 가져온 값 출력 

			echo "      
				<div class='col1'><a href='./$table/view.php?table=$table&num=$num'>$subject</a></div> <div class='col2'>$regist_day</div>
				<div class='clear'></div>
			";
		}
		mysql_close();          //연결 닫기 
   }
?>