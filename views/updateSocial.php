<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/route/user/updateSocial.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/base64/base64.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Social</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center flex-col">
        <div class="w-3/4 sm:w-1/2 relative overflow-x-auto shadow-md sm:rounded-lg">
            <form class="p-12" action="../route/user/updateSocial.php" method="POST">
                <h1 class="text-center text-7xl font-semibold uppercase mb-8">Update social</h1>
                <a class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-8 mb-5 rounded mx-auto flex w-24" href="../views/Dashboard.php">Back</a>
                <div class="mb-6">
                    <label for="socialmedia" class="block mb-2 text-sm text-gray-900">Social Media</label>
                    <input type="text" name="socialmedia" value="<?php echo decodeText($_GET['social']); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm text-gray-900">Email</label>
                    <input type="email" name="email" value="<?php echo decodeText($_GET['email']); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm text-gray-900">Password</label>
                    <input type="text" name="password" value="<?php echo decodeText($_GET['password']); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center">Update Social</button>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </form>
        </div>
    </div>
</body>

</html>
