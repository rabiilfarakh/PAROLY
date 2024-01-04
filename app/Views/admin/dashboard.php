<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <style>

   </style>
</head>

<body class="bg-gray-950">

   <nav class="fixed top-0 z-50 w-full bg-black ">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
         <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
               <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                  </svg>
               </button>
               <a href="#" class="flex ms-2 md:me-24">
                  <img src="pictures/logo.png" class="h-11 " />
               </a>
            </div>
            <div class="flex items-center">
               <div class="flex items-center ms-3">
                  <div>
                     <button type="button" class="flex text-sm bg-gray-950 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="pictures/AAA.jpg" alt="user photo">
                     </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                     <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-950 dark:text-white" role="none">
                           Neil Sims
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                           neil.sims@gmail.com
                        </p>
                     </div>
                     <ul class="py-1" role="none">
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                        </li>

                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-300 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-900 dark:border-gray-700" aria-label="Sidebar">
      <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-300 dark:bg-gray-900">
         <ul class="space-y-2 font-medium">
            <li>
               <a href="dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 22 21">
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                  </svg>
                  <span class="ms-3">Dashboard</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                     <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                  </svg>
                  <span class="ms-3">Lyrics</span>
               </a>
            </li>
            <li>
               <a href="calendrier.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 18 18">
                     <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Calendrier</span>
               </a>
            </li>
            <li>
               <a href="reclamations.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                     <path d="M80-560q0-100 44.5-183.5T244-882l47 64q-60 44-95.5 111T160-560H80Zm720 0q0-80-35.5-147T669-818l47-64q75 55 119.5 138.5T880-560h-80ZM160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z" />
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Reclamations</span>
                  <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
               </a>
            </li>
            <li>
               <a href="playlist.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="24">
                     <path d="M640-160q-50 0-85-35t-35-85q0-50 35-85t85-35q11 0 21 1.5t19 6.5v-328h200v80H760v360q0 50-35 85t-85 35ZM120-320v-80h320v80H120Zm0-160v-80h480v80H120Zm0-160v-80h480v80H120Z" />
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Playlist</span>
               </a>
            </li>
            <li>
               <a href="style.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" height="18" width="20" viewBox="0 0 512 512">
                     <path d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z" />
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">styles</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                     <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Sign out</span>
               </a>
            </li>

            </li>
         </ul>
      </div>
   </aside>
   <div class="md:p-5 md:ml-64 md:mt-[12vh] md:bg-gray-950 ">

<div class="flex md:mt-10 mt-30 justify-evenly   md:w-[170vh] w-[100vh]">
   <div class="h-[16vh] pl-5  md:w-[20vw] w-[40vw] flex gap-20 bg-gray-300 rounded-[8px]" style="  filter: drop-shadow(3px 3px 4px gray );">
   <div class="h-11.5 w-11.5    rounded-full bg-meta-2 dark:bg-meta-4">
   <h1 class="font-bold">Artists</h1>
   <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path d="M740-560h140v80h-80v220q0 42-29 71t-71 29q-42 0-71-29t-29-71q0-42 29-71t71-29q8 0 18 1.5t22 6.5v-208ZM120-160v-112q0-35 17.5-63t46.5-43q62-31 126-46.5T440-440q42 0 83.5 6.5T607-414q-20 12-36 29t-28 37q-26-6-51.5-9t-51.5-3q-57 0-112 14t-108 40q-9 5-14.5 14t-5.5 20v32h321q2 20 9.5 40t20.5 40H120Zm320-320q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T520-640q0-33-23.5-56.5T440-720q-33 0-56.5 23.5T360-640q0 33 23.5 56.5T440-560Zm0-80Zm0 400Z"/></svg>
   <path d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z" fill=""></path>  
   </div>
   <h4 class="text-title-md font-bold text-black flex justify-center items-center   dark:text-white"> $3.456K</h4>
   </div>
   <div class="h-[16vh] pl-5  md:w-[20vw] w-[40vw] flex gap-20 bg-gray-300 rounded-[8px]" style="  filter: drop-shadow(3px 3px 4px gray );">
   <div class="h-11.5 w-11.5    rounded-full bg-meta-2 dark:bg-meta-4">
   <h1 class="font-bold">Clients</h1>
   <svg xmlns="http://www.w3.org/2000/svg" height="38" width="40" viewBox="0 0 640 512">
   <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
   </div>
   <h4 class="text-title-md font-bold text-black flex justify-center items-center   dark:text-white"> $3.456K</h4>
   </div>
   <div class="h-[16vh] pl-5  md:w-[20vw] w-[40vw] flex gap-20 bg-gray-300 rounded-[8px]" style="  filter: drop-shadow(3px 3px 4px gray );">
   <div class="h-11.5 w-11.5    rounded-full bg-meta-2 dark:bg-meta-4">
   <h1 class="font-bold">Musics</h1>
   <svg xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 512 512">
      <path d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z"/></svg>
   </div>
   <h4 class="text-title-md font-bold text-black flex justify-center items-center   dark:text-white"> $3.456K</h4>
   </div></div>
