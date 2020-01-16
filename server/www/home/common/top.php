<?php
include_once ("/home/ebizcom/web-home/ebiznetworks/config/config.php");
include_once (INC_DIR."/class/ebiz_basic.class.php");

switch($cur_pos) {
	case "2" :
		$is_over	= (!empty($_GET["dd"])) ? $ebiz_control->XORDecode($_GET["dd"]) : "recruit";
	break;
	case "3" :
		$pos		= (!empty($cur_pos)) ? $cur_pos : 1;
		$is_over	= (!empty($_GET["dd"])) ? "left_".$ebiz_control->XORDecode($_GET["dd"]) : "left_company";
	break;
	case "4" :
		$is_over	= (!empty($_GET["dd"])) ? $ebiz_control->XORDecode($_GET["dd"]) : "pro_tools";
	break;
	case "9" : 
		$pos = "landing";
}

$tt = "";
$ebiz_ip = $ebiz_control->ebiz_ip($_SERVER["REMOTE_ADDR"]);


if(!empty($_GET["brd"])) {
	if(!empty($_GET["num"])) {
		$board_info	= $ebiz_board->ebiz_board_view($_GET["brd"], $_GET["num"]);
		$tt.= $board_info["subject"]." &gt; ";
		if($board_info["is_state"] != "Y") {
			echo "	<script>
					alert('없거나 삭제된 게시물 입니다.');
					history.back(1);
					</script>";
		}
	}

	$brd_infos = $ebiz_board->ebiz_board_config($_GET["brd"]);
	$tt	.= $brd_infos["brd_name"];
	$tt	.= " &gt; ";
}

// 상단 타이틀
$_is_title	= $ebiz_control->is_title($is_over);
$tt	.= $_is_title;


//유입수 체크 시작 2014-03-24 12시경부터 체크
$base_date = date("Y-m-d");
$base_time = "h".date("H");
$_pid = empty($_COOKIE["pid"])?"home":$_COOKIE["pid"];
/*
$base_refer = parse_url($_SERVER["HTTP_REFERER"]);
$bb = strstr($base_refer["host"], "ebiznetworks.co.kr");

if($bb != "ebiznetworks.co.kr") {
*/
	$_count = $ebiz_db->queryrows("select num from enter where userip='".base_ip."' and wdate='".$base_date."' and pid='".$_pid."'");
	if($_count < 1) {
		//insert
		$ebiz_db->query("insert into enter set userip='".base_ip."', count=1, wdate='".$base_date."', ".$base_time." = ".$base_time." + 1, pid = '".$_pid."'");
	} else if($_count > 0) {
		//update
		$ebiz_db->query("update enter set count=count+1, ".$base_time."=".$base_time." + 1 where userip='".base_ip."' and wdate='".$base_date."' and pid='".$_pid."'");
	}
//}
//유입수 체크 끝

