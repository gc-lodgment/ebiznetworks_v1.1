<div id="left">
	<ul>
		<li class="ttl">사업소개</li>
		<li class="eng">BUSINESS</li>
	</ul>
	<!--좌측메뉴-->
	<ul id="left_menu">
		<li><a href="<?=base_doc?>/program/?dd=<?=$ebiz_control->XOREncode('pro_tools')?>" id="pro_tools">소프트웨어</a></li>
		<li><a href="<?=base_doc?>/program/?dd=<?=$ebiz_control->XOREncode('pro_hotel')?>" id="pro_hotel">호텔위탁운영</a></li>
		<li><a href="<?=base_doc?>/program/?dd=<?=$ebiz_control->XOREncode('pro_shop')?>" id="pro_shop">쇼핑몰</a></li>
		<li><a href="<?=base_doc?>/program/?dd=<?=$ebiz_control->XOREncode('pro_kt')?>" id="pro_kt">KT대리점 사업</a></li>
		<li><a href="<?=base_doc?>/program/?dd=<?=$ebiz_control->XOREncode('pro_esset')?>" id="pro_esset">부동산 임대업</a></li>
		<li><a href="<?=base_doc?>/program/?dd=<?=$ebiz_control->XOREncode('pro_go')?>" id="pro_go">여행ㆍ레져사업</a></li>
	</ul>
	<!--좌측메뉴 끝-->
