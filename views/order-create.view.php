<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>
<?php require ('partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST">
      <div class="col-span-full">
        <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First Name</label>
        <div class="mt-2">
          <textarea 
            name="first_name" 
            id="first_name" 
            rows="3" 
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" 
            placeholder="Don't actually put your real name"></textarea>
        </div>
      </div>

      <div class="col-span-full mt-4">
        <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
        <div class="mt-2">
          <textarea 
            name="last_name" 
            id="last_name" 
            rows="3" 
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" 
            placeholder="Optional or required depending on DB">
          </textarea>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>
  </div>
</main>
