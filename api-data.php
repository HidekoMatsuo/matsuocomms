<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Commission Characters — HidekoMatsuo</title>
<style>
:root {
  --header-bg-dark: #220033; 
  --header-bg-light: #ffffff;
  --text-dark: white;
  --text-light: black;
  --burger-dark: white;
  --burger-light: black;
}
body {
  margin:0; padding:0;
  font-family:sans-serif;
  color: var(--text-dark);
  min-height:100vh;
  position: relative;
  transition: color 0.4s ease;
  background: none;
}
body.light { color: var(--text-light); }
body::before {
  content:"";
  position: fixed;
  top:0; left:0; width:100%; height:100%;
  background: url('https://pbs.twimg.com/media/G1r_vxMW0AAUHkk?format=png&name=large') center/cover no-repeat;
  z-index: -3;
  transition: background 0.4s ease;
}
body.light::before {
  background: url('https://pbs.twimg.com/media/G1r_vxMW0AAUHkk?format=png&name=medium') center/cover no-repeat;
}
#themeCover {
  position: fixed;
  top:0; left:0; width:100%; height:100%;
  background: rgba(0,0,0,0.6);
  z-index: -2;
  pointer-events: none;
  transition: background 0.4s ease;
}
body.light #themeCover { background: rgba(255,255,255,0.4); }
#menuCover {
  position: fixed;
  top:0; left:0; width:100%; height:100%;
  background: rgba(0,0,0,0.6);
  z-index: 1400;
  opacity:0;
  pointer-events: none;
  transition: opacity 0.4s ease;
}
#menuCover.active { opacity:1; pointer-events:auto; }
header {
  position: fixed; top:0; left:0; width:100%;
  display:flex; align-items:center;
  background: var(--header-bg-dark);
  padding:15px 20px; flex-wrap:wrap;
  transition: background 0.4s ease;
  z-index:2000;
  box-shadow: 0 2px 6px rgba(0,0,0,0.3);
}
body.light header { background: var(--header-bg-light); }
header h1 { margin:0; font-size:30px; font-weight:bold; margin-right:20px; transition: color 0.4s ease; }
body.light header h1 { color: var(--text-light); }