<div class="flex justify-evenly my-10  md:w-[170vh] w-[100vh]">
<div class="h-[16vh] pl-5  md:w-[20vw] w-[40vw] flex gap-20 bg-gray-300 rounded-[8px]" style="  filter: drop-shadow(3px 3px 4px gray );">
   <div class="h-11.5 w-11.5    rounded-full bg-meta-2 dark:bg-meta-4">
   <h1 class="font-bold">Lyrics</h1>
   <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512">
                     <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                  </svg>
                  </div>
   <h4 class="text-title-md font-bold text-black flex justify-center items-center   dark:text-white"> $3.456K</h4>
   </div>
   <div class="h-[16vh] pl-5  md:w-[20vw] w-[40vw] flex gap-20 bg-gray-300 rounded-[8px]" style="  filter: drop-shadow(3px 3px 4px gray );">
   <div class="h-11.5 w-11.5    rounded-full bg-meta-2 dark:bg-meta-4">
   <h1 class="font-bold">Albums</h1>
   <svg xmlns="http://www.w3.org/2000/svg" height="38" width="38" viewBox="0 0 512 512">
   <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 32a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm-96-32a96 96 0 1 0 192 0 96 96 0 1 0 -192 0zM96 240c0-35 17.5-71.1 45.2-98.8S205 96 240 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-45.4 0-89.2 22.3-121.5 54.5S64 194.6 64 240c0 8.8 7.2 16 16 16s16-7.2 16-16z"/></svg>
   </div>
   <h4 class="text-title-md font-bold text-black flex justify-center items-center   dark:text-white"> $3.456K</h4>
   </div>
   <div class="h-[16vh] pl-5  md:w-[20vw] w-[40vw] flex gap-20 bg-gray-300 rounded-[8px]" style="  filter: drop-shadow(3px 3px 4px gray );">
   <div class="h-11.5 w-11.5    rounded-full bg-meta-2 dark:bg-meta-4">
   <h1 class="font-bold">Playlists</h1>
   <svg xmlns="http://www.w3.org/2000/svg" height="38" viewBox="0 -960 960 960" width="38">
                     <path d="M640-160q-50 0-85-35t-35-85q0-50 35-85t85-35q11 0 21 1.5t19 6.5v-328h200v80H760v360q0 50-35 85t-85 35ZM120-320v-80h320v80H120Zm0-160v-80h480v80H120Zm0-160v-80h480v80H120Z" />
                  </svg>
   </div>
   <h4 class="text-title-md font-bold text-black flex justify-center items-center   dark:text-white"> $3.456K</h4>
   </div></div>




      <div class="col-span-12 xl:col-span-7 ">
         <div class="md:col-span-12 md:rounded-sm  bg-gray-950 px-5 pt-7.5 pb-5 shadow-default  sm:px-7.5 xl:col-span-8">
            <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
               <div>
                  <h4 class="text-title-sm2 font-bold text-white dark:text-white mt-16">
                  The number of songs and lyrics over time                  </h4>
               </div>

            </div>
            <div>
               <div id="chartSeven" class="-ml-5" style="min-height: 335px;">
                  <div id="apexchartsptjcpxzt" class="bg-gray-950 apexcharts-canvas apexchartsptjcpxzt apexcharts-theme-light" style="width: 896px; height: 320px;"><svg id="SvgjsSvg1739" width="896" height="320" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                        <g id="SvgjsG1741" class="apexcharts-inner apexcharts-graphical" transform="translate(45.63535118103027, 30)">
                           <defs id="SvgjsDefs1740">
                              <clipPath id="gridRectMaskptjcpxzt">
                                 <rect id="SvgjsRect1747" width="835.7833986282349" height="256.49519938278195" x="-3.75" y="-1.75" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                              </clipPath>
                              <clipPath id="forecastMaskptjcpxzt"></clipPath>
                              <clipPath id="nonForecastMaskptjcpxzt"></clipPath>
                              <clipPath id="gridRectMarkerMaskptjcpxzt">
                                 <rect id="SvgjsRect1748" width="832.2833986282349" height="256.99519938278195" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                              </clipPath>
                              <linearGradient id="SvgjsLinearGradient1753" x1="0" y1="0" x2="0" y2="1">
                                 <stop id="SvgjsStop1754" stop-opacity="0.55" stop-color="rgba(60,80,224,0.55)" offset="0"></stop>
                                 <stop id="SvgjsStop1755" stop-opacity="0" stop-color="rgba(158,168,240,0)" offset="1"></stop>
                                 <stop id="SvgjsStop1756" stop-opacity="0" stop-color="rgba(158,168,240,0)" offset="1"></stop>
                              </linearGradient>
                              <linearGradient id="SvgjsLinearGradient1762" x1="0" y1="0" x2="0" y2="1">
                                 <stop id="SvgjsStop1763" stop-opacity="0.55" stop-color="rgba(199,210,226,0.55)" offset="0"></stop>
                                 <stop id="SvgjsStop1764" stop-opacity="0" stop-color="rgba(227,233,241,0)" offset="1"></stop>
                                 <stop id="SvgjsStop1765" stop-opacity="0" stop-color="rgba(227,233,241,0)" offset="1"></stop>
                              </linearGradient>
                           </defs>
                           <line id="SvgjsLine1746" x1="0" y1="0" x2="0" y2="252.99519938278195" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="252.99519938278195" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                           <g id="SvgjsG1780" class="apexcharts-xaxis" transform="translate(0, 0)">
                              <g id="SvgjsG1781" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1783" font-family="Satoshi, sans-serif" x="0" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1784">Sep</tspan>
                                    <title>Sep</title>
                                 </text><text id="SvgjsText1786" font-family="Satoshi, sans-serif" x="75.298490784385" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1787">Oct</tspan>
                                    <title>Oct</title>
                                 </text><text id="SvgjsText1789" font-family="Satoshi, sans-serif" x="150.59698156877" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1790">Nov</tspan>
                                    <title>Nov</title>
                                 </text><text id="SvgjsText1792" font-family="Satoshi, sans-serif" x="225.89547235315496" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1793">Dec</tspan>
                                    <title>Dec</title>
                                 </text><text id="SvgjsText1795" font-family="Satoshi, sans-serif" x="301.1939631375399" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1796">Jan</tspan>
                                    <title>Jan</title>
                                 </text><text id="SvgjsText1798" font-family="Satoshi, sans-serif" x="376.4924539219249" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1799">Feb</tspan>
                                    <title>Feb</title>
                                 </text><text id="SvgjsText1801" font-family="Satoshi, sans-serif" x="451.79094470630986" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1802">Mar</tspan>
                                    <title>Mar</title>
                                 </text><text id="SvgjsText1804" font-family="Satoshi, sans-serif" x="527.0894354906949" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1805">Apr</tspan>
                                    <title>Apr</title>
                                 </text><text id="SvgjsText1807" font-family="Satoshi, sans-serif" x="602.3879262750798" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1808">May</tspan>
                                    <title>May</title>
                                 </text><text id="SvgjsText1810" font-family="Satoshi, sans-serif" x="677.6864170594648" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1811">Jun</tspan>
                                    <title>Jun</title>
                                 </text><text id="SvgjsText1813" font-family="Satoshi, sans-serif" x="752.9849078438498" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1814">Jul</tspan>
                                    <title>Jul</title>
                                 </text><text id="SvgjsText1816" font-family="Satoshi, sans-serif" x="828.2833986282347" y="281.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1817">Aug</tspan>
                                    <title>Aug</title>
                                 </text></g>
                           </g>
                           <g id="SvgjsG1768" class="apexcharts-grid">
                              <g id="SvgjsG1769" class="apexcharts-gridlines-horizontal">
                                 <line id="SvgjsLine1773" x1="0" y1="50.59903987655639" x2="828.2833986282349" y2="50.59903987655639" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1774" x1="0" y1="101.19807975311278" x2="828.2833986282349" y2="101.19807975311278" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1775" x1="0" y1="151.79711962966917" x2="828.2833986282349" y2="151.79711962966917" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1776" x1="0" y1="202.39615950622556" x2="828.2833986282349" y2="202.39615950622556" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              </g>
                              <g id="SvgjsG1770" class="apexcharts-gridlines-vertical"></g>
                              <line id="SvgjsLine1779" x1="0" y1="252.99519938278195" x2="828.2833986282349" y2="252.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                              <line id="SvgjsLine1778" x1="0" y1="1" x2="0" y2="252.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                           </g>
                           <g id="SvgjsG1749" class="apexcharts-area-series apexcharts-plot-series">
                              <g id="SvgjsG1750" class="apexcharts-series" seriesName="ReceivedxAmount" data:longestSeries="true" rel="1" data:realIndex="0">
                                 <path id="SvgjsPath1757" d="M 0 252.99519938278195 L 0 252.99519938278195C 26.35447177453474 252.99519938278195 48.94401900985024 202.39615950622556 75.29849078438498 202.39615950622556C 101.65296255891973 202.39615950622556 124.24250979423522 164.44687959880827 150.59698156876996 164.44687959880827C 176.9514533433047 164.44687959880827 199.5410005786202 139.14735966053007 225.89547235315496 139.14735966053007C 252.2499441276897 139.14735966053007 274.8394913630052 164.44687959880827 301.1939631375399 164.44687959880827C 327.5484349120747 164.44687959880827 350.1379821473902 113.84783972225188 376.49245392192495 113.84783972225188C 402.84692569645966 113.84783972225188 425.4364729317752 88.54831978397368 451.7909447063099 88.54831978397368C 478.14541648084463 88.54831978397368 500.73496371616017 126.49759969139097 527.0894354906949 126.49759969139097C 553.4439072652297 126.49759969139097 576.0334545005451 88.54831978397368 602.3879262750798 88.54831978397368C 628.7423980496146 88.54831978397368 651.33194528493 63.24879984569549 677.6864170594648 63.24879984569549C 704.0408888339996 63.24879984569549 726.6304360693151 101.19807975311278 752.9849078438499 101.19807975311278C 779.3393796183847 101.19807975311278 801.9289268537001 63.24879984569549 828.2833986282349 63.24879984569549C 828.2833986282349 63.24879984569549 828.2833986282349 63.24879984569549 828.2833986282349 252.99519938278195M 828.2833986282349 63.24879984569549z" fill="url(#SvgjsLinearGradient1753)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskptjcpxzt)" pathTo="M 0 252.99519938278195 L 0 252.99519938278195C 26.35447177453474 252.99519938278195 48.94401900985024 202.39615950622556 75.29849078438498 202.39615950622556C 101.65296255891973 202.39615950622556 124.24250979423522 164.44687959880827 150.59698156876996 164.44687959880827C 176.9514533433047 164.44687959880827 199.5410005786202 139.14735966053007 225.89547235315496 139.14735966053007C 252.2499441276897 139.14735966053007 274.8394913630052 164.44687959880827 301.1939631375399 164.44687959880827C 327.5484349120747 164.44687959880827 350.1379821473902 113.84783972225188 376.49245392192495 113.84783972225188C 402.84692569645966 113.84783972225188 425.4364729317752 88.54831978397368 451.7909447063099 88.54831978397368C 478.14541648084463 88.54831978397368 500.73496371616017 126.49759969139097 527.0894354906949 126.49759969139097C 553.4439072652297 126.49759969139097 576.0334545005451 88.54831978397368 602.3879262750798 88.54831978397368C 628.7423980496146 88.54831978397368 651.33194528493 63.24879984569549 677.6864170594648 63.24879984569549C 704.0408888339996 63.24879984569549 726.6304360693151 101.19807975311278 752.9849078438499 101.19807975311278C 779.3393796183847 101.19807975311278 801.9289268537001 63.24879984569549 828.2833986282349 63.24879984569549C 828.2833986282349 63.24879984569549 828.2833986282349 63.24879984569549 828.2833986282349 252.99519938278195M 828.2833986282349 63.24879984569549z" pathFrom="M -1 252.99519938278195 L -1 252.99519938278195 L 75.29849078438498 252.99519938278195 L 150.59698156876996 252.99519938278195 L 225.89547235315496 252.99519938278195 L 301.1939631375399 252.99519938278195 L 376.49245392192495 252.99519938278195 L 451.7909447063099 252.99519938278195 L 527.0894354906949 252.99519938278195 L 602.3879262750798 252.99519938278195 L 677.6864170594648 252.99519938278195 L 752.9849078438499 252.99519938278195 L 828.2833986282349 252.99519938278195"></path>
                                 <path id="SvgjsPath1758" d="M 0 252.99519938278195C 26.35447177453474 252.99519938278195 48.94401900985024 202.39615950622556 75.29849078438498 202.39615950622556C 101.65296255891973 202.39615950622556 124.24250979423522 164.44687959880827 150.59698156876996 164.44687959880827C 176.9514533433047 164.44687959880827 199.5410005786202 139.14735966053007 225.89547235315496 139.14735966053007C 252.2499441276897 139.14735966053007 274.8394913630052 164.44687959880827 301.1939631375399 164.44687959880827C 327.5484349120747 164.44687959880827 350.1379821473902 113.84783972225188 376.49245392192495 113.84783972225188C 402.84692569645966 113.84783972225188 425.4364729317752 88.54831978397368 451.7909447063099 88.54831978397368C 478.14541648084463 88.54831978397368 500.73496371616017 126.49759969139097 527.0894354906949 126.49759969139097C 553.4439072652297 126.49759969139097 576.0334545005451 88.54831978397368 602.3879262750798 88.54831978397368C 628.7423980496146 88.54831978397368 651.33194528493 63.24879984569549 677.6864170594648 63.24879984569549C 704.0408888339996 63.24879984569549 726.6304360693151 101.19807975311278 752.9849078438499 101.19807975311278C 779.3393796183847 101.19807975311278 801.9289268537001 63.24879984569549 828.2833986282349 63.24879984569549" fill="none" fill-opacity="1" stroke="orange" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskptjcpxzt)" pathTo="M 0 252.99519938278195C 26.35447177453474 252.99519938278195 48.94401900985024 202.39615950622556 75.29849078438498 202.39615950622556C 101.65296255891973 202.39615950622556 124.24250979423522 164.44687959880827 150.59698156876996 164.44687959880827C 176.9514533433047 164.44687959880827 199.5410005786202 139.14735966053007 225.89547235315496 139.14735966053007C 252.2499441276897 139.14735966053007 274.8394913630052 164.44687959880827 301.1939631375399 164.44687959880827C 327.5484349120747 164.44687959880827 350.1379821473902 113.84783972225188 376.49245392192495 113.84783972225188C 402.84692569645966 113.84783972225188 425.4364729317752 88.54831978397368 451.7909447063099 88.54831978397368C 478.14541648084463 88.54831978397368 500.73496371616017 126.49759969139097 527.0894354906949 126.49759969139097C 553.4439072652297 126.49759969139097 576.0334545005451 88.54831978397368 602.3879262750798 88.54831978397368C 628.7423980496146 88.54831978397368 651.33194528493 63.24879984569549 677.6864170594648 63.24879984569549C 704.0408888339996 63.24879984569549 726.6304360693151 101.19807975311278 752.9849078438499 101.19807975311278C 779.3393796183847 101.19807975311278 801.9289268537001 63.24879984569549 828.2833986282349 63.24879984569549" pathFrom="M -1 252.99519938278195 L -1 252.99519938278195 L 75.29849078438498 252.99519938278195 L 150.59698156876996 252.99519938278195 L 225.89547235315496 252.99519938278195 L 301.1939631375399 252.99519938278195 L 376.49245392192495 252.99519938278195 L 451.7909447063099 252.99519938278195 L 527.0894354906949 252.99519938278195 L 602.3879262750798 252.99519938278195 L 677.6864170594648 252.99519938278195 L 752.9849078438499 252.99519938278195 L 828.2833986282349 252.99519938278195" fill-rule="evenodd"></path>
                                 <g id="SvgjsG1751" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                    <g class="apexcharts-series-markers">
                                       <circle id="SvgjsCircle1843" r="0" cx="0" cy="0" class="apexcharts-marker wwxysz0bf no-pointer-events" stroke="#ffffff" fill="#3c50e0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                 </g>
                              </g>
                              <g id="SvgjsG1759" class="apexcharts-series" seriesName="DuexAmount" data:longestSeries="true" rel="2" data:realIndex="1">
                                 <path id="SvgjsPath1766" d="M 0 252.99519938278195 L 0 215.04591947536466C 26.35447177453474 215.04591947536466 48.94401900985024 230.22563143833156 75.29849078438498 230.22563143833156C 101.65296255891973 230.22563143833156 124.24250979423522 209.986015487709 150.59698156876996 209.986015487709C 176.9514533433047 209.986015487709 199.5410005786202 172.03673558029175 225.89547235315496 172.03673558029175C 252.2499441276897 172.03673558029175 274.8394913630052 189.74639953708646 301.1939631375399 189.74639953708646C 327.5484349120747 189.74639953708646 350.1379821473902 80.95846380249023 376.49245392192495 80.95846380249023C 402.84692569645966 80.95846380249023 425.4364729317752 50.59903987655639 451.7909447063099 50.59903987655639C 478.14541648084463 50.59903987655639 500.73496371616017 80.95846380249023 527.0894354906949 80.95846380249023C 553.4439072652297 80.95846380249023 576.0334545005451 40.47923190124513 602.3879262750798 40.47923190124513C 628.7423980496146 40.47923190124513 651.33194528493 15.179711962966934 677.6864170594648 15.179711962966934C 704.0408888339996 15.179711962966934 726.6304360693151 65.77875183952332 752.9849078438499 65.77875183952332C 779.3393796183847 65.77875183952332 801.9289268537001 96.13817576545713 828.2833986282349 96.13817576545713C 828.2833986282349 96.13817576545713 828.2833986282349 96.13817576545713 828.2833986282349 252.99519938278195M 828.2833986282349 96.13817576545713z" fill="url(#SvgjsLinearGradient1762)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskptjcpxzt)" pathTo="M 0 252.99519938278195 L 0 215.04591947536466C 26.35447177453474 215.04591947536466 48.94401900985024 230.22563143833156 75.29849078438498 230.22563143833156C 101.65296255891973 230.22563143833156 124.24250979423522 209.986015487709 150.59698156876996 209.986015487709C 176.9514533433047 209.986015487709 199.5410005786202 172.03673558029175 225.89547235315496 172.03673558029175C 252.2499441276897 172.03673558029175 274.8394913630052 189.74639953708646 301.1939631375399 189.74639953708646C 327.5484349120747 189.74639953708646 350.1379821473902 80.95846380249023 376.49245392192495 80.95846380249023C 402.84692569645966 80.95846380249023 425.4364729317752 50.59903987655639 451.7909447063099 50.59903987655639C 478.14541648084463 50.59903987655639 500.73496371616017 80.95846380249023 527.0894354906949 80.95846380249023C 553.4439072652297 80.95846380249023 576.0334545005451 40.47923190124513 602.3879262750798 40.47923190124513C 628.7423980496146 40.47923190124513 651.33194528493 15.179711962966934 677.6864170594648 15.179711962966934C 704.0408888339996 15.179711962966934 726.6304360693151 65.77875183952332 752.9849078438499 65.77875183952332C 779.3393796183847 65.77875183952332 801.9289268537001 96.13817576545713 828.2833986282349 96.13817576545713C 828.2833986282349 96.13817576545713 828.2833986282349 96.13817576545713 828.2833986282349 252.99519938278195M 828.2833986282349 96.13817576545713z" pathFrom="M -1 252.99519938278195 L -1 252.99519938278195 L 75.29849078438498 252.99519938278195 L 150.59698156876996 252.99519938278195 L 225.89547235315496 252.99519938278195 L 301.1939631375399 252.99519938278195 L 376.49245392192495 252.99519938278195 L 451.7909447063099 252.99519938278195 L 527.0894354906949 252.99519938278195 L 602.3879262750798 252.99519938278195 L 677.6864170594648 252.99519938278195 L 752.9849078438499 252.99519938278195 L 828.2833986282349 252.99519938278195"></path>
                                 <path id="SvgjsPath1767" d="M 0 215.04591947536466C 26.35447177453474 215.04591947536466 48.94401900985024 230.22563143833156 75.29849078438498 230.22563143833156C 101.65296255891973 230.22563143833156 124.24250979423522 209.986015487709 150.59698156876996 209.986015487709C 176.9514533433047 209.986015487709 199.5410005786202 172.03673558029175 225.89547235315496 172.03673558029175C 252.2499441276897 172.03673558029175 274.8394913630052 189.74639953708646 301.1939631375399 189.74639953708646C 327.5484349120747 189.74639953708646 350.1379821473902 80.95846380249023 376.49245392192495 80.95846380249023C 402.84692569645966 80.95846380249023 425.4364729317752 50.59903987655639 451.7909447063099 50.59903987655639C 478.14541648084463 50.59903987655639 500.73496371616017 80.95846380249023 527.0894354906949 80.95846380249023C 553.4439072652297 80.95846380249023 576.0334545005451 40.47923190124513 602.3879262750798 40.47923190124513C 628.7423980496146 40.47923190124513 651.33194528493 15.179711962966934 677.6864170594648 15.179711962966934C 704.0408888339996 15.179711962966934 726.6304360693151 65.77875183952332 752.9849078438499 65.77875183952332C 779.3393796183847 65.77875183952332 801.9289268537001 96.13817576545713 828.2833986282349 96.13817576545713" fill="none" fill-opacity="1" stroke="#c7d2e2" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.5" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskptjcpxzt)" pathTo="M 0 215.04591947536466C 26.35447177453474 215.04591947536466 48.94401900985024 230.22563143833156 75.29849078438498 230.22563143833156C 101.65296255891973 230.22563143833156 124.24250979423522 209.986015487709 150.59698156876996 209.986015487709C 176.9514533433047 209.986015487709 199.5410005786202 172.03673558029175 225.89547235315496 172.03673558029175C 252.2499441276897 172.03673558029175 274.8394913630052 189.74639953708646 301.1939631375399 189.74639953708646C 327.5484349120747 189.74639953708646 350.1379821473902 80.95846380249023 376.49245392192495 80.95846380249023C 402.84692569645966 80.95846380249023 425.4364729317752 50.59903987655639 451.7909447063099 50.59903987655639C 478.14541648084463 50.59903987655639 500.73496371616017 80.95846380249023 527.0894354906949 80.95846380249023C 553.4439072652297 80.95846380249023 576.0334545005451 40.47923190124513 602.3879262750798 40.47923190124513C 628.7423980496146 40.47923190124513 651.33194528493 15.179711962966934 677.6864170594648 15.179711962966934C 704.0408888339996 15.179711962966934 726.6304360693151 65.77875183952332 752.9849078438499 65.77875183952332C 779.3393796183847 65.77875183952332 801.9289268537001 96.13817576545713 828.2833986282349 96.13817576545713" pathFrom="M -1 252.99519938278195 L -1 252.99519938278195 L 75.29849078438498 252.99519938278195 L 150.59698156876996 252.99519938278195 L 225.89547235315496 252.99519938278195 L 301.1939631375399 252.99519938278195 L 376.49245392192495 252.99519938278195 L 451.7909447063099 252.99519938278195 L 527.0894354906949 252.99519938278195 L 602.3879262750798 252.99519938278195 L 677.6864170594648 252.99519938278195 L 752.9849078438499 252.99519938278195 L 828.2833986282349 252.99519938278195" fill-rule="evenodd"></path>
                                 <g id="SvgjsG1760" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                    <g class="apexcharts-series-markers">
                                       <circle id="SvgjsCircle1844" r="0" cx="0" cy="0" class="apexcharts-marker wrssohgwkg no-pointer-events" stroke="#ffffff" fill="#c7d2e2" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                 </g>
                              </g>
                              <g id="SvgjsG1752" class="apexcharts-datalabels" data:realIndex="0"></g>
                              <g id="SvgjsG1761" class="apexcharts-datalabels" data:realIndex="1"></g>
                           </g>
                           <g id="SvgjsG1771" class="apexcharts-grid-borders">
                              <line id="SvgjsLine1772" x1="0" y1="0" x2="828.2833986282349" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine1777" x1="0" y1="252.99519938278195" x2="828.2833986282349" y2="252.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                           </g>
                           <line id="SvgjsLine1838" x1="0" y1="0" x2="828.2833986282349" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                           <line id="SvgjsLine1839" x1="0" y1="0" x2="828.2833986282349" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                           <g id="SvgjsG1840" class="apexcharts-yaxis-annotations"></g>
                           <g id="SvgjsG1841" class="apexcharts-xaxis-annotations"></g>
                           <g id="SvgjsG1842" class="apexcharts-point-annotations"></g>
                           <rect id="SvgjsRect1845" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                           <rect id="SvgjsRect1846" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                        </g>
                        <rect id="SvgjsRect1745" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG1818" class="apexcharts-yaxis" rel="0" transform="translate(15.635351181030273, 0)">
                           <g id="SvgjsG1819" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1821" font-family="Satoshi, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                 <tspan id="SvgjsTspan1822">100</tspan>
                                 <title>100</title>
                              </text><text id="SvgjsText1824" font-family="Satoshi, sans-serif" x="20" y="82.09903987655639" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                 <tspan id="SvgjsTspan1825">80</tspan>
                                 <title>80</title>
                              </text><text id="SvgjsText1827" font-family="Satoshi, sans-serif" x="20" y="132.69807975311278" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                 <tspan id="SvgjsTspan1828">60</tspan>
                                 <title>60</title>
                              </text><text id="SvgjsText1830" font-family="Satoshi, sans-serif" x="20" y="183.29711962966917" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                 <tspan id="SvgjsTspan1831">40</tspan>
                                 <title>40</title>
                              </text><text id="SvgjsText1833" font-family="Satoshi, sans-serif" x="20" y="233.89615950622556" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                 <tspan id="SvgjsTspan1834">20</tspan>
                                 <title>20</title>
                              </text><text id="SvgjsText1836" font-family="Satoshi, sans-serif" x="20" y="284.49519938278195" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                 <tspan id="SvgjsTspan1837">0</tspan>
                                 <title>0</title>
                              </text></g>
                        </g>
                        <g id="SvgjsG1742" class="apexcharts-annotations"></g>
                     </svg>
                     <div class="apexcharts-legend" style="max-height: 160px;"></div>
                     <div class="apexcharts-tooltip apexcharts-theme-light">
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(60, 80, 224);"></span>
                           <div class="apexcharts-tooltip-text" style="font-family: Satoshi, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                           </div>
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(199, 210, 226);"></span>
                           <div class="apexcharts-tooltip-text" style="font-family: Satoshi, sans-serif; font-size: 12px;">
                              <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                              <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                              <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                        <div class="apexcharts-xaxistooltip-text" style="font-family: Satoshi, sans-serif; font-size: 12px;"></div>
                     </div>
                     <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                     </div>
                  </div>
               </div>
            </div>


            <div class="flex flex-col gap-4">
               <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2">
                     <span class="block h-4 w-4 bg-gray-100 rounded-full "></span>
                     <span class="font-medium text-white dark:text-white">Musics</span>
                  </div>

               </div>

               <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2 ">
                     <span class="block h-4 w-4 bg-orange-400 rounded-full  "></span>
                     <span class="font-medium text-white dark:text-white">Lyrics</span>
                  </div>

               </div>


            </div>
         </div>

      </div>
      <section class="flex md:justify-around justify-between gap-40 md:gap-0 md:mt-16 ml-10">
         <div class="col-span-12 xl:col-span-5 bg-gray-950 ">
            <div class="rounded-sm  bg-gray-950 shadow-default  dark:bg-boxdark">
               <div class="flex flex-col  gap-2 border-b border-stroke py-5 px-6 dark:border-strokedark sm:flex-row sm:justify-between">
                  <div>
                     <h2 class="text-title-md2 font-bold text-white dark:text-white">
                        Rate comparision (client & artist) by days
                     </h2>
                  </div>

               </div>

               <div class="px-6 pt-4">
                  <div id="chartNine" class="-ml-5" style="min-height: 265px;">
                     <div id="apexchartsbd7rhluk" class="apexcharts-canvas apexchartsbd7rhluk apexcharts-theme-light" style="width: 350px; height: 250px;"><svg id="SvgjsSvg1474" width="350" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                           <g id="SvgjsG1476" class="apexcharts-inner apexcharts-graphical" transform="translate(45.63535118103027, 30)">
                              <defs id="SvgjsDefs1475">
                                 <linearGradient id="SvgjsLinearGradient1480" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1481" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                    <stop id="SvgjsStop1482" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop1483" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                 </linearGradient>
                                 <clipPath id="gridRectMaskbd7rhluk">
                                    <rect id="SvgjsRect1485" width="302.3646488189697" height="186.99519938278198" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                 </clipPath>
                                 <clipPath id="forecastMaskbd7rhluk"></clipPath>
                                 <clipPath id="nonForecastMaskbd7rhluk"></clipPath>
                                 <clipPath id="gridRectMarkerMaskbd7rhluk">
                                    <rect id="SvgjsRect1486" width="298.3646488189697" height="186.99519938278198" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                 </clipPath>
                              </defs>
                              <rect id="SvgjsRect1484" width="7.3591162204742435" height="182.99519938278198" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1480)" class="apexcharts-xcrosshairs" y2="182.99519938278198" filter="none" fill-opacity="0.9"></rect>
                              <g id="SvgjsG1533" class="apexcharts-xaxis" transform="translate(0, 0)">
                                 <g id="SvgjsG1534" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1536" font-family="Satoshi, sans-serif" x="21.026046344212123" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1537">M</tspan>
                                       <title>M</title>
                                    </text><text id="SvgjsText1539" font-family="Satoshi, sans-serif" x="63.07813903263637" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1540">T</tspan>
                                       <title>T</title>
                                    </text><text id="SvgjsText1542" font-family="Satoshi, sans-serif" x="105.13023172106062" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1543">W</tspan>
                                       <title>W</title>
                                    </text><text id="SvgjsText1545" font-family="Satoshi, sans-serif" x="147.18232440948486" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1546">T</tspan>
                                       <title>T</title>
                                    </text><text id="SvgjsText1548" font-family="Satoshi, sans-serif" x="189.2344170979091" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1549">F</tspan>
                                       <title>F</title>
                                    </text><text id="SvgjsText1551" font-family="Satoshi, sans-serif" x="231.28650978633334" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1552">S</tspan>
                                       <title>S</title>
                                    </text><text id="SvgjsText1554" font-family="Satoshi, sans-serif" x="273.3386024747576" y="211.99519938278198" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Satoshi, sans-serif;">
                                       <tspan id="SvgjsTspan1555">S</tspan>
                                       <title>S</title>
                                    </text></g>
                              </g>
                              <g id="SvgjsG1522" class="apexcharts-grid">
                                 <g id="SvgjsG1523" class="apexcharts-gridlines-horizontal">
                                    <line id="SvgjsLine1527" x1="0" y1="45.748799845695494" x2="294.3646488189697" y2="45.748799845695494" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1528" x1="0" y1="91.49759969139099" x2="294.3646488189697" y2="91.49759969139099" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1529" x1="0" y1="137.2463995370865" x2="294.3646488189697" y2="137.2463995370865" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                 </g>
                                 <g id="SvgjsG1524" class="apexcharts-gridlines-vertical"></g>
                                 <line id="SvgjsLine1532" x1="0" y1="182.99519938278198" x2="294.3646488189697" y2="182.99519938278198" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                 <line id="SvgjsLine1531" x1="0" y1="1" x2="0" y2="182.99519938278198" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                              </g>
                              <g id="SvgjsG1487" class="apexcharts-bar-series apexcharts-plot-series">
                                 <g id="SvgjsG1488" class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                    <path id="SvgjsPath1492" d="M 13.66693012373788 182.99619938278198 L 13.66693012373788 60.38941579631804 L 17.026046344212123 60.38941579631804 L 17.026046344212123 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 13.66693012373788 182.99619938278198 L 13.66693012373788 60.38941579631804 L 17.026046344212123 60.38941579631804 L 17.026046344212123 182.99619938278198 Z" pathFrom="M 13.66693012373788 182.99619938278198 L 13.66693012373788 182.99619938278198 L 17.026046344212123 182.99619938278198 L 17.026046344212123 182.99619938278198 L 17.026046344212123 182.99619938278198 L 17.026046344212123 182.99619938278198 L 17.026046344212123 182.99619938278198 L 13.66693012373788 182.99619938278198 Z" cy="60.38841579631804" cx="53.71902281216212" j="0" val="268" barHeight="122.60678358646393" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1494" d="M 55.71902281216212 182.99619938278198 L 55.71902281216212 6.863319976854309 L 59.078139032636365 6.863319976854309 L 59.078139032636365 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 55.71902281216212 182.99619938278198 L 55.71902281216212 6.863319976854309 L 59.078139032636365 6.863319976854309 L 59.078139032636365 182.99619938278198 Z" pathFrom="M 55.71902281216212 182.99619938278198 L 55.71902281216212 182.99619938278198 L 59.078139032636365 182.99619938278198 L 59.078139032636365 182.99619938278198 L 59.078139032636365 182.99619938278198 L 59.078139032636365 182.99619938278198 L 59.078139032636365 182.99619938278198 L 55.71902281216212 182.99619938278198 Z" cy="6.862319976854309" cx="95.77111550058638" j="1" val="385" barHeight="176.13287940592767" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1496" d="M 97.77111550058638 182.99619938278198 L 97.77111550058638 91.04111169293402 L 101.13023172106062 91.04111169293402 L 101.13023172106062 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 97.77111550058638 182.99619938278198 L 97.77111550058638 91.04111169293402 L 101.13023172106062 91.04111169293402 L 101.13023172106062 182.99619938278198 Z" pathFrom="M 97.77111550058638 182.99619938278198 L 97.77111550058638 182.99619938278198 L 101.13023172106062 182.99619938278198 L 101.13023172106062 182.99619938278198 L 101.13023172106062 182.99619938278198 L 101.13023172106062 182.99619938278198 L 101.13023172106062 182.99619938278198 L 97.77111550058638 182.99619938278198 Z" cy="91.04011169293402" cx="137.82320818901061" j="2" val="201" barHeight="91.95508768984796" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1498" d="M 139.82320818901061 182.99619938278198 L 139.82320818901061 46.664775842609394 L 143.18232440948486 46.664775842609394 L 143.18232440948486 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 139.82320818901061 182.99619938278198 L 139.82320818901061 46.664775842609394 L 143.18232440948486 46.664775842609394 L 143.18232440948486 182.99619938278198 Z" pathFrom="M 139.82320818901061 182.99619938278198 L 139.82320818901061 182.99619938278198 L 143.18232440948486 182.99619938278198 L 143.18232440948486 182.99619938278198 L 143.18232440948486 182.99619938278198 L 143.18232440948486 182.99619938278198 L 143.18232440948486 182.99619938278198 L 139.82320818901061 182.99619938278198 Z" cy="46.6637758426094" cx="179.87530087743485" j="3" val="298" barHeight="136.33142354017258" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1500" d="M 181.87530087743485 182.99619938278198 L 181.87530087743485 97.4459436713314 L 185.2344170979091 97.4459436713314 L 185.2344170979091 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 181.87530087743485 182.99619938278198 L 181.87530087743485 97.4459436713314 L 185.2344170979091 97.4459436713314 L 185.2344170979091 182.99619938278198 Z" pathFrom="M 181.87530087743485 182.99619938278198 L 181.87530087743485 182.99619938278198 L 185.2344170979091 182.99619938278198 L 185.2344170979091 182.99619938278198 L 185.2344170979091 182.99619938278198 L 185.2344170979091 182.99619938278198 L 185.2344170979091 182.99619938278198 L 181.87530087743485 182.99619938278198 Z" cy="97.4449436713314" cx="221.9273935658591" j="4" val="187" barHeight="85.55025571145057" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1502" d="M 223.9273935658591 182.99619938278198 L 223.9273935658591 93.78603968367575 L 227.28650978633334 93.78603968367575 L 227.28650978633334 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 223.9273935658591 182.99619938278198 L 223.9273935658591 93.78603968367575 L 227.28650978633334 93.78603968367575 L 227.28650978633334 182.99619938278198 Z" pathFrom="M 223.9273935658591 182.99619938278198 L 223.9273935658591 182.99619938278198 L 227.28650978633334 182.99619938278198 L 227.28650978633334 182.99619938278198 L 227.28650978633334 182.99619938278198 L 227.28650978633334 182.99619938278198 L 227.28650978633334 182.99619938278198 L 223.9273935658591 182.99619938278198 Z" cy="93.78503968367575" cx="263.97948625428336" j="5" val="195" barHeight="89.21015969910623" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1504" d="M 265.97948625428336 182.99619938278198 L 265.97948625428336 49.867191831808064 L 269.3386024747576 49.867191831808064 L 269.3386024747576 182.99619938278198 Z" fill="orange" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 265.97948625428336 182.99619938278198 L 265.97948625428336 49.867191831808064 L 269.3386024747576 49.867191831808064 L 269.3386024747576 182.99619938278198 Z" pathFrom="M 265.97948625428336 182.99619938278198 L 265.97948625428336 182.99619938278198 L 269.3386024747576 182.99619938278198 L 269.3386024747576 182.99619938278198 L 269.3386024747576 182.99619938278198 L 269.3386024747576 182.99619938278198 L 269.3386024747576 182.99619938278198 L 265.97948625428336 182.99619938278198 Z" cy="49.86619183180807" cx="306.0315789427076" j="6" val="291" barHeight="133.1290075509739" barWidth="7.3591162204742435"></path>
                                    <g id="SvgjsG1490" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                       <g id="SvgjsG1491" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1493" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1495" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1497" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1499" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1501" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1503" className="apexcharts-bar-goals-groups"></g>
                                    </g>
                                 </g>
                                 <g id="SvgjsG1505" class="apexcharts-series" rel="2" seriesName="series-2" data:realIndex="1">
                                    <path id="SvgjsPath1509" d="M 21.026046344212123 182.99619938278198 L 21.026046344212123 25.162839915132505 L 24.385162564686368 25.162839915132505 L 24.385162564686368 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 21.026046344212123 182.99619938278198 L 21.026046344212123 25.162839915132505 L 24.385162564686368 25.162839915132505 L 24.385162564686368 182.99619938278198 Z" pathFrom="M 21.026046344212123 182.99619938278198 L 21.026046344212123 182.99619938278198 L 24.385162564686368 182.99619938278198 L 24.385162564686368 182.99619938278198 L 24.385162564686368 182.99619938278198 L 24.385162564686368 182.99619938278198 L 24.385162564686368 182.99619938278198 L 21.026046344212123 182.99619938278198 Z" cy="25.161839915132504" cx="61.078139032636365" j="0" val="345" barHeight="157.83335946764947" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1511" d="M 63.078139032636365 182.99619938278198 L 63.078139032636365 109.79811962966919 L 66.4372552531106 109.79811962966919 L 66.4372552531106 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 63.078139032636365 182.99619938278198 L 63.078139032636365 109.79811962966919 L 66.4372552531106 109.79811962966919 L 66.4372552531106 182.99619938278198 Z" pathFrom="M 63.078139032636365 182.99619938278198 L 63.078139032636365 182.99619938278198 L 66.4372552531106 182.99619938278198 L 66.4372552531106 182.99619938278198 L 66.4372552531106 182.99619938278198 L 66.4372552531106 182.99619938278198 L 66.4372552531106 182.99619938278198 L 63.078139032636365 182.99619938278198 Z" cy="109.79711962966918" cx="103.13023172106062" j="1" val="160" barHeight="73.1980797531128" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1513" d="M 105.13023172106062 182.99619938278198 L 105.13023172106062 49.867191831808064 L 108.48934794153487 49.867191831808064 L 108.48934794153487 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 105.13023172106062 182.99619938278198 L 105.13023172106062 49.867191831808064 L 108.48934794153487 49.867191831808064 L 108.48934794153487 182.99619938278198 Z" pathFrom="M 105.13023172106062 182.99619938278198 L 105.13023172106062 182.99619938278198 L 108.48934794153487 182.99619938278198 L 108.48934794153487 182.99619938278198 L 108.48934794153487 182.99619938278198 L 108.48934794153487 182.99619938278198 L 108.48934794153487 182.99619938278198 L 105.13023172106062 182.99619938278198 Z" cy="49.86619183180807" cx="145.18232440948486" j="2" val="291" barHeight="133.1290075509739" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1515" d="M 147.18232440948486 182.99619938278198 L 147.18232440948486 97.4459436713314 L 150.5414406299591 97.4459436713314 L 150.5414406299591 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 147.18232440948486 182.99619938278198 L 147.18232440948486 97.4459436713314 L 150.5414406299591 97.4459436713314 L 150.5414406299591 182.99619938278198 Z" pathFrom="M 147.18232440948486 182.99619938278198 L 147.18232440948486 182.99619938278198 L 150.5414406299591 182.99619938278198 L 150.5414406299591 182.99619938278198 L 150.5414406299591 182.99619938278198 L 150.5414406299591 182.99619938278198 L 150.5414406299591 182.99619938278198 L 147.18232440948486 182.99619938278198 Z" cy="97.4449436713314" cx="187.2344170979091" j="3" val="187" barHeight="85.55025571145057" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1517" d="M 189.2344170979091 182.99619938278198 L 189.2344170979091 93.78603968367575 L 192.59353331838335 93.78603968367575 L 192.59353331838335 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 189.2344170979091 182.99619938278198 L 189.2344170979091 93.78603968367575 L 192.59353331838335 93.78603968367575 L 192.59353331838335 182.99619938278198 Z" pathFrom="M 189.2344170979091 182.99619938278198 L 189.2344170979091 182.99619938278198 L 192.59353331838335 182.99619938278198 L 192.59353331838335 182.99619938278198 L 192.59353331838335 182.99619938278198 L 192.59353331838335 182.99619938278198 L 192.59353331838335 182.99619938278198 L 189.2344170979091 182.99619938278198 Z" cy="93.78503968367575" cx="229.28650978633334" j="4" val="195" barHeight="89.21015969910623" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1519" d="M 231.28650978633334 182.99619938278198 L 231.28650978633334 46.664775842609394 L 234.6456260068076 46.664775842609394 L 234.6456260068076 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 231.28650978633334 182.99619938278198 L 231.28650978633334 46.664775842609394 L 234.6456260068076 46.664775842609394 L 234.6456260068076 182.99619938278198 Z" pathFrom="M 231.28650978633334 182.99619938278198 L 231.28650978633334 182.99619938278198 L 234.6456260068076 182.99619938278198 L 234.6456260068076 182.99619938278198 L 234.6456260068076 182.99619938278198 L 234.6456260068076 182.99619938278198 L 234.6456260068076 182.99619938278198 L 231.28650978633334 182.99619938278198 Z" cy="46.6637758426094" cx="271.3386024747576" j="5" val="298" barHeight="136.33142354017258" barWidth="7.3591162204742435"></path>
                                    <path id="SvgjsPath1521" d="M 273.3386024747576 182.99619938278198 L 273.3386024747576 91.04111169293402 L 276.6977186952318 91.04111169293402 L 276.6977186952318 182.99619938278198 Z" fill="gray" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskbd7rhluk)" pathTo="M 273.3386024747576 182.99619938278198 L 273.3386024747576 91.04111169293402 L 276.6977186952318 91.04111169293402 L 276.6977186952318 182.99619938278198 Z" pathFrom="M 273.3386024747576 182.99619938278198 L 273.3386024747576 182.99619938278198 L 276.6977186952318 182.99619938278198 L 276.6977186952318 182.99619938278198 L 276.6977186952318 182.99619938278198 L 276.6977186952318 182.99619938278198 L 276.6977186952318 182.99619938278198 L 273.3386024747576 182.99619938278198 Z" cy="91.04011169293402" cx="313.3906951631818" j="6" val="201" barHeight="91.95508768984796" barWidth="7.3591162204742435"></path>
                                    <g id="SvgjsG1507" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                       <g id="SvgjsG1508" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1510" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1512" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1514" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1516" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1518" className="apexcharts-bar-goals-groups"></g>
                                       <g id="SvgjsG1520" className="apexcharts-bar-goals-groups"></g>
                                    </g>
                                 </g>
                                 <g id="SvgjsG1489" class="apexcharts-datalabels" data:realIndex="0"></g>
                                 <g id="SvgjsG1506" class="apexcharts-datalabels" data:realIndex="1"></g>
                              </g>
                              <g id="SvgjsG1525" class="apexcharts-grid-borders">
                                 <line id="SvgjsLine1526" x1="0" y1="0" x2="294.3646488189697" y2="0" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1530" x1="0" y1="182.99519938278198" x2="294.3646488189697" y2="182.99519938278198" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              </g>
                              <line id="SvgjsLine1573" x1="0" y1="0" x2="294.3646488189697" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                              <line id="SvgjsLine1574" x1="0" y1="0" x2="294.3646488189697" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                              <g id="SvgjsG1575" class="apexcharts-yaxis-annotations"></g>
                              <g id="SvgjsG1576" class="apexcharts-xaxis-annotations"></g>
                              <g id="SvgjsG1577" class="apexcharts-point-annotations"></g>
                           </g>
                           <g id="SvgjsG1556" class="apexcharts-yaxis" rel="0" transform="translate(15.635351181030273, 0)">
                              <g id="SvgjsG1557" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1559" font-family="Satoshi, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1560">400</tspan>
                                    <title>400</title>
                                 </text><text id="SvgjsText1562" font-family="Satoshi, sans-serif" x="20" y="77.14879984569549" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1563">300</tspan>
                                    <title>300</title>
                                 </text><text id="SvgjsText1565" font-family="Satoshi, sans-serif" x="20" y="122.89759969139098" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1566">200</tspan>
                                    <title>200</title>
                                 </text><text id="SvgjsText1568" font-family="Satoshi, sans-serif" x="20" y="168.64639953708647" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1569">100</tspan>
                                    <title>100</title>
                                 </text><text id="SvgjsText1571" font-family="Satoshi, sans-serif" x="20" y="214.39519938278195" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#fff" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Satoshi, sans-serif;">
                                    <tspan id="SvgjsTspan1572">0</tspan>
                                    <title>0</title>
                                 </text></g>
                           </g>
                           <g id="SvgjsG1477" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                           <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(60, 80, 224);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Satoshi, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                 <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                           <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(128, 202, 238);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Satoshi, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                 <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                           <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                        <div class="flex  gap-4">
               <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2">
                     <span class="block h-4 w-4 bg-gray-500 rounded-full "></span>
                     <span class="font-medium text-white dark:text-white">Artist</span>
                  </div>

               </div>

               <div class="flex items-center justify-between">
                  <div class="flex items-center gap-2 ">
                     <span class="block h-4 w-4 bg-orange-500 rounded-full  "></span>
                     <span class="font-medium text-white dark:text-white">Client</span>
                  </div>

               </div>


            </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         
         <div class="col-span-12 xl:col-span-5 mt-6">
            <div class="rounded-sm   bg-gray-950 px-5 pt-7.5 pb-5 shadow-default  dark:bg-boxdark sm:px-7.5">
               <div class="mb-3 justify-between gap-4 sm:flex">
                  <div>
                     <h4 class="text-title-sm2 font-bold text-white dark:text-white">
                     Artistic Distribution                     </h4>
                  </div>

               </div>
               <div class="mb-2">
                  <div id="chartEight" class="mx-auto flex justify-center" style="min-height: 187.033px;">
                     <div id="apexcharts6zxvzzp3j" class="apexcharts-canvas apexcharts6zxvzzp3j apexcharts-theme-light" style="width: 250px; height: 187.033px;"><svg id="SvgjsSvg1578" width="250" height="187.03333333333336" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                           <g id="SvgjsG1580" class="apexcharts-inner apexcharts-graphical" transform="translate(33.83333333333333, 0)">
                              <defs id="SvgjsDefs1579">
                                 <clipPath id="gridRectMask6zxvzzp3j">
                                    <rect id="SvgjsRect1582" width="190.33333333333334" height="208.33333333333334" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                 </clipPath>
                                 <clipPath id="forecastMask6zxvzzp3j"></clipPath>
                                 <clipPath id="nonForecastMask6zxvzzp3j"></clipPath>
                                 <clipPath id="gridRectMarkerMask6zxvzzp3j">
                                    <rect id="SvgjsRect1583" width="188.33333333333334" height="210.33333333333334" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                 </clipPath>
                              </defs>
                              <g id="SvgjsG1584" class="apexcharts-pie">
                                 <g id="SvgjsG1585" transform="translate(0, 0) scale(1)">
                                    <circle id="SvgjsCircle1586" r="62.939024390243915" cx="92.16666666666667" cy="92.16666666666667" fill="transparent"></circle>
                                    <g id="SvgjsG1587" class="apexcharts-slices">
                                       <g id="SvgjsG1588" class="apexcharts-series apexcharts-pie-series" seriesName="Desktop" rel="1" data:realIndex="0">
                                          <path id="SvgjsPath1589" d="M 92.16666666666667 8.247967479674784 A 83.91869918699189 83.91869918699189 0 1 1 12.355240965865235 118.09897086128626 L 32.308097391065594 111.61589481263135 A 62.939024390243915 62.939024390243915 0 1 0 92.16666666666667 29.227642276422756 L 92.16666666666667 8.247967479674784 z" fill="orange" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 92.16666666666667 8.247967479674784 A 83.91869918699189 83.91869918699189 0 1 1 12.355240965865235 118.09897086128626 L 32.308097391065594 111.61589481263135 A 62.939024390243915 62.939024390243915 0 1 0 92.16666666666667 29.227642276422756 L 92.16666666666667 8.247967479674784 z" stroke="#ffffff"></path>
                                       </g>
                                       <g id="SvgjsG1590" class="apexcharts-series apexcharts-pie-series" seriesName="Tablet" rel="2" data:realIndex="1">
                                          <path id="SvgjsPath1591" d="M 12.355240965865235 118.09897086128626 A 83.91869918699189 83.91869918699189 0 0 1 42.84049289298448 24.275012878551152 L 55.17203633640502 41.24792632558004 A 62.939024390243915 62.939024390243915 0 0 0 32.308097391065594 111.61589481263135 L 12.355240965865235 118.09897086128626 z" fill="yellow" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="72" data:startAngle="252" data:strokeWidth="2" data:value="20" data:pathOrig="M 12.355240965865235 118.09897086128626 A 83.91869918699189 83.91869918699189 0 0 1 42.84049289298448 24.275012878551152 L 55.17203633640502 41.24792632558004 A 62.939024390243915 62.939024390243915 0 0 0 32.308097391065594 111.61589481263135 L 12.355240965865235 118.09897086128626 z" stroke="#ffffff"></path>
                                       </g>
                                       <g id="SvgjsG1592" class="apexcharts-series apexcharts-pie-series" seriesName="Mobile" rel="3" data:realIndex="2">
                                          <path id="SvgjsPath1593" d="M 42.84049289298448 24.275012878551152 A 83.91869918699189 83.91869918699189 0 0 1 92.15202009069299 8.247968757829653 L 92.1556817346864 29.22764323503891 A 62.939024390243915 62.939024390243915 0 0 0 55.17203633640502 41.24792632558004 L 42.84049289298448 24.275012878551152 z" fill="gray" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="36" data:startAngle="324" data:strokeWidth="2" data:value="10" data:pathOrig="M 42.84049289298448 24.275012878551152 A 83.91869918699189 83.91869918699189 0 0 1 92.15202009069299 8.247968757829653 L 92.1556817346864 29.22764323503891 A 62.939024390243915 62.939024390243915 0 0 0 55.17203633640502 41.24792632558004 L 42.84049289298448 24.275012878551152 z" stroke="#ffffff"></path>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                              <line id="SvgjsLine1594" x1="0" y1="0" x2="184.33333333333334" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                              <line id="SvgjsLine1595" x1="0" y1="0" x2="184.33333333333334" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                           </g>
                           <g id="SvgjsG1581" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 104.167px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                           <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(15, 173, 207);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                 <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                           <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(128, 202, 238);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                 <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                           <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(60, 80, 224);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                 <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="flex flex-col gap-4">
                  <div class="flex items-center justify-between">
                     <div class="flex items-center gap-2">
                        <span class="block h-4 w-4 rounded-full bg-gray-500"></span>
                        <span class="font-medium text-white dark:text-white">Approuvement</span>
                     </div>

                     <span class="inline-block rounded-md bg-primary py-0.5 px-1.5 text-xs font-medium text-white">10%</span>
                  </div>

                  <div class="flex items-center justify-between">
                     <div class="flex items-center gap-2">
                        <span class="block h-4 w-4 rounded-full bg-yellow-500"></span>
                        <span class="font-medium text-white dark:text-white">Music</span>
                     </div>

                     <span class="inline-block rounded-md bg-secondary py-0.5 px-1.5 text-xs font-medium text-white">20%</span>
                  </div>

                  <div class="flex items-center justify-between">
                     <div class="flex items-center gap-2">
                        <span class="block h-4 w-4 rounded-full bg-orange-500"></span>
                        <span class="font-medium text-white dark:text-white">Lyrics</span>
                     </div>

                     <span class="inline-block rounded-md bg-meta-10 py-0.5 px-1.5 text-xs font-medium text-white">70%</span>
                  </div>
               </div>
            </div>

         </div>
      </section>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      const userMenuButton = document.querySelector('[data-dropdown-toggle="dropdown-user"]');
      const userMenuDropdown = document.getElementById('dropdown-user');

      userMenuDropdown.classList.add('hidden');

      userMenuButton.addEventListener('click', (event) => {
         event.preventDefault();

         const rect = userMenuButton.getBoundingClientRect();

         userMenuDropdown.style.position = 'absolute';
         userMenuDropdown.style.top = `${rect.bottom}px`;
         userMenuDropdown.style.right = `${window.innerWidth - rect.right}px`;

         userMenuDropdown.classList.toggle('hidden');
      });

      document.addEventListener('click', (event) => {
         if (!userMenuButton.contains(event.target) && !userMenuDropdown.contains(event.target)) {
            userMenuDropdown.classList.add('hidden');
         }
      });
   });
</script>
