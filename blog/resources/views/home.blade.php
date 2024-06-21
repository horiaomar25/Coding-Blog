<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css', 'resources/js/app.js')


</head>
<body>
<div class="navbar bg-base-100 border border-black ">
  <a class="btn btn-ghost text-xl text-center">#100daysofcode</a>
  <button class="btn" onclick="my_modal_3.showModal()">Create Post</button>
<dialog id="my_modal_3" class="modal">
  <div class="modal-box">
    <form method="dialog" > 
       @csrf
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

      
    <h2 class="text-2xl font-bold mb-6">Create a New Blog Post</h2>
    
      
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" placeholder="Type here" class="input input-bordered input-md w-full max-w-xs" />
        </div>
        
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
            <textarea id="content" name="content" class="textarea textarea-bordered w-full max-w-xs h-48" placeholder="Enter content" ></textarea>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Publish
            </button>
        </div>
    

    </form>
    
  </div>
</dialog>
</div>

    <h1>Posts of Cards</h1>

    


</body>
</html>