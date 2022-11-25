<!DOCTYPE html>
<head>
<title>Photo Redactor</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<section class=" bg-teal-200 h-screen">
    <nav class="flex justify-end">    
        <span class="flex text-base m-4 text-left" ><a href="/guest">guest Page</a></span>
        <span class="flex text-base m-4 text-right" ><a href="/logout">Log Out</a></span>
    </nav>
        <span><a href="/" class="text-5xl flex mt-12 justify-center">Welcome</a></span>
    <main>
        <div class="flex justify-center ml-96">
            <form  method="GET" action="#">
            <input type="text" name="search" placeholder="Search for..."
            class="text-xl mt-8 mr-96 border border-gray-100 rounded-lg p-2"
            value="{{ request('search') }}">
            </form>
        </div>
        <span>
            <?php foreach ($users as $user){ ?>
                <div class="mt-3 ml-64 text-xl"><a href="user/{{$user->id}}">
                    Show User <?= $user->name; 
            ?></div><?php } ?></a>
        </span>
    </main>
    
</section>
</html>
