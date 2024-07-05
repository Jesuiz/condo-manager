<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight mb-2">Hola
            {{ Auth::user()->name }}</h2>
        <p class="text-[12px] text-gray-800 dark:text-gray-400 leading-tight">Gracias por usar Condo Manager</p>
    </x-slot>

    <section>
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 my-10 xl:mb-0 px-4 mx-auto mt-14">
            <div>
                <x-dashboard-banner />

                <x-statistics-columns :condominiums="$condominiums" :users="$users" />

                <x-services-grid />

                
                <x-contact-section />
            </div>
        </div>
    </section>

</x-app-layout>