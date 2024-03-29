<?php
require_once("backend.php");

$data = new backend(null, null, null, null);
$id = $_POST['id'] ?? null;

if ($id !== null) {
    $result = $data->fetchOne($id);

    if ($result && is_array($result)) {
        if (count($result) > 0) {
            foreach($result as $row) {
                $socialMedia = isset($row['socialmedia']) ? $row['socialmedia'] : '';
                $email = isset($row['email']) ? $row['email'] : '';
                $password = isset($row['password']) ? $row['password'] : '';
            }
        } else {
            echo "No data found for the provided ID.";
        }
    } else {
        echo "Error retrieving data.";
    }
} else {
    echo "No ID provided.";
}

var_dump($socialMedia);
var_dump($email);
var_dump($password);
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
            <?php if(isset($result) && count($result) > 0): ?>
                <form class="p-12" action="updateSocial.php" method="POST">
                    <h1 class="text-center text-7xl font-semibold uppercase mb-8">Update social</h1>
                    <a class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-8 mb-5 rounded mx-auto flex w-24" href="alldata.php">Back</a>
                    <div class="mb-6">
                        <label for="socialMedia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Social Media</label>
                        <input type="text" id="socialmedia" name="socialmedia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  value="<?php echo $socialMedia; ?>"/>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $email; ?>"/>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $password; ?>"/>
                    </div>
                    <button type="submit" value="edit" name="save" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center">Update Social</button>
                    <input type="hidden" name="id" value="<?=$id?>">
                </form>
            <?php else: ?>
                No data found for the provided ID.
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
