<div>
<div class="mt-5 md:mt-0 md:col-span-2">
      <form action="" method="POST" wire:submit.prevent="createPost">
      @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div>
              <label for="body" class="block text-sm font-medium text-gray-700">
                Commentaire
              </label>
              <div class="mt-1">
                <textarea id="body" name="body" wire:model="body" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="hello tout le monde"></textarea>

              </div>
            </div>
            @error('body')
              <div class="bg-red-lightest border border-red-light text-red-dark pl-4 pr-8 py-3 rounded relative" style="border: red 2px solid; background-color: #FCEBEA;" role="alert">
                <strong class="font-bold" style="color:red">Oups!</strong>
                <span class="block sm:inline" style="color:red">{{ $message }}</span>
              </div>
                    
            @enderror
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>

        </div>
      </div>
      </form>
      </div>
    
</div>
