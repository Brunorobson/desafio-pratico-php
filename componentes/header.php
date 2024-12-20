<header class="bg-cover bg-center bg-cover mx-auto flex flex-col justify-center items-center h-screen"
    style="background-image: url('/img/background_intro.webp');">
    <p>foto</p>
    <p class="text-white">Hello World! Meu nome é Bruno Robson e sou</p>
    <h1 class="text-white text-6xl text-bold font-asap">Desenvolvedor PHP</h1>
    <p class="text-white text-sm w-1/2 text-center">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
    <span>
        <?php foreach ($tecnologias as $tecnologia): ?>
            <span class="
            <?php if ($tecnologia == "PHP") {
                echo "bg-blue-400 text-blue-900";
            }
            if ($tecnologia == "GitHub") {
                echo "bg-fuchsia-400 text-red-900";
            }
            if ($tecnologia == "HTML") {
                echo "bg-red-400 text-red-900";
            }
            if ($tecnologia == "CSS") {
                echo "bg-pink-400 text-pink-900";
            }
            if ($tecnologia == "JS") {
                echo "bg-yellow-400 text-yellow-900";
            }
            if ($tecnologia == "Javascript") {
                echo "bg-yellow-400 text-yellow-900";
            }
            ?>
            rounded-md mr-2 px-2 py-1 font-semibold text-xs ">- <?= $tecnologia ?></span>
        <?php endforeach ?>
    </span>
</header>