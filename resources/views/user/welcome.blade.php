<!DOCTYPE html>
<head>
<title>Photo Redactor</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-400 text-white">
<section>
        <nav class="flex justify-end">    
            <span class="flex text-base m-6 text-right" ><a href="/profile">Mein Profil</a></span>
            <span class="flex text-base m-6 text-right" ><a href="/logout">Abmelden</a></span>
        </nav>
        <span class="text-5xl flex mt-4 justify-center">Welcome, {{ $user->name }}</span>
    <main class="ml-48 my-16">
        <div class="text-3xl flex">
            Willkommen zu PhotoRedactor<span class="text-sm flex items-start">©</span>
        </div>
        <div>
            <a href="/upload" class="mt-8 absolute font-semibold">Laden Sie Ihre Foto hoch!</a>
        </div>
    </main>
</section>
</body>
</html>