<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight mb-2">Condominio Name</h2>
        <p class="text-[12px] text-gray-800 dark:text-gray-400 leading-tight mb-2">Dirección de condominio</p>
        <p class="text-[12px] text-gray-800 dark:text-gray-400 leading-tight">Nombre del Administrador</p>
    </x-slot>

    <section>
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 my-10 xl:mb-0 px-4 mx-auto mt-14">

            <x-statistics-columns :condominiums="$condominiums" :users="$users" />
        
        </div>
    </section>

    <section>
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 my-10 xl:mb-0 px-4 mx-auto mt-14">

            <x-condominiums-details :condominiums="$condominiums" :users="$users" />
        
        </div>
    </section>

</x-app-layout>