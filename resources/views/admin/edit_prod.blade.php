<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center ;
            padding-top: 40px ;
        }
        .font_size{
            font-size: 40px ;
            padding-bottom: 40px ;
        }
        .text_color{
            color: black ;
            padding-bottom: 20px ;
        }
        label {
            display: inline-block ;
            width: 200px ;
        }
        .div_design{
            padding-bottom: 15px ;
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
                <div class="div_center">
                        <h1 class="font_size"> Updated Product</h1>

                        @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x</button>
                            {{session()->get('message')}}
                    </div>

                      @endif

                    <form action="{{url('update_product/'.$product->id)}}"
                     method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="div_design">
                            <label>Product Title </label>
                            <input class="text_color" type="text"
                            name="title" placeholder="title" required="" value="{{$product->title}}"/>
                        </div>

                        <div class="div_design">
                            <label>description </label>
                            <input class="text_color" type="text"
                            name="description" placeholder="description" required="" value="{{$product->description}}"/>
                        </div>

                        <div class="div_design">
                            <label>Price </label>
                            <input class="text_color" type="number"
                            name="price" placeholder="price" required="" value="{{$product->price}}" />
                        </div>

                        <div class="div_design">
                            <label>quantity </label>
                            <input class="text_color" type="number" name="quantity" min="0" placeholder="title" value="{{$product->quantity}}" />
                        </div>

                        <div class="div_design">
                            <label>dicount price </label>
                            <input class="text_color" type="number" name="discount_price" min="0" value="{{$product->discount_price}}" placeholder="discount price" />
                        </div>

                        <div class="div_design">
                            <label>Category </label>
                            <select class="text_color" name="category">
                                <option value="" selected=""> Add a category here </option>
                                @foreach($category as $categori)
                                <option value="{{$categori->category_name}}"> {{$categori->category_name}} </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="div_design">
                            <label> Currents Product Image </label>
                            <img style="margin:auto;" height="100" width="100" src="{{asset('product/'.$product->image)}}" />
                        </div>

                        <div class="div_design">
                            <label> Change Product Image </label>
                            <input type="file" name="image" />

                        </div>

                        <div class="div_design">

                            <input type="submit" value="Update Product" class="btn btn-primary">

                        </div>
                    </form>

                </div>

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
