<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                  

                    <section class="relative py-16 bg-blueGray-50">
                        <div class="w-full mb-12 px-4">
                          <button type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Agregar producto</button>
                          <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
                          bg-pink-900 text-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                              <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                                  <h3 class="font-semibold text-lg text-white">Productos</h3>
                                </div>
                              </div>
                            </div>
                            <div class="block w-full overflow-x-auto ">
                              <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                  <tr>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Producto</th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Precio</th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Estado</th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Acciones</th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700"></th>
                                  </tr>
                                </thead>
                        
                                <tbody>
                                  <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                      <img src="{{asset('img/reloj.png')}}" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                      <span class="ml-3 font-bold text-white"> Reloj Apple</span></th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$100.000</td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                      <i class="fas fa-circle text-orange-500 mr-2"></i>Activo</td>
                                    
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><div class="flex items-center">
                                      <div>
                                        <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                                        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                                      </div>
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                      <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                                        <i class="fas fa-ellipsis-v"></i></a>
                                      <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
                                      </div>
                                    </td>
                                  </tr>
                        

                                  <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                      <img src="{{asset('img/diademas.png')}}" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                      <span class="ml-3 font-bold text-white"> Diadema gamer</span></th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">100.000</td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                      <i class="fas fa-circle text-orange-500 mr-2"></i>Activo</td>
                                    
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><div class="flex items-center">
                                      <div>
                                        <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                                        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                                      </div>
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                      <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                                        <i class="fas fa-ellipsis-v"></i></a>
                                      <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
                                      </div>
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                            <footer class="relative pt-8 pb-6 mt-8">
                              <div class="container mx-auto px-4">
                                <div class="flex flex-wrap items-center md:justify-between justify-center">
                                  <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                                      Hecho por prototipo Julio César Betín
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </footer>
                        </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>