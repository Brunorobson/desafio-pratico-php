<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Desafio Prático - Portfólio Dev [PHP]</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wdth,wght@0,112.5,100..900;1,112.5,100..900&family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wdth,wght@0,112.5,100..900;1,112.5,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $tecnologias = [
        "GitHub",
        "PHP",
        "CSS",
        "HTML",
        "Javascript"
    ];
    function imprimeTecnologias($stacks, $incard = false)
    {
        foreach ($stacks as $stack) {
            if ($stack == "GitHub") {
                $colorbg = "bg-green-400 text-gray-900";
            } else if ($stack == "PHP") {
                $colorbg = "bg-purple-400 text-gray-900";
            } elseif ($stack == "CSS") {
                $colorbg = "bg-blue-400 text-gray-900";
            } elseif ($stack == "HTML") {
                $colorbg = "bg-red-400 text-gray-900";
            } elseif ($stack == "Javascript") {
                $colorbg = "bg-yellow-400 text-gray-900";
            } else {
                $colorbg = "bg-gray-400 text-gray-900";
            }

            if ($incard) {
                $text = "text-md";
            } else {
                $text = "text-sm";
            }
            echo "<span class=\"$colorbg rounded-full justify-items-center mr-2 px-2 py-1 font-semibold $text \"> $stack</span>";
        }
    }
    ?>
    <header>
        <?php include("componentes/header.php"); ?>
    </header>

    <section>
        <?php include("componentes/section.php"); ?>
    </section>
    <footer>
        <?php include("componentes/footer.php"); ?>
    </footer>
</body>

</html>