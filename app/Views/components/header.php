<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= APP_URL ?>public/assets/css/style.css">
    <title><?= SITE_NAME ?> | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#323437]">
<nav class="text-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex">
            <strong class="">PAROLY</strong>
        </div>
        <div class="nav-links">
            <ul class="nav-list flex gap-4">
                <li class="nav-item hover:bg-[#E2B714] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="users/register" class="nav-link">S'inscrire</a>
                </li>
                <li class="nav-item hover:bg-[#E2B714] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="clients/login" class="nav-link">Se connecter</a>
                </li>
                <li class="">
                    <div class="dropdown">
                        <a onclick="myFunction()" class="dropbtn">
                            <div id=""
                                 class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 cursor-pointer">
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>

                        </a>
                        <div id="myDropdown" class="dropdown-content flex-col gap-4">
                            <a class="hover:bg-[#E2B714] rounded-xl px-2" href="Clients/login">Login as Client</a>
                            <a class="hover:bg-[#E2B714] rounded-xl px-2" href="Admins/login">Become an Artist</a>
                            <a class="hover:bg-[#E2B714] rounded-xl px-2" href="Users/register">Register</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
