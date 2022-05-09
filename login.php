<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <div class="flex items-center w-screen h-screen justify-center">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <form action="loginProcess.php" method="post" onSubmit="validasi()">
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" name="username" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" name="password" id="password" type="password" placeholder="******">
                    <p class="text-red text-xs italic">Please choose a password.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-sky-500 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasi(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
    
            if(username == "" && password == ""){
                alert('Anda harus mengisi semua data!');
            }else if(username != "lisa" && password != "lisablackpink"){
                alert('Username atau Password yang anda masukan salah!')
            }else{
                return true;
            }

            
        }   
    </script>
</body>
</html>