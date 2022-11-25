<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body class="flex bg-teal-200 h-screen">
    <div>
    <a class="m-10 flex" href="/">Zurück</a>
    </div>
    <main class="text-lg font-bold mt-12 px-4 py-4">
        <h2 class="m-4">Name: <?= $user->name ?></h2>
        <div class="m-4">Email:
        <h2 class="" id="email"> <?= $user->email ?></h2>
            <button onclick="copyToClipboard('#email')" class="text-sm flex text-gray-500">Copy email</button>
        </div>
        <h2 class="m-4">Photo: <img src="/storage/{{ $user->photo }}" alt="Photo" class="max-w-lg"></h2>
        <h2 class="m-4">Task: <?= $user->task ?></h2>
    </main>
    <script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
</body>