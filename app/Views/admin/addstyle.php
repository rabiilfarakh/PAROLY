<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<form action="" method="post" id="overlay-form" class="w-[50%] bg-white rounded-lg shadow dark:bg-gray-700">
    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">

        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Add Style</h3>


        <button type="button" id="remove" class=" text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" pointer-events="none">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>

    </div>
    <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Style Name</label>
                <input type="text" name="styleName" id="first-name" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Style name" required="">
            </div>

        </div>
    </div>


    <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">

        <button type="submit" name="addStyle" class="text-white bg-orange-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add
        </button>


    </div>

</form>
    
</body>
</html>