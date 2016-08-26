<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            p{
                font-size: 1.3em;
            }
            #wrapper{
                margin: 20px 0 100px 50px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <h2 style="color:red;">您輸入的格式不符合規則</h2>
            <br>
            <h1>規則說明</h1>
            <p>網址：https://leb-firefly0329.c9users.io/Transfer/api/</p>
            <p class="">參數用"/"方式帶入</p>
            <p class="">=====================================================</p>
            <h3>新增帳號</h3>
            <p class="">api名稱-addMember</p>
            <p class="">參數1:(string)account=帳號</p>
            <p class="">ex: https://leb-firefly0329.c9users.io/Transfer/api/addMember/apple</p>
            <p class="">=====================================================</p>
            <h3>取得餘額</h3>
            <p class="">api名稱-getBalance</p>
            <p class="">參數1:(string)account=帳號</p>
            <p class="">ex: https://leb-firefly0329.c9users.io/Transfer/api/getBalance/apple</p>
            <p class="">=====================================================</p>
            <h3>轉帳</h3>
            <p class="">api名稱-updateBalance</p>
            <p class="">參數1:(string)account=帳號</p>
            <p class="">參數2:(string)type=轉出轉入(IN,OUT)</p>
            <p class="">參數3:(int)money=金額</p>
            <p class="">參數4:(int)transid=轉帳序號</p>
            <p class="">ex: https://leb-firefly0329.c9users.io/Transfer/api/updateBalance/apple/IN/500/778</p>
            <p class="">=====================================================</p>
            <h3>轉帳確認</h3>
            <p class="">api名稱-checkDetail</p>
            <p class="">參數1:(string)account=帳號</p>
            <p class="">參數2:(int)transid=轉帳序號</p>
            <p class="">ex: https://leb-firefly0329.c9users.io/Transfer/api/checkDetail/apple/778</p>


        </div>
    </body>
</html>