@extends('layouts.master')
@section('content')

    <div class="banner" style="padding-top: 75px">
        <img src="{{asset('images/home.jpg')}}">
    </div>
    <div class="container">
        <div class="row">
            <div class="col mx-0 p-0">
                <img src="{{asset('images/mid1.png')}}" alt="">
            </div>
            <div class="col mx-0 p-0">
                <img src="{{asset('images/mid2.png')}}" alt="">
            </div>
            <div class="col mx-0 p-0">
                <img src="{{asset('images/mid3.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col mx-0 p-0">
                <img src="{{asset('images/L-01.jpg')}}">
            </div>
            <div class="col mx-0 p-0">
                <h3 class="text-center" style="font-weight: bolder;color:rgb(63,34,15)">動手蒸餾專屬風味琴酒</h3>
                <br/>
                <p class="text-center" style="font-size: 12px;color: rgb(63,34,15)">一瓶自製Mini頻琴酒(100ml)/人</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col mx-0 p-0">
                <p class="text-center" style="font-weight: bolder;color:rgb(63,34,15); font-size: 20px">
                    虎尾釀品牌介紹</p>
            </div>
            <div class="col mx-0 p-0">
                <img src="{{asset('images/L-02.jpg')}}">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col mx-0 p-0">
                <img src="{{asset('images/L-03.jpg')}}">
            </div>
            <div class="col mx-0 p-0">
                <div class="container-fluid">
                    <h3 class="text-start" style="font-weight: bolder;color:rgb(63,34,15);">品飲獨家特色酒品</h3>
                </div>
                <br/>
                <div class="container-fluid">
                    <p class="text-center" style="color:rgb(63,34,15);font-size: 10px">米釀威士忌一杯、桶陳蘭姆酒一杯、職人黑米純釀一杯</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col mx-0 p-0">
                <div class="container-fluid">
                    <h3 class="text-start" style="font-weight: 900;color:rgb(63,34,15);">酒場巡禮</h3>
                </div>
                <br/>
                <p class="text-center" style="color:rgb(63,34,15);font-size: 14px">專業釀酒師的酒廠導覽與解說</p>
            </div>
            <div class="col mx-0 p-0">
                <img src="{{asset('images/L-04.jpg')}}">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col mx-0 p-0">
                <img src="{{asset('images/L-05.jpg')}}">
            </div>
            <div class="col mx-0 p-0">
                <p class="fw-bold text-center " style="font-weight: 900 ;color:rgb(63,34,15); font-size: 20px">
                    製作琴酒專屬貼標</p>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color:rgb(210,161,84)">
        <div class="row align-items-center text-white text-start" style="font-size: 12px">
            <div class="col mx-0 p-0">
                <div class="container-fluid">
                    <h3>
                        <br>
                        <br>
                        哈囉大家好～我們是虎尾釀酒廠，<br>
                        歡迎加入一日釀酒師的行列！<br>
                        以下是行前通知，再麻煩幫我詳細閱讀和再三確認唷！<br>
                        <br>
                        －－－－－－－－行前通知－－－－－－－<br>
                        <br>
                        ◎體驗時間：4/2(六）9:00~12:00 <br>
                        !!9點在虎尾釀園區集合報導入座唷!!<br>
                        <br>
                        ◎報名人數：一組三人<br>
                        提醒：一台機器可製作『同口味三瓶』100ml mini瓶琴酒，所以三人一組，<br>
                        最終製作出的琴酒風味會是一樣的唷！ (人數不到三人，須可接受與其他人同組共同製作）‼<br>
                        📢製作過程中請分工合作，不要吵架唷，一起製作出三個人都滿意且喜歡的酒品。<br>
                        <br>
                        ◎活動費用：999 /人<br>
                        <br>
                        <br>
                    </h3>
                </div>
                <br/>
            </div>
        </div>
    </div>

    @include('pages.information')

    <div class="container-fluid" style="background-color:rgb(210,161,84)">
        <div class="row align-items-center text-white text-start" style="font-size: 12px">
            <div class="col ">
                <div class="container-fluid">
                    <h3 style="font-weight: bolder">
                        <br>
                        <br>
                        ◎【交通方式】<br>
                        -大眾運輸：可搭高鐵至高鐵雲林站，並自行搭計程車至虎尾(約10-15分)<br>
                        -自行開車：可直接google導航：『虎尾釀 酒醋釀造專門』<br>
                        <br>
                        【注意事項】<br>
                        ◎因場地限制不提供參加者以外的人員陪同。<br>
                        ◎體驗場域在地下室，儲酒的酒窖，上下樓梯需注意安全，環境較為潮濕，活動中有任何不適請告知工作人員協助。<br>
                        ◎若有未完成之體驗及項目則視同放棄，不做任何退費。<br>
                        ◎如因天候等不可抗拒之因素，店家保有更改及取消行程之權利。<br>
                        ◎虎尾保有活動最終所有權與解釋權。<br>
                        <br>
                        <br>
                        【取消政策】<br>
                        ◎活動日7天前(不含例假日)通知取消並獲得確認者，可全額退費。<br>
                        ◎活動日3~7天內取消者(不含例假日)通知取消並獲得確認者，可退回活動50%費用。<br>
                        ◎活動日0~2天內取消者(不含例假日)，恕不退費亦不可改期。<br>
                        <br>
                        <hr style="margin-bottom: 1rem;border: 0;border-top: 2px solid white;width: 80%;border-radius: 10%">
                        <br>
                        有任何問題請與我們聯聚!<br>
                        <br>
                        【聯絡資訊】<br>
                        <br>
                        虎尾釀行銷企劃:Amber<br>
                        T：05-6629991 <br>
                        E：hwn662999i@gmail.com <br>
                        雲林縣虎尾鎮延平里下南15-6號 <br>
                        <br>
                        <br>
                    </h3>
                </div>
                <br/>
            </div>
        </div>
    </div>

    <footer class="text-white" style="background-color: rgb(210,161,84)">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col mx-0 p-0">
                </div>
                <div class="col mx-0 p-0">
                    <img src="{{asset('images/logo-footer.png')}}">
                </div>
            </div>
        </div>
        <div class="container-fluid" style="align-items: center">
            <hr style="margin-bottom: 1rem;border: 0;border-top: 4px solid white;width: 100%;border-radius: 20%">
        </div>
        <div class="text-center p-3" style="background-color:rgb(210,161,84) ">
            © 2022 Favoland.Designed by Toripii
            <a class="text-white" href="https://mdbootstrap.com/"></a>
        </div>
    </footer>

    <div class="container-fluid" style="text-align: center;background-color: black">
        <div style="text-align: center">
            <p style="color: white;">禁止酒駕 酒後不開車 安全有保障</p>
        </div>
    </div>

    <script>
        function success_data(){

        }
    </script>
@endsection

