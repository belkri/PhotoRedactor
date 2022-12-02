<!DOCTYPE html>
<html>
<head>
    <title>Upload Your Photo!</title>
    <meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-violet-500 h-full">
    <div class="flex items-center text-white">
        <a href="/" class="flex m-4 text-lg"><span class="flex font-bold">⇦</span>Zurück</a>
    </div>
    <section class="flex items-center justify-center">
        <main class=" m-8 px-4 py-4 w-1/4 border b rounded-xl bg-gray-200">
            <h1 class="text-4xl flex justify-center">Senden Sie Ihre Foto!</h1>
                <form method="POST" action="/upload" class="mt-10" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label class="flex block mb-2 uppercase font-bold text-xs"
                            for="photo"
                        >
                            Ihre Photo
                        </label>

                        <input class="border border-gray-400 py-8 px-2 w-full bg-white flex justify-center cursor-pointer"
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
                        <label class="flex block mb-2 uppercase font-bold text-xs"
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
                    <div class=" flex">
                        <label class=" uppercase font-bold text-xs flex"
                            for="extra"
                        >
                        Wollen Sie es schnellst möglich haben?<br>
                        </label>
                        <input class=" flex cursor-pointer ml-24 w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            type="checkbox"
                            name="extra"
                            id="extra"
                        >
                    </div>
                        <div class="mb-4 text-gray-500">(extra 5€)</div>
                    <div class="mb-6">
                        <button type="submit"
                                class="bg-yellow-400 rounded py-2 px-4 hover:bg-yellow-500"
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
    </section>
</body>