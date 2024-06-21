<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="navbar bg-base-100 border border-black ">
  <a class="btn btn-ghost text-xl text-center">#100daysofcode</a>
  <button class="btn" onclick="my_modal_3.showModal()">Create Post</button>
<dialog id="my_modal_3" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

      <h3 class="font-bold text-lg">Hello!</h3>
      <textarea placeholder="Bio" className="textarea textarea-bordered textarea-lg w-full max-w-xs" ></textarea>
    </form>
    
  </div>
</dialog>
</div>

    <h1>Posts of Cards</h1>

    


</body>
</html>