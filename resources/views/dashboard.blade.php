<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight mb-2">Hola
            {{ Auth::user()->name }}</h2>
        <p class="text-[12px] text-gray-800 dark:text-gray-400 leading-tight">Desde Condo Manager podrás gestionar toda
            la información de tus Condominios ♥</p>
    </x-slot>

    <section>
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 my-10 xl:mb-0 px-4 mx-auto mt-14 gap-4">
            <div>
                <x-dashboard-banner />

                <x-statistics-columns :condominiums="$condominiums" :users="$users" />
            </div>
        </div>
    </section>

    <section>
        <div class="relative pt-8 pb-6 mt-16">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full px-4 mx-auto text-center">
                        <div class="text-xm text-white py-1">
                            <h2 class="text-xl font-semibold leading-tight mb-4">Lista TODO:</h2>
                            <p>- Añadir la foto de perfil a la tabla users.</p>
                            <p>- Definir las variables dinámicas de Egresos y Utilidades en el Dashboard.</p>
                            <p>- Relacionar los condominios con los empleados. Un empleado puede trabajar en solo un
                                condominio.</p>
                            <p>- Agregar un filtro a la lista de empleados. Cuando se clickee en el numero de empleados
                                de un condominio, debe llevar a la vista de empleados filtrando los resultados por el
                                condominio.</p>
                            <p>- Programar el CRUD de las listas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>