<?php
$this->view('header', $data);
?>
<div class="h-56 grid grid-cols-2 gap-4 content-start">
    <div class="flex flex-col justify-center mt-10 px-6 py-6 lg:px-5 ">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://engitech.s3.amazonaws.com/images/image-box1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://engitech.s3.amazonaws.com/images/image-box2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://engitech.s3.amazonaws.com/images/image-box3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://engitech.s3.amazonaws.com/images/image-box4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class="flex flex-col justify-center px-6 py-6 lg:px-5" x-data="data()">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-12 w-auto" src="<?= ASSETS ?>images/PulpoLine.png" alt="PulpoLine">
            <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Crear una cuenta</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="#" method="POST" x-on:submit="handleSubmit(event)">
                <div>
                    <label for="person_id" class="block text-sm font-medium leading-6 text-gray-900">Cedula ó Pasaporte</label>
                    <div class="mt-2">
                        <input id="person_id" name="person_id" type="number" autocomplete="person_id" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombres</label>
                    <div class="mt-2">
                        <input id="name" name="Nombres" type="text" autocomplete="name" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Apellidos</label>
                    <div class="mt-2">
                        <input id="lastname" name="lastname" type="text" autocomplete="lastname" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombre de Usuario</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" autocomplete="username" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Nor. Telefónico</label>
                    <div class="mt-2">
                        <input id="phone" name="phone" type="text" autocomplete="phone" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo Electrónico</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 
                    text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
                    focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrarse</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                ¿Ya esta registrado?
                <a href=" <?= ROOT . "login" ?>" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">¡Click Aqui!</a>
            </p>
        </div>
    </div>
</div>




<script>


function data(){
	return {
		init(){
		},

    
		handleSubmit(event) {
			event.preventDefault(); // Evita el envío del formulario

			// Obtén los valores de los campos
			const email = document.getElementById('email').value;
			const password = document.getElementById('password').value;
			const name = document.getElementById('name').value;
			const person_id = document.getElementById('person_id').value;
			const lastname = document.getElementById('lastname').value;
			const phone = document.getElementById('phone').value;
			const username = document.getElementById('username').value;

			// Aquí puedes hacer lo que necesites con los datos

            const url =  '<?=BACKURL. "users/store"?>';
            const formData = new FormData();
            formData.append('email', email);
            formData.append('password', password);
            formData.append('name', name);
            formData.append('person_id', person_id);
            formData.append('lastname', lastname);
            formData.append('phone', phone);
            formData.append('username', username);

            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success === true){
                    window.location.href = '<?=ROOT."login"?>'
                }
            })

			// Puedes agregar más lógica, como enviar los datos a un servidor
		}
	}
}
</script>

<?php
$this->view('footer');
?>