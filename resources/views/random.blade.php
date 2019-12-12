
<style>
 
</style>

<div class="container">
<h1>Random Number</h1>
<form method="post" action="/random">
  <div class="buttons">
    @csrf
    <input type="number" value="0" placeholder="From" name="from">

    <input type="number" value="500" placeholder="To" name="to">

  </div>

  <div class="counts">
    <h1>
      {{ $randomNumber }}
    </h1>
  </div>

  <div class="buttons">
    <button>
      Random
    </button>
  </div>

</form>
</div>

