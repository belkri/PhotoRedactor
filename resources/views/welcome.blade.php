<!DOCTYPE html>
<head>
<title>Photo Redactor</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
</head>
<body class="bg-violet-500 text-white">
<section>
    <nav class="flex justify-end">
        <span class="flex text-base m-8 text-right" ><a href="/login">Anmelden</a></span>
        <span class="flex text-base m-8 text-right" ><a href="/register">Registrieren</a></span>
    </nav>
        <span class="text-5xl flex mt-4 justify-center">Welcome</span>
    <main class="mx-32 my-16">
        <div class="text-3xl flex">
            Willkommen zu PhotoRedactor<span class="text-sm flex items-start">©</span>
        </div>
        <div>
            <a href="/register" class="mt-8 absolute font-semibold">Registrieren Sie und laden Ihre Foto hoch!</a>
        </div>
    </main>
</section>
<x-flash />
</body>
</html>