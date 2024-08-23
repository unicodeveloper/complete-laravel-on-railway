<div class="mx-auto max-w-2xl py-8">
<form>
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input  type="text" id="title" name="title" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
             </div>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Type</label>
          <div class="mt-2">
            <select id="type" name="type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Standard</option>
              <option>Lightning</option>
              <option>Keynote</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="length" class="block text-sm font-medium leading-6 text-gray-900">Length</label>
          <div class="mt-2">
            <input type="text" name="length" id="length" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <p class="mt-2 text-sm text-red-600"> Error message here </p>
          </div>
        </div>

        <div class="col-span-full">
          <label for="abstract" class="block text-sm font-medium leading-6 text-gray-900">Abstract</label>
          <div class="mt-2">
            <textarea name="abstract" id="abstract" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <div class="col-span-full">
          <label for="organizer_notes" class="block text-sm font-medium leading-6 text-gray-900">Organizer notes</label>
          <div class="mt-2">
            <textarea name="organizer_notes" id="organizer_notes" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write any notes </p>
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</div>