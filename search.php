<a href = './search.php'>[데이터검색하기]</a>|<a href = './input.php'>[데이터입력하기]</a><p>

<form action = './result.php' method = 'post'>
<h1>주소록 검색하기</h1><p>
이름 : <input type = 'text' name = 'uname' size = '20'><p>
성별 : <select name = 'sex' size = '1'>
    <option value = 'all' selected>모두
    <option value = 'male'>여성
    <option value = 'female'>남성
</select>
<input type = 'submit' value = '검색'>
</form>