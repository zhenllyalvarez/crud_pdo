<?php 
  require($_SERVER['DOCUMENT_ROOT'] . '/crud_pdo/route/auth/signup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>register</title>
</head>
<body>
    <div class="bg-white py-6 sm:py-8 lg:py-40">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <form class="mx-auto max-w-lg rounded-lg border" action="route/auth/signup.php" method="POST">
            <div class="flex flex-col gap-4 p-4 md:p-8">
                <h1 class="text-center font-bold text-3xl py-2">REGISTER</h1>
              <div>
                <label for="fullname" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Fullname</label>
                <input type="text" name="fullname" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" required/>
              </div>

              <div>
                <label for="email" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Email</label>
                <input type="email" name="email" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" required/>
              </div>
      
              <div>
                <label for="password" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Password</label>
                <input type="password" name="password" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" required/>
              </div>

              <div>
                <label for="Confirm_password" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Confirm Password</label>
                <input type="password" name="con_password" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" required/>
              </div>
      
              <button type="submit" class="block rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">Register</button>
      
              <div class="relative flex items-center justify-center">
                <span class="absolute inset-x-0 h-px bg-gray-300"></span>
              </div>
            </div>
      
            <div class="flex items-center justify-center bg-gray-100 p-4">
              <p class="text-center text-sm text-gray-500">Already have an account? <a href="login.php" class="text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Login</a></p>
            </div>
          </form>
        </div>
      </div>
</body>
</html>