<?php
?>
<html>

<head><title>Easy Twitch Followers Counter</title></head>
//change client_id and redirect_uri
<body>
<div class="button_cont" align="center"><a class="twitch_a" href="https://id.twitch.tv/oauth2/authorize?response_type=code&client_id=YOUR_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&scope=user_read" target="_blank" rel="nofollow noopener">Login</a></div>
</body>

<style>
  .twitch_a {
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;
    background: #ed3330;
    padding: 20px;
    border-radius: 5px;
    display: inline-block;
    border: none;
    transition: all 0.4s ease 0s;
  }
  .twitch_a:hover {
    background: #434343;
    letter-spacing: 1px;
    -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
    -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
    box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
    transition: all 0.4s ease 0s;
  }

</style>

</html>
