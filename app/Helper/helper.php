<?php

//   footer address

  function address(){

   return \App\Models\Contact::first();
  }

  function social_url(){

    return \App\Models\SocialUrl::first();
  }














?>