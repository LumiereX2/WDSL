<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/WDSL/Blogs/blog-template.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drifting Diaries | Paris Blog</title>
</head>
<body>
  <header id="navbar">
    <!-- Nav Bar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/WDSL/navbar.php'); ?>
  </header>

  <!-- === BLOG LAYOUT === -->
  <section class="blog-entry">
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <h4>Quick Jump</h4>
      <ul>
        <li><a href="#eiffel">Eiffel Tower</a></li>
        <li><a href="#louvre">Louvre Museum</a></li>
        <li><a href="#notre-dame">Notre-Dame Cathedral</a></li>
        <li><a href="#montmartre">Montmartre & Sacré-Cœur</a></li>
        <li><a href="#seine">Seine River & Cruises</a></li>
        <li><a href="#other">Other Recs</a></li>
      </ul>
    </aside>

    <!-- MAIN BLOG CONTENT -->
    <article class="blog-content">
      <h2 class="blog-title">PARIS: THE CITY OF LIGHTS</h2>

      <div class="main-image">
        <img src="/WDSL/Assets/Pictures/FR_Paris.webp" alt="Paris skyline">
      </div>

      <p>
        Paris, the “City of Lights,” is a magical blend of history, art, and romance. 
        Walking through its streets, you are surrounded by stunning architecture, charming cafés, 
        and world-famous landmarks. Every corner tells a story, inviting you to explore more.
      </p>

      <p>
        From iconic monuments to hidden gardens, Paris offers something for every traveler. 
        Whether you’re gazing at the Eiffel Tower sparkling at night, wandering the Louvre halls, 
        or strolling along the Seine, the city leaves a lasting impression.
      </p>

      <h3 id="eiffel"><strong>Eiffel Tower</strong></h3>
      <p>
        No visit to Paris is complete without seeing the Eiffel Tower. 
        Take the elevator to the top for breathtaking city views or enjoy a picnic in the Champ de Mars. 
        Visiting at night lets you witness the tower’s sparkling light show — truly unforgettable.
      </p>

      <h3 id="louvre"><strong>Louvre Museum</strong></h3>
      <p>
        Home to thousands of masterpieces including the Mona Lisa and Venus de Milo, 
        the Louvre is a must-see for art lovers. Its vast collection spans centuries and continents, 
        making it one of the world’s most iconic museums.
      </p>

      <h3 id="notre-dame"><strong>Notre-Dame Cathedral</strong></h3>
      <p>
        Despite the fire damage, Notre-Dame remains an architectural and cultural treasure. 
        Admire its Gothic façade, intricate sculptures, and if possible, explore the surrounding Île de la Cité.
      </p>

      <h3 id="montmartre"><strong>Montmartre & Sacré-Cœur</strong></h3>
      <p>
        Montmartre, once home to famous artists like Picasso, offers cobblestone streets, art studios, 
        and cafés. Climb to the Sacré-Cœur Basilica for panoramic views of Paris and enjoy the bohemian charm of this neighborhood.
      </p>

      <h3 id="seine"><strong>Seine River & Cruises</strong></h3>
      <ul>
        <li>Evening river cruises — city lights and bridges</li>
        <li>Walking along the Seine — quaint bookstalls and street performers</li>
        <li>Picnic by the riverbanks — relax like a local</li>
        <li>Bridge photo spots — Pont Alexandre III and Pont Neuf</li>
      </ul>

      <h3 id="other"><strong>Other Recommendations</strong></h3>
      <ul>
        <li>Musée d’Orsay — impressionist art in a former railway station</li>
        <li>Palace of Versailles — opulent gardens and royal history</li>
        <li>Le Marais — trendy shops, cafés, and historical streets</li>
        <li>Local patisseries — taste authentic croissants and macarons</li>
      </ul>

      <div class="gallery">
        <img src="/WDSL/Assets/Pictures/FR_EiffelNight.jpg" alt="Eiffel Tower at night">
        <img src="/WDSL/Assets/Pictures/FR_Louvre.jpg" alt="Louvre Museum">
        <img src="/WDSL/Assets/Pictures/FR_Montmartre.webp" alt="Montmartre streets">
      </div>

      <p>
        Paris enchants with its elegance, history, and vibrant culture. 
        Whether it’s your first visit or your fifth, the city always offers new experiences and lasting memories.
      </p>

      <div class="comment-section">
        <h4>Post a Comment</h4>
        <textarea placeholder="Write your comment here..." class="comment-box"></textarea>
        <button class="post-btn">Post</button>
      </div>
    </article>
  </section>
</body>
</html>
