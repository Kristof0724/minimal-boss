<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Todo</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="add-box">
<form id="todoform">
    <input type="text" id="title" placeholder="Új todo">
    <button id="add" type="submit">Hozzáadás</button>
</form>
</div> 
<br>
<label class="toggle">
  <input type="checkbox" id="hide-done">
  <span class="toggle-slider"></span>
  <span class="toggle-text">Kész feladatok elrejtése</span>
</label>




<div class="list">
    <ul id="todo-list"></ul>
</div>

</body>
</html>
