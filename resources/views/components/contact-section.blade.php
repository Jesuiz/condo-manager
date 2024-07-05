<section>
    <div class="mx-auto max-w-screen-2xl mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            <div class="relative z-10 lg:py-8">
                <div class="relative h-64 sm:h-80 lg:h-full overflow-hidden">
                    <img alt="" style="background-image: url('{{ asset('images/developer-1.webp') }}');
                    transform: scale(1.01);"
                        class="absolute inset-0 h-full w-full bg-cover bg-center rounded-t-2xl lg:rounded-2xl" />
                </div>
            </div>

            <div class="relative flex items-center bg-gray-100 rounded-b-2xl lg:rounded-l-none lg:rounded-r-2xl">
                <span class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100 rounded-l-none lg:rounded-l-2xl"></span>

                <div class="p-6 sm:p-8 lg:p-12">
                    <h2 class="text-2xl font-bold sm:text-3xl">
                        ¿Necesitas ayuda?
                    </h2>

                    <p class="mt-4 text-gray-600">
                        Si la aplicación presenta alguna falla o tienes alguna sugerencia, por favor, ponte en contacto.
                    </p>

                    <div
                        class="mt-[14px] sm:mt-[36px] flex items-center justify-between sm:justify-start gap-6 2xl:gap-10">
                        <a href="https://api.whatsapp.com/send/?phone=51935035069" target="_blank"
                            class="flex flex-row items-center text-sm text-white linear rounded-md bg-gray px-4 py-2 text-center font-medium transition duration-200 bg-gray-700 ease-linear transition-all duration-150 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 pr-1" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path
                                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                            </svg>
                            Ir a Whatsapp
                        </a>

                        <div class="text-sm font-medium text-left text-gray-700 2xl:ml-2">
                            <p class="text-xs">¿Tienes alguna sugerencia?</p>
                            <a href="mailto:jesuizmail@gmail.com"
                                class="cursor-pointer transition-all duration-150 hover:font-bold">Enviar correo
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>