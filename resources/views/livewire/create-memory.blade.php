 <form class="max-w-5xl" wire:submit="save" x-data="{
 
     imgsrc: null,
     previewFile() {
         let file = this.$refs.myFile.files[0];
         if (!file || file.type.indexOf('image/') === -1) return;
         this.imgsrc = null;
         let reader = new FileReader();
 
         reader.onload = e => {
             this.imgsrc = e.target.result;
         }
 
         reader.readAsDataURL(file);
 
     }
 }" x-cloak>

     <div class="grid items-start gap-4 lg:grid-cols-3">
         <div class="grid gap-4 lg:col-span-2">
             <div class="grid gap-4 md:grid-cols-2">

                 <div class="relative">
                     <input type="text" wire:model.blur="name" id="name" name="name"
                         class="focus:border-blue-600 dark:focus:border-blue-500 peer block w-full appearance-none !rounded-none border-0 bg-gray-50 px-2.5 pb-2.5 pt-5 text-gray-900 focus:outline-none focus:ring-0 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                         placeholder=" " />
                     <label for="name"
                         class="peer-focus:text-blue-600 peer-focus:dark:text-blue-500 absolute start-2.5 top-4 z-10 origin-[0] -translate-y-4 scale-75 transform text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400">Your
                         name</label>

                     @error('name')
                         <x-error class="error">{{ $message }}</x-error>
                     @enderror

                 </div>

                 <div class="relative">
                     <input type="text" id="email" name="email" wire:model.blur="email"
                         class="focus:border-blue-600 dark:focus:border-blue-500 peer block w-full appearance-none !rounded-none border-0 bg-gray-50 px-2.5 pb-2.5 pt-5 text-gray-900 focus:outline-none focus:ring-0 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                         placeholder=" " />
                     <label for="email"
                         class="peer-focus:text-blue-600 peer-focus:dark:text-blue-500 absolute start-2.5 top-4 z-10 origin-[0] -translate-y-4 scale-75 transform text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400">Your
                         email</label>

                     @error('email')
                         <x-error class="error">{{ $message }}</x-error>
                     @enderror

                 </div>
             </div>

             <div class="relative">
                 <textarea rows="4" id="text" name="text" wire:model="text"
                     class="focus:border-blue-600 dark:focus:border-blue-500 peer block w-full appearance-none !rounded-none border-0 bg-gray-50 px-2.5 pb-2.5 pt-5 text-gray-900 focus:outline-none focus:ring-0 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                     placeholder=" "></textarea>
                 <label for="text"
                     class="peer-focus:text-blue-600 peer-focus:dark:text-blue-500 absolute start-2.5 top-4 z-10 origin-[0] -translate-y-4 scale-75 transform text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400">Your
                     memory</label>
                 @error('text')
                     <x-error class="error">{{ $message }}</x-error>
                 @enderror

             </div>
         </div>

         <div
             class="relative flex min-h-[8rem] w-full self-stretch overflow-hidden border-2 border-dashed border-gray-300">
             <label
                 class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap border bg-white bg-opacity-80 px-6 py-2 hover:bg-opacity-100"
                 for="imgSelect">{{ $image ? 'Choose another image' : 'Add an image' }}</label>
             <input wire:model="image" name="image" class="hidden" type="file" id="imgSelect" accept="image/*"
                 x-ref="myFile" @change="previewFile">

             @if ($image)
                 <img class="aspect-square" src="{{ $image->temporaryUrl() }}">
                 <button class="absolute right-3 top-3 h-8 w-8 rounded-full bg-gray-800 p-1 text-white"
                     aria-label="Remove image" wire:click.prevent="$set('image', null)">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="h-6 w-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             @endif
         </div>
     </div>

     <div class="mt-4 flex justify-between">
         <p class="text-sm leading-tight text-white">Small print...</p>
         <button type="submit" class="bg-pink px-6 py-2 text-lg text-white">
             Submit

             <svg wire:loading.delay class="mr-2 inline-block h-5 w-5 animate-spin text-white"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                 <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                 </circle>
                 <path class="opacity-75" fill="currentColor"
                     d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                 </path>
             </svg>

         </button>
     </div>
 </form>
