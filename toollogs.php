<?php

include './includes/common.php';
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $conf['sitename'];?> - 上架日志</title>
		<link href="//lib.baomitu.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<style>
			/* 全局样式 */
			body {
				background-color: #f8f9fa;
				font-family: 'Microsoft YaHei', Arial, sans-serif;
				line-height: 1.6;
				color: #333;
			}
			
			/* 返回按钮样式 */
			.btn-default {
				background-color: #4d9cf8;
				color: white;
				border: none;
				border-radius: 5px;
				padding: 12px 24px;
				font-size: 16px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			}
			
			.btn-default:hover {
				background-color: #3a8ee6;
				color: white;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
			}
			
			/* 段落样式 */
			p {
				font-size: 15px;
				white-space: pre-line;
				color: #555;
				line-height: 1.8;
			}
			
			/* 时间线容器 */
			.timeline2-centered {
				position: relative;
				margin-bottom: 30px;
				padding: 20px 0;
			}
			
			/* 时间线中心线 */
			.timeline2-centered:before {
				content: '';
				position: absolute;
				display: block;
				width: 4px;
				background: #4d9cf8;
				top: 20px;
				bottom: 20px;
				margin-left: 28px;
				border-radius: 2px;
			}
			
			/* 时间线条目 */
			.timeline2-entry {
				position: relative;
				margin-top: 20px;
				margin-left: 30px;
				margin-bottom: 20px;
				clear: both;
			}
			
			/* 时间线条目内部 */
			.timeline2-entry-inner {
				position: relative;
				margin-left: -20px;
			}
			
			/* 时间线图标 */
			.timeline2-icon {
				background: #fff;
				color: #4d9cf8;
				display: block;
				width: 60px;
				height: 60px;
				background-clip: padding-box;
				border-radius: 50%;
				text-align: center;
				line-height: 60px;
				font-size: 24px;
				float: left;
				border: 3px solid #4d9cf8;
				margin-left: -15px;
				margin-top: 15px;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			}
			
			/* 时间线标签 */
			.timeline2-label {
				position: relative;
				background: #fff;
				padding: 20px;
				margin-left: 45px;
				border-radius: 8px;
				margin-top: 15px;
				border: 1px solid #eaeaea;
				box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
			}
			
			/* 时间线标签箭头 */
			.timeline2-label:after {
				content: '';
				display: block;
				position: absolute;
				width: 0;
				height: 0;
				border-style: solid;
				border-width: 10px 10px 10px 0;
				border-color: transparent #fff transparent transparent;
				left: 0;
				top: 20px;
				margin-left: -10px;
				filter: drop-shadow(-1px 0 1px rgba(0, 0, 0, 0.05));
			}
			
			/* 时间线标题 */
			.timeline2-label h2 {
				font-size: 20px;
				margin: 0 0 10px 0;
				color: #333;
				font-weight: 600;
			}
			
			/* 时间线标题中的时间 */
			.timeline2-label h2 strong {
				color: #4d9cf8;
			}
			
			/* 时间线标题中的文本 */
			.timeline2-label h2 span {
				opacity: 0.7;
				font-size: 14px;
				font-weight: normal;
				margin-left: 10px;
				color: #999;
			}
			
			/* 开始标记 */
			.timeline2-entry.begin .timeline2-icon {
				background: #f8f9fa;
				border-color: #eaeaea;
			}
			
			.timeline2-entry.begin .timeline2-icon i {
				color: #999;
				font-size: 20px;
			}
			
			/* 响应式调整 */
			@media (max-width: 768px) {
				.timeline2-centered:before {
					margin-left: 25px;
				}
				
				.timeline2-label {
					margin-left: 40px;
					padding: 15px;
				}
			}
		</style>
	</head>
	<body>
	        
		<div class="col-xs-12 col-md-10 col-md-offset-1">
		    <a class="btn btn-default btn-block" href="/" style="margin-top:35px"><<< 返回首页</a>
			<div class="timeline2-centered">
			    <?php 
$rs = $DB->query("SELECT * FROM pre_toollogs ORDER BY date DESC");
while ($res = $rs->fetch()) {
	echo '<div class="timeline2-entry">
					<div class="timeline2-entry-inner">
						
						<div class="timeline2-label">
							<h2 style="color:red">
								
									<strong>' . $res['date'] . '
								
								<span>上架时间</span></strong>
							</h2>
							<p>' . $res['content'] . '</p>
						</div>
					</div>
				</div>';
}
?>				<div class="timeline2-entry begin">
					<div class="timeline2-entry-inner">
						<div class="timeline2-icon">
							<i class="fa fa-plus" style="color: #cccccc;position: relative;top: 3px;"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>