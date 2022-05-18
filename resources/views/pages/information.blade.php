
<div id="change">
    <div class="container-fluid" style="background-color:rgb(233,202,156)">
        <div
            style="font-size: 18px;font-weight: bolder ;color:rgb(63,34,15);padding-top: 10px;padding-bottom: 10px">
            報名資訊填寫
        </div>
    </div>

    <div class="container-fluid" style="background-color: rgb(227,222,216)">

        <div style="color: rgb(63,34,15);font-weight: bolder;padding-top: 10px;padding-bottom: 10px">
            活動場次
        </div>
        <div class="row justify-content-center mb-3">
            <select class="form-select form-select-sm" aria-label="Small select" style="width: 98%">
                <option selected="">(日期選取)</option>
                <option value="1">2022/05/28(六)</option>
                <option value="2">2022/05/29(日)</option>
            </select>
        </div>
        <div style="color: rgb(63,34,15);font-weight: bolder">
            姓名
        </div>
        <div class="mb-3">
            <input type="name" class="form-control" id="FormControl_Name" placeholder="王曉明" style="width: auto">
        </div>

        <div style="color: rgb(63,34,15);font-weight: bolder;">
            連絡電話
        </div>
        <div class="mb-3">
            <input type="phone" class="form-control" id="FormControl_Phone" placeholder="0912-345-678"
                   style="width: auto">
        </div>

        <div style="color: rgb(63,34,15);font-weight: bolder;">
            電子郵件
        </div>
        <div class="">
            <input type="email" class="form-control" id="FormControl_Email" placeholder="example@gmail.com"
                   style="width: auto;">
        </div>

        <div style="color: rgb(63,34,15);font-weight: bolder;padding-top: 10px;padding-bottom: 10px">
            付款方式(線上付款)
        </div>
        <div class="row justify-content-center mb-3">
            <select class="form-select form-select-sm" aria-label="Small select" style="width: 98%">
                <option selected="">(信用卡)</option>
                <option value="1">VISA</option>
                <option value="2">MasterCard</option>
                <option value="3">JCB</option>
                <option value="4">UCard</option>
            </select>
        </div>
        <div style="color: rgb(63,34,15);font-weight: bolder;">
            信用卡卡號
        </div>
        <div class="" style="padding-bottom: 20px">
            <input type="numer" class="form-control" id="FormControl_CreditCard" placeholder="XXXX-XXXX-XXXX-XXXX"
                   style="width: auto;">
        </div>
    </div>

    <div class="container-fluid" style="background-color:rgb(233,202,156)">
        <div class="row align-items-center">
            <div class="col mx-0 p-0">
                <div class="container">
                    <p class="text-start mb-3 mt-3"
                       style="font-weight: bolder;color:rgb(63,34,15); font-size: 20px">
                        報名人數</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <img src="{{asset('images/position.png')}}" width="100%" class="mb-3">
        </div>
        <div class="col mx-0 p-0">
            <p class="text-center mb-3" style="font-weight: bolder;color:rgb(63,34,15); font-size: 10px">
                (三人一桌，不滿三人即超過三人皆需與他人併桌),請自行劃位。</p>
        </div>

        <div class="container-fluid" style="text-align: center">
            <button type="button" class="btn mb-3"
                    style="background-color:rgb(227,222,216);color: rgb(63,34,15);font-weight: bolder">送出
            </button>
        </div>
    </div>
</div>
