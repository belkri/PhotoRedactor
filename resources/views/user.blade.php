<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body class="flex bg-teal-200 h-screen">
    <div>
    <a class="m-10 flex" href="/admin">Zurück</a>
    </div>
    <main class="text-lg font-bold mt-12 px-4 py-4">
        <h2 class="m-4">Name: <?= $user->name ?></h2>
        <div class="m-4 flex">Email:
        <h2 class="mx-4" id="email"> <?= $user->email ?></h2>
            <button onclick="copyToClipboard('#email')" class="text-sm text-gray-500">Copy email</button>
        </div>
        <div class="flex items-end">
            <h2 class="m-4">Photo: <img src="/storage/{{ $user->photo }}" alt="Photo" class="max-w-lg"></h2>
            <a href="/storage/{{ $user->photo }}" download="{{ $user->photo }}" target="_blank" class="et_pb_button m-4 p-4 py-3 bg-orange-500 text-white rounded-xl">Download</a>
        </div>
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