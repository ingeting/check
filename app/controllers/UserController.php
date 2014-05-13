<?php

class UserController
  extends Controller
{
  public function login()
  {
    return View::make("users/login");
  }
}
