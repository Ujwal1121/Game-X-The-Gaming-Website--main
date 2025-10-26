<?php 
session_start();
$name;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  echo'';
}
else{
  $name=$_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game-X</title>
    <link rel="stylesheet" href="/gg/style.css" />
    <link rel="stylesheet" href="/gg/utility.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <header>
      <nav class="container">
        <div class="nav1 flex">
          <div class="lsbtn flex">
            <?php
            if(isset($name)){
            echo '<button>
            <p
              style="color: black">
              '.$name.'</p>
          </button>';
            }else{
             echo '<button>
              <a
                style="color: black"
                href="\gg\Gaming website LOGIN\LOGIN.php"
                >LOGIN</a
              >
            </button>';
            }
            ?>
            <?php
            if(isset($name)){
            echo '<button>
            <a
              style="color: black"
              href="\gg\Gaming website LOGIN\logout.php"
            >
              LOGOUT</a
            >
          </button>';
            }else{
             echo ' 
            <button>
            <a
              style="color: black"
              href="\gg\Gaming website SINUP\signup.php"
            >
              SIGN UP</a
            >
          </button>';
            }
            ?>
          </div>
        </div>
        <div class="mainnav flex">
          <div class="logo">
            <h1>
              <a href="/">Game<span>-X</span></a>
            </h1>
          </div>
          <div class="navlist">
            <ul class="flex">
              <li><a href="/" class="active">Home</a></li>
              <!-- <li><a class="ABOUT" href="/">About</a></li> -->
              <!-- <li><a href="/">Blog</a></li> -->
              <!-- <li>
                <a href="/">Games<i class="fa-solid fa-angle-down"></i></a>
              </li> -->
              <li>
                <a href="https://theesports.club/tournament">Tournament</a>
              </li>

              <li>
                <a href="\gg\Contact\index.html"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="headercont container flex">
        <div class="labels flex">
          <div class="flex">
            <i class="fa-solid fa-tv"></i>
            <h3 class="flex">
              <a href="https://www.playstation.com/en-in/">PLAYSTATION 5</a>
              <span>,</span>
              <a href="https://store.steampowered.com/">STEAM</a>
            </h3>
          </div>
          <div class="flex">
            <i class="fa-solid fa-tags"></i>
            <h3 class="flex">
              <a href="\gg\Battle Royale\Battle.html"
                >Battle Royale</a
              >
              <span>,</span>
              <a href="\gg\Adventure\index.html"
                >ADVANTURE</a
              >
            </h3>
          </div>
        </div>
        <h1 id="header_title">EGYPT AND WORLD</h1>
        <p>
          Discover the Thrill of Gaming at Game-X Unleash your gaming potential
          with Game-X, where the world of gaming comes alive. Whether you're
          seeking adrenaline-pumping action, strategic challenges, or immersive
          storytelling, we offer a vast collection of games that cater to every
          type of gamer. Explore a diverse range of genres, from heart-racing
          shooters and epic RPGs to mind-bending puzzles and sports simulations.
          At Game-X, every game is an adventure waiting to be experienced. Join
          a global community of gamers, discover new worlds, and elevate your
          gaming experience with exciting features, regular updates, and
          exclusive content. Whether you're playing solo or competing with
          friends, Game-X is your ultimate gaming hub!
        </p>
      </div>
      <div class="dots flex">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </header>

    <main>
      <div class="threebox container flex">
        <div class="cbox">
          <img src="img/box-1-bg.jpg" alt="title" />
          <div class="cboxde">
            <h5>GAMES</h5>
            <h2>ADVENTURE</h2>
            <p>
              Adventure gaming is a genre of video games that emphasizes
              exploration, problem-solving, and storytelling. Players often take
              on the role of a protagonist navigating through immersive worlds,
              unraveling mysteries.
            </p>
            <a href="\gg\Adventure"
              >All GAMES</a
            >
          </div>
        </div>
        <div class="cbox">
          <img src="img/box-2-bg.jpg" alt="title" />
          <div class="cboxde">
            <h5>GAMES</h5>
            <h2>RACING ADVENTURE</h2>
            <p>
              Racing adventure gaming combines the thrill of high-speed
              competition with immersive storytelling and exploration. Players
              navigate through dynamic environments.
            </p>
            <a
              href="\gg\Racing adventure\image\index.html"
              >All GAMES</a
            >
          </div>
        </div>
        <div class="cbox">
          <img src="img/box-3-bg.jpg" alt="title" />
          <div class="cboxde">
            <h5>GAMES</h5>
            <h2>BATTLE_ROYALE</h2>
            <p>
              A Battle Royale game is a high-intensity multiplayer gaming
              experience where players compete to be the last person or team
              standing. Typically set in a vast and immersive environment,
              players start with minimal equipment.
            </p>
            <a href="\gg\Battle Royale\Battle.html"
              >All GAMES</a
            >
          </div>
        </div>
      </div>
      <div class="container filter flex">
        <button class="active">ALL</button>
        <a href="https://www.playstation.com/en-in/">
          <button>PLAYSTATION 5</button>
        </a>
        <a href="https://store.ubisoft.com/us/home/?lang=en_US">
          <button>UPLAY</button>
        </a>
        <a href="https://www.xbox.com/en-IN/consoles/xbox-one-s">
          <button>XBOX ONE</button>
        </a>
        <a href="https://store.steampowered.com/"> <button>STEAM</button> </a>
      </div>

      <div class="newrelesed flex">
        <div class="container">
          <div class="newretitle">
            <h2>Black Myth: Wukong</h2>
            <h2>Is released!</h2>
          </div>
          <p>
            Black Myth: Wukong is an action role-playing game (ARPG) inspired by
            the classic Chinese novel Journey to the West. Developed by Game
            Science, this highly anticipated "soulslike" game brings the
            legendary story of Sun Wukong, the Monkey King, to life with
            immersive gameplay and visually stunning environments.
          </p>
          <div class="flex">
            <a
              href="https://store.steampowered.com/app/2358720/Black_Myth_Wukong/"
              >read more</a
            >
          </div>
        </div>
      </div>
      <div class="featuredgames container flex">
        <h2 style="color: grey">Up-Coming&nbsp;<span>games</span></h2>
        <div class="fgamescards flex">
          <div class="fcard">
            <img src="img/Kingdom.jpg" alt="" />
            <div class="fcarddetails">
              <!-- <h2>Kingdom Come: Deliverance II</h2> -->
              <div class="tegs2 flex">
                <div class="teg flex">
                  <i class="fa-solid fa-tv"></i>
                  <h3 class="flex">
                    <a href="/">steam</a>
                    <a href="/">xbox one</a>
                  </h3>
                </div>
                <div class="teg flex">
                  <i class="fa-solid fa-tags"></i>
                  <h3 class="flex">
                    <a href="/">advanture</a>
                    <a href="/">fps</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="fhovercont">
              <h2>Kingdom Come</h2>
            </div>
          </div>
          <div class="fcard">
            <img src="img/Avowed.jpg" alt="" />
            <div class="fcarddetails">
              <div class="tegs2 flex">
                <div class="teg flex">
                  <i class="fa-solid fa-tv"></i>
                  <h3 class="flex">
                    <a href="/">steam</a>
                    <a href="/">xbox one</a>
                  </h3>
                </div>
                <div class="teg flex">
                  <i class="fa-solid fa-tags"></i>
                  <h3 class="flex">
                    <a href="/">advanture</a>
                    <a href="/">fps</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="fhovercont">
              <h2>Avowed</h2>
            </div>
          </div>
          <div class="fcard">
            <img src="img/Monster.jpg" alt="" />
            <div class="fcarddetails">
              <div class="tegs2 flex">
                <div class="teg flex">
                  <i class="fa-solid fa-tv"></i>
                  <h3 class="flex">
                    <a href="/">steam</a>
                    <a href="/">xbox one</a>
                  </h3>
                </div>
                <div class="teg flex">
                  <i class="fa-solid fa-tags"></i>
                  <h3 class="flex">
                    <a href="/">advanture</a>
                    <a href="/">fps</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="fhovercont">
              <h2>Monster Hunter Wilds</h2>
            </div>
          </div>
          <div class="fcard">
            <img src="img/gta-6.jpg" alt="" />
            <div class="fcarddetails">
              <div class="tegs2 flex">
                <div class="teg flex">
                  <i class="fa-solid fa-tv"></i>
                  <h3 class="flex">
                    <a href="/">steam</a>
                    <a href="/">xbox one</a>
                  </h3>
                </div>
                <div class="teg flex">
                  <i class="fa-solid fa-tags"></i>
                  <h3 class="flex">
                    <a href="/">advanture</a>
                    <a href="/">fps</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="fhovercont">
              <h2>Gta 6</h2>
            </div>
          </div>
          <div class="fcard">
            <img src="img/Dune.jpg" alt="" />
            <div class="fcarddetails">
              <div class="tegs2 flex">
                <div class="teg flex">
                  <i class="fa-solid fa-tv"></i>
                  <h3 class="flex">
                    <a href="/">steam</a>
                    <a href="/">xbox one</a>
                  </h3>
                </div>
                <div class="teg flex">
                  <i class="fa-solid fa-tags"></i>
                  <h3 class="flex">
                    <a href="/">advanture</a>
                    <a href="/">fps</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="fhovercont">
              <h2>Dune: Awakening</h2>
            </div>
          </div>
          <div class="fcard">
            <img src="img/Hot lap.jpg" alt="" />
            <div class="fcarddetails">
              <div class="tegs2 flex">
                <div class="teg flex">
                  <i class="fa-solid fa-tv"></i>
                  <h3 class="flex">
                    <a href="/">steam</a>
                    <a href="/">xbox one</a>
                  </h3>
                </div>
                <div class="teg flex">
                  <i class="fa-solid fa-tags"></i>
                  <h3 class="flex">
                    <a href="/">advanture</a>
                    <a href="/">fps</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="fhovercont">
              <h2>Hot Lap Racing</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="blogandnews flex">
        <div class="container">
          <h2>blog&nbsp;<span>& news</span></h2>
          <div class="threecards flex">
            <div class="tcard">
              <img src="img/gta news.jpg" alt="" />
              <div class="tcarddetails">
                <h3>about GTA-6</h3>
                <p>
                  GTA 6 is on the way, with the highly-anticipated return of
                  Rockstar's open-world action-adventure set to bring us to back
                  to the streets.
                </p>

                <div class="posttime flex">
                  <i style="margin-top: 27px" class="fa-regular fa-clock"></i>

                  <h5 style="margin-top: 27px">December 12, 2024</h5>
                </div>
              </div>
            </div>
            <div class="tcard">
              <!-- <video src="C:\Users\ADMIN\Desktop\test\Videos\gta-6.mp4"></video> -->
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/xyzNQ2IxhIM?si=CyyQqKhn7v0j9-E9"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
              <!-- <img src="img/blognews2.jpg" alt="" /> -->
              <div class="tcarddetails">
                <h3>new trailer is released!</h3>
                <p>
                  Check out the latest trailer for an exciting adventure filled
                  with epic battles, breathtaking visuals, and a thrilling
                  storyline. Don't miss it!
                </p>

                <div class="posttime flex">
                  <i style="margin-top: 27px" class="fa-regular fa-clock"></i>
                  <h5 style="margin-top: 27px">December 05, 2024</h5>
                </div>
              </div>
            </div>
            <div class="tcard">
              <img src="img/blognews3.jpg" alt="" />
              <div class="tcarddetails">
                <h3>price list of the games</h3>
                <p>
                  Explore our diverse selection of games at competitive prices.
                  Find your favorite titles, including exclusive deals and
                  discounts, perfect for every gamer!
                </p>

                <div class="posttime flex">
                  <i style="margin-top: 27px" class="fa-regular fa-clock"></i>
                  <h5 style="margin-top: 27px">September 05, 2023</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="newrelesed flex aboutus">
        <div class="container flex">
          <div class="aboutusdetails">
            <div class="newretitle">
              <h2>About the</h2>
              <h2>Game-X</h2>
            </div>
            <p>
              Welcome to Game-X – Your Ultimate Gaming Destination At Game-X, we
              bring the world of gaming to your fingertips. Whether you're a
              seasoned pro or just starting your gaming journey, Game-X offers
              everything you need to enhance your experience. Explore a wide
              selection of featured games across various genres, from
              action-packed adventures to immersive RPGs. Not only do we bring
              you the latest and greatest in gaming, but we also have a store
              section where you can purchase premium gaming gear, accessories,
              and exclusive sets to take your gaming setup to the next level.
            </p>
            <!-- <div class="flex">
              <a href="/">read more</a>
            </div> -->
          </div>
          <div class="aboutusimg">
            <img src="img/codingwebstudio.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="gameshop container flex">
        <h2 style="color: white">game&nbsp;<span>shop</span></h2>
        <div class="shopcards flex">
          <div class="scard">
            <img src="\gg\img\Gaming CPU.jpg" alt="" />
            <div class="scarddetails">
              <a
                href="https://www.flipkart.com/square-one-cpu-gaming-i7-pro-core-6th-32-gb-ram-dual-series-radeon-rx-580-oc-graphics-1000-hard-disk-1-tb-ssd-capacity-windows-11-home-64-bit-8-graphics-memory-gaming-tower-ms-office/p/itm01f5078f37ebd?pid=CPUGWMMAJR3HH8VD&lid=LSTCPUGWMMAJR3HH8VD6WJLQJ&marketplace=FLIPKART&q=gaming+cpu&store=6bo%2Fnl4%2Fdze&srno=s_1_15&otracker=search&otracker1=search&fm=organic&iid=76459b18-254a-4b6a-ab16-6d65633e78ad.CPUGWMMAJR3HH8VD.SEARCH&ppt=hp&ppn=homepage&ssid=3len6hbz280000001733373373513&qH=d4c882dfda3aee12"
              >
                <h3 style="color: white">Gaming CPU</h3>
              </a>

              <h3>₹59,999</h3>
            </div>
          </div>
          <div class="scard">
            <img
              src="\gg\img\Gaming Headphone.jpg"
              alt=""
            />

            <div class="scarddetails">
              <a
                href="https://www.flipkart.com/zebronics-new-launch-jet-pro-premium-wired-gaming/p/itm63c051fadb186?pid=ACCH6ESMQ8USQ2AK&lid=LSTACCH6ESMQ8USQ2AKN0EOAT&marketplace=FLIPKART&q=gaming+headphones+Hyper-x&store=0pm%2Ffcn%2Fgc3&srno=s_1_21&otracker=search&otracker1=search&fm=Search&iid=c5dad635-2b5d-4b02-8bbf-2964d4f94699.ACCH6ESMQ8USQ2AK.SEARCH&ppt=sp&ppn=sp&ssid=2dqwjpyu3k0000001733373626437&qH=2f4dd31195391c2e"
              >
                <h3 style="color: white">headphone</h3>
              </a>
              <h3>₹1,299</h3>
            </div>
          </div>
          <div class="scard">
            <img
              src="\gg\img\Gaming mouse.png"
              alt=""
            />
            <div class="scarddetails">
              <a
                href="https://www.flipkart.com/hp-g200-wired-optical-gaming-mouse/p/itm365abb464dc38?pid=ACCFZPG3N6QEXUUM&lid=LSTACCFZPG3N6QEXUUME7U3IJ&marketplace=FLIPKART&q=gaming+mouse&store=6bo&srno=s_1_14&otracker=search&otracker1=search&fm=Search&iid=a64d1384-6830-43d8-95a6-e18c588d6fae.ACCFZPG3N6QEXUUM.SEARCH&ppt=sp&ppn=sp&ssid=vnizpud48g0000001733374073866&qH=2b167df510df81b1"
              >
                <h3 style="color: white">Mouse</h3>
              </a>
              <h3>₹899</h3>
            </div>
          </div>
        </div>
        <!-- line break -->
        <br />
        <br />

        <div class="shopcards flex">
          <div class="scard">
            <img
              src="\gg\img\Gaming chair.png"
              alt=""
            />
            <div class="scarddetails">
              <a
                href="https://www.flipkart.com/ase-gaming-infinity-series-ergonomic-chair-head-lumbar-pillow/p/itmb41a88cf79301?pid=GACGKZKTZVHZSU8G&lid=LSTGACGKZKTZVHZSU8GKTIP5Q&marketplace=FLIPKART&q=Gaming+chair&store=4rr%2Fkm5%2F7uj&srno=s_1_4&otracker=search&otracker1=search&fm=Search&iid=14eb7a02-94ca-4cdf-ad34-99645bb0068b.GACGKZKTZVHZSU8G.SEARCH&ppt=sp&ppn=sp&ssid=eygyou1ga80000001733374407759&qH=55c0c2b112f5686c"
              >
                <h3 style="color: white">Gaming Chair</h3>
              </a>
              <h3>₹7,439</h3>
            </div>
          </div>
          <div class="scard">
            <img src="\gg\img\Gaming MIC.png" alt="" />
            <div class="scarddetails">
              <a
                href="https://www.flipkart.com/bestor-usb-condenser-gaming-microphone-rgb-lighting-adjustable-tripod-pc/p/itm7423fb84caa00?pid=MICGBSBCUGCZYPZB&lid=LSTMICGBSBCUGCZYPZBXHJNR6&marketplace=FLIPKART&q=gaming+mic&store=ypu%2Falc%2F3d4&srno=s_1_2&otracker=search&otracker1=search&fm=Search&iid=en_4dazLIhsIqM7TkH6wKyFrS4tDRPPcwNP-6p-LNAevoMFYYyurhcBz2e8CMKvcFW1YTknbfpho9NjFoBPse57bg%3D%3D&ppt=sp&ppn=sp&ssid=batqbn7odc0000001733375288156&qH=2a78642c2abb2037"
              >
                <h3 style="color: white">Gaming Mic</h3>
              </a>
              <h3>₹1,959</h3>
            </div>
          </div>
          <div class="scard">
            <img
              src="\gg\img\Gaming Keybord.png"
              alt=""
            />
            <div class="scarddetails">
              <a
                href="https://www.flipkart.com/hp-gk400y-mechanical-wired-usb-gaming-keyboard/p/itm295b784a34cb3?pid=ACCH27JXZNAD6KHB&lid=LSTACCH27JXZNAD6KHBUNJ7V8&marketplace=FLIPKART&q=gaming+keybord&store=6bo%2Fai3%2F3oe&srno=s_1_1&otracker=search&otracker1=search&fm=Search&iid=en_jtznp42tOkMO2Vj5Elj6QimAL3XJTDwHHbP5ZaUaThWTyBTgXOmpLhwTalcYvJPXMhchb6Pfmoeli2ejzFYzJQ%3D%3D&ppt=sp&ppn=sp&ssid=cipjb8ukwg0000001733375699951&qH=82a0ef5bc9f96220"
              >
                <h3 style="color: white">Gaming Keybord</h3>
              </a>
              <h3>₹2,299</h3>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <section class="footersec container flex">
        <div class="footerh2 flex">
          <h2>About&nbsp;<span>Game-X</span></h2>
          <h2>Latest&nbsp;<span>News</span></h2>
          <h2>Apps&nbsp;<span>& Platforms</span></h2>
        </div>
        <div class="flex footermenu">
          <div class="faboutus">
            <p>
              Welcome to Game-X – Your Ultimate Gaming Destination At Game-X, we
              bring the world of gaming to your fingertips. Whether you're a
              seasoned pro or just starting your gaming journey, Game-X offers
              everything you need to enhance your experience.
            </p>
            <div class="flex">
              <ul class="flex">
                <!-- <li>
                  <a href="/"><i class="fa-solid fa-caret-right"></i>Home</a>
                </li> -->

                <!-- <li>
                  <a href="/"><i class="fa-solid fa-caret-right"></i>About</a>
                </li> -->
              </ul>
              <ul class="flex">
                <li>
                  <a href="https://theesports.club/tournament"
                    ><i class="fa-solid fa-caret-right"></i>Tournament</a
                  >
                </li>

                <li>
                  <a href="\gg\Contact\index.html"
                    ><i class="fa-solid fa-caret-right"></i>Contact</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="latestnews">
            <div class="fnews flex">
              <div class="fnewscard flex">
                <img
                  src="\gg\img\gta news.jpg"
                  alt=""
                />
                <div class="fnewsdetails">
                  <h4>about GTA-6</h4>
                  <p>
                    <i class="fa-regular fa-clock"></i
                    ><span>December 6, 2024</span>
                  </p>
                </div>
              </div>
              <div class="fnewscard flex">
                <img src="\gg\img\gta-6.jpg" alt="" />
                <div class="fnewsdetails">
                  <h4>Trailer</h4>
                  <p>
                    <i class="fa-regular fa-clock"></i
                    ><span>December 6, 2024</span>
                  </p>
                </div>
              </div>
              <div class="fnewscard flex">
                <img src="img/blognews3.jpg" alt="" />
                <div class="fnewsdetails">
                  <h4>price list</h4>
                  <p>
                    <i class="fa-regular fa-clock"></i
                    ><span>December 6, 2024</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="appsec">
            <div class="platform flex">
              <div class="apps flex">
                <i class="fa-brands fa-apple"></i>
                <div class="appde">
                  <h4>Buy now via</h4>
                  <h4>Apple Store</h4>
                </div>
              </div>
              <div class="apps flex">
                <i class="fa-brands fa-google-play"></i>
                <div class="appde">
                  <h4>Buy now via</h4>
                  <h4>Google Play</h4>
                </div>
              </div>
              <div class="apps flex">
                <i class="fa-brands fa-steam"></i>
                <div class="appde">
                  <h4>Buy now via</h4>
                  <h4>Steam</h4>
                </div>
              </div>
              <div class="apps flex">
                <i class="fa-brands fa-windows"></i>
                <div class="appde">
                  <h4>Buy now via</h4>
                  <h4>windows</h4>
                </div>
              </div>
              <div class="apps flex">
                <i class="fa-brands fa-amazon"></i>
                <div class="appde">
                  <h4>Buy now via</h4>
                  <h4>Amezon</h4>
                </div>
              </div>
              <div class="apps flex">
                <i class="fa-brands fa-paypal"></i>
                <div class="appde">
                  <h4>Buy now via</h4>
                  <h4>Paypal</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="copyrightsec flex">
        <div class="copyright container flex">
          <div class="flex">
            <h2 style="margin-left: 288px">CODE<span>-X</span></h2>
            <p>Copyright &copy; 2024 Code-X - All rights reserved.</p>
          </div>
        </div>
      </section>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