</div>
<div id="contents">
	<dl id="contents_ttl">
		<dt class="ttl_22">토탈 IT 서비스 전문기업</dt>
		<dd class="ttl_30">(주)<?=SITE_NAME_K?>의 <span class="orange">사업분야</span>를 소개합니다.</dd>
	</dl>
	<h2><img src="<?=base_img?>/title_real_estate.jpg" width="740" height="98" border="0" alt="부동산 임대 사업" /></h2>
	<div id="real_eatate">
		<a href="http://www.enasset.co.kr" target="_blank"><img src="<?=base_img?>/real_estatebt.jpg" width="740" height="149" border="0" alt="이엔자산개발" /></a>
		<a href="http://www.ditower.co.kr" target="_blank"><img src="<?=base_img?>/real_estate01_3.jpg" width="740" height="481" border="0" alt="<?=SITE_NAME_K?> 신사옥" /></a>
		<a href="http://www.monopalace.com" target="_blank"><img src="<?=base_img?>/real_estate01_1.jpg" width="740" height="311" border="0" alt="모노팰리스" /></a>
		<?php	if("aa"=="bb") {	/*181220 이사님지시로 비노출 : 이준혁 */	?>
		<!--<a href="http://www.monocityvil.com/" target="_blank"><img src="<?=base_img?>/real_estate01_4.jpg" width="740" height="310" border="0" alt="모노씨티빌 등촌" /></a>-->
		<?php	}	?>
		<a href="http://www.monotower.com" target="_blank"><img src="<?=base_img?>/real_estate01_2.jpg" width="740" height="311" border="0" alt="모노타워" /></a>

		<table id="esset_table" width="740" cellpadding="0" cellspacing="0" border="0">
		<colgroup>
			<col width="200" />
			<col width="540" />
		</colgroup>
		<thead>
			<tr>
				<th height="36">건물명</th>
				<th>개요</th>
			</tr>
		</thead>
		<tbody>
			<!--서진아파트-->
			<tr>
				<td height="116" align="center" bgcolor="#f8f8f8" class="b_right">
					<b>서진아파트</b><br /><br />
					<a href="http://www.seojinapt.com/home/main/" target="_blank"><img src="<?=base_img?>/apt_view.jpg" width="81" height="23" border="0" alt="자세히보기" /></a>
				</td>
				<td>
					<p>
					주소 : 충남 아산시 배미동 174-3<br />
					입주 : (주)안흥종합건설, 1999.10 입주<br />
					면적 : 39㎡, 52㎡, 66㎡<br />
					단지정보 : 총 1215세대 / 총 8개동 / 총 15층, 개별난방, 도시가스
					</p>
				</td>
			</tr>

			<!--칠서에이스아파트-->
			<tr>
				<td height="116" align="center" bgcolor="#f8f8f8" class="b_right">
					<b>칠서 에이스아파트</b><br /><br />
					<a href="http://www.chilseoace.com/home/intro/" target="_blank"><img src="<?=base_img?>/apt_view.jpg" width="81" height="23" border="0" alt="자세히보기" /></a>
				</td>
				<td>
					<p>
					주소 : 경상남도 함안군 칠서면 무릉리 1122<br />
					입주 : (주)부국건설, 2001.04 입주<br />
					면적 : 48A㎡, 49B㎡, 65A㎡, 67B㎡, 73㎡, 75㎡<br />
					단지정보 : 총 1253세대 / 총 12개동 / 총 15층, 도시가스
					</p>
				</td>
			</tr>

			<!--원주 백운3차아파트-->
			<!-- <tr>
				<td height="116" align="center" bgcolor="#f8f8f8" class="b_right">
					<b>원주 백운3차아파트</b><br /><br />
					<a href="http://www.baekun3.com/home/intro/" target="_blank"><img src="<?=base_img?>/apt_view.jpg" width="81" height="23" border="0" alt="자세히보기" /></a>
				</td>
				<td>
					<p>
					주소 : 강원도 원주시 태장동 1836<br />
					입주 : (주)성수건설, 2000.09 입주<br />
					면적 : 58㎡, 70㎡ <br />
					단지정보 : 총 559세대 / 총 4개동 / 총 12층, 개별난방, 도시가스
					</p>
				</td>
			</tr> -->

			<!--일산 동주오피스텔-->
			<!-- <tr>
				<td height="116" align="center" bgcolor="#f8f8f8" class="b_right">
					<b>일산 동주오피스텔</b><br /><br />
					<a href="http://www.bluehill132.com/home/intro/" target="_blank"><img src="<?=base_img?>/apt_view.jpg" width="81" height="23" border="0" alt="자세히보기" /></a>
				</td>
				<td>
					<p>
					주소 : 경기도 고양시 일산서구 주엽동 102-2<br />
					입주 :(주)청구, 1998.05 입주<br />
					면적 : 38A㎡, 40B㎡, 48A㎡, 48B㎡, 52㎡, 55A㎡, 58B㎡, 71㎡, 92㎡, 97㎡<br />
					단지정보 : 총 559세대 / 총 4개동 / 총 10층, 개별난방, 도시가스
					</p>
				</td>
			</tr> -->

			<!--원주 이룸레지던스 오피스텔-->
			<tr>
				<td height="116" align="center" bgcolor="#f8f8f8" class="b_right">
					<b>원주 이룸레지던스 오피스텔</b><br /><br />
					<a href="http://www.irumresidence.com/home/main/" target="_blank"><img src="<?=base_img?>/apt_view.jpg" width="81" height="23" border="0" alt="자세히보기" /></a>
				</td>
				<td>
					<p>
					주소 : 강원도 원주시 단계동 853-1<br />
					입주 : 명지건설(주), 2007.09 입주<br />
					면적 : 45㎡, 56㎡<br />
					단지정보 : 총 192세대 / 총 1개동 / 총 12층, 개별난방, 도시가스
					</p>
				</td>
			</tr>
		</tbody>
		</table>
		<!--a href="http://www.monopalace.com" target="_blank"><img src="<?=base_img?>/real_estate01.jpg?ver=2" width="740" height="310" border="0" alt="모노팰리스" /></a>
		<a href="http://www.enasset.co.kr/home/sub01.php" target="_blank"><img src="<?=base_img?>/real_estatebt.jpg?ver=2" width="740" height="149" border="0" alt="이엔자산개발" /></a>
		<a href="http://place.map.daum.net/11346649" target="_blank"><img src="<?=base_img?>/real_estate02.jpg" width="370" height="204" border="0" alt="서진아파트"></a>
		<a href="http://place.map.daum.net/12812360" target="_blank"><img src="<?=base_img?>/real_estate03.jpg" width="370" height="204" border="0" alt="칠서에이스아파트"></a>
		<a href="http://place.map.daum.net/11334721" target="_blank"><img src="<?=base_img?>/real_estate04.jpg" width="370" height="204" border="0" alt="원주백운3차아파트"></a>
		<a href="http://place.map.daum.net/8949203" target="_blank"><img src="<?=base_img?>/real_estate05.jpg" width="370" height="204" border="0" alt="일산동주오피스텔"></a>
		<a href="http://place.map.daum.net/11327032" target="_blank"><img src="<?=base_img?>/real_estate06.jpg" width="370" height="204" border="0" alt="원주 이룸레지던스 오피스텔"></a-->
	</div>

</div>