<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body class="bg-[#191919]">
    
<!-- INCLUDE NAV (0) -->
<?php include("../include/nav.php") 
?>   

  <div class="flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded shadow-md">
      <div class="border-b mb-4">
        <h1 class="text-xl font-medium mb-2 flex">
          <span id="login-heading" class="w-1/2 cursor-pointer font-bold text-blue-500">Connexion</span>
          <span id="register-heading" class="w-1/2 text-right cursor-pointer font-bold text-gray-500">Inscription</span>
        </h1>
      </div>
      
      <div id="login-form">
        <form action="#" method="POST">
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
              Email
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="email" type="email" placeholder="Enter your email">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="password">
              Password
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="password" type="password" placeholder="Enter your password">
          </div>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
            type="submit">
            Se connecter
          </button>
        </form>
      </div>
      <div id="register-form" style="display:none;">
        <form action="#" method="POST">
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
              Name
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="name" type="text" placeholder="Enter your name">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
              Email
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="email" type="email" placeholder="Enter your email">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="password">
              Password
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="password" type="password" placeholder="Enter your password">
          </div>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
            type="submit">
            S'inscrire
          </button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const loginHeading = document.getElementById('login-heading');
    const registerHeading = document.getElementById('register-heading');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    // Add click event listener to login heading
    loginHeading.addEventListener('click', () => {
      loginForm.style.display = 'block';
      registerForm.style.display = 'none';
      loginHeading.classList.add('text-blue-500', 'font-bold','underline');
      loginHeading.classList.remove('text-gray-500', 'font-medium');
      registerHeading.classList.add('text-gray-500', 'font-medium');
      registerHeading.classList.remove('text-blue-500', 'font-bold','underline');
    });

    // Add click event listener to register heading
    registerHeading.addEventListener('click', () => {
      registerForm.style.display = 'block';
      loginForm.style.display = 'none';
      registerHeading.classList.add('text-blue-500', 'font-bold', 'underline');
      registerHeading.classList.remove('text-gray-500', 'font-medium',);
      loginHeading.classList.add('text-gray-500', 'font-medium');
      loginHeading.classList.remove('text-blue-500', 'font-bold', 'underline');
    });
  </script>





<!-- INCLUDE FOOTER (4) -->
<?php include("../include/footer.php") 
?> 

</body>
</html>








