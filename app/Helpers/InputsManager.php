<?php

namespace App\Helpers;
use App\Helpers\Functions;

class InputsManager
{
    public static function getImage($file)
    {
        $tmp = $file["tmp_name"];
        return file_get_contents($tmp);
    }

    public static function userInfo($data, $file)
    {
        $errors = [];
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $errors = ["error" => "invalid"];
                $errors[$key] = $key . " is required.";
            }
        }
        if (empty($file)) {
            $errors['profileImage'] = "Profile image is required.";
        }
        if (empty($errors)) {
            return [
                "username" => $data["username"],
                "password" => $data["password"],
                "email" => $data["email"],
                "profileImage" => InputsManager::getImage($file)
            ];
        } else {
            return $errors;
        }
    }

    public static function playlistInfo($data, $file)
    {

        $errors = [];
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $errors = ["error" => "invalid"];
                $errors[$key] = $key . " is required.";
            }
        }
        if (empty($file)) {
            $errors['profileImage'] = "Profile image is required.";
        }
        if (empty($errors)) {
            return [
                "playlistName" => $data["playlistName"],
                "playlistDescription" => $data["playlistDescription"],
                "userId" => $data["userId"],
                "playlistImage" => InputsManager::getImage($file)
            ];
        } else {
            return $errors;
        }
    }
}