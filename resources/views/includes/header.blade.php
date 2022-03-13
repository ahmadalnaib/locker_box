
<!-- Section 1 -->
<form action="{{route('search')}}" method="post" class="pt-20 bg-white">

  @csrf

  <div class="px-10 mx-auto max-w-7xl xl:px-5">

      <div class="flex flex-col justify-center space-y-8 md:space-y-12">

          <h2 class="max-w-4xl mx-auto text-6xl font-extrabold leading-none text-left text-gray-900 sm:text-7xl md:text-8xl md:text-center">Powerful tools for new ideas</h2>
          <p class="max-w-4xl mx-auto text-xl text-left text-gray-500 md:text-2xl md:text-center">Leverage our tools to build your application quicker and easier. We've optimized our designs to help you convert your visitors into customers.</p>

          <div class="flex flex-col w-full max-w-4xl mx-auto space-y-5 md:space-y-0 md:space-x-5 md:flex-row">
              <input type="text" id="address" name="address" class="flex-1 w-full px-5 py-5 text-2xl border border-gray-300 rounded-lg focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50 focus:outline-none" placeholder="Search Address"><br>
              <div id="address-list" class="block mt-5 p-5"></div>
             
              <div>
                <select class="flex-1 w-full px-5 py-5 text-2xl border border-gray-300 rounded-lg focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50 focus:outline-none" name="category" id="" name="category">
                  <option value="">Choose City</option>
                  @include('includes/category_list')
               
                </select>
              </div>
              <button  class="flex-shrink-0 px-10 py-5 text-2xl font-medium text-center text-white bg-red-600 rounded-lg focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50 focus:ring-offset-2 focus:outline-none">Search</button>
          </div>

       

</div></div></form>



<section class="m-auto text-center" >
<div class="category mt-5">
  <ul>
    @foreach ($categories as $category)
        <li>
          <a href="{{route('category.show',$category->slug)}}" class="bg-red-900 hover:bg-red-400" >{{$category->title}}</a>
        </li>
    @endforeach
  </ul>
</div>
</section>

