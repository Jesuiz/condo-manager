<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded ">
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($users as $user)
        <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
            <div class="flex w-full items-center justify-between space-x-6 p-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="truncate text-xm font-medium text-gray-900">{{ $user->name }}</h3>

                        @if($user->area == 'gerencia')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-gray-50 px-1.5 py-0.5 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-600">{{ ucfirst($user->area) }}</span>
                        @elseif($user->area == 'administración')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-red-50 px-1.5 py-0.5 text-xs font-medium text-red-600 ring-1 ring-inset ring-red-600">{{ ucfirst($user->area) }}</span>
                        @elseif($user->area == 'supervisión')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-orange-50 px-1.5 py-0.5 text-xs font-medium text-orange-600 ring-1 ring-inset ring-orange-600">{{ ucfirst($user->area) }}</span>
                        @elseif($user->area == 'vigilancia')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-blue-50 px-1.5 py-0.5 text-xs font-medium text-blue-600 ring-1 ring-inset ring-blue-600">{{ ucfirst($user->area) }}</span>
                        @elseif($user->area == 'mantenimiento')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-yellow-50 px-1.5 py-0.5 text-xs font-medium text-yellow-600 ring-1 ring-inset ring-yellow-600">{{ ucfirst($user->area) }}</span>
                        @elseif($user->area == 'jardinería')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-emerald-50 px-1.5 py-0.5 text-xs font-medium text-emerald-600 ring-1 ring-inset ring-emerald-600">{{ ucfirst($user->area) }}</span>
                        @elseif($user->area == 'delegado')
                        <span
                            class="inline-flex flex-shrink-0 items-center rounded-full bg-purple-50 px-1.5 py-0.5 text-xs font-medium text-purple-600 ring-1 ring-inset ring-purple-600">{{ ucfirst($user->area) }}</span>
                        @endif
                    </div>
                    <p class="mt-1 truncate text-[12px] text-gray-500">Nombre de Condominio</p>
                    <p class="mt-1 truncate text-[12px] text-gray-500">{{ $user->doc_type }} {{ $user->document }}</p>
                </div>
                <img class="h-16 w-16 flex-shrink-0 rounded-full bg-gray-300"
                    src="https://qph.cf2.quoracdn.net/main-thumb-554097988-200-xietklpojlcioqxaqgcyykzfxblvoqrb.jpeg"
                    alt="">
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="-ml-px flex w-[35%]">
                        <a href="tel:+1-202-555-0170"
                            class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-3 text-[12px] font-semibold text-gray-900">
                            <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ $user->cellphone }}
                        </a>
                    </div>
                    <div class="-ml-px flex w-[65%]">
                        <a href="howpossible17@example.com"
                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-3 text-[12px] font-semibold text-gray-900">
                            <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path
                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                            {{ $user->email }}
                        </a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>