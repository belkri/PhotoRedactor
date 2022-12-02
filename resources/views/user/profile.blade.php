<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body class="flex bg-amber-400 h-screen text-white">
    <div>
    <a class="m-10 flex" href="/admin">Zurück</a>
    </div>
    <main class="text-lg font-bold mt-12 px-4 py-4">
        <h2 class="m-4">Name: <?= $user->name ?></h2>
        <div class="m-4 flex">Email:
        <h2 class="mx-4" id="email"> <?= $user->email ?></h2>
        </div>
            <h2 class="m-4">Meine Fotos: </h2>

            <?php foreach ($photos as $photo) { ?>

            <div class="m-4 flex items-end">
                <img src="/storage/{{ $photo->photo }}" alt="Photo" class="max-w-lg rounded-md">
                    <div class="m-4 flex items-start absolute">
                        <?php 
                            if($photo->extra) :
                                ?>
                                    <div class="text-red-500 text-6xl flex items-start h-96 w-96 ml-24 justify-end cursor-default"><?= '!'; ?></div>
                                <?php
                            endif;
                        ?>
                    </div>
            </div>
                
        </div>
        <h2 class="m-4">Aufgabe: <?= $photo->task ?></h2>
        <?php } ?>
    </main>
    <script>
function display(){
    $var1=$_POST['text1'];
    $var2=$_POST['display'];
    if(isset($var2)){
    var_dump( $var1);
}
</script>
</body>