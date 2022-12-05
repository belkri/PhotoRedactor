<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-violet-500">
<section class="flex items-center justify-center">
        <main class=" m-8 px-4 py-4 w-1/4 border b rounded-xl bg-gray-200">
        <h1 class="text-4xl flex justify-center mb-4">Passwort zurücksetzen</h1>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form action="/reset-password" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
        <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email')}}"
                           required
                    >
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

        
                <div class="">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password<span class="text-gray-500 normal-case">(Min. 7 Zeichen)</span>
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                </div class="">
                    <input type="checkbox" onclick="myFunction()" class="m-4 ml-0">Password zeigen
                </div>

                <div class="mb-4">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Confirm<span class="text-gray-500 normal-case"></span>
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           required
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                </div>
                    <input type="checkbox" onclick="myFunction2()" class="m-4 ml-0">Confirm zeigen
                </div>

                <div class="mb-2 flex justify-end">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
    </form>
</main>
</section> 
<script>
                    function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
                 function myFunction2() {
                    var x = document.getElementById("password_confirmation");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                } 
</script>
</body>
</html>