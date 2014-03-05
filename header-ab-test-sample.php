<?php if (strpos($_SERVER['REQUEST_URI'], '?nocookie') === FALSE): ?>
<script type="text/javascript">
	if(navigator.cookieEnabled == false) {
		url = location.href;
		location.href= url + '?nocookie';
	}
</script>
<?php
//ヘッダーABテスト用
	if (!isset($_COOKIE['header_test'])) {
		$header_flag = 0;
		setcookie("header_test", $header_flag, time()+60*60*24*30*3, "/"); //3か月有効
	?>
		<script type="text/javascript">_gaq.push(['_trackEvent', 'ABtest', 'setcookie', 'pattern<?php echo $header_flag; ?>', , true]);</script>
	<?php
	} else {
		$header_flag = $_COOKIE['header_test'];
	}
else:
	$header_flag = 0;
endif;
?>

<?php if ($header_flag == 1): ?>

	<div id="header-wrapper">
		<header class="cf ptn1">
			パターン1
		</header>
	</div>


<?php elseif ($header_flag == 2): ?>

	<div id="header-wrapper">
		<header class="cf ptn2">
			パターン2
		</header>
	</div>

<?php else: ?>

	<div id="header-wrapper">
		<header class="cf">
			オリジナル
		</header>
	</div>

<?php endif; ?>