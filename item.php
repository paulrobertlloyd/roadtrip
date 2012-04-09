<?php
    $title = 'Arriving in Las Vegas';

    include_once('_inc/head.php');
    include_once('_inc/banner.php');
?>

        <div class="mediaitem">
            <img class="object" src="http://dummyimage.com/800x536/ccc/eee.png" alt="Arriving in Las Vagas"/>
            <nav role="navigation" class="item">
                <ul>
                    <li class="item-prev"><a href="#">&#8592; Previous Location</a></li>
                    <li class="item-next"><a href="#">Next Location &#8594;</a></li>
                </ul>
            </nav>
        </div>

        <h1>Arriving in Las Vagas</h1>
        <p class="mile">Mile 1456</p>

        <div role="main" class="main">
            <h2>About this location</h2>
            <p>The <strong>Las Vegas Strip</strong> is an approximately 4.2-mile (6.8 km) stretch of Las Vegas Boulevard in Clark County, Nevada; adjacent to, but outside the city limits of Las Vegas proper. The Strip lies within the unincorporated townships of Paradise and Winchester. Most of the Strip has been designated an All-American Road.</p>
            <p>Many of the largest hotel, casino and resort properties in the world are located on the Las Vegas Strip. Nineteen of the world&#8217;s 25 largest hotels by room count are on the Strip, with a total of over 67,000 rooms. One of the 19, the LVH - Las Vegas Hotel &#38; Casino, (Formerly the Las Vegas Hilton), is an &#8216;off-Strip&#8217; property but is located less than 0.5 miles (0.8 km) east of the Strip.</p>
            <p>One of the most visible aspects of Las Vegas&#8217; cityscape is its use of dramatic architecture. The modernisation of hotels, casinos, restaurants, and residential high-rises on the Strip has established the city as one of the most popular destinations for tourists.</p>
            <p class="attribution"><a href="#">Text from Wikipedia</a>. Some rights reserved.</p>

            <p class="vcard">
                <img class="photo" src="http://dummyimage.com/64x64/ccc/eee.png" alt="Paul Robert Lloyd"/>
                Taken by <a class="url fn n" href="#">Paul Robert Lloyd</a><br/>
                <span class="datetime">13 March 2012 at 10:04PM</span>
            </p>

            <figure>
                <div class="map">
                    <img class="thumbnail" src="http://dummyimage.com/240x160/ccc/eee.png" alt="Location of Las Vegas Strip"/>
                </div>
                <figcaption>
                    <p>Taken on the Las Vegas Strip, Las Vegas, Nevada.</p>
                </figcaption>
            </figure>
        </div><!--/main-->

        <div role="complementary" class="complementary">
            <h2>Related Links</h2>
            <ul>
                <li>
                    <h3><a href="http://visitlasvegas.com/">Visit Las Vegas</a></h3>
                    <p>Your official What Happens in Vegas, Stays in Vegas resource. Find information on hotels, restaurants, golf courses and things to do.</p>
                </li>
                <li>
                    <h3><a href="http://lonelyplanet.com/usa/las-vegas/">Lonely Planet: Las Vegas</a></h3>
                    <p>Vegas is the ultimate escape. Time is irrelevant here, especially after a few frenzied and intoxicating sleepless nights on the Strip.</p>
                </li>
            </ul>
        </div><!--/complementary-->

<?php
    include_once('_inc/contentinfo.php');
    include_once('_inc/foot.php');
?>