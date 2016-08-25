# Transfer

網址：https://leb-firefly0329.c9users.io/Transfer/api/

==========================================================
新增帳號

api名稱-checkDetail
參數1:(string)account=帳號

==========================================================

取得餘額

api名稱-getBalance
參數1:(string)account=帳號

==========================================================

轉帳

api名稱-updateBalance

參數1:(string)account=帳號
參數2:(string)type=轉出轉入(IN,OUT)
參數3:(int)money=金額
參數4:(int)transid=轉帳序號

==========================================================

轉帳確認

api名稱-checkDetail

參數1:(string)account=帳號
參數2:(int)transid=轉帳序號