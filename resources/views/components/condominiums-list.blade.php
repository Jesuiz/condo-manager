
<table class="items-center bg-transparent w-full border-collapse ">
    <thead>
        <tr>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Condominio</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Ubicación</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Administrador</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Nómina</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Ingresos</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Egresos</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Utilidades</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Ver Más</th>
        </tr>
    </thead>
    <tbody>
        @foreach($condominiums as $condominium)
        <tr classs="flex items-center justify-center">
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-wrap p-4">
                {{ $condominium->name }}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-wrap p-4">
                {{ $condominium->location }}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $condominium->user->name ?? 'Sin usuario' }}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $condominium->employees }} empleados</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                S/{{ number_format($condominium->incomes, 2, '.', ',') }}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                S/{{ number_format($condominium->expenses, 2, '.', ',') }}
            </td>
            <td
                class="align-middleborder-t-0 px-5 border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                @php
                $utility = $condominium->utility;
                $isPositive = $utility >= 0;
                $absoluteValue = abs($utility);
                @endphp

                @if($isPositive)
                <span class="inline-flex flex-shrink-0 align-middle items-center rounded-full bg-green-25 px-1.5 py-0.5 text-xs font-medium text-green-600 ring-1 ring-inset ring-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-4 h-4 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" /></svg>
                    S/{{ number_format($absoluteValue, 2, '.', ',') }}</span>

                @elseif(!$isPositive)
                <span class="inline-flex flex-shrink-0 align-middle items-center rounded-full bg-red-25 px-1.5 py-0.5 text-xs font-medium text-red-600 ring-1 ring-inset ring-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-4 h-4 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg>
                    S/{{ number_format($absoluteValue, 2, '.', ',') }}</span>
                @endif

            </td>
            
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <button
                    class="cursor-pointer rounded-2xl outline-none focus:outline-none transition-transform duration-150 ease-in-out relative hover:scale-125 bg-gray-700 hover:bg-gray-900 text-white text-xs h-[25px] w-[25px] text-base font-medium leading-normal text-center flex items-center shadow-none border-0 justify-center">


                    <span class=" p-0 m-0 leading-none shrink-0">
                        <a href="/condominiums/{{$condominium->id}}/details"
                            class="cursor-pointer transition-all duration-150 hover:font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg></a>
                    </span>
                </button>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>