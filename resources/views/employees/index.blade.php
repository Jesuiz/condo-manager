<x-app-layout>

    <section class="py-1">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mb-12 xl:mb-0 px-4 mx-auto mt-14">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">

                <div class="rounded-t mb-0 px-5 py-6 border-0">
                    <div class="flex flex-col items-center md:flex-row">

                        <div class="w-full text-center md:grow md:text-left">
                            <h3 class="font-semibold text-base text-blueGray-700">Listado de Empleados</h3>
                        </div>


                        <x-list-buttons />
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    
                    <x-employees-list :condominiums="$condominiums" :users="$users" />
                </div>
            </div>
        </div>
    </section>

</x-app-layout>