<style type="text/css">
	html body {
		margin-top: 50px !important;
	}

	#top_form {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;

		margin: 0;

		z-index: 2100000000;
		-moz-user-select: none;
		-khtml-user-select: none;
		-webkit-user-select: none;
		-o-user-select: none;

		border-bottom: 1px solid #151515;

		background: #53CEB2;

		height: 55px;
		line-height: 40px;
	}

	#top_form input[name=url] {
		width: 230px;
		height: 30px;
		padding: 10px;
		font: 20px "Helvetica Neue", Helvetica, Arial, sans-serif;
		border: 0px none;
		background: none repeat scroll 0% 0% #FFF;
	}


	input[name=sub2] {
		background-color: #009B78;
		border: none;
		color: white;
		padding: 8px;
		text-align: center;
		text-decoration: none;
		margin-left: 5px;

		font-size: 14px;
		border-radius: 15px;
		cursor: pointer;

	}

	input[name=sub3] {
		background-color: #009B78;
		border: none;
		color: white;
		padding: 8px 17px;
		text-align: center;
		text-decoration: none;

		font-size: 14px;
		border-radius: 15px;
		cursor: pointer;

	}
</style>

<script>
	var url_text_selected = false;

	function smart_select(ele) {

		ele.onblur = function() {
			url_text_selected = false;
		};

		ele.onclick = function() {
			if (url_text_selected == false) {
				this.focus();
				this.select();
				url_text_selected = true;
			}
		};
	}
</script>

<div id="top_form">

	<div style="width:100%;">

		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">

			<input type="button" name="sub2" value="Home" onclick="window.location.href='index.php'">

			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">

			<input type="hidden" name="form" value="1">

			<input type="submit" name="sub3" value="Go">
		</form>

	</div>

</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>