
<div>
        <form action="">
                <div class="mt-6 p-2">
                    
                    <input  type="text" wire:model="nombre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingresar nombre" required="">
                </div>
                <div class="mb-6 p-2">
        
                    <input  type="text" wire:model="categoria"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingresar categoria" required="">
                </div>
                <div class="mb-6 p-2">
        
        <input  type="text" wire:model="tipo"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Ingresar tipo" required="">
    </div>
                <div class="mb-6 p-2">

                    <input  type="text" wire:model="fechaV"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingresar fecha de vencimiento" required="">
                </div>
                <div class="mb-6 p-2">
                    <input type="text" wire:model="valor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingresar valor" required="">
                </div>
            
            
                <div>
            <button type="" wire:click.prevent="guardar"
                class="mt-5 m-1 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
               
                Registrar
               
            </button>
            </div>

            </form>
           
               
            <div class="flex items-center w-80 m-1">
      <div class="relative mx-12 w-full lg:mx-0 mb-4 ">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
          <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
            <path
              d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          </svg>
        </span>
        <input wire:model="search"
          class="form-input w-full sm:w-full rounded-md pl-10 pr-4 border bg-gray-50 border-gray-300 focus:border-indigo-600"
          type="text" placeholder="Search">
      </div>
    </div>


<div class="flex flex-col">               
            
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Nombre 
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Categoria
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Tipo
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Fecha vencimiento
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Valor
              </th>

            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
        
          @foreach($producto as $p)
                @php
                    $suma += $p->valor;
                @endphp
            <tr>

               <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
              {{$p->nombre}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                {{$p->categoria}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                {{$p->tipo}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                {{$p->fechaV}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                {{$p->valor}}
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<p class="text-right font-medium bg-green-300 ">
total:$ {{$suma}}

</p>



</div>
