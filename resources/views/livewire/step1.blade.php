<div class="{{ $currentStep != 1 ? 'hidden' : '' }}"> 
    <div class="flex flex-wrap-mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">First Name</label>
            <input wire:model.lazy="firstname" type="text" placeholder="Jane" class="border @error('firstname') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 appearance-none block w-full bg-white-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            @error('firstname')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Last Name</label>
            <input wire:model.lazy="lastname" type="text" placeholder="Jane" class="border @error('lastname') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 appearance-none block w-full bg-white-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            @error('lastname')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="flex flex-wrap-mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
            <input wire:model.lazy="email" type="email" placeholder="mail@example.com" class="border @error('email') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 appearance-none block w-full bg-white-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            @error('email')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="flex flex-wrap-mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Password</label>
            <input wire:model.lazy="password" type="password" placeholder="******************" class="border @error('password') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 appearance-none block w-full bg-white-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            @error('password')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="flex p-2 mt-10">
        <button wire:click.prevent="clear()" class="bg-gray-200 text-gray-800 active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Clear</button>
        <div class="flex-auto flex flex-row-reverse">
            <button wire:click.prevent="firstStepSubmit()" class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Next</button>
        </div>
    </div>
</div>