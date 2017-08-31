<?php
route::get("/", "ThreadsController@home");
route::get("/home",function(){});
route::get("/threads","ThreadsController@index");
route::get("/threads/create","ThreadsController@create");
route::get("threads/{id}","ThreadsController@show");