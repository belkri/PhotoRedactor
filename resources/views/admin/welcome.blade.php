<!DOCTYPE html>
<head>
<title>Photo Redactor</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
</head>
<body class="bg-teal-400 h-full">
        <nav class="flex justify-end">    
            <span class="flex text-base m-8" ><a href="/guest">Guest Page</a></span>
            <span class="flex text-base m-8" ><a href="/logout">Log Out</a></span>
        </nav>
    <section class="mb-8">
            <span><a href="/" class="text-5xl flex mt-12 justify-center">Welcome</a></span>
        <main>
            <div class="flex justify-center ml-96">
                <form  method="GET" action="#">
                <input type="text" name="search" placeholder="Search for..."
                class="text-xl mt-8 mr-96 border border-gray-100 rounded-lg p-2 w-96"
                value="{{ request('search') }}">
                </form>
            </div>
            <span>
                <?php foreach ($users as $user){ ?>
                    <div class="mt-3 ml-64 text-xl"><a href="user/{{$user->id}}">
                        User
                        <span class="font-bold text-2xl">
                            <?= $user->name; ?>
                        </span> 
                        anzeigen
                </div><?php } ?></a>
            </span>
        </main>
    </section>
    <x-flash />
</body>
</html>
