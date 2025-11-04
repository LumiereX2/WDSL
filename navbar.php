<?php
$script = $_SERVER['SCRIPT_NAME'] ?? '';
$parts = array_values(array_filter(explode('/', $script)));
$base = '';
if (count($parts) >= 1) {
  if (strpos($parts[0], '.') === false) {
    $base = '/' . $parts[0];
  }
}
?>
<link rel="stylesheet" href="/WDSL/style.css">

<div id="logo">
  <h1 class="site-title"><a href="<?php echo $base ?: '/'; ?>/index.php">DRIFTING DIARIES ---------</a></h1>
</div>

<nav id="navbar">
  <ul class="menu">
    <li class="menu-item"><a href="<?php echo $base; ?>/index.php">Home</a></li>

    <li class="menu-item">
      <a href="#">Destinations ▾</a>
      <ul class="submenu">
        <li class="menu-item">
          <a href="#">Asia ▸</a>
          <ul class="submenu">
            <li class="menu-item">
              <a href="#">Philippines ▸</a>
              <ul class="submenu">
                <li><a href="<?php echo $base; ?>/Blogs/PH_Baguio.php">Baguio</a></li>
                <li><a href="<?php echo $base; ?>/Blogs/PH_Palawan.php">Palawan</a></li>
                <li><a href="<?php echo $base; ?>/Blogs/PH_IlocosNorte.php">Ilocos Norte</a></li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="#">Japan ▸</a>
              <ul class="submenu">
                <li><a href="<?php echo $base; ?>/Blogs/JP_Tokyo.php">Tokyo</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#">Africa ▸</a>
          <ul class="submenu">
            <li class="menu-item">
              <a href="#">Nigeria ▸</a>
              <ul class="submenu">
                <li><a href="<?php echo $base; ?>/Blogs/NG_Abuja.php">Abuja</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#">Europe ▸</a>
          <ul class="submenu">
            <li class="menu-item">
              <a href="#">France ▸</a>
              <ul class="submenu">
                <li><a href="<?php echo $base; ?>/Blogs/FR_Paris.php">Paris</a></li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="#">Italy ▸</a>
              <ul class="submenu">
                 <li><a href="<?php echo $base; ?>/Blogs/IT_Rome.php">Rome</a></li>
                <li><a href="<?php echo $base; ?>/Blogs/IT_Venice.php">Venice</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>

    <li class="menu-item"><a href="<?php echo $base; ?>/allblogs.php">Blogs</a></li>
    <li class="menu-item"><a href="<?php echo $base; ?>/about.php">About</a></li>
    <li class="menu-item"><a href="<?php echo $base; ?>/contacts.php">Contact</a></li>
  </ul>
</nav>