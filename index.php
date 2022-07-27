<?php
$latestVersionMac = '2.0.5';
$latestVersionWin = '2.0.5 RC';
?>
<!-- base.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OpenKey - Bộ gõ Tiếng Việt cho macOS, Windows, Linux</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/appicon.ico"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="style/main.css">
    <!-- <link rel="stylesheet" href="style/settings.css"> -->

    <meta name="description" content="Bộ gõ tiếng Việt mới, sửa lỗi thanh địa chỉ trình duyệt Chrome, loại bỏ lỗi gạch chân khó chịu của macOS hay IBus, không bị loạn chữ. Hoàn toàn miễn phí và là nguồn mở, luôn cập nhật và phát triển, thân thiện với developer." />
	<meta name="keywords" content="openkey, gõ tiếng việt win10, gtv, gõ tiếng việt, go tieng viet, unikey, vietkey, unicode, vni, vni windows, tcvn, tcvn3, abc, unicode dựng sẵn, loại trừ ứng dụng, gõ tắt, chuyển mã, gõ tiếng việt macos, gõ tiếng việt windows, bộ gõ tiếng việt, gõ tiếng việt linux, gõ tiếng việt ubuntu, ubuntu, gõ tiếng việt trong lol, go tieng viet tren mac, go tieng viet win10, go tieng viet ubuntu, bo go tieng viet cho mac" />
	<meta name="robots" content="index,follow" />
</head>

<body>


<header class="header__top-content animated js-header">

	<nav class="main_nav container">
		<div class="main_nav--logo">
			OpenKey <img style="display: none;" src="images/appicon.png" alt="">
		</div>
		<btn class="btn-toggle-menu js-btn-toggle-menu">
			<span class="bar-1"></span>
			<span class="bar-2"></span>
			<span class="bar-3"></span>
		</btn>
		<div class="navbar-collapse collapse" id="navbarNavDropdown">
			<ul class="main_nav--list center-menu js-nav-quick-scroll">
				<li>
					<a href="#" data-target="#quickScrollIntro">Giới thiệu</a>
				</li>
				<li>
					<a href="#" data-target="#quickScrollImages">Hình ảnh</a>
				</li>
				<li>
					<a href="#" data-target="#quickScrollFeature">Tính năng</a>
				</li>
				<li>
					<a href="#" data-target="#quickScrollSetting">Cài đặt</a>
				</li>
				<li>
					<a href="https://github.com/tuyenvm/OpenKey/blob/master/README.md">Trợ giúp</a>
				</li>

				<li>
					<a href="https://www.paypal.me/tuyenmai" class="btn btn-donate" title="donate" alt="donate" target="_blank">
						<img src="images/donate.png" alt="donate">
					</a>
				</li>
			</ul>

			<a href="https://www.paypal.me/tuyenmai" class="btn btn-donate" title="donate" alt="donate" target="_blank">
				<img src="images/donate.png" alt="donate">
			</a>
		</div>
		
	</nav>
</header>


    

	<div class="main-banner" id="quickScrollIntro">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 order-md-1 order-2">
					<div class="banner-content">
						<div class="verticle-align-tm">
							<h1>
								Bộ gõ tiếng Việt nguồn mở
							</h1>
							<p>
								Bộ gõ tiếng Việt mới, loại bỏ lỗi gạch chân khó chịu của macOS hay IBus, không bị loạn chữ. Hoàn toàn miễn phí và là nguồn mở, luôn cập nhật và phát triển, thân thiện với developer.

							</p>

							<div class="row btn-group-download">
								<div class="col-sm-6 col-xl-4">
									<a href="https://github.com/tuyenvm/OpenKey/releases/download/<?=$latestVersionMac?>/OpenKey<?=$latestVersionMac?>.dmg" target="_blank" class="btn btn-primary btn-download btn-block" title="Tải cho Mac OS X" alt="Tải cho Mac OS X">
										<img src="images/mac.png" alt="Tải cho Mac OS X" title="Tải cho Mac OS X">
										<span style="text-transform: none;">v<?=$latestVersionMac?> cho macOS</span>
									</a>
								</div>
								<div class="col-sm-6 col-xl-4">
									<a href="https://github.com/tuyenvm/OpenKey/releases/download/<?=$latestVersionWin?>/OpenKey<?=$latestVersionWin?>-Windows.zip" target="_blank" class="btn btn-primary btn-download btn-block" title="Tải cho Windows" alt="Tải cho Windows">
										<img src="images/windows.png" alt="Tải cho Windows" title="Tải cho Windows">
										<span style="text-transform: none;">v<?=$latestVersionWin?> cho Windows</span>
									</a>
								</div>

								<div class="col-sm-6 col-xl-4">
									<a href="https://www.youtube.com/watch?v=NjpirdDo-nY" target="_blank" class="btn btn-primary btn-download btn-block" title="Tải cho Linux" alt="Tải cho Linux">
										<img src="images/linux.png" alt="Tải cho Linux" title="Tải cho Linux">
										<span style="text-transform: none;">Đang phát triển</span>
									</a>
								</div>
								
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 order-md-2 order-1">
					<div class="banner-content">
						<div class="center-block">
							<img class="banner-icon" src="images/appicon.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    
