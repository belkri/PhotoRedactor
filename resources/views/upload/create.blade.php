<!DOCTYPE html>
<html>
<head>
    <title>Upload Your Photo!</title>
    <meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
</head>
    <div>
        <a href="/guest" class="text-white absolute ">Zurück</a>
    </div>
<body class="px-6 py-6 bg-violet-500 h-screen flex items-center justify-center">
<main class=" m-8 px-4 py-4 w-1/4 border border-white rounded-xl">
<h1 class="text-4xl text-white flex justify-center">Senden Sie Ihre Foto!</h1>
            <form method="POST" action="/upload" class="mt-10" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label class="flex block mb-2 uppercase font-bold text-xs text-white"
                           for="name"
                    >
                        Ihre Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           required
                    >
                    @error('name')
                        <p class="color: red; font-size: small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="flex block mb-2 uppercase font-bold text-xs text-white"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           required
                    >
                    @error('email')
                        <p class="color: red; font-size: small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="flex block mb-2 uppercase font-bold text-xs text-white"
                           for="photo"
                    >
                        Ihre Photo
                    </label>

                    <input class="border border-white p-2 w-full"
                           type="file"
                           name="photo"
                           id="photo"
                           requireds
                    >
                    @error('email')
                        <p class="text-red text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="flex block mb-2 uppercase font-bold text-xs text-white"
                           for="task"
                    >
                        Was zu Machen ist
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="textarea"
                           name="task"
                           id="task"
                           required
                    >
                    @error('name')
                        <p class="color: red; font-size: small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mb-2 uppercase font-bold text-xs text-white"
                           for="extra"
                    >
                    Wollen Sie es schnellst möglich haben?
                    </label>
                    <input class=" ml-24 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                           type="checkbox"
                           name="extra"
                           id="extra"
                    >
                </div>
                <div class="mb-6">
                    <button type="submit"
                            class="bg-yellow-400 text-white rounded py-2 px-4 hover:bg-yellow-500"
                    >
                        Senden
                    </button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
    </main>
</body>