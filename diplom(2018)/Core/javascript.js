var string='<img id="bla" src="project/kr.png" style="border-radius:30px;position:fixed;top:250px;left:93%;z-index:9999" width="20px" height="20px"><input type="button" id="close" style="position:fixed;top:250px;left:93%;widht:40px;height:20px;border:0;border-radius:0px; z-index:9999;opacity:0;"><link rel="stylesheet" type="text/css" href="project/css_2.css"><div id="show_chat" style="background:#42aaff;height:50px;width:250px; position:fixed;border-radius:5px;border:0;top:500px;left:75%; padding:0;z-index:9997;"><img src="project/men.jpg" style="border-radius:30px;" width="50px" height="50px"><div style=" margin-left:50px;margin-top:-40px;"><font style="color:white; "><b>Ибрагимов Линар</b></font></div><div style="margin-left:50px;margin-top:3px;"><font style="color:white;"><b>Оффлайн бот</b></font></div><div id="kr"><iframe id="frame" src="project/diplom2.php" style="background:#42aaff; position:fixed;border-radius:5px;border:0;top:250px;left:75%; padding:0;z-index:9997;" width="270px" height="345px" align="left" scrolling="no"></iframe></div></div>';
document.body.innerHTML+=string;
$("#close").click(function(e) {
  
  $("#kr").toggle();
  $("#close").toggle();
 $("#bla").toggle();
e.stopPropagation();
});
$('#show_chat').click(function(e) {
  
  $("#kr").toggle();
  $("#close").toggle();
 $("#bla").toggle();
 e.stopPropagation();
});




