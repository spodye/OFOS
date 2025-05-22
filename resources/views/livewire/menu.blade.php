<div>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 2rem;
    }

    .grid {
      display: grid;
      margin: 20px;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      display: flex;
      flex-direction: column;
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .title {
      font-weight: bold;
      font-size: 1.1rem;
    }

    .subtitle {
      font-weight: bold;
      color: #888;
      margin-top: 4px;
    }

    .description {
      margin-top: 8px;
      color: #555;
      font-size: 0.95rem;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* Number of lines to show */
      -webkit-box-orient: vertical;
    }
  </style>
</head>
<body>

  <div class="grid">
    <div class="card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/grilled-chicken-horizontal-1532030541.jpg" alt="Dish Image">
      <div class="card-content">
        <div class="title">Grilled Chicken</div>
        <div class="subtitle">Main Course</div>
        <div class="description">
          Juicy grilled chicken served with fresh herbs and lemon zest, accompanied by seasonal vegetables and garlic mashed potatoes.
        </div>
      </div>
    </div>

    <div class="card">
      <img src="https://www.hickoryfarms.com/on/demandware.static/-/Sites-Web-Master-Catalog/default/dwd8f5d898/images/products/chocolate-lava-cakes-2ct-64033-1.jpg" alt="Dish Image">
      <div class="card-content">
        <div class="title">Chocolate Lava Cake</div>
        <div class="subtitle">Dessert</div>
        <div class="description">
          Warm chocolate cake with a gooey molten center, topped with vanilla ice cream and chocolate shavings.
        </div>
      </div>
    </div>
    <div class="card">
      <img src="https://img.freepik.com/premium-photo/delicious-fried-mutton-ribs-roasted-cutlets-with-barbecue-pepper-generative-ai_21085-36256.jpg" alt="Dish Image">
      <div class="card-content">
        <div class="title">Roasted Mutton Ribs</div>
        <div class="subtitle">Main Course</div>
        <div class="description">
          Roasted Mutton Ribs with smoky, tender, and packed with flavor, offering a crispy exterior and juicy, melt-in-your-mouth meat.
        </div>
      </div>

    <!-- Add more cards as needed -->
  </div>

</body>

</div>
