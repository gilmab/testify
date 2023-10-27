<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">

  .center{
    margin: auto ;
    width: 50% ;
    border: 2px solid white ;
    text-align: center;
    margin-top: 40px ;
  }
  .font-size{
    text-align: center;
    font-size: 40px;
    padding-top: 20px ;
  }
  .img_size{
    width: 150px;
    height: 150px ;
  }
  .th_color{
    background: skyblue ;
  }
  .th_deg{
    padding: 30px ;
  }

  </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message')}}
                </div>
                @endif


              <h2 class="font-size"> All products  </h2>

                <table class="center">
                  <tr class="th_color">
                      <th class="th_deg"> Product Title  </th>
                      <th class="th_deg"> Description </th>
                      <th class="th_deg"> Quantity </th>
                      <th class="th_deg"> Category</th>
                      <th class="th_deg"> Price </th>
                      <th class="th_deg"> Discount price  </th>
                      <th class="th_deg">  Product Image </th>
                      <th class="th_deg">  delete </th>
                      <th class="th_deg">  edit </th>
                  </tr>
                  @foreach($product as $prod)
                  <tr>
                      <td> {{ $prod->title}} </td>
                      <td> {{ $prod->description}}</td>
                      <td> {{ $prod->quantity}} </td>
                      <td> {{ $prod->category}} </td>
                      <td>  {{ $prod->price}}</td>
                      <td> {{ $prod->discount_price}} </td>
                      <td>
                          <img class="img_size" src="{{asset('product/'.$prod->image)}}">
                      </td>
                      <td>
                          <a href="{{ url('edit_prod/'.$prod->id)}}" class="btn btn-success"> Edit </a>
                      </td>
                      <td>
                        <a href="{{ url('delete_prod/'.$prod->id)}}" onclick="return confirm('Are you sure to delete this')" class="btn btn-danger"> delete </a>
                    </td>
                  </tr>
                  @endforeach
                </table>

            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
