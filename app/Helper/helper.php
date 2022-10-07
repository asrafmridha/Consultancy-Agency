<?php

//   footer address

  function address(){

   return \App\Models\Contact::first();
  }

  function social_url(){

    return \App\Models\SocialUrl::first();
  }
  function copy_right(){
    return \App\Models\CopyRight::first();

  }

  function themesetting($user_id){
    return \App\Models\ThemeSetting::where('user_id',$user_id)->first();
  }
















?>