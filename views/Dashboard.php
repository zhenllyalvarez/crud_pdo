<?php
   require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/route/user/social.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SocialSnap</title>
</head>

<body>
<div class="min-h-screen flex items-center justify-center flex-col">
    <h1 class="font-semibold text-7xl text-center uppercase mb-8">all social</h1>
    <a href="AddSocial.php" class="bg-indigo-400 hover:bg-indigo-500 text-white py-3 px-5 mb-8 rounded">add social</a>
        <div class="w-3/4 sm:w-1/2 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Social Media
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($allsocialdata as $row): ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                        <?php echo $row['id']; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $row['socialmedia']; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $row['email']; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $row['password']; ?>
                        </td>
                        <td class="px-6 py-4 flex gap-3">
                        <form action="updateSocial.php" method="POST">
                            <input type="hidden" name="id" value="<?=$row['id']?>">
                            <button type="submit" name="update" value="edit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded">Update</button>
                        </form>
                        <form action="../App/Controller/User/deleteSocial.php" method="POST">
                            <button name="id" value="<?php echo $row['id']; ?>" type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                        </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>