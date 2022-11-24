<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
    <title>ぐっとWifi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/validationEngine.jquery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contents.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smart.css') }}">
    <script src="{{ url('https://code.jquery.com/jquery-1.11.3.min.js')}}"></script>
    <script src="{{ asset('https://ajaxzip3.github.io/ajaxzip3.js')}}" charset="UTF-8"></script>
    <script src="{{ asset('js/jquery.validationEngine.js')}}"></script>
    <script src="{{ asset('js/jquery.validationEngine-ja.js')}}"></script>
    <script src="{{ asset('js/jquery.autoKana.js')}}"></script>
    <script type="text/javascript" src="{{('https://apps.paidy.com/')}}"></script>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" />
    <link rel="apple-touch-icon" href="{{ asset('img/logo144.png')}}" sizes="144x144">
    <link rel="icon" href="{{ asset('img/logo96.png')}}" sizes="96x96">
</head>
<body>
    <div id="page_body">
        <div id="header">
            <div class="header_txt center">
            <img src="{{ asset('img/form_title.jpg')}}">
            </div> 
        </div>
        <div id="contents">
            <div id="contents_in">
                <div id="n_area_00" class="navi_area center">
                    <img src="{{ asset('img/form_flow01_pc.png') }}" style="max-width: 700px;width: 100%;">
                </div>
                <div id="n_area_10" class="navi_area center">
                    <img src="{{ asset('img/form_flow01_sp.png')}}" style="width: 100%;">
                </div>
                <div class="form_box">
                    <form id="form1" name="form1">
                        <div style="margin-bottom: 20px;">
                            <h2>ご希望の料金プランを選択ください</h2>
                            <label >
                                <input type="radio" name="plan" value="WiMAXギガ放題" onclick="chg_plan();" checked="checked"> WiMAXギガ放題プラン
                            </label>
                            <label >
                                <input type="radio" name="plan" value="クラウド300GB" onclick="chg_plan();" > クラウド300GBプラン
                            </label>
                            <div id="wimax_img" style="padding-top: 15px;padding-bottom: 15px;">
                                <img id="wi_img_normal" src="{{ asset('img/wimax_img.jpg')}}" style="border: 1px solid #d9d4d4;padding: 2px;max-width: 99.5%;">
                                <img id="wi_img_sp" src="{{ asset('img/wimax_img_sp.jpg')}}" style="border: 1px solid #d9d4d4;padding: 2px;max-width: 99%;">
                            </div>
                        </div>
                        <div id="plan_super_area">
                            <div class="plan_navi">
                                <div class="left">
                                    <div class="left plan_navi_in">
                                        <div class="plan_navi_in_title">お申し込み内容</div>
                                            <div style="padding-top: 10px;padding-left: 10px;float: left;width: 100px;">
                                                <img id="n_t_0_img" src="{{ asset('img/device02.png')}}" style="max-height: 100px;border: 1px solid #c4bdbd;padding: 2px;">
                                                <img id="n_t_1_img" src="{{ asset('img/device01.png')}}" style="max-height: 100px;border: 1px solid #c4bdbd;padding: 2px;">
                                                <img id="n_t_2_img" src="{{ asset('img/device03.png')}}" style="max-height: 100px;border: 1px solid #c4bdbd;padding: 2px;">
                                                <img id="n_t_3_img" src="{{ asset('img/na01.png')}}" style="max-height: 100px;border: 1px solid #c4bdbd;padding: 2px;">
                                            </div>
                                            <div style="padding-top: 10px;padding-left: 10px;float: left;">
                                                <span id="n_plan_txt" style="font-size: 15px;"></span><br>
                                                <span id="n_terminal_txt" style="font-size: 12px;"></span><br>
                                                <span id="n_color_txt" style="font-size: 12px;"></span><br>
                                            </div>
                                            <div class="clear_left"></div>

                                            <div style="padding-top: 10px;padding-left: 10px;">
                                                <div style="background-color: #f9cb09;padding-top: 2px;padding-bottom: 2px;text-align: center;width: 95%;margin-bottom: 5px;font-size: 80%;">ご選択中のオプション</div>

                                                <div id="n_s_0_img">
                                                    <img src="{{ asset('img/support.jpg')}}" style="max-height: 40px;border: 1px solid #c4bdbd;padding: 2px;">
                                                    <span style="position: relative;bottom: 15px;">安心サポートプラス</span>
                                                </div>
                                                <div id="n_s_1_img">
                                                    <img src="{{ asset('img/goodsupport.jpg')}}" style="max-height: 40px;border: 1px solid #c4bdbd;padding: 2px;">
                                                    <span style="position: relative;bottom: 15px;">ぐっとサポート</span>
                                                </div>
                                                <div id="n_s_2_img">
                                                    加入なし
                                                </div>
                                            </div>
                                            <div class="tab_group">
                                                <div class="tag_erea" style="padding-top: 15px;">
                                                    <li id="amo_list_btn_0" class="amo_list_btn amo_list_btn_select" onclick="navi_ctr(0);">
                                                        1~2ヶ月目
                                                    </li>
                                                    <li id="amo_list_btn_1" class="amo_list_btn" onclick="navi_ctr(1);">
                                                        3~25ヶ月目
                                                    </li>
                                                    <li id="amo_list_btn_2" class="amo_list_btn" onclick="navi_ctr(2);">
                                                        26~36ヶ月目
                                                    </li>
                                                    <li id="amo_list_btn_3" class="amo_list_btn" onclick="navi_ctr(3);">
                                                        37ヶ月目以降
                                                    </li>
                                                </div>
                                
                                                <div class="aside-block">
                                                    <div style="padding-top: 5px;padding-bottom: 15px; display: none;">
                                                        月額利用料<span style="font-size: 80%;">(１台)</span>：<span id="n_monthly_amo"></span>円 <span style="font-size: 80%;">(税抜) (税込<span id="n_monthly_amo_tax"></span>円)</span>
                                                    </div>
                                                    <div class="aside-cont_ttl">
                                                        月額基本料金 <span id="n_org_amo"></span>円<span style="font-size: 80%;">(税抜) (税込<span id="n_org_amo_tax"></span>円)</span>
                                                    </div>
                                                    <div id="n_wari_area" class="aside-cont_style">
                                                        <dl class="aside_dl">
                                                            <dt class="aside_dt">通常価格</dt><dd class="aside_dd"><span id="n_simple_amo"></span>円 <span style="font-size: 70%;">(税込)</span></dd><br>
                                                        <dt class="aside_dt"><span class="red">キャンペーン割引</span></dt><dd class="aside_dd"><span id="n_wari_amo"></span>円 <span style="font-size: 70%;">(税込)</span></dd>
                                                        </dl>
                                                    </div>
                                                    <div class="detail_btn" onclick="detail_open();">
                                                        その他内訳 ▼
                                                    </div>
                                                    <div id="detail_area" style="display: none;">
                                
                                                        <div id="n_terminal_area">
                                                            端末費用<span id="n_terminal_amo"></span>円 <span style="font-size: 70%;">(税込)</span>
                                                        </div>
                                                        <div id="n_support_area">
                                                            安心サポートプラス 605円 <span style="font-size: 70%;">(税込)</span>
                                                        </div>
                                                        <div id="n_protect_area">
                                                            ぐっとサポート　　 858円 <span style="font-size: 70%;">(税込)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="padding-top: 10px;" >
                                                    <div style="background-color: #f9cb09;padding-top: 2px;padding-bottom: 2px;text-align: center;width: 92%;margin-bottom: 5px;font-size: 80%;">
                                                        初回のみお支払い額（合計 <span id="n_num_txt"></span>台）
                                                    </div>
                                                    <div class="n_fee_amo">契約事務手数料：<span id="n_fee_amo_total"></span>円 <span style="font-size: 70%;">(税込)</span></div>
                                                    <div style="display: none;">
                                                        月額利用料　　：<span id="n_monthly_amo_total"></span>円 <span style="font-size: 70%;">(税込)</span><br>
                                                    </div>
                                                    <div id="n_terminal_amo_area">
                                                        端末費用　　　：<span id="n_terminal_amo_total"></span>円 <span style="font-size: 70%;">(税込)</span>
                                                    </div>
                                                    <div style="border-top: 1px solid #a6a0a0;width: 98%;display: none;">
                                                        お支払い合計　：<span id="n_amo_total"></span>円 <span style="font-size: 70%;">(税込)</span>
                                                    </div>
                                                </div>
                                                <div style="padding-bottom: 15px;padding-top:10px;font-size: 10px; width: 92%;">
                                                    ※キャンペーンに定めたご契約期間ごとに月額利用料が変動いたします。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear_left"></div>
                                <div class="form-table new_plan_select left">
                                <div class="new_plan_select_in">
                                    <img src="{{ asset('img/saitann.png')}}" style="max-width: 700px;width: 100%;" id="saitan_img">
                                    <h2>お申込み台数</h2>
                                    <div class="select-menu cp_ipselect cp_sl02" onchange="navi_ctr(0);">
                                        <select id="num" name="num">
                                            <option value="1" >１台</option>
                                            <option value="2" >２台</option>
                                            <option value="3" >３台</option>
                                            <option value="4" >４台</option>
                                            <option value="5" >５台</option>
                                        </select>
                                    </div>
                                    <div class="desc">
                                        ※2台目以上は1台目と同じカラーになります。<br>
                                        ※複数台をお申し込みの際は弊社より郵送先等の情報のご確認のためご連絡させていただきます。<br>
                                        ※当社基準の審査に依りましては発送できない場合がございます。
                                    </div>
                                    <h2>Wi-Fi端末のタイプをご選択ください</h2>
                                    <div id="wimax_area">
                                        <div>
                                            下記ポータブル型、置き型の2種類からお選びいただけます。
                                        </div>
                                        <label class="plan_label label_margin plan_label_left">
                                            <div class="selectArea">
                                                <input type="radio" name="terminal_select" value="Speed Wi-Fi 5G X11" onclick="chg_terminal();" checked="checked"/>
                                                <div class="selectBox selectBox-wide" id="terminal_0_mess">

                                                    <div class="planName">
                                                        Speed Wi-Fi 5G <div id="5g_x11_txt_br"></div>X11 <div id="5g_x11_txt_br2"></div>
                                                    </div>
                                                    <div style="border-top: 2px solid #ddd;padding-top: 15px;">
                                                        <img src="{{ asset('img/device_02.png')}}" style="max-height: 140px;">
                                                    </div>
                                                    <div class="right">
                                                        <div class="left terminal_detail">
                                                            <img src="{{ asset('img/tokutixyou01.png')}}" style="max-height: 140px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="plan_label label_margin">
                                            <div class="selectArea">
                                                <input type="radio" name="terminal_select" value="Speed Wi-Fi HOME 5G L12" onclick="chg_terminal();" />
                                                <div class="selectBox selectBox-wide" id="terminal_1_mess">
                                                    <div class="planName">
                                                        Speed Wi-Fi HOME 5G <div id="5g_l12_txt_br"></div>L12 <div id="5g_l12_txt_br2"></div>
                                                    </div>
                                                    <div style="border-top: 2px solid #ddd;padding-top: 15px;">
                                                        <img src="{{ asset('img/device_01.png')}}" style="max-height: 140px;">
                                                    </div>
                                                    <div class="right">
                                                        <div class="left terminal_detail">
                                                            <img src="{{ asset('img/tokutixyou02.png')}}" style="max-height: 140px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <div id="color_area">
                                            <h2>Wi-Fi端末のカラーをご選択ください</h2>
                                            <label class="plan_label label_margin plan_label_left">
                                                <div class="selectArea">
                                                    <input type="radio" name="color_select" value="チタニウムグレー" onclick="chg_color();" checked="checked"/>
                                                    <div class="selectBox selectBox-wide selectBox-plan" id="color_0_mess">

                                                        <div class="planName">
                                                            チタニウムグレー
                                                        </div>

                                                        <div style="border-top: 2px solid #ddd;">
                                                            <img src="{{ asset('img/device02.png')}}" style="max-height: 180px;">
                                                        </div>

                                                    </div>
                                                </div>
                                            </label>
                                            <label class="plan_label label_margin">
                                                <div class="selectArea">
                                                    <input type="radio" name="color_select" value="スノーホワイト" onclick="chg_color();" />
                                                    <div class="selectBox selectBox-wide selectBox-plan" id="color_1_mess">
                                                        <div class="planName">
                                                            スノーホワイト
                                                        </div>
                                                        <div  style="border-top: 2px solid #ddd;">
                                                            <img src="{{ asset('img/device01.png')}}" style="max-height: 180px;">
                                                        </div>

                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="desc left" id="adapter_mess">
                                            【注意事項】<br>
                                            WiMAX本体に充電器（ACアダプタ）は付属されておりません。お客様ご自身でご用意をお願い致します。<br>
                                            ※性能はどちらも同じになります。
                                        </div>
                                    </div>
                                    <div id="300g_area">
                                        <label class="plan_label label_margin plan_label_wide">
                                            <div class="selectArea">
                                                <input type="radio" name="terminal_select" value="NA01" onclick="chg_terminal();" checked="checked"/>
                                                <div class="selectBox selectBox-wide" id="terminal_2_mess">
                                                    <div class="planName">
                                                        NA01
                                                    </div>
                                                    <div style="border-top: 2px solid #ddd;padding-top: 15px;">
                                                        <img src="{{ asset('img/na01.png')}}" style="max-height: 170px;">
                                                    </div>
                                                    <div class="right">
                                                        <div class="left" style="background-color: #f1ecec;padding: 15px;">
                                                            <span class="bold">特徴</span><br>
                                                            最大通信速度　150Mbps<br>
                                                                                                同時接続台数　最大10台まで<br>
                                                            連続稼働時間　約12時間<br>
                                                            サイズ　　　　約12.6×6.6×1.2（cm)<br>
                                                            重さ　　　　　約148g<br>
                                                            ※カラーはブラックのみ<br>
                                                            ※クラウド300Gプランの場合はルータータイプは選択不可
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <div class="left">
                                            【注意事項】<br>
                                            WiMAX本体に充電器（ACアダプタ）は付属されておりません。お客様ご自身でご用意をお願い致します。
                                        </div>
                                    </div>
                                    <h2>オプションサービスについて</h2>
                                    <div class="left">
                                        ※新規ご契約時のみ加入が可能です。後日追加加入することはできません。
                                    </div>
                                    <h4>① 安心サポートプラス</h4>
                                    <div class="left">
                                        Wi-Fi端末が破損・水漏れなど様々な原因で故障した際に、無償で端末交換が行えるサービスです。万が一の時にも安心していただける補償内容となっております。<br>
                                        <span onclick="pop_ctr_support_info_add();" style="text-decoration: underline;cursor: pointer;color: orangered;">安心サポートプラスは入った方がいい？</span>
                                    </div>
                                    <label class="plan_label label_margin plan_label_left" >
                                        <div class="selectArea">
                                            <input type="radio" name="support_select" value="安心サポートプラス" onclick="chg_support();" checked="checked"/>
                                            <div class="selectBox selectBox-plan selectBox-option" id="support_0_mess">
                                                <div style="display: flex;justify-content: center;padding-bottom: 15px;">
                                                    <div class="option_img">
                                                        <img src="{{ asset('img/support.jpg')}}">
                                                    </div>
                                                    <div class="planName planName_option">
                                                        安心サポートプラスに<br>
                                                        加入する
                                                    </div>
                                                </div>
                                                <div style="border-top: 2px solid #ddd;">0
                                                    月額 550円(税別)<br>
                                                    （税込605円）
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="plan_label label_margin label_option_n">
                                        <div class="selectArea">
                                            <input type="radio" name="support_select" value="加入しない" onclick="chg_support();pop_ctr_support_del_info_add();" />
                                            <div class="selectBox selectBox-plan selectBox-option" id="support_1_mess">
                                                <p class="planName">
                                                    加入しない
                                                </p>
                                                <div style="border-top: 2px solid #ddd;">
                                                    ※ぐっとWifi 新規契約<span class="inline_block">キャンペーン</span><br><span class="inline_block">適応外となります。</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <h4>② ぐっとサポート</h4>
                                    <div>
                                        Wi-Fi端末だけでなく、PC・スマホ・ゲーム機、タブレットといったWi-Fi接続先の通信機器が故障した場合に修理が無料となるオプションです。<br>
                                        <span onclick="pop_ctr_protect_info_add();" style="text-decoration: underline;cursor: pointer;color: orangered;">ぐっとサポートって？</span>
                                    </div>
                                    <div class="clear_left"></div>
                                    <label class="plan_label label_margin plan_label_left" >
                                        <div class="selectArea">
                                            <input type="radio" name="protect_select" value="ぐっとサポート" onclick="chg_protect();" checked="checked"/>
                                            <div class="selectBox selectBox-plan selectBox-option" id="protect_0_mess">
                                                <div style="display: flex;justify-content: center;padding-bottom: 15px;">
                                                    <div class="option_img">
                                                        <img src="{{ asset('img/goodsupport.jpg')}}">
                                                    </div>
                                                    <div class="planName planName_option">
                                                        ぐっとサポートに<br>
                                                        加入する
                                                    </div>
                                                </div>
                                                <div style="border-top: 2px solid #ddd;">
                                                    月額 780円(税別)<br>
                                                    （税込858円）
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="plan_label label_margin label_option_n">
                                        <div class="selectArea">
                                            <input type="radio" name="protect_select" value="加入しない" onclick="chg_protect();pop_ctr_protect_del_info_add();" />
                                            <div class="selectBox selectBox-plan selectBox-option" id="protect_1_mess">
                                                <p class="planName">
                                                    加入しない
                                                </p>
                                                <div style="border-top: 2px solid #ddd;">
                                                    ※ぐっとWifi 新規契約<span class="inline_block">キャンペーン</span><br><span class="inline_block">適応外となります。</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <h2>端末費用</h2>
                                    <label class="plan_label label_margin plan_label_left" >
                                        <div class="selectArea">
                                            <input type="radio" name="pay_method_select" value="分割払い" onclick="chg_pay_method();" checked="checked"/>
                                            <div class="selectBox selectBox-plan" id="pay_method_0_mess">
                                                <p class="planName">
                                                    分割払い（36回払い）
                                                </p>
                                                <div style="border-top: 2px solid #ddd;">
                                                    1ヶ月　605円（税込）
                                                </div>
                                            </div>

                                        </div>
                                    </label>
                                    <label class="plan_label label_margin">
                                        <div class="selectArea">
                                            <input type="radio" name="pay_method_select" value="一括払い" onclick="chg_pay_method();" />
                                            <div class="selectBox selectBox-plan" id="pay_method_1_mess">
                                                <p class="planName">
                                                    一括払い
                                                </p>
                                                <div style="border-top: 2px solid #ddd;">
                                                    21,780円（税込）
                                                </div>

                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="clear_left"></div>
                        <div class="popup" id="js-popup2">
                            <div class="popup-inner center">
                                <div class="right" style="margin-bottom: 20px;">
                                    <span class="btn3" onclick="pop_ctr_support_info_remove();">とじる</span>
                                </div>
                                <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
                                        <img src="{{ asset('img/pop_01.png')}}" style="width: 75%;margin: 0 auto;" id="pop_01_0">
                                    <img src="{{ asset('img/pop_01_sp.png')}}" style="width: 75%;margin: 0 auto;" id="pop_01_1">

                                    <div class="btn_box center" style="margin-bottom: 20px;">
                                        <div class="unset_btn" onclick="pop_ctr_support_info_remove();">閉じる</div>
                                    </div>
                                </div>
                            <div class="black-background" id="js-black-bg"></div>
                        </div>
                        <div class="popup" id="js-popup3">
                            <div class="popup-inner center">
                                <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
                                <div class="right" style="margin-bottom: 20px;">
                                    <span class="btn3" onclick="pop_ctr_protect_info_remove();">閉じる</span>
                                </div>
                                <img src="{{ asset('img/pop_02.png')}}" style="width: 75%;margin: 0 auto;" id="pop_02_0">
                                <img src="{{ asset('img/pop_02_sp.png')}}" style="width: 75%;margin: 0 auto;" id="pop_02_1">

                                <div class="btn_box center" style="margin-bottom: 20px;">
                                    <div class="unset_btn" onclick="pop_ctr_protect_info_remove();">閉じる</div>
                                </div>
                            </div>
                            <div class="black-background" id="js-black-bg"></div>
                        </div>
                        <div class="popup" id="js-popup4" onclick="pop_ctr_support_del_info_remove();">
                            <div class="popup-inner center" id="js-child4">
                                <div class="right" style="margin-bottom: 20px;">
                                    <span class="btn3" onclick="pop_ctr_support_del_info_remove();">とじる</span>
                                </div>
                                <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
                                <img src="{{ asset('img/anshin_pop_pc.jpg')}}" style="width: 75%;margin: 0 auto;" id="pop_03_0">
                                <img src="{{ asset('img/anshin_pop_sp.jpg')}}" style="width: auto;margin: 0 auto;" id="pop_03_1">
                                <div style="padding-top: 30px;">
                                    <img src="{{ asset('img/pop_btn.png')}}" style="width: 75%;max-width:200px;margin: 0 auto;cursor: pointer;" id="pop_btn_0"  onclick="pop_btn_chg(0);">
                                    <img src="{{ asset('img/pop_btn_done.png')}}" style="width: 75%;max-width:200px;margin: 0 auto;cursor: pointer;display: none;" id="pop_btn_1" onclick="pop_btn_chg(1);">
                                </div>
                            </div>
                            <div class="black-background" id="js-black-bg"></div>
                        </div>
                        <div class="popup" id="js-popup5" onclick="pop_ctr_protect_del_info_remove();">
                            <div class="popup-inner center" id="js-child5">
                                <div class="right" style="margin-bottom: 20px;">
                                    <span class="btn3" onclick="pop_ctr_protect_del_info_remove();">とじる</span>
                                </div>
                                <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
                                <img src="{{ asset('img/gutto_pop_pc.jpg')}}" style="width: 75%;margin: 0 auto;" id="pop_04_0">
                                <img src="{{ asset('img/gutto_pop_sp.jpg')}}" style="width: auto;margin: 0 auto;" id="pop_04_1">
                                <div style="padding-top: 30px;">
                                    <img src="{{ asset('img/pop_btn.png')}}" style="width: 75%;max-width:200px;margin: 0 auto;cursor: pointer;" id="pop_btn_2"  onclick="pop_btn_chg2(0);">
                                    <img src="{{ asset('img/pop_btn_done.png')}}" style="width: 75%;max-width:200px;margin: 0 auto;cursor: pointer;display: none;" id="pop_btn_3" onclick="pop_btn_chg2(1);">
                                </div>
                            </div>
                            <div class="black-background" id="js-black-bg"></div>
                        </div>
                        <div class="form_main_contents" id="input_area">
                            <form id="form1">
                                <h2>お客様情報をご入力下さい</h2>
                            <div class="desc red">
                                ※18歳未満の方はお申し込みいただけません。あらかじめご了承ください。
                            </div>
                            <div class="desc red">
                                ※ご契約者様の情報をご入力ください。
                            </div>
                            <div class="desc">
                                ※ <span class="red">*</span>は全て必須項目になります。
                            </div>
                            <div class="form-table">
                                <dl class="form-table-list">
                                    <dt class="form-table-item">お名前 <span class="red">*</span></dt>
                                    <dd class="form-table-detail name_flex">
                                        　姓：<input class="validate[required] name_form" type="text" name="l_name" id="firstname" placeholder="例）山田"  value="" size="8" autocomplete="family-name"><div id="name_area_br_0"></div>
                                        　名：<input class="validate[required] name_form" type="text" name="f_name" id="lastname" placeholder="例）太郎"  value="" size="8" autocomplete="given-name">
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">お名前（カナ） <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <div class="kana_flex">
                                            セイ：<input class="validate[required] name_form" type="text" name="l_kana" id="firstname-kana" placeholder="例）ヤマダ" value="" size="8"><div id="name_area_br_1"></div>
                                            メイ：<input class="validate[required] last-name-kana name_form" type="text" name="f_kana" id="lastname-kana" placeholder="例）タロウ" value="" size="8">
                                        </div>
                                        <span class="desc inline_block">※ フリガナは自動で予測変換されます。</span>
                                        <span class="desc inline_block">カナ名義が正しいかご確認ください。</span>
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">ご契約者様の<span class="bold inline_block">生年月日</span> <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input type="date" name="birth_year" class="validate[required] birth_input" value="" size="5"><br>
                                        <span class="desc inline_block">例）1970 / 04 / 01</span>
                                    </dd>
                                </dl>

                                <dl class="form-table-list">
                                    <dt class="form-table-item">性別 <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <div class="radio">
                                            <label for="man"></label><input type="radio" name="gender" id="man" value="">男</label>
                                            <label for="woman"></label><input type="radio" name="gender" id="woman" value="">女</label>
                                        </div>
                                    </dd>
                                </dl>

                                <dl class="form-table-list">
                                    <dt class="form-table-item">携帯電話番号 <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input name="tel" class="validate[required,custom[number],minSize[10],maxSize[11]] smart_input  form_input" type="text" id="tel" value="" size="15" style="ime-mode: disabled;" maxlength="11" placeholder="例）09012345678" autocomplete="tel"/><br>
                                        <span class="desc inline_block">※ ハイフン抜きで入力して下さい。</span><br>
                                        <span class="desc inline_block">※ 連絡の取りやすい番号を記入してください。</span>

                                    </dd>
                                </dl>

                                <dl class="form-table-list">
                                    <dt class="form-table-item">メールアドレス <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input style="ime-mode: disabled;" class="validate[required,custom[email]] form_input" name="email" type="text" id="email" value="" size="35" placeholder="例）info@goodwifi.jp" autocomplete="email"/><br>
                                    </dd>
                                </dl>

                                <dl class="form-table-list">
                                    <dt class="form-table-item">メールアドレス<span class="bold inline_block">（確認）</span> <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input name="email_chk" type="text" class="validate[equals[email]] form_input" id="email_chk"  value="" size="35" style="ime-mode: disabled;" placeholder="例）info@goodwifi.jp"/><br>
                                        <span class="desc">
                                            ※ GmailメールもしくはYahooメールでのご登録を推奨しております。<br>
                                            携帯のアドレスを使用する場合、受信拒否設定をされている方は登録解除をお願い致します。<br>
                                            (送信元アドレス：xxxx@goodwifi.jp)<br>
                                            ※ メールエラーの場合、今後の各種ご案内は致しかねますので、正確にご入力をお願い致します。
                                        </span>
                                    </dd>
                                </dl>

                                <dl class="form-table-list">
                                    <dt class="form-table-item">パスワード <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[required,maxSize[12],custom[onlyLetterNumber]] ime-disabled form_input" name="login_pass" id="login_pass" type="password" value="" size="11" placeholder="" s maxlength="12"><br>
                                        <span class="desc inline_block red">（12文字以内，半角英数，任意のパスワードを設定し、入力してください、クレジットカードのパスワードは入力しないで下さい）</span><br>
                                        <div class="desc">
                                            ※お申し込み後、ぐっとWifi 専用マイページ画面　ログイン用のパスワードになります。
                                        </div>
                                    </dd>
                                </dl>

                                <dl class="form-table-list">
                                    <dt class="form-table-item">パスワード<span class="bold inline_block">（確認用）</span> <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[required,equals[login_pass]] ime-disabled form_input" name="re_login_pass" type="password" value="" size="11" placeholder=""  maxlength="12"><br>
                                        <span class="desc inline_block red">（上で入力したパスワードと同じパスワードを入力してください）</span><br>

                                    </dd>
                                </dl>
                            </div>
                            <h2>ご登録住所の入力</h2>
                            <div class="">
                                郵便番号を入力すると住所が自動で入力されます。
                            </div>
                            <div class="form-table">
                                <dl class="form-table-list">
                                    <dt class="form-table-item">郵便番号 <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[required,custom[number],minSize[7],maxSize[7]] text-input zip_form" id="zip_code" name="zip_code" type="tel" value="" size="10" onInput="checkForm(this)" onkeyup="AjaxZip3.zip2addr(this,'','pref','add1');dofocus();" style="ime-mode: disabled;" placeholder="例）1500001" maxlength="7"><br>
                                        <span class="desc" style="display: inline-block;">※ ハイフンは入れず入力して下さい。</span><br>
                                        <span class="desc" style="display: inline-block;">※ 郵便番号を入力後、自動入力されます。</span><br>
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">都道府県 <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[required,minSize[3],maxSize[4]] zip_form" name="pref" id="pref" type="text" value="" size="20" maxlength="4" placeholder="例）東京都" ><br>
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">市区町村 <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[required,maxSize[50]] smart_input zip_form" name="add1" type="text" value="" size="50" placeholder="例）渋谷区神宮前" ><br>
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">丁目</dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[maxSize[50]] smart_input zip_form" name="add2" type="text" id="add2" value="" size="50" placeholder="例）6丁目" size="50"/><br>
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">番地</dt>
                                    <dd class="form-table-detail">
                                        <input class="validate[maxSize[50]] smart_input ime-disabled zip_form" name="add3" type="text" id="add3" value="" size="50" placeholder="例）19-13" size="50"/><br><span class="desc">※ 半角で入力してください</span><br>
                                    </dd>
                                </dl>
                                <dl class="form-table-list">
                                    <dt class="form-table-item">建物名</dt>
                                    <dd class="form-table-detail">
                                        <input class="smart_input zip_form" name="add4" type="text" id="add4" value="" size="50" placeholder="例）J-6ビル6階" />
                                        <br>
                                        <span class="desc">※部屋番号がある場合は必ず入力してください。</span>
                                    </dd>
                                </dl>
                            </div>
                            <h2>配送について</h2>
                            <div class="form-table">
                                <dl id="send_type_area" class="form-table-list">
                                    <dt class="form-table-item">配送先ご住所 <span class="red">*</span></dt>
                                    <dd class="form-table-detail">
                                        <label>
                                            <input name="send_type" id="send_type" class="validate[required]" type="radio" value="登録住所と同じ" checked="checked" onclick="send_type_chg();"> 登録住所と同じ
                                        </label>
                                        <label>
                                            <input name="send_type" id="send_type" class="validate[required]" type="radio" value="登録住所と異なる"   onclick="send_type_chg();"> 登録住所と異なる
                                        </label>
                                    </dd>
                                </dl>
                            </div>
                            <div id="deli_area">
                                <h2>配送先ご住所</h2>
                                <div class="">
                                    郵便番号を入力すると住所が自動で入力されます。
                                </div>
                                <div class="form-table">
                                    <dl class="form-table-list">
                                        <dt class="form-table-item">郵便番号 <span class="red">*</span></dt>
                                        <dd class="form-table-detail">
                                            <input class="validate[required,custom[number],minSize[7],maxSize[7]] zip_form" id="deli_zip_code" name="deli_zip_code" type="tel" value="" size="10" onInput="checkForm(this)" onkeyup="AjaxZip3.zip2addr(this,'','deli_pref','deli_add1');dofocus();" style="ime-mode: disabled;" placeholder="例）1500001" size="10" maxlength="7"><br>
                                            <span class="desc" style="display: inline-block;">※ ハイフンは入れず入力して下さい。</span><br>
                                            <span class="desc" style="display: inline-block;">※ 郵便番号を入力後、自動入力されます。</span><br>
                                        </dd>
                                    </dl>
                                    <dl class="form-table-list">
                                        <dt class="form-table-item">都道府県 <span class="red">*</span></dt>
                                        <dd class="form-table-detail">
                                            <input class="validate[required,minSize[3],maxSize[4]] zip_form" name="deli_pref" id="deli_pref" type="text" value="" maxlength="4" placeholder="例）東京都" size="20"><br>
                                        </dd>
                                    </dl>
                                    <dl class="form-table-list">
                                        <dt class="form-table-item">市区町村 <span class="red">*</span></dt>
                                        <dd class="form-table-detail">
                                            <input class="validate[required,maxSize[50]] zip_form" name="deli_add1" type="text" value="" placeholder="例）渋谷区神宮前" size="50"><br>
                                        </dd>
                                    </dl>
                                    <dl class="form-table-list">
                                        <dt class="form-table-item">丁目</dt>
                                        <dd class="form-table-detail">
                                            <input class="validate[maxSize[50]] zip_form" name="deli_add2" type="text" id="deli_add2" value=""  placeholder="例）6丁目" size="50"><br>
                                        </dd>
                                    </dl>
                                    <dl class="form-table-list">
                                        <dt class="form-table-item">番地</dt>
                                        <dd class="form-table-detail">
                                            <input class="validate[maxSize[50]] zip_form ime-disabled" name="deli_add3" type="text" id="deli_add3" value=""  placeholder="例）19-13" /><br><span class="desc">※ 半角で入力してください</span><br>
                                        </dd>
                                    </dl>
                                    <dl class="form-table-list">
                                        <dt class="form-table-item">建物名</dt>
                                        <dd class="form-table-detail">
                                            <input class="zip_form" name="deli_add4" type="text" id="deli_add4" value=""  placeholder="例）J-6ビル6階" size="50">
                                            <br>
                                            <span class="desc">※部屋番号がある場合は必ず入力してください。</span>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            </form>
                            <div class="center" style="margin-top: 30px;font-size: 18px;">
                                <a href="{{ url('https://goodwifi.jp/privacy-policy.html')}}" target="_blank">個人情報の取扱について</a>
                                にご同意の上、確認画面へ進んでください。<br><br>
                                <input type="hidden" name="kakunin" value="">
                                <label><input type="checkbox" id="check" name="kakunin" onclick="kakunin_chg();" value="on" style="width: 25px;height: 25px;"> 同意する</label>
                            </div>
                            <div id="setumei_block" class="setumei_block">
                                <input type="hidden" name="ticket" value="e0ebdf313dda7ac095c8d269bac385cc">

                                                    <input type="hidden" id="terminal" name="terminal" value="">
                                <input type="hidden" id="color" name="color" value="">
                                <input type="hidden" id="support" name="support" value="" />
                                <input type="hidden" id="protect" name="protect" value="" />
                                <input type="hidden" id="pay_method" name="pay_method" value="" />

                                <input type="hidden" id="fee" name="fee" value="">
                                <input type="hidden" id="monthly_total" name="monthly_total" value="">


                                <input type="hidden" id="n_org_amo_hidden" name="n_org_amo_hidden" value="">
                                <input type="hidden" id="n_simple_amo_hidden" name="n_simple_amo_hidden" value="">
                                <input type="hidden" id="n_wari_amo_hidden" name="n_wari_amo_hidden" value="">
                                <input type="hidden" id="n_amo_total_hidden" name="n_amo_total_hidden" value="">



                                <input type="hidden" id="cc_number" name="cc_number" value="">
                                <input type="hidden" id="token" name="token" value="">
                                <input type="hidden" id="tokenKey" name="tokenKey" value="">
                                <input type="hidden" id="cardbrandCode" name="cardbrandCode" value="">
                            </div>
                            <!--ここから決済画面の設定-->
                            <h2>決済画面</h2>
                            <div class="radio"><!--決済選択のradioボタン-->
                                <label for="credit" class="radio-label"><input type="radio" name="pay" class="radio-item" id="credit"checked="checked"  onclick="payselect()">クレジットカード</label>
                                <label for="paidy" class="radio-label"><input type="radio" name="pay" class="radio-item" id="paidy" onclick="payselect()">あと払いペイディ</label>
                            </div>
                            <!--クレジットカード決済フォーム(stripe)-->
                            <form id="payment-form">
                                <img src="{{ asset('img/cc_payments.jpg')}}">
                                <div id="payment-element" class="payment">
                                    <dl class="payment-dl">
                                        <dt class="payment-dt">カード名義人 <span class="">*</span></dt>
                                        <dd class="payment-dd">
                                            <input type="text" name="card_name" class="validate[required] payment_form" value="" placeholder="例) TARO YAMADA">
                                        </dd>
                                    </dl>
                                  <dl class="payment-dl">
                                    <dt class="payment-dt">カード番号 <span class="">*</span></dt>
                                    <dd class="payment-dd">
                                        <input type="text" name="card_num" class="validate[required] payment_form" value="" placeholder="16桁のカード番号">
                                    </dd>
                                  </dl>
                                  <dl class="payment-dl">
                                    <dt class="payment-dt">有効期限 <span class="">*</span></dt>
                                    <dd class="payment-dd">
                                        <input type="text" name="card_expiry-y" class="validate[required] expiry" value="" placeholder="例) 10">
                                        <span>/</span>
                                        <input type="text" name="card_expiry-m" class="validate[required] expiry" value="" placeholder="例) 23">
                                    </dd>
                                  </dl>
                                  <dl class="payment-dl">
                                    <dt class="payment-dt">セキュリティコード <span class="">*</span></dt>
                                    <dd class="payment-dd">
                                        <input type="text" name="card_cvc" class="validate[required] payment_form" value="" placeholder="例) 123">
                                    </dd>
                                  </dl>
                                </div>
                                <button id="submit" class="payment_submit">
                                  <div class="spinner hidden" id="spinner"></div>
                                  <span id="button-text" class="payment_submit--text">確認画面へ</span>
                                </button>
                                <div id="payment-message" class="hidden"></div>
                            </form>
                            <!--後払いペイディ決済フォーム-->
                            <form id="paidy-form" class="paidy-pay">
                                <div class="paidy-pay_view">
                                    <img src="{{ asset('img/paidy_logo.png')}}" alt="後払いペイディ">
                                </div>
                                <div class="paidy_form">
                                    <p>※上記でご入力いただきました、お客様情報より自動で転記しております。
                                        お電話番号とメールアドレスに間違いがないか、ご確認をお願いいたします。
                                    </p>
                                    <dl class="paidy_form-dl">
                                        <dt class="paidy_form-dt">携帯番号 <span class="">*</span></dt>
                                        <dd class="paidy_form-dd">
                                            <input type="tel" name="paidy-tel" value="" class="validate[required] paidy_form_item" id="paidy_tel">
                                        </dd>
                                    </dl>
                                    <dl class="paidy_form-dl">
                                        <dt class="paidy_form-dt">メール <span class="">*</span></dt>
                                        <dd class="paidy_form-dd">
                                            <input type="email" name="paidy-email" value="" class="validate[required] paidy_form_item" id="paidy_mail">
                                        </dd>
                                    </dl>
                                    <a href="{{url('')}}" class="paidy_form_link">後払いペイディについて >></a>
                                </div>
                                <button id="paidy-checkout" class="paidy_submit" type="submit" onclick="paidyPay()">確認画面へ</button>
                                <script type="text/javascript" src="https://apps.paidy.com/"></script>
                                <script type="text/javascript"> 
                                    var config = {
                                            "api_key": "pk_test_64flakiliha8239usr0cpe7gvd",
                                            "logo_url": "http://www.paidy.com/images/logo.png",
                                            "closed": function (callbackData){
                                                /*
                                                Data returned in the callback:
                                                callbackData.id,
                                                callbackData.created_at,
                                                callbackData.status 
                                                */
                                            },

                                            "token": {
                                            "wallet_id":"default",
                                            "type":"recurring",
                                            }
                                            
                                        };
                                    /*paidy-post*/
                                    var paidyHandler = Paidy.configure(config); 
                                    function paidyPay(){
                                        var payload = {
                                            "store_name":"goodWifi",
                                            "buyer":{
                                                "name1":"山田　太郎",
                                                "name2":"ヤマダ　タロウ",
                                                "email":"successful.payment@paidy.com",
                                                "phone":"08000000001"
                                            }
                                        };

                                        paidyHandler.launch(payload);

                                    };
                                    
                                    /*function 関数A(コールバック関数){
                                        コールバック関数();//コールバック関数の処理
                                        処理　//関数Aの処理
                                    }



                                    //config = {//コールバック関数
                                        //"closed": function (callbackData) {
                                                /*
                                                Data returned in the callback:
                                                callbackData.id,
                                                callbackData.created_at,
                                                callbackData.status 
                                                */
                            </script>
                        </form>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div>
            <label for="upload">写真を撮影してアップロードする</label>
            <input id="upload" type="file" name="image" accept="image/*" capture="camera">
        </div>
        <div id="footer"> 
            <div class="footer-inner">
                Copyright ぐっとWifi. All Right Reserved.
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/jquery.ui.datepicker-ja.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('js/jquery-ui.css')}}">
    <script>
        function payselect(){
         let pay = document.getElementsByName("pay");
         let paidy_tel = document.getElementById("paidy_tel");
         let paidy_mail = document.getElementById("paidy_mail");

         if(pay[0].checked){
          document.getElementById('payment-form').style.display = "";
          document.getElementById('paidy-form').style.display = "none";
         }else if(pay[1].checked){
          document.getElementById('payment-form').style.display = "none";
          document.getElementById('paidy-form').style.display = "";

          paidy_tel.value = document.getElementById("tel").value;
          paidy_mail.value = document.getElementById("email").value;
         }
     }
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            jQuery("#form1").validationEngine('attach', {
                promptPosition:"topRight"
            });
        });
        jQuery("#submit").click(function(){
            if(!(jQuery("#form1").validationEngine('validate'))){
                return false;

            }else{
                doSubmit();
            }
        });
    </script>
    <script>
        /*stripe.js*/
        function dosubmit(){
            var stripe = stripe('pk_test_51L7afBAkBFuJeEP5ll7bebbFS8etadBjgz1tWH8VEl1e6LhsUmvOScIPuYf9fI73hE3equWFMZOvwNfc4LdoJx7L00jhnYhL69');
            var elements = stripe.elements();

            var elementStyles = {
                base: {
                    fontSize: '14px',
                },
                invalid: {
                    color: '#eb1c26',
                }
            }
            
            var elementClasses = {
                focus: 'is-focused',
                empty: 'is-empty',
                invalid: 'is-invalid'
            }
            
            var cardNumber = elements.create('cardNumber', {
                style: elementStyles,
                classes: elementClasses,
            });

            var cardNumber = elements.create('cardNumber');
            cardNumber.mount('#card_number');

            cardNumber.addEventListener('change', function(event) {
                var displayError = document.getElementById('card_errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var errorElement = document.getElementById('card_errors');
                if (event.error) {
                    errorElement.textContent = event.error.message;
                } else {
                    errorElement.textContent = '';
                }
            
                stripe.createToken(cardNumber).then(function(result) {
                    if (result.error) {
                        errorElement.textContent = result.error.message;
                    } else {
                        stripeSubmit(result.token);
                    }
                });
            });
            
            function stripeSubmit(token) {
                var form = document.getElementById('form1');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
            }
        }
    </script>
    <script>
        //フリガナ自動入力
        $(function() {
            $.fn.autoKana('#firstname', '#firstname-kana',{katakana:true});
            $.fn.autoKana('#lastname', '#lastname-kana',{katakana:true});
        });

        //半角➡全角に変換
        $(function(){
            $("#add3").change(function(){
                var str = $(this).val();
                str = str.replace( /[A-Za-z0-9-!"#$%&'()=<>,.?_\[\]{}@^~\\]/g, function(s) {
                    return String.fromCharCode(s.charCodeAt(0) + 65248);
                });
                $(this).val(str);
            }).change();

            $("#other_add3").change(function(){
                var str = $(this).val();
                str = str.replace( /[A-Za-z0-9-!"#$%&'()=<>,.?_\[\]{}@^~\\]/g, function(s) {
                    return String.fromCharCode(s.charCodeAt(0) + 65248);
                });
                $(this).val(str);
            }).change();
        });

        //フォーカス時、背景色変更
        $('input[type="text"],input[type="tel"],textarea').focus(function(){
            $(this).addClass('focus');
        }).blur(function(){
            $(this).removeClass('focus');
        });
    </script>
    <script type="text/javascript">
        window.onload = function () {
            payselect();
            chg_plan();
            chg_terminal();
            chg_color();
            chg_support();
            chg_protect();
            chg_pay_method();
            kakunin_chg();
            send_type_chg();
        };
    </script>
    <script type="text/javascript">
        function kakunin_chg() {
        if(document.getElementsByName('kakunin')[1].checked == true){
            document.getElementById('btn').style.display = "";
        }

        }
        function send_type_chg() {
            document.getElementById('deli_area').style.display = "none";

            if(document.getElementsByName('send_type')[1].checked){
                document.getElementById('deli_area').style.display = "";
            }
        }
        function chg_plan() {

            document.getElementById('wimax_img').style.display = "none";
            document.getElementById('wimax_area').style.display = "none";
            document.getElementById('300g_area').style.display = "none";


            if(document.getElementsByName('plan')[0].checked){
                document.getElementById('wimax_img').style.display = "";
                document.getElementById('wimax_area').style.display = "";

                if(document.getElementById('terminal').value=="" || document.getElementById('terminal').value=="NA01"){
                    document.getElementsByName('terminal_select')[0].checked = true;
                }

            }else{
                document.getElementById('300g_area').style.display = "";
                document.getElementsByName('terminal_select')[2].checked = true;


            }
            chg_terminal();

        }

        function chg_terminal() {

            document.getElementById('terminal_0_mess').classList.remove("selectBox-selected");
            document.getElementById('terminal_1_mess').classList.remove("selectBox-selected");
            document.getElementById('terminal_2_mess').classList.remove("selectBox-selected");

            document.getElementById('color_area').style.display = "none";
            document.getElementById('adapter_mess').style.display = "";


            if(document.getElementsByName('terminal_select')[0].checked){
                document.getElementById('terminal_0_mess').classList.add("selectBox-selected");
                document.getElementById('color_area').style.display = "";
                document.getElementById('terminal').value="Speed Wi-Fi 5G X11";

                if(document.getElementById('color').value==""){
                    document.getElementsByName('color_select')[0].checked = true;
                }

            }else if(document.getElementsByName('terminal_select')[1].checked){
                document.getElementById('terminal_1_mess').classList.add("selectBox-selected");
                document.getElementById('terminal').value="Speed Wi-Fi HOME 5G L12";
                document.getElementById('adapter_mess').style.display = "none";

            }else{
                document.getElementById('terminal_2_mess').classList.add("selectBox-selected");
                document.getElementById('terminal').value="NA01";

            }
            chg_color();
        }

        function chg_color() {

            document.getElementById('color_0_mess').classList.remove("selectBox-selected");
            document.getElementById('color_1_mess').classList.remove("selectBox-selected");

            if(document.getElementById('terminal').value=="Speed Wi-Fi 5G X11"){
                if(document.getElementsByName('color_select')[0].checked){
                    document.getElementById('color_0_mess').classList.add("selectBox-selected");
                    document.getElementById('color').value="チタニウムグレー";

                }else{
                    document.getElementById('color_1_mess').classList.add("selectBox-selected");
                    document.getElementById('color').value="スノーホワイト";

                }

            }else if(document.getElementById('terminal').value=="Speed Wi-Fi HOME 5G L12"){
                document.getElementById('color').value="ホワイト";

            }else{
                document.getElementById('color').value="ブラック";

            }

            navi_ctr(0);
        }


        function chg_support() {

            document.getElementById('support_0_mess').classList.remove("selectBox-selected");
            document.getElementById('support_1_mess').classList.remove("selectBox-selected");

            if(document.getElementsByName('support_select')[0].checked){
                document.getElementById('support_0_mess').classList.add("selectBox-selected");
                document.getElementById('support').value="安心サポートプラス";

            }else if(document.getElementsByName('support_select')[1].checked){
                document.getElementById('support_1_mess').classList.add("selectBox-selected");
                document.getElementById('support').value="加入しない";

            }

            navi_ctr(0);

        }
        function chg_protect() {

            document.getElementById('protect_0_mess').classList.remove("selectBox-selected");
            document.getElementById('protect_1_mess').classList.remove("selectBox-selected");

            if(document.getElementsByName('protect_select')[0].checked){
                document.getElementById('protect_0_mess').classList.add("selectBox-selected");
                document.getElementById('protect').value="ぐっとサポート";

            }else if(document.getElementsByName('protect_select')[1].checked){
                document.getElementById('protect_1_mess').classList.add("selectBox-selected");
                document.getElementById('protect').value="加入しない";

            }

            navi_ctr(0);

        }
        function detail_open() {

            if(document.getElementById('detail_area').style.display == ""){
                document.getElementById('detail_area').style.display = "none";

            }else{
                document.getElementById('detail_area').style.display = "";

            }


        }
        function chg_pay_method() {

            document.getElementById('pay_method_0_mess').classList.remove("selectBox-selected");
            document.getElementById('pay_method_1_mess').classList.remove("selectBox-selected");

            if(document.getElementsByName('pay_method_select')[0].checked){
                document.getElementById('pay_method_0_mess').classList.add("selectBox-selected");
                document.getElementById('pay_method').value="分割払い";

            }else if(document.getElementsByName('pay_method_select')[1].checked){
                document.getElementById('pay_method_1_mess').classList.add("selectBox-selected");
                document.getElementById('pay_method').value="一括払い";

            }

            navi_ctr(0);

        }

        function separate(num) {
            return String(num).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
        }
        function navi_ctr(target) {

            document.getElementById('n_t_0_img').style.display = "none";
            document.getElementById('n_t_1_img').style.display = "none";
            document.getElementById('n_t_2_img').style.display = "none";
            document.getElementById('n_t_3_img').style.display = "none";
            document.getElementById('n_s_0_img').style.display = "none";
            document.getElementById('n_s_1_img').style.display = "none";
            document.getElementById('n_s_2_img').style.display = "none";

            document.getElementById('n_support_area').style.display = "none";
            document.getElementById('n_protect_area').style.display = "none";


            if(document.getElementsByName('plan')[0].checked){
                if(document.getElementById('terminal').value=="Speed Wi-Fi 5G X11"){

                    if(document.getElementById('color').value=="チタニウムグレー"){
                        document.getElementById('n_t_0_img').style.display = "";

                    }else{
                        document.getElementById('n_t_1_img').style.display = "";

                    }

                }else{
                    document.getElementById('n_t_2_img').style.display = "";

                }

            }else{
                document.getElementById('n_t_3_img').style.display = "";

            }
            if(document.getElementsByName('plan')[0].checked){
                document.getElementById('n_plan_txt').innerHTML="WiMAXギガ放題プラン";

            }else{
                document.getElementById('n_plan_txt').innerHTML="クラウド300Gプラン";

            }
            document.getElementById('n_terminal_txt').innerHTML=document.getElementById('terminal').value;
            document.getElementById('n_color_txt').innerHTML=document.getElementById('color').value;

            if(document.getElementById('support').value=="安心サポートプラス"){
                document.getElementById('n_s_0_img').style.display = "";
                document.getElementById('n_support_area').style.display = "";
            }
            if(document.getElementById('protect').value=="ぐっとサポート"){
                document.getElementById('n_s_1_img').style.display = "";
                document.getElementById('n_protect_area').style.display = "";

            }
            if(document.getElementById('support').value!="安心サポートプラス" && document.getElementById('protect').value!="ぐっとサポート"){
                document.getElementById('n_s_2_img').style.display = "";

            }

            document.getElementById('amo_list_btn_0').classList.remove("amo_list_btn_select");
            document.getElementById('amo_list_btn_1').classList.remove("amo_list_btn_select");
            document.getElementById('amo_list_btn_2').classList.remove("amo_list_btn_select");
            document.getElementById('amo_list_btn_3').classList.remove("amo_list_btn_select");


            if(target == 0){
                document.getElementById('amo_list_btn_0').classList.add("amo_list_btn_select");

            }else if(target==1){
                document.getElementById('amo_list_btn_1').classList.add("amo_list_btn_select");

            }else if(target==2){
                document.getElementById('amo_list_btn_2').classList.add("amo_list_btn_select");

            }else if(target==3){
                document.getElementById('amo_list_btn_3').classList.add("amo_list_btn_select");

            }

            org_amount = 0;

            document.getElementById('n_wari_area').style.display = "none";

            if(document.getElementsByName('plan')[0].checked){
                document.getElementById('n_wari_area').style.display = "";

                wari_amo =0;
                stan_amo = 4820;

                document.getElementById('n_simple_amo').innerHTML= separate(Math.round(stan_amo*1.1));
                document.getElementById('n_simple_amo_hidden').value= Math.round(stan_amo*1.1);

                if(document.getElementById('support').value=="安心サポートプラス" && document.getElementById('protect').value=="ぐっとサポート") {

                    if(target == 0){
                        wari_amo = -3840;

                    }else if(target==1){
                        wari_amo = -940;

                    }else if(target==2){
                        wari_amo = -440;


                    }else if(target==3){
                        wari_amo = -440;

                    }
                }
                document.getElementById('n_wari_amo').innerHTML= separate(Math.round(wari_amo*1.1));
                document.getElementById('n_wari_amo_hidden').value= Math.round(wari_amo*1.1);

                org_amount = stan_amo + wari_amo;

            }else{
                org_amount = 3680;

            }

            document.getElementById('n_org_amo').innerHTML= separate(org_amount);
            document.getElementById('n_org_amo_tax').innerHTML= separate(Math.round(org_amount*1.1));

            document.getElementById('n_org_amo_hidden').value= org_amount;


            monthly_amount = org_amount;

            document.getElementById('n_terminal_area').style.display = "none";


            if(document.getElementById('pay_method').value=="分割払い"){

                if(target <= 2){
                    document.getElementById('n_terminal_area').style.display = "";
                    document.getElementById('n_terminal_amo').innerHTML=Math.round(550 * 1.1);
                    monthly_amount += 550;


                }else{
                    document.getElementById('n_terminal_amo').innerHTML=0;

                }


            }else{
                document.getElementById('n_terminal_amo').innerHTML=0;
            }


            if(document.getElementById('support').value=="安心サポートプラス"){
                monthly_amount += 550;
            }
            if(document.getElementById('protect').value=="ぐっとサポート"){
                monthly_amount += 780;
            }

            document.getElementById('n_terminal_amo_area').style.display = "none";


            /**以下初回お支払額**/
            terminal_amount = 0;

            if(document.getElementById('pay_method').value=="一括払い"){
                document.getElementById('n_terminal_amo_area').style.display = "";
                terminal_amount = 19800 * document.getElementById('num').value;

            }

            document.getElementById('n_monthly_amo').innerHTML= separate(monthly_amount);
            document.getElementById('n_monthly_amo_tax').innerHTML= separate(Math.round(monthly_amount * 1.1));

            if(document.getElementsByName('plan')[0].checked){
                f_amount = 980;
            }else{
                f_amount = 3680;
            }
            if(document.getElementById('support').value=="安心サポートプラス"){
                f_amount += 550;
            }
            if(document.getElementById('protect').value=="ぐっとサポート"){
                f_amount += 780;
            }
            if(document.getElementById('pay_method').value=="分割払い"){
                f_amount += 550;

            }


            fee = 3000 * document.getElementById('num').value;
            f_monthly_total = f_amount * document.getElementById('num').value;
            tax = Math.round((fee + f_monthly_total + terminal_amount)*0.1);

            document.getElementById('n_num_txt').innerHTML= document.getElementById('num').value;
            document.getElementById('n_fee_amo_total').innerHTML= separate(Math.round(fee*1.1));
            document.getElementById('n_monthly_amo_total').innerHTML= separate(Math.round(f_monthly_total*1.1));
            document.getElementById('n_terminal_amo_total').innerHTML= separate(Math.round(terminal_amount*1.1));
            document.getElementById('n_amo_total').innerHTML= separate(Math.round((fee + f_monthly_total + terminal_amount)*1.1));
            document.getElementById('n_amo_total_hidden').value= Math.round((fee + f_monthly_total + terminal_amount)*1.1);

            document.getElementById('fee').value = fee;
            document.getElementById('monthly_total').value = f_monthly_total;

        }


        function pop_ctr_support_info_add() {
            document.getElementById('js-popup2').classList.add('is-show');

        }
        function pop_ctr_support_info_remove() {
            document.getElementById('js-popup2').classList.remove('is-show');
        }
        function pop_ctr_protect_info_add() {
            document.getElementById('js-popup3').classList.add('is-show');

        }
        function pop_ctr_protect_info_remove() {
            document.getElementById('js-popup3').classList.remove('is-show');
        }


        function pop_ctr_support_del_info_add() {

            document.getElementsByName('support_select')[0].checked = true;
            chg_support();
            pop_btn_chg(1)
            document.getElementById('js-popup4').classList.add('is-show');

        }
        function pop_ctr_support_del_info_remove() {
            document.getElementById('js-popup4').classList.remove('is-show');
        }
        function pop_btn_chg(i) {
            if(i==0){
                document.getElementById('pop_btn_0').style.display = "none";
                document.getElementById('pop_btn_1').style.display = "";
                document.getElementsByName('support_select')[1].checked = true;
            }else{
                document.getElementById('pop_btn_0').style.display = "";
                document.getElementById('pop_btn_1').style.display = "none";
                document.getElementsByName('support_select')[0].checked = true;

            }
            chg_support();

            if(i==0){
                setTimeout(pop_ctr_support_del_info_remove, 500);
            }
        }


        function pop_ctr_protect_del_info_add() {

            document.getElementsByName('protect_select')[0].checked = true;
            chg_protect();
            pop_btn_chg2(1)
            document.getElementById('js-popup5').classList.add('is-show');

        }
        function pop_ctr_protect_del_info_remove() {
            document.getElementById('js-popup5').classList.remove('is-show');
        }
        function pop_btn_chg2(i) {
            if(i==0){

                document.getElementById('pop_btn_2').style.display = "none";
                document.getElementById('pop_btn_3').style.display = "";
                document.getElementsByName('protect_select')[1].checked = true;
            }else{
                document.getElementById('pop_btn_2').style.display = "";
                document.getElementById('pop_btn_3').style.display = "none";
                document.getElementsByName('protect_select')[0].checked = true;

            }
            chg_protect();

            if(i==0){
                setTimeout(pop_ctr_protect_del_info_remove, 500);
            }

        }
    </script>
    <script>
        $(function() {
            $('#js-child4').click(function(event) {
                event.stopPropagation();
            })
        });
        </script>
        <script>
        $(function() {
            $('#js-child5').click(function(event) {
                event.stopPropagation();
            })
        });
    </script>
    <script>
        $(function(){
            $("input"). keydown(function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });
        });
    </script>
</body>
</html>