<section class="container section-images" id="quickScrollImages">
	<img class="list-images-first" src="images/openkey-main-control.png" alt="bộ gõ thân thiện">
	<img class="list-images-first" src="images/openkey-main-control-2.png" alt="bộ gõ tiếng việt">
	<img class="list-images-first" src="images/openkey-main-control-3.png" alt="bộ gõ nhiều tính năng">
	<center><img class="list-images-first mt-2" src="images/openkey-small-control.png" alt=""></center>
	<img class="list-images-first mt-3" src="images/openkey-macro.png" alt="">
	<img class="list-images-first" src="images/openkey-convert-tool.png" alt="">
</section>


    
<section class="section-feature">
	<div class="container">
		<div class="row line-text-image" id="quickScrollFeature">
			<div class="col-lg-6 col-md-6 col-sm-12 order-md-1 order-2">
				<div class="banner-content">
					<h2>Feature - Tính năng</h2>
					<ul>
						<li>
							<b>Modern orthography</b> (On/Off) - Đặt dấu oà, uý thay vì òa, úy.
						</li>
						<li>
							<b>Quick Telex</b> (On/Off) - Gõ nhanh (cc=ch, gg=gi, kk=kh, nn=ng, qq=qu, pp=ph, tt=th).
						</li>
						<li>
							<b> Grammar check </b> (On/Off) - Kiểm tra ngữ pháp.
						</li>
						<li>
							<b>Spelling check</b> (On/Off) - Kiểm tra chính tả.
						</li>
						<li>
							<b>Restore key if invalid word</b> (on/off) - Phục hồi phím với từ sai.
						</li>
						<li>
							<b>Run on startup</b> (On/Off) - Chạy cùng macOS.
						</li>
						<li>
							<b>Gray menu bar icon</b> (On/Off) - Biểu tượng xám trên thanh menu phù hợp với chế độ Dark mode.
						</li>
						<li>
							<b>Switch input mode by shortcut key</b> - Đổi chế độ gõ bằng phím tắt tùy chọn.
						</li>
						<li>
							<b>Autocorrect fixed</b> (On/Off) - Sửa lỗi autocorrect trên trình duyệt như Chrome, Safari, Firefox, Microsoft Excel.
						</li>
						<li>
							<b>Underline issue fixed on macOS</b> (On/Off) - Sửa lỗi gạch chân trên macOS.
						</li>
						<li>
							<b>Tạm tắt kiểm tra chính tả bằng phím Ctrl</b> (On/Off) (Bản 1.5 về sau).
						</li>
						<li>
							<b>Cho phép dùng f z w j làm phụ âm đầu</b> (On/Off) (Bản 1.5 về sau).
						</li>
						<li>
							<b>Gõ tắt phụ âm đầu: f->ph, j->gi, w->qu</b> (On/Off) (Bản 1.6 về sau).
						</li>
						<li>
							<b>Gõ tắt phụ âm cuối: g->ng, h->nh, k->ch</b> (On/Off) (Bản 1.6 về sau).
						</li>
						<li>
							<b>Macro</b> - Tính năng gõ tắt vô cùng tiện lợi. Gõ tắt của macOS chỉ hỗ trợ 20 ký tự, còn OpenKey không giới hạn ký tự.
						</li>
						<li>
							<b>Chuyển chế độ thông minh:</b> (On/Off) (Bản 1.2 về sau) - Hay còn gọi là "Loại trừ ứng dụng". Bạn đang dùng chế độ gõ Tiếng Việt trên ứng dụng Skype, bạn chuyển qua Terminal trước đó bạn dùng chế độ gõ Tiếng Anh, OpenKey sẽ tự động chuyển qua chế độ gõ Tiếng Anh cho bạn, khi bạn quay lại ứng dụng Skype, OpenKey tất nhiên sẽ chuyển lại chế độ gõ tiếng Việt, rất cơ động. 
						</li>
						<li>
							<b>Viết Hoa chữ cái đầu câu</b> (On/Off) (Bản 1.2 về sau) - Khi gõ văn bản dài, đôi khi bạn quên ghi hoa chữ cái đầu câu khi kết thúc một câu hoặc khi xuống hàng, tính năng này sẽ tự ghi hoa chữ cái đầu câu cho bạn, thật tuyệt vời.
						</li>
						<li>
							<b>Chế độ “Gửi từng phím”:</b> (On/Off) (Bản 1.1 về sau) mặc định dùng kỹ thuật mới gửi dữ liệu 1 lần thay vì gửi nhiều lần cho chuỗi ký tự, nên nếu có ứng dụng nào không tương thích, hãy bật tính năng này lên, mặc định thì nên tắt vì kỹ thuật mới sẽ chạy nhanh hơn.
						</li>
						<li>
							<b>Cập nhật tự động:</b> (Bản 1.3 về sau) tính năng hỗ trợ cập nhật phiên bản OpenKey mới nhất mỗi khi mở OpenKey hoặc tự check trong phần mục Giới thiệu.
						</li>
						<li>
							<b>Công cụ chuyển mã:</b> (Bản 1.4 về sau) hỗ trợ chuyển mã qua lại văn bản, thích hợp cho việc chuyển đổi văn bản cũ viết bằng VNI, TCVN3 qua Unicode,... Hỗ trợ cấu hình phím tắt chuyển mã nhanh, bảng cấu hình tùy chọn chuyển mã.
						</li>
						<li>
							Và còn nhiều tính năng tiện ích khác luôn được cập nhật.
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 order-md-2 order-1">
				<div class="banner-content">
					<img src="images/idea.png" alt="">
				</div>
			</div>
		</div>
		<div class="row line-text-image">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/univer.jpg" alt="">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2>Input Type - Hỗ trợ kiểu gõ</h2>
				<ul>
					<li>
						Telex
					</li>
					<li>
						VNI
					</li>
					<li>
						Simple Telex
					</li>
				</ul>

				
				<h2>Code - Bảng mã:</h2>
				<ul>
					<li>
						Unicode (Unicode dựng sẵn).
					</li>
					<li>
						TCVN3 (ABC).
					</li>
					<li>
						VNI Windows.
					</li>
					<li>
						Unicode Compound (Unicode tổ hợp).
					</li>
					<li>
						Vietnamese Locale CP 1258.
					</li>
					<li>->Yêu cầu bảng mã khác nếu bạn cần.</li>
				</ul>
				
			</div>
		</div>
		<div class="row line-text-image" id="quickScrollSetting">
			<div class="col-lg-6 col-md-6 col-sm-12 order-md-1 order-2">
				<h2>Cài đặt</h2>
				<div class="setting-row">
					<b>Cài đặt thủ công cho macOS:</b>
					Tải bản OpenKey, file .dmg mới nhất từ <a href="https://github.com/tuyenvm/OpenKey/releases" title="https://github.com/tuyenvm/OpenKey/releases" alt="https://github.com/tuyenvm/OpenKey/releases">đây</a>, mở file dmg ra rồi kéo thả OpenKey.app vào thư mục Application.
				</div>
				<div class="setting-row">
					<b>Cài bằng Homebrew cho macOS:</b> 
					Nếu chưa cài Homebrew, mở terminal, nhập:

