<?php
	$json = [
		"icon"=>"网址图标*",
		"title"=>"网站标题",
		"keywords"=>"网站关键词",
		"description"=>"网站描述",
		"appicon"=>"App图标*",
		"appname"=>"App名称",
		"appv"=>"App版本",
		"appsize"=>"Apk大小",
		"apkurl"=>"App下载地址*",
		"news"=>"更新内容",
		"text"=>"软件介绍",
		"img1"=>"图片介绍1*",
		"img2"=>"图片介绍2*",
		"img3"=>"图片介绍3*",
		"img4"=>"图片介绍4*",
		"audio"=>"音乐直链地址*",
		"qq"=>"联系QQ"
	];
	if($_POST && $_POST['icon'] && $_POST['qq']){
		$data = [];
		foreach($_POST as $key=>$val){
			$data[$key]=$val;
		}
		$data = json_encode($data,JSON_UNESCAPED_UNICODE);
		if(file_put_contents("config.json", $data))echo "<script>alert('保存成功！')</script>";
	}
	
	$data = json_decode(file_get_contents("config.json"),TRUE);
	
	
?>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/twitter-bootstrap/3.3.5/css/bootstrap.min.css"/>
			<title>页面数据修改</title>
			<style type="text/css">
				.input-group{
					margin: 5px 0 5px 0;
				}
			</style>
		</head>
		<body>
			<div class="row">
				<div class="col-lg-3"></div>
			
				<div class="col-lg-6">
			
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">页面数据修改</h3>
						</div>
						<div class="panel-body">
							<form action="admin.php" method="post">
								
								<label for="basic-url">带'*'的请填URL直链或相对路径</label>
								
								<?php
									foreach($data as $key=>$val){
										echo '
											<div class="input-group">
												<span class="input-group-addon">'.$json[$key].'</span>
												<input name="'.$key.'" value="'.$val.'" type="text" class="form-control">
											</div>
										';
									}
								?>
								
								<div class="btn-group" role="group">
									<input type="submit" value="保存" class="btn btn-default">
								</div>
								
							</form>
						</div>
					</div>
			
				</div>
				<div class="col-lg-3"></div>
			</div>
			
		</body>
	</html>
	
	
	
	
	
	
<?php
/*	json数据备份
	{
		"icon":"图标地址",
		"title":"这是网站标题",
		"keywords":"网站关键词列表",
		"description":"网站描述",
		"appicon":"App图标地址",
		"appname":"App名称",
		"appv":"软件版本",
		"appsize":"软件大小",
		"apkurl":"软件下载地址",
		"news":"更新内容",
		"text":"软件介绍",
		"img1":"图片地址1",
		"img2":"图片地址1",
		"img3":"图片地址1",
		"img4":"图片地址1",
		"audio":"音乐直链地址",
		"qq":"1615958039"
	}
*/
?>