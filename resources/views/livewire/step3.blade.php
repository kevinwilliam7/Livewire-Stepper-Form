<div class="{{ $currentStep != 3 ? 'hidden' : '' }}">
    <div class="flex flex-col items-center justify-center">
        <div class="flex flex-wrap-mx-3 mb-6">
            <div class="px-10 max-w-xs">
                @if($photo)
                <img width="150px" class="rounded-full" src="{{$photo->temporaryUrl()}}">
                @else
                <img width="150px" class="rounded-full" src="https://images.generated.photos/WMyUEA_V5wp3Id2rQPp8qXFfGfG31Twsm_nZomYJyQE/rs:fit:512:512/wm:0.95:sowe:18:18:0.33/czM6Ly9pY29uczgu/Z3Bob3Rvcy1wcm9k/LmNvbmQvNjY0YmZi/MDktNGIzZC00ZTVh/LThmNmItZDE4YmE1/YzQ4MzU2LmpwZw.jpg">
                @endif
            </div>
        </div>
        <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
            </svg>
            <span class="mt-2 text-base leading-normal">Select a file</span>
            <input wire:model.lazy="photo" type='file'/>
        </label>
    </div>
    <div class="flex p-2 mt-10">
        <button wire:click.prevent="clear()" class="bg-gray-200 text-gray-800 active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Clear</button>
        <div class="flex-auto flex flex-row-reverse">
            <button type="submit" class="text-green-500 bg-transparent border border-solid border-green-500 hover:bg-green-500 hover:text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Finish</button>
            <button wire:click.prevent="back(2)" class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Previous</button>
        </div>
    </div>
</div>