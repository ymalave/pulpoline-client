<?php
$this->view('header', $data);
?>
<div class="flex flex-col justify-center mt-10 px-6 py-6 lg:px-5" x-data="data()">
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<img class="mx-auto h-12 w-auto" src="<?= ASSETS ?>images/PulpoLine.png" alt="PulpoLine">
		<h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Iniciar Sesión</h2>
	</div>

	<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
		<form class="space-y-6" action="#" method="POST" x-on:submit="handleSubmit(event)">
			<div>
				<label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombre de usuario</label>
				<div class="mt-2">
					<input id="username" name="username" type="text" autocomplete="username" required
						class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
				</div>
			</div>

			<div>
				<div class="flex items-center justify-between">
					<label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
					<div class="text-sm">
						<a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">¿Olvido su contraseña?</a>
					</div>
				</div>
				<div class="mt-2">
					<input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
				</div>
			</div>

			<div>
				<button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 
				text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
				focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ingresar</button>
			</div>
		</form>

		<p class="mt-10 text-center text-sm text-gray-500">
			¿No esta registrado?
			<a href=" <?= ROOT . "signup" ?>" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">¡Click Aqui!</a>
		</p>
	</div>
</div>

<script>
	function data() {
		return {
			init() {},

			handleSubmit(event) {
				event.preventDefault(); // Evita el envío del formulario

				// Obtén los valores de los campos
				const username = document.getElementById('username').value;
				const password = document.getElementById('password').value;

				const url = '<?= BACKURL . "users/login" ?>';
				const formData = new FormData();
				formData.append('password', password);
				formData.append('username', username);

				fetch(url, {
						method: 'POST',
						body: formData
					})
					.then(response => response.json())
					.then(data => {
						console.log(data);
						if (data.data.code === 200) {
							// Enviar datos a PHP para crear sesión
							fetch('<?= ROOT . "checkLogin" ?>', {
								method: 'POST',
								headers: {
									'Content-Type': 'application/json'
								},
								body: JSON.stringify(data.data) // Envía la respuesta de Node.js
							})
							.then(response => response.json())
							.then(sessionData => {
								console.log('Sesión creada:', sessionData);
								// Redirigir o realizar otra acción
								window.location.href = '<?= ROOT ?>';
							});
						}
					})
			}
		}
	}
</script>

<?php
$this->view('footer');
?>