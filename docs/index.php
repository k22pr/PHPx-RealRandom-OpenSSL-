<?php
	// Make By K22pr - 2017-02-02
	// https://github.com/k22pr/PHPx-String2Mix

	//PHP Real Random
	require_once("../source.php");
?>
<link rel="stylesheet" href="https://raw.githubusercontent.com/k22pr/SisBe-CSS-Theme/master/dosc/css/index.css">
<link rel="stylesheet" href="../SisBe-CSS-Theme/css/index.css">
<section>
	<div class="info blue wac6 p-mt10">
		PHP Real Random 함수 테스트용 페이지 입니다.<br>
		값의 범위를 넣으면 범위의 값 10개를 openssl_random_pseudo_bytes로 생성해 반환 합니다.<br>
		
	</div>
	<div class="wac8 p10">
		<form action="?" class="w12" method="GET">
			<div class="w1 box white rbdr0 tright p5 pr10">최소</div>
			<input type="text" name="min" class="w3 tright" value="<?=$_GET["min"] ?? 0?>" placeholder="min">
			<div class="wd1 box grey center p5">~</div>
			<div class="w1 box white rbdr0 tright p5 pr10">최대</div>
			<input type="text" name="max" class="wd3" value="<?=$_GET["max"] ?? 100?>" placeholder="max">
			<button class="wd3 p7 btn blue">생성</button>
		</form>
	</div>
	<?
		if(isset($_GET["min"]) && isset($_GET["max"])){
			$min = $_GET["min"];
			$max = $_GET["max"];
			?>
				<ul class="wac6">
				<div class="info blue"><b><?=$min?> ~ <?=$max?></b>에서 랜덤 생성된 10개</div>
					<?
					for($i = 0; $i++ < 10;){
					?>
						<li class="w12 box white mb4 center p5 only-line">
							<div class="left small-text"><?=$i?></div>
							<?=number_format(real_rand($min,$max))?>
						</li>
					<?
					}
					?>
				</ul>
			<?
		}
	?>
</section>