<div>
    <div class="h-screen flex flex-col items-center justify-center">
        <div class="w-full max-w-lg">
            <div class="bg-white shadow-md rounded">
                <div class="p-5">
                    <div class="mx-4 p-4">
                        <div class="flex items-center">
                            <div class="flex items-center text-white relative">
                                <div class="@if($currentStep == 1) bg-purple-500 border-purple-500 @else bg-green-500 border-green-500 @endif rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </div>
                                <div class="@if($currentStep == 1) text-purple-500 @else text-green-500 @endif absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase">Account</div>
                            </div>
                            <div class="@if($currentStep == 1) border-purple-300 @else border-green-300 @endif flex-auto border-t-2 transition duration-500 ease-in-out"></div>
                            <div class="@if($currentStep == 2) text-white @elseif($currentStep == 3) text-white @else text-gray-500 @endif flex items-center relative">
                                <div class="@if($currentStep == 2) bg-purple-500 border-purple-500 @elseif($currentStep == 3) bg-green-500 border-green-500 @endif rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="@if($currentStep == 2) text-purple-500 @elseif($currentStep == 3) text-green-500 @endif absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Location</div>
                            </div>
                            <div class="@if($currentStep == 2) border-purple-300 @elseif($currentStep == 3) border-green-300 @endif flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                            <div class="@if($currentStep == 3) text-white @else text-gray-500 @endif flex items-center relative">
                                <div class="@if($currentStep == 3) bg-purple-500 border-purple-300 @else border-gray-300 @endif rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                </div>
                                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Confirm</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 p-4">
                        <div class="mt-8 mp-4 w-full max-w-lg">
                            <form wire:submit.prevent="submit" enctype="multipart/form-data"> 
                                @include('livewire/step1')
                                @include('livewire/step2')
                                @include('livewire/step3')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