.nav-links { display:flex; gap:10px; flex-wrap:wrap; }
.nav-links a {
  color:white; text-decoration:none; font-weight:bold;
  padding:8px 12px; border-radius:8px;
  transition: background 0.4s ease, color 0.4s ease;
}
body.light .nav-links a { color: var(--burger-light); }
.nav-links a:hover { background:#4B0082; color:white; } 
body.light .nav-links a:hover { background:#D580FF; color:white; }
.burger {
  display:flex; flex-direction:column; justify-content:space-between;
  width:30px; height:22px; cursor:pointer;
  margin-right:15px; order:-1;
  z-index:2500;
}
.burger div {
  height:3px; border-radius:2px;
  transition: all 0.3s ease;
  background: var(--burger-dark);
}
body.light .burger div { background: var(--burger-light); }
.burger.active div:nth-child(1) { transform: rotate(45deg) translate(5px,5px); }
.burger.active div:nth-child(2) { opacity:0; }
.burger.active div:nth-child(3) { transform: rotate(-45deg) translate(6px,-6px); }
.side-menu {
  position: fixed; top:0; left:-100%; width:260px; height:100%;
  background: var(--header-bg-dark); 
  display:flex; flex-direction:column; padding:60px 20px;
  transition: left 0.4s ease, background 0.4s ease;
  z-index:1500;
  pointer-events: none;
  box-shadow: 2px 0 10px rgba(0,0,0,0.3);
}
.side-menu.active {
  left:0;
  pointer-events:auto;
}
body.light .side-menu { background: var(--header-bg-light); }
.side-menu a {
  margin:10px 0; text-decoration:none;
  padding:8px 12px; border-radius:8px;
  color:white; font-weight:700; font-size:18px;
  transition: background 0.4s ease, color 0.4s ease;
}
.side-menu a:hover { background:#4B0082; color:white; }
body.light .side-menu a { color:#2b0033; }
body.light .side-menu a:hover { background:#D580FF; color:white; }

.theme-switch {
  display:flex; align-items:center; margin-top:20px; cursor:pointer;
  color:white; font-weight:700; font-size:18px;
}
body.light .theme-switch { color:#2b0033; }
.switch-slider {
  width:50px; height:24px; background:#ccc; border-radius:12px;
  position:relative; margin-left:10px;
  display:flex; align-items:center; justify-content:flex-start;
  border: 1px solid rgba(0,0,0,0.2);
}
.switch-slider img {
  width:18px; height:18px;
  position:absolute; left:3px;
  transition: left 0.4s ease, transform 0.4s ease;
  box-shadow: inset 0 0 4px rgba(0,0,0,0.3);
  opacity:0.7;
  border-radius: 50%; 
  background: rgba(255,255,255,0.1); 
  border: none;
}
body.light .switch-slider img {
  left:27px; transform: rotate(360deg);
  background: rgba(0,0,0,0.07); 
}
main { max-width:1200px; margin:0 auto; padding:120px 20px 80px; }

/* Стили для галереи персонажей */
.page-title {
  text-align: center;
  font-size: 48px;
  margin-bottom: 20px;
  color: #D580FF;
  text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.page-subtitle {
  text-align: center;
  margin-bottom: 40px;
  font-size: 18px;
  opacity: 0.8;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.characters-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 25px;
  margin-top: 30px;
}

.character-card {
  background: rgba(255,255,255,0.07);
  border-radius: 15px;
  padding: 20px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255,255,255,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  overflow: hidden;
}
body.light .character-card {
  background: rgba(0,0,0,0.05);
  border: 1px solid rgba(0,0,0,0.1);
}

.character-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.character-avatar {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: linear-gradient(135deg, #4B0082, #D580FF);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  font-weight: bold;
  color: white;
  margin: 0 auto 15px;
  border: 3px solid rgba(255,255,255,0.2);
}

.character-name {
  font-size: 22px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 10px;
  color: #D580FF;
}

.character-info {
  margin: 10px 0;
  padding: 8px;
  background: rgba(0,0,0,0.2);
  border-radius: 8px;
  font-size: 14px;
}
body.light .character-info {
  background: rgba(0,0,0,0.05);
}

.character-info div {
  margin: 5px 0;
  display: flex;
  justify-content: space-between;
}

.character-label {
  font-weight: bold;
  opacity: 0.7;
}

.commission-suggestion {
  margin-top: 15px;
  padding: 10px;
  background: rgba(75,0,130,0.2);
  border-radius: 8px;
  border-left: 4px solid #D580FF;
  font-size: 13px;
  font-style: italic;
}
body.light .commission-suggestion {
  background: rgba(213,128,255,0.15);
}

.character-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  margin-top: 10px;
}

.character-tag {
  background: rgba(213,128,255,0.2);
  color: #D580FF;
  padding: 3px 8px;
  border-radius: 12px;
  font-size: 11px;
  font-weight: bold;
}
body.light .character-tag {
  background: rgba(213,128,255,0.3);
}

.api-status {
  background: rgba(75,0,130,0.15);
  border: 1px solid rgba(75,0,130,0.25);
  padding: 15px;
  border-radius: 10px;
  margin: 30px 0;
  text-align: center;
}
body.light .api-status {
  background: rgba(213,128,255,0.15);
  border: 1px solid rgba(213,128,255,0.25);
}

.refresh-btn {
  display: block;
  margin: 30px auto;
  padding: 12px 30px;
  background: linear-gradient(135deg, #4B0082, #D580FF);
  color: white;
  border: none;
  border-radius: 25px;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  transition: transform 0.2s ease, box-shadow 0.3s ease;
}
.refresh-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(213,128,255,0.4);
}

.error-message {
  background: rgba(255,0,0,0.1);
  border: 1px solid rgba(255,0,0,0.3);
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  margin: 30px 0;
}
body.light .error-message {
  background: rgba(255,0,0,0.05);
  color: #990000;
}

.loading-spinner {
  text-align: center;
  padding: 40px;
  font-size: 18px;
  color: #D580FF;
}

.social-buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin: 40px 0;
}
.social-buttons a {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255,255,255,0.05);
  transition: background 0.3s, filter 0.3s;
}
.social-buttons a:hover {
  background: rgba(255,255,255,0.3);
}
.social-buttons img {
  width: 24px;
  height: 24px;
  filter: brightness(1) saturate(0.5);
  transition: filter 0.3s;
}
body:not(.light) .social-buttons img { filter: brightness(1) saturate(0); }
body:not(.light) .social-buttons a:hover img { filter: brightness(1) saturate(5); }
body.light .social-buttons a { background: rgba(0,0,0,0.05); }
body.light .social-buttons a:hover { background: rgba(0,0,0,0.2); }
body.light .social-buttons img { filter: brightness(0.7) saturate(0.5); }
body.light .social-buttons a:hover img { filter: brightness(1) saturate(5); }

@media (max-width:700px) {
  main { padding: 90px 5vw 40px; }
  header { padding: 10px 10px; }
  .burger { width: 36px; height: 26px; margin-right: 10px; }
  .nav-links { display:none; }
  .side-menu { width: 85vw; padding: 60px 10px; }
  .side-menu a { font-size: 16px; padding: 10px 10px; }
  .theme-switch { font-size: 16px; }
  .switch-slider { width: 40px; height: 20px; }
  .switch-slider img { width: 16px; height: 16px; }
  .social-buttons {
    gap: 12px;
    margin: 24px 0;
  }
  .social-buttons a {
    width: 40px;
    height: 40px;
  }
  .social-buttons img {
    width: 20px;
    height: 20px;
  }
  header h1 { font-size: 22px; }
  .burger { height: 32px; width: 32px; }
  .page-title {
    font-size: 32px;
  }
  .page-subtitle {
    font-size: 16px;
  }
  .characters-container {
    grid-template-columns: 1fr;
    gap: 15px;
  }
}
@media (max-width:480px) {
  header { padding: 8px 4px; }
  main { padding: 70px 2vw 30px; }
  .side-menu { padding: 40px 4px; }
  .side-menu a { font-size: 14px; padding: 8px 6px; }
  .theme-switch { font-size: 14px; }
  .social-buttons a { height:36px; }
  .social-buttons a .logo { width: 32px; }
  .social-buttons a .logo img { width: 14px; height: 14px; }
  header h1 { font-size: 16px; }
}
.side-menu {
  pointer-events: none;
}
.side-menu.active {
  left:0;
  pointer-events:auto;
}
</style>
</head>
<body>

<div id="themeCover"></div>
<div id="menuCover"></div>

<header>
  <div class="burger" id="burger"><div></div><div></div><div></div></div>
  <h1>HidekoMatsuo</h1>
  <div class="nav-links" id="navLinks">
    <a href="index.html">About me</a>
    <a href="gallery.html">Art examples</a>
    <a href="pricelist.html">Pricelist / Commissions</a>
    <a href="contact.html">Contact me</a>
    <a href="api-data.php" style="background:#D580FF;color:white;">Character Gallery</a>
  </div>
</header>

<div class="side-menu" id="sideMenu">
  <a href="index.html">About me</a>
  <a href="gallery.html">Art examples</a>
  <a href="pricelist.html">Pricelist / Commissions</a>
  <a href="contact.html">Contact me</a>
  <a href="api-data.php" style="background:#D580FF;color:white;">Character Gallery</a>
  <div class="theme-switch" id="themeSwitch">
    Theme
    <div class="switch-slider">
      <img src="https://img.icons8.com/ios-filled/50/0000ff/moon-symbol.png"/>
    </div>
  </div>
</div>

<main>
  <h1 class="page-title">🎨 Character Gallery</h1>
  <p class="page-subtitle">Explore this collection of unique characters that could inspire your next commission. Each character has distinct traits that could be brought to life through art.</p>
  
  <div class="api-status">
    <p>📡 <strong>Live Data Feed</strong> — These characters are fetched in real-time from an external database and converted to visual cards using PHP.</p>
  </div>
  
  <?php
  // Функция для получения данных через cURL
  function getApiData($url, $params = []) {
      // Добавляем параметры к URL
      if (!empty($params)) {
          $url .= '?' . http_build_query($params);
      }
      
      // Пробуем сначала file_get_contents
      if (ini_get('allow_url_fopen')) {
          $context = stream_context_create([
              'http' => [
                  'timeout' => 10
              ]
          ]);
          $json = @file_get_contents($url, false, $context);
          if ($json !== false) {
              return $json;
          }
      }
      
      // Если не сработало, используем cURL
      if (function_exists('curl_version')) {
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_TIMEOUT, 10);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          $json = curl_exec($ch);
          curl_close($ch);
          return $json;
      }
      
      return false;
  }

  // Функция для генерации предложений по комиссиям
  function getCommissionSuggestion($character) {
      $suggestions = [
          "Perfect for a character portrait with their unique traits",
          "Could be illustrated in a dynamic action pose",
          "Great candidate for a fantasy character design",
          "Would make an excellent character for a story illustration",
          "Their features suggest a detailed rendered artwork",
          "Ideal for a character sheet with multiple expressions",
          "Could be the protagonist in a narrative illustration"
      ];
      
      $personArray = (array)$character;
      $keys = array_keys($personArray);
      $firstKey = isset($keys[0]) ? $keys[0] : '';
      $hash = crc32($firstKey . json_encode($personArray));
      
      return $suggestions[$hash % count($suggestions)];
  }

  // Функция для генерации тегов на основе данных
  function generateCharacterTags($character) {
      $tags = [];
      $personArray = (array)$character;
      
      foreach ($personArray as $key => $value) {
          if (strlen($value) > 3 && strlen($value) < 20) {
              $tagName = str_replace(['_', '-'], ' ', $key);
              $tagName = ucfirst($tagName);
              
              if (count($tags) < 3) {
                  $tags[] = $tagName;
              }
          }
      }
      
      // Добавляем общие теги по умолчанию
      $defaultTags = ['Character', 'Art', 'Design', 'Portrait', 'Fantasy', 'Illustration'];
      shuffle($defaultTags);
      
      while (count($tags) < 3) {
          $tags[] = array_pop($defaultTags);
      }
      
      return array_slice($tags, 0, 3);
  }

  // Функция для получения инициалов из имени
  function getInitials($name) {
      $words = preg_split('/[\s_]+/', $name);
      $initials = '';
      
      foreach ($words as $word) {
          if (!empty($word)) {
              $initials .= strtoupper($word[0]);
          }
      }
      
      return substr($initials, 0, 2);
  }

  // Параметры для API
  $api_url = 'http://lab.vntu.org/api-server/lab8.php';
  $params = [
      'user' => 'student',
      'pass' => 'p@ssw0rd'
  ];

  // Получаем данные
  $json_data = getApiData($api_url, $params);
  
  if ($json_data === false) {
      echo '<div class="error-message">⚠️ Connection Issue: Unable to fetch character data at the moment. Please check your internet connection and try again.</div>';
  } else {
      // Декодируем JSON
      $data = json_decode($json_data);
      
      if (json_last_error() !== JSON_ERROR_NONE || !$data) {
          echo '<div class="error-message">⚠️ Data Format Issue: The character database returned an unexpected format. Please try refreshing the page.</div>';
      } else {
          // Объединяем все записи о людях в один массив
          $all_characters = [];
          
          // Проверяем структуру данных
          if (is_object($data)) {
              // Преобразуем объект в массив для обработки
              $data_array = (array)$data;
              
              // Ищем все свойства, содержащие массивы людей
              foreach ($data_array as $key => $value) {
                  if (is_array($value) || is_object($value)) {
                      // Преобразуем объект в массив
                      $people_array = (array)$value;
                      
                      // Проверяем, похоже ли это на массив людей
                      foreach ($people_array as $person) {
                          if (is_object($person) || is_array($person)) {
                              $all_characters[] = (object)(array)$person;
                          }
                      }
                  }
              }
          } elseif (is_array($data)) {
              $all_characters = $data;
          }
          
          if (empty($all_characters)) {
              echo '<div class="error-message">🎭 No characters found in the database. The creative well is dry for now. Check back later!</div>';
          } else {
              // Выводим галерею персонажей
              echo '<div class="characters-container">';
              
              // Счетчик для отслеживания количества
              $character_count = 0;
              
              foreach ($all_characters as $character) {
                  $character_count++;
                  if ($character_count > 12) break; // Ограничиваем количество для лучшего вида
                  
                  $personArray = (array)$character;
                  
                  // Определяем имя для аватара
                  $character_name = 'Character';
                  $avatar_initials = 'CH';
                  
                  foreach ($personArray as $key => $value) {
                      if (stripos($key, 'name') !== false || stripos($key, 'first') !== false || stripos($key, 'last') !== false) {
                          if (strlen($value) > 2) {
                              $character_name = $value;
                              $avatar_initials = getInitials($value);
                              break;
                          }
                      }
                  }
                  
                  // Генерируем предложение по комиссии
                  $commission_suggestion = getCommissionSuggestion($character);
                  
                  // Генерируем теги
                  $tags = generateCharacterTags($character);
                  
                  echo '<div class="character-card">';
                  echo '<div class="character-avatar">' . $avatar_initials . '</div>';
                  echo '<div class="character-name">' . htmlspecialchars($character_name) . '</div>';
                  
                  // Выводим основные данные
                  echo '<div class="character-info">';
                  $displayed_fields = 0;
                  
                  foreach ($personArray as $key => $value) {
                      if ($displayed_fields < 4 && strlen($value) > 0 && !stripos($key, 'id') && !stripos($key, 'password')) {
                          $label = str_replace(['_', '-'], ' ', $key);
                          $label = ucwords($label);
                          
                          echo '<div>';
                          echo '<span class="character-label">' . htmlspecialchars($label) . ':</span>';
                          echo '<span>' . htmlspecialchars($value) . '</span>';
                          echo '</div>';
                          
                          $displayed_fields++;
                      }
                  }
                  echo '</div>';
                  
                  // Предложение по комиссии
                  echo '<div class="commission-suggestion">💡 ' . $commission_suggestion . '</div>';
                  
                  // Теги
                  echo '<div class="character-tags">';
                  foreach ($tags as $tag) {
                      echo '<span class="character-tag">' . htmlspecialchars($tag) . '</span>';
                  }
                  echo '</div>';
                  
                  echo '</div>'; // Закрываем character-card
              }
              
              echo '</div>'; // Закрываем characters-container
              
              echo '<div style="text-align:center;margin-top:20px;opacity:0.7;">';
              echo 'Showing ' . min($character_count, 12) . ' of ' . count($all_characters) . ' unique characters';
              echo '</div>';
          }
      }
  }
  ?>
  
  <button class="refresh-btn" onclick="window.location.reload()">🔄 Refresh Character Gallery</button>
  
  <div style="text-align:center;margin-top:50px;padding:20px;background:rgba(255,255,255,0.03);border-radius:10px;">
    <h3 style="color:#D580FF;">✨ Commission Your Own Character</h3>
    <p>Inspired by these characters? Commission me to bring your own unique character to life! Check out my <a href="pricelist.html" style="color:#D580FF;font-weight:bold;">Pricelist</a> for details.</p>
  </div>
</main>

<script>
const burger = document.getElementById('burger');
const sideMenu = document.getElementById('sideMenu');
const menuCover = document.getElementById('menuCover');
const themeSwitch = document.getElementById('themeSwitch');
const navLinks = document.getElementById('navLinks');

function closeMenu() {
  sideMenu.classList.remove('active');
  burger.classList.remove('active');
  menuCover.classList.remove('active');
  navLinks.classList.remove('hide-nav');
}

function toggleMenu(){
  const isOpen = sideMenu.classList.contains('active');
  if (isOpen) {
    closeMenu();
  } else {
    sideMenu.classList.add('active');
    burger.classList.add('active');
    menuCover.classList.add('active');
    navLinks.classList.add('hide-nav');
  }
}
burger.addEventListener('click', toggleMenu);
menuCover.addEventListener('click', closeMenu);

themeSwitch.addEventListener('click', ()=>{
  document.body.classList.toggle('light');
  const img = themeSwitch.querySelector('img');
  img.src = document.body.classList.contains('light')
    ? "https://img.icons8.com/ios-filled/50/FFD700/sun--v1.png"
    : "https://img.icons8.com/ios-filled/50/0000ff/moon-symbol.png";
});

document.querySelectorAll('.side-menu a').forEach(link => {
  link.addEventListener('click', closeMenu);
});

// Анимация карточек при загрузке
document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.character-card');
  cards.forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
      card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      card.style.opacity = '1';
      card.style.transform = 'translateY(0)';
    }, 100 * index);
  });
});
</script>

</body>
</html>