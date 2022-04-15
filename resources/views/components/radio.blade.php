<div class="place-self-center text-blue-400 font-thin">

<form>
@csrf
@method('PUT')
<span class="mr-4 p-4">
<input type="radio" id="isVisable" name="visable" value=1 >
  <label for="isVisable">displayed</label>
</span>
<span class="p-4">
<input type="radio" id="notVisable" name="visable" value=0>
  <label for="notVisable">hidden</label>
</span></div>
