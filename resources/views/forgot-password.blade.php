<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-violet-500">

    <a class="m-10 flex relative text-white flex" href="/">Zurück</a>

    <section class="px-6 py-8 mt-32">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Forgot Password</h1>

            <form method="POST" action="/forgot-password" class="mt-10">
                @csrf

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
                <div class="mb-2 flex justify-end">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Email Password Reset Link
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
} </script>
</body>
</html>
