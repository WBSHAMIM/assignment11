<h2>Product Uplode</h2>
@if (session('success'))
    {{ session('success') }}
@endif
<br>
<form method="POST" action="{{ route('store') }}">
  @csrf
  <input type="text" name="product_ame" placeholder="product_ame">
  @error('product_ame')
    <p>product_ame Must be filup</p>
  @enderror
  <br><br>
  <input type="text" name="price" placeholder="price">
  @error('price')
  <p>price Must be filup</p>
@enderror
  <br><br>
  <input type="text" name="quantity" placeholder="quantity">
  @error('quantity')
  <p>quantity Must be filup</p>
@enderror
  <br><br>
 <button type="submit">Submit</button>
  <br><br>

</form>

<hr>
<h2>Products List</h2>

<br>
<table style="border-collapse: collapse">
  <tr>
    <td style="border: 1px solid black; border-collapse: collapse">id</td>
    <td style="border: 1px solid black; border-collapse: collapse">product_ame</td>
    <td style="border: 1px solid black; border-collapse: collapse">price</td>
    <td style="border: 1px solid black; border-collapse: collapse">quantity</td>
    <td style="border: 1px solid black; border-collapse: collapse">edit</td>
    <td style="border: 1px solid black; border-collapse: collapse">delete</td>
  </tr>

@foreach ( $shoProducts as $allProduct )
  <tr>
    <td style="border: 1px solid black; border-collapse: collapse">{{ $allProduct->id  }}</td>
    <td style="border: 1px solid black; border-collapse: collapse">{{ $allProduct->product_ame  }}</td>
    <td style="border: 1px solid black; border-collapse: collapse">{{ $allProduct->price  }}</td>
    <td style="border: 1px solid black; border-collapse: collapse">{{ $allProduct->quantity  }}</td>
    <td style="border: 1px solid black; border-collapse: collapse"><a href="edit/{{ $allProduct->id }}">Edit</a></td>
    <td style="border: 1px solid black; border-collapse: collapse"><a href="delete/{{ $allProduct->id }}">Delete</a></td>
  </tr>
  @endforeach

</table> 



