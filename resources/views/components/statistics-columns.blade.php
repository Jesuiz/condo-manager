<div class="grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
    <div
        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md4 ease-linear transition-all duration-150 hover:scale-110">
        <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
            </svg>

        </div>
        <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                Condominios</p>
            <h4
                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                {{ $condominiums ? count($condominiums) : 0 }}
            </h4>
        </div>
    </div>

    <div
        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md ease-linear transition-all duration-150 hover:scale-110">
        <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-purple-600 to-purple-400 text-white shadow-purple-500/40 absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
            </svg>
        </div>
        <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                Empleados</p>

            <h4
                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                {{ $users ? count($users) : 0 }}
            </h4>
        </div>
    </div>

    <div
        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md ease-linear transition-all duration-150 hover:scale-110">
        <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-red-600 to-red-400 text-white shadow-red-500/40 absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
            </svg>

        </div>
        <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                Egresos</p>
            <h4
                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                3,462</h4>
        </div>
    </div>

    <div
        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md ease-linear transition-all duration-150 hover:scale-110">
        <div
            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 absolute -mt-4 grid h-16 w-16 place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
            </svg>

        </div>
        <div class="p-4 text-right">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                Utilidades</p>
            <h4
                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                $103,430</h4>
        </div>
    </div>
</div>