<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
	window.onload=loadData, 5000;
	var voprosu=[];
	var otvetu=[];
function loadData(){
	$.ajax({ // Аякс
type: "POST", // Тип отправки "POST"
url: "../Core/LoadDataBase.php", // Куда отправляем(в какой файл) 
dataType:"json",
success: function(response){ // Если все прошло успешно
	voprosu=response.data.voprosu;
	otvetu=response.data.otvetu;
	$("#prokrutka").append("<div class='chat'>Добрый день,мы можем ответить на следующие вопросы:"+response.data.voprosu+"</div>");}});return false;
	console.log(voprosu);
console.log(otvetu);
}
function getOtvet(){
	
	$("#prokrutka").append("<div class='you'>"+$('#text1').val()+"</div>");
	//if($('#text1').val()==voprosu){

	//}
	for(var i=0;i<=voprosu.length;i++){
		if($('#text1').val()==voprosu[i]){
			$("#prokrutka").append("<div class='chat'>"+otvetu[i]+"</div>");	
			break;	
		}
		else{
			$("#prokrutka").append("<div class='chat'>Запрос не найден</div>");			
			break;
		}
	}
	$('#text1').val('');
}
</script>
</head>
		<body style="padding:0;">
	<div id="chat" style="background:#42aaff;">
		<div id="onestr">
			<div id="foto" style="border-radius: 20px;">
				<img src="men.jpg" style="border-radius:30px" width="50px" height="50px">
			</div>
			<div id="name" >
				<font style="color:white;margin-top:-40px; "><b>Ибрагимов Линар</b></font>
			</div>
			<div id="pom">
			<font style="color:white;margin-top:-40px; "><b>Оффлайн бот</b></font>			
			</div>
			</div>
		<div id="admin">
        <div id="prokrutka">
</div>
			<textarea id="text1" style="border-radius:10px;" ></textarea>
			<input type="button" onclick="getOtvet()" value="Отправить" id="button">
		</div>
	</div>

	</body>
</html>