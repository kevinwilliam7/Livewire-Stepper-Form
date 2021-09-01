<div class="{{ $currentStep != 2 ? 'hidden' : '' }}">
    <div class="flex flex-wrap-mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Address</label>
            <input wire:model.lazy="address" type="text" placeholder="Karet street 5A" class="border @error('address') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 appearance-none block w-full bg-white-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            @error('address')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="flex flex-wrap-mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Province</label>
            <div class="relative">
                <select wire:model.lazy="province" class="border @error('province') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 block appearance-none w-full bg-white-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-2">
                    <option value="" selected></option>
                    @foreach ($provinces as $province)
                        <option value="{{$province->prov_id}}">{{$province->prov_name}}</option>
                    @endforeach
                </select>
                @error('province')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">City</label>
            <div class="relative">
                <select wire:model.lazy="city" class="border @error('city') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 block appearance-none w-full bg-white-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="" selected></option>
                    @if(count($cities)>0)
                    @foreach ($cities as $city)
                    <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                    @endforeach
                    @endif
                </select>
                @error('city')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
        </div>
    </div>
    <div class="flex flex-wrap-mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">District</label>
            <div class="relative">
                <select wire:model.lazy="district" class="border @error('district') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 block appearance-none w-full bg-white-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-2">
                    <option value="" selected></option>
                    @if(count($districts)>0)
                    @foreach ($districts as $d)
                        <option value="{{$d->dis_id}}">{{$d->dis_name}}</option>
                    @endforeach
                    @endif
                </select>
                @error('district')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Postal Code</label>
            <div class="relative">
                <select wire:model.lazy="zip" class="border @error('zip') border-red-500 @enderror focus:ring-2 focus:ring-blue-600 block appearance-none w-full bg-white-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="" selected></option>
                    @if(count($zips)>0)
                    @foreach ($zips as $z)
                    <option value="{{$z->postal_id}}">{{$z->postal_code}}</option>
                    @endforeach
                    @endif
                </select>
                @error('zip')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
        </div>
    </div>
    <div class="flex p-2 mt-10">
        <button wire:click.prevent="clear()" class="bg-gray-200 text-gray-800 active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Clear</button>
        <div class="flex-auto flex flex-row-reverse">
            <button wire:click.prevent="secondStepSubmit()" class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Next</button>
            <button wire:click.prevent="back(1)" class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Previous</button>
        </div>
    </div>
</div>