<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                  <li class="inline-flex items-center">
                    <a href="{{route('dashboard.user.index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                      <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Home
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Edit User</a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$user->name}}</a>
                    </div>
                  </li>
                </ol>
            </nav>
              
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div>
                @if($errors->any())
                <div class="md-5" role="alert">
                    <div class="bg-red-500 text-white font-bold-rounded-t px-4 py-2">
                        There is something wrong !!
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-reed-100 px-4 py-5 text-red-700">
                        <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>
                @endif
        <form action="{{ route('dashboard.user.update', $user->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                    <input type="text" placeholder="User Name" value="{{ old('name') ?? $user->name}}" name="name" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 ">
                </div>
                <div class="w-full px-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
                    <input type="email" placeholder="User Email" value="{{ old('email') ?? $user->email}}" name="email" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 ">
                </div>
                <div class="w-full px-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Role</label>
                    <select name="roles" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:bg-gray-500 " >
                        <option value="{{ $user->roles }}">{{ $user->roles }}</option>
                        <option disabled >------------</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="USER">USER</option>
                    </select>
                </div>
            </div>
            <div class="flex-wrap -mx-3 mb-6 ">
                <div class="w-full px-3 text-right">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg ">Update Product</button>
                </div>
            </div>
            </div>
        </form>
            </div>
            </div>

        </div>

</x-app-layout> 