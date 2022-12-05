<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body class="flex bg-teal-400 h-screen">
    <div>
    <a class="m-10 flex" href="/admin">Zurück</a>
    </div>
    <main class="text-lg font-bold mt-12 px-4 py-4">
        <h2 class="m-4">Name: <?= $user->name ?></h2>
        <div class="m-4 flex">Email:
        <h2 class="mx-4" id="email"> <?= $user->email ?></h2>
            <button onclick="copyToClipboard('#email')" class="text-sm text-gray-500">Copy email</button>
        </div>
        <h2 class="m-4">Photos: </h2>

        <?php foreach ($photos as $photo) { ?>

        <div class="m-4 flex items-end">
                    <img src="/storage/{{ $photo->photo }}" alt="Photo" class="max-w-lg rounded-md">
                <div class="m-4 flex items-start absolute">
                    <?php 
                        if($photo->extra) :
                            ?> <div class="text-red-500 text-6xl rounded-full flex items-start h-96 w-96 ml-24 justify-end"><?= '!'; ?></div><?php
                        endif;
                     ?>

                </div>
                    <a href="/storage/{{ $photo->photo }}" download="{{ $photo->photo }}" target="_blank" class="et_pb_button ml-4 p-6 py-5 bg-orange-500 text-white rounded-xl">Download</a>
                </div>

                <h2 class="m-4">Task: <?= $photo->task ?></h2>
        </div>
        
        <?php } ?>
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