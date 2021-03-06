
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FDroit: LogIn</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">



    <!-- Tailwind -->
    <link href="/css/output-style.css" rel="stylesheet">

    <link href="/node_modules/tailwindmin.css" rel="stylesheet">
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">


   <script src="/js/jquery.js"></script>

<style>
     @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

.font-family-karla {
     font-family: karla;
}
.dropdowmn-menu1:hover .dropdownmenu2 {
     display: block;
}
.fixed {
     position: fixed;
     top: 0;
     right: 0;
     left: 0;
}

#container {
    padding: 0.8rem 1.6rem;
    width: 100%;
    height: 100%;
    margin: auto;
    background-color: gray-400;
    color: #111;
    height: calc(100vh - 7.2rem);
    box-sizing: border-box;
    padding: 1rem 2rem;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>

    <!-- AlpineJS -->

     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="../js/alpine.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-2 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between content-center">

             <nav>
                <div class=" relative mx-auto text-gray-600">
                    <input class="rounded-md bg-white h-6 px-5 pr-16  text-sm focus:outline-none"
                      type="search" name="search" placeholder="Search">
                    <button type="submit" class=" mt-2 absolute right-0 top-0 mr-4">
                      <svg class="text-gray-600 h-2 w-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                          d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                      </svg>
                    </button>
                  </div>
            </nav> 

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="# ">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
      <div class="flex flex-row items-center py-12 justify-between content-center">
          <div class="w-20 h-20"><img class="w-full h-full" src="images/relizane.png" ></div>
          <div class="flex flex-col">
              <a class="font-bold text-gray-800 uppercase hover:text-blue-800 text-5xl" href="#">
                  Facult?? Droit et Science Politique
              </a>
  
              <p class=" sm:text-center text-lg text-gray-600">
                  Universit?? De RELIZANE
              </p>
          </div>

          <div  class="w-20 h-20"><img class="w-full h-full" src="images/droit.jpg"></div>
      </div>
  </header>

    <!-- Topic Nav -->
    <nav id="menu" class="w-full py-2 border-t border-b bg-blue-400" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open">
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div> 
        <div  :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2" >
                <div class="capitalize dropdowmn-menu1 hover:bg-gray-100 rounded py-2 px-4 mx-2">
                    <a href="../">Acceuile</a>
                </div>
                <div class="capitalize dropdowmn-menu1 hover:bg-gray-100 rounded py-2 px-4 mx-2">
                    <a href="faculte/faculte.php">Facult??</a>
                    <div class=" relative inline-block text-left">
                       
                        <div  class="dropdownmenu2 hidden -ml-16 origin-top-right absolute left-0 mt-4 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm hover:bg-slate-900" role="menuitem" tabindex="-1" id="menu-item-0">LE MOT DU DOYEN</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Presentation de la facult??</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">POSTES Superieur pour le facult??</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Secr??tariat g??n??ral</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">La structure organisationnelle du Facult??</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Conseil scientifique</a>
                            <a href="#" class=" text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Comit?? scientifique du D??partement de droit</a>
                          </div>
                        </div>
                    </div>
                </div>
    
                <div class="capitalize dropdowmn-menu1 hover:bg-gray-100 rounded py-2 px-4 mx-2">
                    <a href="niveaux/niveaux.php">Niveaux</a>
                    <div class=" relative inline-block text-left">
                       
                        <div  class="dropdownmenu2 hidden -ml-16 origin-top-right absolute left-0  mt-4 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm hover:bg-slate-900" role="menuitem" tabindex="-1" id="menu-item-0">Licence</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Master</a>
                            <a href="#" class=" text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Doctorat</a>
                          </div>
                        </div>
                    </div>
                </div>
    
                <div class="capitalize dropdowmn-menu1 hover:bg-gray-100 rounded py-2 px-4 mx-2">
                    <a href="recherche/recherche.php">Recherche Scientifique</a>
                    <div class="relative inline-block text-left">
                       
                        <div  class="dropdownmenu2 hidden -ml-16 origin-top-right absolute -left-24 mt-4 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm hover:bg-slate-900" role="menuitem" tabindex="-1" id="menu-item-0">Laboratoires de ??Recherche</a>
                            <a href="#" class="border-b-2 border-gray-800 text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Projets de recherche</a>
                            <a href="#" class=" text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Revues et Livres</a>
                          </div>
                        </div>
                    </div>
                </div>
              
                <div class="capitalize dropdowmn-menu1 hover:bg-gray-100 rounded py-2 px-4 mx-2">
                    <a href="bibliotheque/bibliotheque.php">Biblioth??que</a>
                    <div class="relative inline-block text-left">
                       
                        <div  class="dropdownmenu2 hidden ml-0 origin-top-right absolute -left-24 mt-4 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class=" text-gray-700 block px-4 py-2 text-sm hover:bg-slate-900" role="menuitem" tabindex="-1" id="menu-item-0">Pr??sentation de Biblioth??que</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="capitalize dropdowmn-menu1 hover:bg-gray-100 rounded py-2 px-4 mx-2">
                    <a>Login</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex flex-row">
        <div class=" bg-white basis-96 md:w-2/3  flex flex-row items-center px-4 h-full ">
            <section class="h-screen">
                <div class="px-6 h-full text-gray-800">
                  <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                    <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                      <img
                        src="images/loginimage.webp"
                        class="w-full"
                        alt="Sample image"/>
                    </div>
                    <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                      <form action="login.php" method="post">
                        <div class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                          <h1 class="text-center font-semibold mx-4 mb-0">LogIn</h1>
                        </div>
					            	<?php if (isset($_GET['error'])) { ?>
     	                	<p class="error"><?php echo $_GET['error']; ?></p>
                      	<?php } ?>

                        <!-- Email input -->
                        <div class="mb-6">
                          <input
                            type="text" name="uname"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput2"
                            placeholder="Nom d'Utilisateur"/>
                        </div>
              
                        <!-- Password input -->
                        <div class="mb-6">
                          <input
						  type="password" name="password"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput2"
                            placeholder="Mot de Pass"/>
                        </div>
                        <div class="text-center lg:text-left">
                          <button
                            type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Login
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </section>
        </div>
        <aside class=" bg-white basis-96 md:w-1/3 flex flex-col items-center px-3 h-full ">
    
                <div class="w-full bg-white shadow drop-shadow-md flex flex-col my-4 p-6 hover:drop-shadow-xl">
                    <p class="text-xl font-semibold pb-5">About Us</p>
                    <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                    <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                        Get to know us
                    </a>
                </div>
    
                <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                    <p class="text-xl font-semibold pb-5">Instagram</p>
                    <div class="grid grid-cols-3 gap-3">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                    </div>
                    <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                        <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                    </a>
                </div>
    
            </aside>
    
    </main>
    


    <!--end nav-->


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
            </article>

            <!-- Pagination -->
         

        </section>

        <!-- Sidebar Section -->
 

    </div>

    <footer class="w-full  h-auto bg-gray-800 flex flex-col">
        <div  class="w-full  p-5 grid grid-cols-1 md:grid-cols-12" >
        <div class="md:col-span-3 pb-2 md:mb-0">
          <p class="text-gray-200">Contact</p>
          <ul class="pt-5 text-gray-400">
            <li> Universit?? de Relizane</li>
            <li>T??l: 046-72-97-62</li> 
            <li>admin@univ-relizane.dz</li>    
            <li>Cit?? Bourmadia, W. Relizane  </li>
            <li>BP 48000, W. Relizane.</li>
          </ul>
        </div>
        <div class="md:col-span-3 pb-2 md:mb-0">
          <p class="text-gray-200">Social</p>
          <ul class="pt-5 text-gray-400">
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Youtube</li>
          </ul>
        </div>
        <div class="md:col-span-2 pb-2 md:mb-0">
          <p class="text-gray-200">Service</p>
          <form class="text-gray-400">
            <label for = "name">Name</label>
            <input class="bg-gray-800 box-border border border-white	" type = "text" id = "name">
            <label for = "email">Email</label>
            <input class="bg-gray-800 box-border border border-white	" type = "email" id = "email">
            <label for = "message">Message</label>
            <textarea class="bg-gray-800 box-border border border-white	" id = "message" name = "message" rows = "4"></textarea>

            <input class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" type = "submit" value = "Send">
        </form>
        </div>
 
        <div class="md:col-span-4 pb-2 md:mb-0">
          <p class="text-gray-200">Emplacement</p>
        <iframe class="h-full w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6479.772454495685!2d0.5792424088036068!3d35.70441726686757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12819d0e0d704395%3A0xf9120d6917fd7449!2z2KzYp9mF2LnYqSDYutmE2YrYstin2YY!5e0!3m2!1sar!2sdz!4v1654478940899!5m2!1sar!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="text-center	text-gray-200 pt-4 pb-2">
        <p > Created by &reg made with Zereg Ismail - Rouabeh Mohamed El Amine - Yaagoub Benouda </p>
        <p class="pt-2">University Of Relizane 	&copy All rights reserved </p>
    </div>

</footer>
   



<script src="/js/js.js"></script>
<script src="/js/scrolhead.js"></script>
<script src="/js/jquery.js"></script>
<!--
    <script src="script.js"></script>
    <script src="main.js"></script>
-->
</body>
</html>