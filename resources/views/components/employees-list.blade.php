<table class="items-center bg-transparent w-full border-collapse ">
    <thead>
        <tr>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Nombre</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Condominio</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Área</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Sueldo</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Teléfono</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Documento</th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td
                class="border-t-0 px-6 py-3 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4">
                {{ $user->name }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $user->condominium->name }}</td>

            @if($user->area == 'gerencia')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-gray-50 px-2 py-0.5 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-600">
                    {{ ucfirst($user->area) }}</span></td>

            @elseif($user->area == 'administración')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-red-50 px-2 py-0.5 text-xs font-medium text-red-600 ring-1 ring-inset ring-red-600">
                    {{ ucfirst($user->area) }}</span></td>

            @elseif($user->area == 'supervisión')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-orange-50 px-2 py-0.5 text-xs font-medium text-orange-600 ring-1 ring-inset ring-orange-600">
                    {{ ucfirst($user->area) }}</span></td>

            @elseif($user->area == 'vigilancia')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-blue-50 px-2 py-0.5 text-xs font-medium text-blue-600 ring-1 ring-inset ring-blue-600">
                    {{ ucfirst($user->area) }}</span></td>

            @elseif($user->area == 'mantenimiento')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-yellow-50 px-2 py-0.5 text-xs font-medium text-yellow-600 ring-1 ring-inset ring-yellow-600">
                    {{ ucfirst($user->area) }}</span></td>

            @elseif($user->area == 'jardinería')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-medium text-emerald-600 ring-1 ring-inset ring-emerald-600">
                    {{ ucfirst($user->area) }}</span></td>

            @elseif($user->area == 'delegado')
            <td class="border-t-0 align-middle items-center border-l-0 border-r-0 text-xs whitespace-wrap p-4"><span
                    class="inline-flex flex-shrink-0 align-middle items-end rounded-full bg-purple-50 px-2 py-0.5 text-xs font-medium text-purple-600 ring-1 ring-inset ring-purple-600">
                    {{ ucfirst($user->area) }}</span></td>

            @endif

            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                S/{{ number_format($user->amount, 2, '.', ',') }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $user->cellphone }}</td>

            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                @if($user->country == 'PE')
                <img src="{{ asset('images/flags/pe.webp') }}" alt="Perú" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @elseif($user->country == 'VE')
                <img src="{{ asset('images/flags/ve.webp') }}" alt="Venezuela" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @elseif($user->country == 'ARG')
                <img src="{{ asset('images/flags/arg.webp') }}" alt="Argentina" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @elseif($user->country == 'COL')
                <img src="{{ asset('images/flags/col.webp') }}" alt="Colombia" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @elseif($user->country == 'BRA')
                <img src="{{ asset('images/flags/bra.webp') }}" alt="Brasil" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @elseif($user->country == 'CHL')
                <img src="{{ asset('images/flags/chl.webp') }}" alt="Chile" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @elseif($user->country == 'MX')
                <img src="{{ asset('images/flags/mx.webp') }}" alt="México" class="inline-block mr-1"
                    style="width: 15px; height: 10px;">
                @endif
                {{ $user->doc_type }} {{ $user->document }}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-wrap p-4">
                {{ $user->email }}</td>

            <!-- <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $user->is_active ? 'Sí' : 'No' }}</td> -->
        </tr>
        @endforeach
    </tbody>
</table>