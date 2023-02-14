<x-app-layout>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

        <table class="w-full text-left border border-slate-300 rounded">
                    <thead class="border-b-4 border-blue-500">
                        <tr class="text-lg text-black  font-medium">
                            <th scope="col" class="py-3 px-6 ">
                            Image
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Dish name
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Dish description
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-blue-600">
                    @foreach ($dishes as $dish)
                        <tr id="{{$dish["id"]}}" class="bg-white border-b text-base font-medium text-black ">
                            <th scope="row" class="py-4 px-6 font-medium ">
                            {{$dish["image"]}}
                            </th>
                            <td class="py-4 px-6 text-center">
                            {{$dish["dish_name"]}}
                            </td>
                            <td class="py-4 px-6 text-center">
                            {{$dish["description"]}}
                            </td>
                            <td class="flex items-center justify-center py-4 px-6 space-x-3">
                                <form action="{{ route("dishes.edit",$dish) }}"  method="POST">
                                    @csrf
                                    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal" onclick="fillModal(this)">
                                        <div class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg><span>Edit</span></div>
                                    </button>
                                </form>
                                <form action="{{ route("dishes.destroy",$dish) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit">
                                    <div  class="flex justify-center items-center bg-blue-200 text-blue-600 rounded-md w-[7rem] h-[2.5rem] text-lg font-medium"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1b62b3"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg><span>Remove</span></div>
                                    </button>
                                </form>

                            </td>                 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
<!-- Modal toggle -->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Add Dish
</button>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
<div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Dish
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('dishes.store') }} "method="POST" id="add-form">
                    @csrf
                    <div class="flex flex-col">
                        <label for="">Dish Name</label>
                        <input type="text" class="rounded-lg" name="title">
                        <label for="">Dish Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="rounded-lg"></textarea>
                        <label for="">Dish image</label>
                        <input type="file" name="image">
                        <input type="text" style="display:none;" id="foredit" name="foredit">
                    </div>
                    <button data-modal-hide="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="add-dish-btn">Add</button>
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                </form>
            </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <script>
        function fillModal(element){
            document.querySelector('input[name="title"]').value = element.parentElement.parentElement.parentElement.children[1].innerText;
            document.querySelector('textarea[name="description"]').value = element.parentElement.parentElement.parentElement.children[2].innerText;
            document.querySelector('input[name="title"]').value = element.parentElement.parentElement.parentElement.children[1].innerText;
            document.getElementById('foredit').value=element.parentElement.parentElement.parentElement.id;
            document.getElementById('add-form').setAttribute("action"," {{ route('editDish') }}");
            document.getElementById('add-dish-btn').setAttribute("type",'submit');
            
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</x-app-layout>
