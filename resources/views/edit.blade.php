<h2>Edit Product</h2>

<br>
<form method="POST" action="{{ route('update', $edit->id) }}">
  @csrf
  <input type="text" name="product_ame" value="{{ $edit->product_ame }}" placeholder="product_ame">
  @error('product_ame')
    <p>product_ame Must be filup</p>
  @enderror 
  <br><br>
  <input type="text" name="price" value="{{ $edit->price }}" placeholder="price">
  @error('price')
  <p>price Must be filup</p>
@enderror
  <br><br>
  <input type="text" name="quantity" value="{{ $edit->quantity }}" placeholder="quantity">
  @error('quantity')
  <p>quantity Must be filup</p>
@enderror
  <br><br>
 <button type="submit">Submit</button>
  <br><br>

</form>

