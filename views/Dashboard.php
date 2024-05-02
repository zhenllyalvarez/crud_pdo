<?php
   require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/route/user/social.php");
   require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/base64/base64.php");
   session_start();
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
<div class="flex items-center justify-center flex-col md:min-h-52 lg:min-h-screen">
    <h1 class="font-semibold text-7xl text-center uppercase mb-8">all social</h1>
    <a href="AddSocial.php" class="bg-indigo-400 hover:bg-indigo-500 text-white py-3 px-5 mb-8 rounded">add social</a>
        <div class="w-3/4 sm:w-1/2 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr class="bg-gray-100">
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
                    <tr class="">
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
                            <a class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded" href="./updateSocial.php?id=<?php echo $row['id']; ?> & social=<?php echo encodeText($row['socialmedia']);?>&email=<?php echo encodeText($row['email']);?>&password=<?php echo encodeText($row['password']);?>">Update</a>
                        </form>
                        <form action="../route/user/deleteSocial.php" method="POST">
                            <button name="delete" value="<?php echo $row['id']; ?>" type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
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