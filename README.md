# Transfer

網址：https://leb-firefly0329.c9users.io/Transfer/api/

參數用"/"方式帶入

-==========================================================

新增帳號

api名稱-addMember

參數1:(string)account=帳號\n

ex:
https://leb-firefly0329.c9users.io/Transfer/api/addMember/apple

-==========================================================

取得餘額

api名稱-getBalance

參數1:(string)account=帳號\n

ex:
https://leb-firefly0329.c9users.io/Transfer/api/getBalance/apple

-==========================================================

轉帳

api名稱-updateBalance

參數1:(string)account=帳號\n
參數2:(string)type=轉出轉入(IN,OUT)\n
參數3:(int)money=金額\n
參數4:(int)transid=轉帳序號\n

ex:
https://leb-firefly0329.c9users.io/Transfer/api/updateBalance/apple/IN/500/778

-==========================================================

轉帳確認

api名稱-checkDetail

參數1:(string)account=帳號\n
參數2:(int)transid=轉帳序號\n

ex:
https://leb-firefly0329.c9users.io/Transfer/api/checkDetail/apple/778