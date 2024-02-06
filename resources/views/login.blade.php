<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Сфера Комфорта</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="flex justify-center items-center h-[70vh]">
        <form action="" method="post" class="flex flex-col space-y-4 text-center ">
            <p class="text-3xl text-indigo-500 font-semibold mb-6">Войти в систему</p>
            <input type="text" placeholder="Имя пользователя" class="px-6 w-72 md:w-96 py-4 text-gray-600 bg-gray-200 outline-none rounded duration-300  ">
            <input type="password" placeholder="Пароль" class="px-6 py-4 bg-gray-200 text-gray-600 outline-none rounded duration-300 ">
            <input type="submit" value="Войти" class="px-6 mt-12 py-3 outline-none text-white font-semibold rounded bg-indigo-400 cursor-pointer duration-300 hover:bg-indigo-500   transition-all ">
        </form>
    </main>
</body>
</html>