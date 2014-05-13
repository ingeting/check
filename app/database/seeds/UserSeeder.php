<?php

class UserSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "ingeting",
        "first_name" => "Inge",
        "last_name" => "Thorud",
        "password" => Hash::make("ingeting"),
        "email"    => "inge@check.com"
      ]
    ];

    foreach ($users as $user) {
      User::create($user);
    }
  }
}