<pre><code>$ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"</code></pre>

				Kiểm tra phiên bản OpenKey:
<pre><code>$ brew cask info openkey</code></pre>

				Gõ lệnh sau để homebrew tự cài OpenKey cho bạn:
<pre><code>$ brew cask install openkey</code></pre>

				Để update phiên bản mới nhất của OpenKey
<pre><code>$ brew cask upgrade openkey</code></pre>
			
				</div>

				<div class="setting-row">
					<b>Cài đặt cho Windows:</b>
					Tải bản OpenKey, file .zip mới nhất từ <a href="https://github.com/tuyenvm/OpenKey/releases" title="https://github.com/tuyenvm/OpenKey/releases" alt="https://github.com/tuyenvm/OpenKey/releases">đây</a>, Giải nén vào bất kỳ đâu và chạy OpenKey64.exe
				</div>
				<div class="setting-row">
					<b>Lưu ý:</b> có thể các chương trình Antivirus sẽ hiểu nhầm OpenKey là phần mềm độc hại. Bạn hãy thêm OpenKey64.exe vô whitelist để có thể tiếp tục sử dụng nhé. Do đây là chương trình đọc bàn phím nên Antivirus sẽ hiểu nhầm hoặc cảnh báo, các bạn cứ yên tâm vì mã nguồn của OpenKey mình đã mở trên github một cách minh bạch và được cộng đồng tin tưởng, đóng góp.
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 order-md-2 order-1">
				<img src="images/cogwheel.png" alt="">
			</div>
		</div>
	</div>
	
