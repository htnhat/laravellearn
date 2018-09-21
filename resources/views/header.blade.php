<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/genericons.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" />
<div class="header" style="background-color: rgb(141, 197, 86); position: fixed; min-height: 50px; top: 0px">
	<div class="head-btn-nav">
        <a id="slide-left-btn">
            <span class="genericon genericon-hierarchy"></span>
        </a>
   </div>
	<div class="logo">
        <a href="{base_url}staff">
            <img src="{{ asset('image/midream-logo.png') }}" alt="" height="40">
        </a>
   </div>
	<div class="title">Welcome システム管理者
        <a href="#" class="head-btn-logout">
				<span class="genericon genericon-reply">
				</span>ログアウト
        </a>
        <a href="javascript:void(0)" class="head-btn-logout attendance-rate-time">
				<span class="genericon genericon-send-to-tablet">
				</span>出席率試算
        </a>
        <a id="show_helper_header_helper" class="head-btn-logout">
                <span class="genericon genericon-help">
                </span> <label for="">ヘルプ</label>
        </a>
   </div>
</div>