//현재페이지 카운터
$page_c = $_SERVER["REQUEST_URI"];
$_countp = $ebiz_db->queryrows("select num from page_count where userip='".base_ip."' and wdate='".$base_date."' and page='".$page_c."'");
if($_countp < 1) {
	//insert
	$ebiz_db->query("insert into page_count set userip='".base_ip."', page='".$page_c."', count=1, wdate='".$base_date."', ".$base_time." = ".$base_time." + 1");
} else if($_countp > 0) {
	//update
	$ebiz_db->query("update page_count set count=count+1, ".$base_time."=".$base_time." + 1 where userip='".base_ip."' and wdate='".$base_date."' and page='".$page_c."'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr" lang="ko-KR">
<head>
<title><?=$tt?><?=SITE_NAME_K?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta http-equiv="Cache-Control" content="No-Cache"/>
<meta http-equiv="Pragma" content="No-Cache"/>
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<meta http-equiv="imagetoolbar" content="false"/>
<meta name="author" content="<?=SITE_NAME_K?>"/>
<meta name="description" content="소프트웨어전문 게임 여행 화장품 TV 트렌디한 젊은기업 <?=SITE_NAME_K?>"/>
<meta name="keywords" content="대한민국 No.1 소프트웨어 개발회사 <?=$tt?> <?=SITE_NAME_K?>"/>
<meta name="classification" content="대한민국 No.1 소프트웨어 개발회사 , 임대,모노팰리스"/>

<meta property="og:type" content="website">
<meta property="og:title" content="<?=SITE_NAME_K?>">
<meta property="og:description" content="대한민국 No.1 소프트웨어 개발회사 <?=$tt?> <?=SITE_NAME_E?>">
<meta property="og:image" content="<?=base_img?>/ebiz_favicon.ico?ver=<?=date("YmdHis")?>">
<meta property="og:url" content="<?=base_url?>">

<meta name="naver-site-verification" content="3fa220bed9a9cb53baf5ea2e5ecd1b8d095310d8"/>
<link rel="canonical" href="http://www.ebiznetworks.co.kr"> <!-- 대표 URL --> 
<link rel="shortcut icon" href="<?=base_img?>/ebiz_favicon.ico" />
<link rel="stylesheet" href="<?=base_css?>/reset.css?ver=<?=date("YmdHis");?>" type="text/css"/>
<link rel="stylesheet" href="<?=base_css?>/layout_new.css?ver=<?=date("YmdHis");?>" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://static.ebiznetworks.co.kr/js/index.js"></script>
<!-- Android icon -->
<link rel="shortcut icon" href="<?=base_img?>/ebiz_icon128x128.png" />
<!-- iPhone icon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?=base_img?>/ebiz_icon57x57.png" />
<!-- iPad icon -->
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_img?>/ebiz_icon72x72.png" />
<!-- iPhone icon(Retina) -->
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_img?>/ebiz_icon114x114.png" />
<!-- iPad icon(Retina) -->
<link rel="apple-touch-icon" sizes="144x144" href="<?=base_img?>/ebiz_icon144x144.png" />
<script type="text/javascript" src="<?=base_js?>/common.js?ver=1.2"></script>

<link rel="stylesheet" href="<?=base_css?>/landing/hoteloperation/common.min.css">
<link rel="stylesheet" href="<?=base_css?>/landing/hoteloperation/index.min.css">
<script src="http://static.ebiznetworks.co.kr/js/landing/hoteloperation/ui.js"></script>

<script type="text/javascript">
$(function() {
	<?php if($cur_pos == 3) { ?>
	$("#left_menu #<?=$is_over?> a").css({"color":"#ffffff", "background-color":"#ff6d16"});
	<?php } else if($cur_pos == 4) {?>
	$("#left_menu #<?=$is_over?>").css({"color":"#ffffff", "background-color":"#ff6d16"});
	<?php } ?>
	property.list(0, "I");


	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if(scrollTop > 0){
			$('.announcement').addClass('on');
		}else if(scrollTop == 0){
			$('.announcement').removeClass('on');
		}

		if(scrollTop > 1650){
			$('.ebiznetworks_info').addClass('on');
			$('.announcement').removeClass('on');
		}else if(scrollTop < 1650){
			$('.ebiznetworks_info').removeClass('on');
		}
	});
});
</script>
</head>
<body>
<div class="wrapper" id="wrap">
	<?php if($pos != "landing"){ ?>
	<div class="sbn-wrapper affix">
		<div class="sbn-center">
			<div class="pos-right">
				<div class="inquiry-content">
					<a href="<?=base_url?>/home/landing/">
						<img src="http://img.ebiznetworks.co.kr/landing/hoteloperation/inquiry_sbn.jpg" alt="호텔/리조트 위탁운영 문의 바로가기">
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div id="header">
		<div id="top">
			<ul id="top_menu">
				<li id="Home"><a href="<?=base_url?>">Home</a></li>
				<li id="ContactUS"><a href="<?=base_doc?>/recruit/?dd=<?=$ebiz_control->XOREncode('contactus')?>">Contact US</a></li>
			</ul>
		</div>
		<div id="gnb" style="position:relative">
			<h1 id="logo"><a href="<?=base_url?>"><img src="<?=base_img?>/logo.gif" alt="로고" /></a></h1>
			<?php if($pos == "incruit") { ?>
			<p class="recruit_top_text"><img src="http://img.ebiznetworks.co.kr/recruit_top_text.jpg" alt="2015년 이비즈네트웍스 병역특례 및 일반 채용공고" /></p>
			
			<?php } else {?>
			<ul id="menu">
				<li id="company" class="menu"><a href="<?=base_doc?>/company">회사소개</a></li>
				<li id="recruit" class="menu"><a href="<?=base_doc?>/program/">사업소개</a></li>
				<li id="recruit" class="menu"><a href="<?=base_doc?>/recruit">인재채용</a></li>				
				<li id="press" class="menu"><a href="<?=base_doc?>/board/?dd=<?=$ebiz_control->XOREncode("list")?>&brd=<?=$ebiz_control->XOREncode("news")?>">보도자료</a></li>
			</ul>
			<?php } ?>

			<?php if($ebiz_ip == true) { ?>
			<iframe id="ebiz_counter" src="<?=base_url?>/home/common/ebiz_counter.php?pvalue=<?=base64_encode($page_c)?>" width="320" height="96" frameborder="0" marginheight="0" marginwidth="0" scrolling="0" style="width:320px; position:absolute;top:-22px;right:-330px"></iframe>
			<?php } ?>
		</div>	
		<?php if($_SERVER["PHP_SELF"] != "/index.html") { ?>		
		<!--div style="position: relative;text-align:center; margin: 0 auto; "> 		 
			<a class="crown_banner" style="position: fixed; z-index: 10; left: 50%; top: 230px; width: 325px; margin-left: 520px; "  href="http://www.nolzzang.com/nolzzang.php?pid=ebiz_js" target="_blank">
				<img src="http://img.nolzzang.com/js/images/ebizsub_js.png" alt="장수온라인바로가기">
			</a> 
		</div-->
		<?php } ?>
	</div>

<?php	if($_SERVER["PHP_SELF"] != "/home/recruit/recruit_with.html") {	?>
	<?php if($pos == "main") { ?>
	<div id="i_logo" style="right:0%"></div>
	<div id="main_bnr" style= 'text-indent:0px;'></div><!--대한민국 No1 소프트웨어 개발회사 이비즈 네트웍스-->
		<?php if($_SERVER["PHP_SELF"]== "/index.html") { ?>		
			<!--div style="position: absolute;top: 0px;width:  980px;left:  50%;margin-left: -480px;">
				<a class="crown_banner" style="z-index: 10; top: 602px; right: 10px; margin-right: -380px; " href="http://www.nolzzang.com/nolzzang.php?pid=ebiz_js" target="_blank">
					<img src="http://img.nolzzang.com/js/images/ebizmain_js.png" alt="장수온라인바로가기" />
				</a>
			</div-->
		<?php } ?>
	</div>
	<?php } 
	else if($pos == "incruit" || $pos == "landing") { ?>
	<?php } else { ?>
	<div id="sub_bnr"><img src="<?=base_img?>/sub_bnr.gif"/></div>
	<div id="center">
		<div id="container">
	<?php } ?>
<?php	}	?>