<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Сфера комфорта</title>
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')
</head>
<body>
    <main class="flex justify-center items-center h-[100vh]">
        <div class="flex flex-col space-y-4 text-center mb-32" id="form">
            <p class="text-3xl text-indigo-500 font-semibold mb-6">Войти в систему</p>
            <input type="text" placeholder="Имя пользователя" id="login" required class="px-6 w-72 md:w-96 py-4 text-gray-600 bg-gray-200 outline-none rounded duration-300  ">
            <input type="password" placeholder="Пароль" id="password" required class="px-6 py-4 bg-gray-200 text-gray-600 outline-none rounded duration-300 ">
            <button onclick="fetch_post()" class="px-6 mt-12 py-3 outline-none text-white font-semibold rounded bg-indigo-400 cursor-pointer duration-300 hover:bg-indigo-500   transition-all ">Войти</button>
            <p id="result" class="text-indigo-500 h-8 "></p>
        </div>
    </main>

    <script>

        async function fetch_post(){
            let login = document.getElementById('login').value
            let password = document.getElementById('password').value
            let answer = document.querySelector('#result');

            if(login.length != 0 && password.length != 0){
            let token = document.getElementById('token').getAttribute('content')
            const params = {
                login:login,
                password:password,
            }
            answer.innerHTML = "Подождите..."
            let response = await fetch('/login/auth',{
                method:'POST',
                headers:{
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body:JSON.stringify({
                    login:login,
                    password:password
                })
            }).catch(error=>{
                answer.classList.add('text-red-500');
                answer.innerHTML = "Произошла ошибка. Свяжитесь с администратором"
            })
            answer.classList.remove('text-indigo-500')
            let result = await response.json();
            if(result.result == 'not_found'){
                answer.classList.add('text-red-500');

                answer.innerHTML = result.msg
            }else{
                window.location.href="/"
            }
        }else{
                answer.classList.add('text-red-500');
                answer.innerHTML = "Заполните все поля"
        }
        }
    </script>
</body>
</html>