<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Telegram-Bot-Test</title>

<style>html,body{  margin:10px;  padding:0px; } h3 {  text-align: center;  font-family: georgia;  color: #727272;  border-bottom: 1px solid #EEE;  padding: 5px;  font-size: x-large;  margin-top: 50px; } form {  margin-left:auto;  margin-right:auto;   margin-top:100px;     max-width: 500px;     background: #F7F7F7;     padding: 25px 15px 25px 10px;     font: 12px Georgia, "Times New Roman", Times, serif;     color: #888;     text-shadow: 1px 1px 1px #FFF;     border:1px solid #E4E4E4; } h1 {     font-size: 25px;     padding: 0px 0px 10px 40px;     display: block;     border-bottom:1px solid #E4E4E4;     margin: -10px -15px 30px -10px;;     color: #888; } h1>span {     display: block;     font-size: 11px; } label {     display: block;     margin: 0px; } label>span {     float: left;     width: 20%;     text-align: right;     padding-right: 10px;     margin-top: 10px;     color: #888; } input[type="text"], input[type="email"], textarea, select {  border: 1px solid #DADADA;  color: #888;  height: 30px;  margin-bottom: 16px;  margin-right: 6px;  margin-top: 2px;  outline: 0 none;  padding: 3px 3px 3px 5px;  width: 70%;  font-size: 12px;  line-height:15px;  box-shadow: inset 0px 1px 4px #ECECEC;  -moz-box-shadow: inset 0px 1px 4px #ECECEC;  -webkit-box-shadow: inset 0px 1px 4px #ECECEC; } textarea{  padding: 5px 3px 3px 5px; } select {     background: #FFF url('down-arrow.png') no-repeat right;     background: #FFF url('down-arrow.png') no-repeat right);     appearance:none;     -webkit-appearance:none;      -moz-appearance: none;     text-indent: 0.01px;     text-overflow: '';     width: 70%;     height: 35px;  line-height: 25px; } textarea{     height:100px; }.button {  background: #E27575;  border: none;  padding: 10px 25px 10px 25px;  color: #FFF;  box-shadow: 1px 1px 5px #B6B6B6;  border-radius: 3px;  text-shadow: 1px 1px 1px #9E3F3F;  cursor: pointer; }.button:hover {     background: #CF7A7A } iframe {     position:fixed;      top:0px;     left:0px;      width: 80%;     height: 100px;     background: #E7E7E7;     padding: 0px;     font: 12px Georgia, "Times New Roman", Times, serif;     color: #888;     text-shadow: 1px 1px 1px #FFF;     border:1px solid #E4E4E4; }
</style>
</head>
<body>

<?php

$BOT_TOKEN = 'Your Bot ID';
$CHAT_ID = 'Yout Chat room number';

?>

<h2>https://core.telegram.org/bots/api#forwardmessage</h2>

<form method="GET" action="https://api.telegram.org/bot<?php echo $BOT_TOKEN;?>/getUpdates" target="response-iframe">

    <h1>getUpdates
        <span></span>
    </h1>

    <label>
        <span>offset</span>
        <input id="offset" type="text" name="offset" />
    </label>

     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="getUpdates" />
    </label>
</form>

<form method="POST" action="https://api.telegram.org/bot<?php echo $BOT_TOKEN;?>/sendMessage" enctype="multipart/form-data" target="response-iframe">

    <h1>sendMessage
        <span></span>
    </h1>
    <label>
        <span>chat_id :</span>
        <input id="chat_id" type="text" name="chat_id" value="<?php echo $CHAT_ID;?>" />
    </label>

    <label>
        <span>text</span>
        <textarea id="text" name="text"></textarea>
    </label>

     <label>
        <span>reply_markup</span>
        <textarea id="reply_markup" name="reply_markup">{"keyboard":[["Yes","No"],["Maybe"],["1","2","3"]],"one_time_keyboard":true}</textarea>
    </label>

     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="sendMessage" />
    </label>
</form>


<form method="POST" action="https://api.telegram.org/bot<?php echo $BOT_TOKEN;?>/sendPhoto" enctype="multipart/form-data" target="response-iframe">

    <h1>sendPhoto
        <span></span>
    </h1>
    <label>
        <span>chat_id :</span>
        <input id="chat_id" type="text" name="chat_id" value="<?php echo $CHAT_ID;?>" />
    </label>

    <label>
        <span>caption :</span>
        <input id="caption" type="text" name="caption"/>
    </label>

    <label>
        <span>photo</span>
        <input id="photo" type="file" name="photo" />
    </label>



     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="sendPhoto" />
    </label>
</form>

<form method="POST" action="https://api.telegram.org/bot<?php echo $BOT_TOKEN;?>/sendDocument" enctype="multipart/form-data" target="response-iframe">

    <h1>sendDocument
        <span></span>
    </h1>
    <label>
        <span>chat_id :</span>
        <input id="chat_id" type="text" name="chat_id" value="<?php echo $CHAT_ID;?>" />
    </label>

    <label>
        <span>caption :</span>
        <input id="caption" type="text" name="caption"/>
    </label>

    <label>
        <span>document</span>
        <input id="document" type="file" name="document" />
    </label>



     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="sendDocument" />
    </label>
</form>

https://core.telegram.org/bots/api#forwardmessage

<iframe name="response-iframe" src=""></iframe>

</body>
</html>
