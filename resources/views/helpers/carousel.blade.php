<style>
    #first{background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)}
    #second{background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)}
</style>

<div>
  <div class="pb-12">
    <div class="sliderAx h-auto">
      <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center h-auto text-white py-36 px-10 object-fill" id="first">
          <div class="md:w-1/2">
            <p class="font-bold text-sm uppercase">Servicii</p>
            <p class="text-3xl font-bold">Salut!</p>
            <p class="text-2xl mb-10 leading-none">Carusel cu imagini</p>
            <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
          </div>  
        </div>
        <br>
      </div>

      <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-36 px-10 object-fill" id="second">
          <p class="font-bold text-sm uppercase">Servicii</p>
          <p class="text-3xl font-bold">Salut!</p>
          <p class="text-2xl mb-10 leading-none">Carusel cu imagini</p>
          <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
        </div>
        <br>
      </div>
    </div>

    <div class="flex justify-between w-12 mx-auto pb-2">
      <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2"></button>
      <button id="sButton2" onclick="sliderButton2()" class="bg-purple-400 rounded-full w-4 p-2"></button>
    </div>
  </div>
</div>