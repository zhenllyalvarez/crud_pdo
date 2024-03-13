<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add Social</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center flex-col">
        <div class="w-3/4 sm:w-1/2 relative overflow-x-auto shadow-md sm:rounded-lg">
            <form class="p-12">
                <h1 class="text-center text-7xl font-semibold uppercase mb-8">Add social</h1>
                <button class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-8 mb-5 rounded mx-auto flex"><a href="alldata.php">Back</a></button>
                <div class="mb-6">
                    <label for="socialMedia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Social Media</label>
                    <input type="text" id="socialMedia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Facebook, Instagram, etc" required />
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="example@gmail.com" required />
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center">Add to Social</button>
            </form>
        </div>
    </div>
</body>

</html>