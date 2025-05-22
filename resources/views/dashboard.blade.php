<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <style>
                    * {
                        box-sizing: border-box;
                        margin: 0;
                        padding: 0;
                    }

                body {
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        background-color: #f8f8f8;
                        padding: 40px;
                    }

                .grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                        gap: 20px;
                    }

                .card {
                        background-color: white;
                        border-radius: 10px;
                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                        overflow: hidden;
                        display: flex;
                        flex-direction: column;
                        transition: transform 0.2s;
                    }

                    .card:hover {
                        transform: translateY(-5px);
                    }

                    .card img {
                        width: 100%;
                        height: 180px;
                        object-fit: cover;
                    }

                    .card-content {
                        padding: 15px;
                        display: flex;
                        flex-direction: column;
                        gap: 10px;
                    }

                    .card-title {
                        font-size: 1.1em;
                        font-weight: bold;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .card-description {
                        font-size: 0.9em;
                        color: #666;
                        line-height: 1.4;
                        max-height: 2.8em; /* about 2 lines */
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }
                </style>
            </head>
        <body>

  <h2 style="margin-bottom: 20px;"><b>Top Picked Foods</b></h2>

  <div class="grid">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.6BiuaCD5kyK1Yz3CevQIwAHaE7?rs=1&pid=ImgDetMain" alt="Pizza">
      <div class="card-content">
        <div class="card-title">Classic Margherita Pizza with Extra Cheese</div>
        <div class="card-description">A timeless favorite featuring rich tomato sauce, gooey mozzarella, and a sprinkle of basil for the perfect bite every time.</div>
      </div>
    </div>

    <div class="card">
      <img src="https://www.usa-beef.org/wp-content/uploads/2021/01/Double-Decker-U.S.-Beef-Burger-1536x1024.jpg" alt="Burger">
      <div class="card-content">
        <div class="card-title">Double Decker Chicken Burger</div>
        <div class="card-description">Stacked high with juicy chicken patties, crispy lettuce, and our signature sauce – it's a meal to remember.</div>
      </div>
    </div>

    <div class="card">
      <img src="https://thumbs.dreamstime.com/b/grilled-salmon-sushi-plate-wood-japanese-food-style-175254926.jpg" alt="Sushi">
      <div class="card-content">
        <div class="card-title">Salmon Sushi Platter</div>
        <div class="card-description">Fresh salmon slices over seasoned rice, served with wasabi and soy – a sushi lover’s delight.</div>
      </div>
    </div>

    <!-- Add more cards as needed -->
  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
