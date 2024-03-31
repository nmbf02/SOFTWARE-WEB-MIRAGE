<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar vehículo') }}
        </h2>
    </x-slot>
    @include ('aside')
<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div>
  <div class="flex overflow-hidden bg-white">
      <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
      <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
          <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
              <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                   <div class="bg-white dark:bg-gray-700 {{--shadow rounded-lg--}} p-6"> 
                      <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Registro de Clientes
                      </h1>
                      <hr style="border-color: #FF914D" class="p-2">
                      {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                          receive mail.</p> --}}
                          <form>
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                              Informacion del Cliente
                            </h6>
                            <div class="flex flex-wrap">
                              <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Usuario
                                  </label>
                                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="lucky.jesse">
                                </div>
                              </div>
                              <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Email
                                  </label>
                                  <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="jesse@example.com">
                                </div>
                              </div>
                              <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Nombre
                                  </label>
                                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                                </div>
                              </div>
                              <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Apellido
                                  </label>
                                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                                </div>
                              </div>
                            </div>
                    
                            <hr class="mt-6 border-b-1 border-blueGray-300">
                    
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                              Contacto
                            </h6>
                            <div class="flex flex-wrap">
                              <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Direccion
                                  </label>
                                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                </div>
                              </div>
                              <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Ciudad
                                  </label>
                                  <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="New York">
                                </div>
                                <div class="md:col-span-2">
                                  <label for="city">City</label>
                                  <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                              </div>
                              <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   Pais 
                                  </label>
                                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
                                </div>
                              </div>
                              <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Codigo Postal
                                  </label>
                                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Postal Code">
                                </div>
                              </div>
                            </div>
                    
                            <hr class="mt-6 border-b-1 border-blueGray-300">
                    
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                              Informacion Adicional
                            </h6>
                            <div class="flex flex-wrap">
                              <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    
                                  </label>
                                  <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> A beautiful UI Kit and Admin for JavaScript &amp; Tailwind CSS. It is Freeand Open Source.</textarea>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


@include ('footer')
<script src="/js/paginacion.js"></script>
</x-app-layout>