</section>

    
    

<footer>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<ul class="footer-column">
					<li class="title-logo">OpenKey</li>
					<li> <a href="">  Giới thiệu </a> </li>
					<li> <a href=""> Câu hỏi thường gặp </a> </li>
					<li> 
						<a href="https://github.com/tuyenvm/OpenKey/blob/master/LICENSE" target="_blank" title="Điều khoản sử dụng" alt="Điều khoản sử dụng"> Điều khoản sử dụng </a> 
					</li>
				</ul>
			</div>
			<div class="col-sm-12 col-md-4">
				<ul class="footer-column">
					<li class="title">
						A Coffee for OpenKey
					</li>
					<li class="method-payment">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="RVBQVT72NYVUL">
							<table>
								<tr><td>
									<input type="hidden" name="on0" value="A Coffee for OpenKey">
								</td></tr>
								<tr><td>
									<select name="os0">
										<option value="Friendly Coffee">Friendly Coffee $2.00 USD</option>
										<option value="Iced Coffee">Iced Coffee $5.00 USD</option>
										<option value="Milk Coffee">Milk Coffee $10.00 USD</option>
										<option value="Mink Coffee">Mink Coffee $15.00 USD</option>
										<option value="Luxury Coffee">Luxury Coffee $20.00 USD</option>
									</select> 
								</td></tr>
							</table>
							<input type="hidden" name="currency_code" value="USD">
							<br>
							<input class="btn btn-donate" type="image" src="images/donate.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</li>
				</ul>
				
			</div>
			<div class="col-sm-12 col-md-4">
				<ul class="footer-column">
					<li class="title">
						Links
					</li>
					<li>
						<a href="https://github.com/tuyenvm/OpenKey" title="https://www.facebook.com/OpenKeyVN" alt="https://www.facebook.com/OpenKeyVN" target="_blank">Mã nguồn OpenKey</a>
					</li>
					<li>
						<a href="https://www.facebook.com/OpenKeyVN" title="https://www.facebook.com/OpenKeyVN" alt="https://www.facebook.com/OpenKeyVN" target="_blank">Facebook</a>
					</li>
					<li>
						<a href="https://github.com/tuyenvm/OpenKey/releases" title="https://github.com/tuyenvm/OpenKey/releases" alt="https://github.com/tuyenvm/OpenKey/releases" target="_blank">
							Các phiên bản cũ hơn
						</a>
					</li>
				</ul>
			</div>
		</div>
		
	</div>

	
	<!-- © 2019 Hero Age. All Rights Reserved. -->
	<div class="copy-right">
		<div class="container">
			Copyright © 2019 OpenKey.
		</div>
		
	</div>
		
	
</footer>


        
    <script src="script/vendor/jquery.min.js"></script>
<script src="script/openkey_script/header-sticky-min.js"></script>

<!-- End my custom js -->
<script src="script/main-min.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-50600711-32"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-50600711-32');
</script>



</body>
</html>
