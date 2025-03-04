<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>倪培睿簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Pei-Rui Ni";
		}
	</script>


</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>
			<td>

				<h1>倪培睿</h1>
				<h2 id="h2text">Pei-Rui Ni</h2>

			</td>
		</table>
<table width="70%"border="1">
			<td>
				靜宜大學網頁：<a href="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
				IG：<a href="https://www.instagram.com/betty._.0811_/?hl=zh-tw"
				target="_blank">https://www.instagram.com/betty._.0811_/?hl=zh-tw</a><br>
				Tel: <a href="tel:0966380811">0966380811</a><br>
				E-Mail: <a href="mailto:betty63676@gmail.com">betty63676@gmail.com</a><br>
			</td>
			

			
			<td>
				BTS (방탄소년단) '피 땀 눈물 (Blood Sweat & Tears)' Official MV<br>
				<audio controls>
				<source src="bts-방탄소년단-피-땀-눈물-blood-sweat--tears-official-mv.mp3" type="audio/mP3">
				</audio><br>

			</td>		
				<td>
				[BTS - Blood Sweat & Tears] KPOP TV Show | M COUNTDOWN 161020 EP.497<br>
				<iframe src="https://www.youtube.com/embed/rfgQ_2xTZOs" allowfullscreen></iframe>		

				</td>
				
		</tr>
	</table>	

	<table>
		<tr>
			<td>
				<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/225a7d32-54ef-428c-87fc-633de0dc31d9">
</iframe>
			</td>
		</tr>
	</table>
	<?php echo date("Y-m-d") ?>

</body>
</html>