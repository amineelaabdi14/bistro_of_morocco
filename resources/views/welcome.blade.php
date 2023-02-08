<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body class="h-screen w-screen">
    <div class="bg-gray-900 h-full w-full flex content-center">
        <div id="authentification-container" class="w-2/6 m-auto">
            <img src="../images/laravel.png" class="m-auto mb-[30px]" alt="">
            <form action="" class="w-100 flex flex-col items-center">
                @csrf 
                <div class="mb-5">   
                    <label for="" class="text-red-700 font-bold">EMAIL</label>
                    <br>
                    <input type="email" name="email-login" class="rounded bg-gray-800 myInputs text-lg py-2 px-2 w-96 text-white" required>
                </div>
                <div class="mb-5">
                    <label for="" class="text-red-700 font-bold">PASSWORD</label>
                    <br>
                    <input type="password" name="password-login" class="rounded bg-gray-800 myInputs text-lg py-2 px-2 w-96 text-white" required>
                </div>
                <button type="submit" class="bg-red-700 rounded w-96 h-10 font-bold text-white">Login</button>
            </form>
        </div>
    </div>
</body>
</html>