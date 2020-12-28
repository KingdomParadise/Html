<!DOCTYPE html>
<html lang="en">
<head>
	<title>WiKiTemplate</title>
	<meta charset="utf-8">
	<meta name="Author" content="KingdomParadise">
	<meta name="Description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Using cdn cloudflare url of bootstrap.min.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
	<!-- 
	Using bootstrap.min.css in Bootstrap Folder on vendor
		
		<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css"> 
	-->

	<!--
	Using fontawesome.min.css in Fontawesome Foloder on vendor
		
		<link rel="stylesheet" type="text/css" href="./vendor/fontawesome/css/all.min.css"> 
	-->

	<!-- Using cdn cloudflare url of all.min.css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="wrapper">
        <!--Sidebar-->

        <!--Page Content-->
        <div id="content">
            <!-- Start Hearder -->
            <header class="nw-header">
                <form class="form-header">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-9 col-sm-12">
                                <!-- Nav bar Icon -->
                                <div class="nav-bar">
                                    <label id="navbar">
                                        <nav id="sidebar">
                                            <i class="fas fa-bars"></i>
                                        </nav>
                                    </label>
                                </div>
                                <!-- Logo image -->
                                <div class="logo">
                                    <a href="#">
                                        <img src="img/logo.png">
                                    </a>
                                </div>
                                <!-- Search bar -->
                                <div class="search">
                                    <input class="form-control search-box" type="input" name="search_box" placeholder="Search Wikipedia">
                                </div>
                                <div class="btn-search">
                                	<i class="fas fa-search"></i>
                                </div>
                                <div class="phone-search">
                                	<input class="form-control phone-search-box" type="input" name="search_box" placeholder="Search Wikipedia"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </header>
            <!-- End Header -->
            <div class="phone-search-mask"></div>
            <!-- Start main container -->
            <form class="form-body">
                <div class="container">
                    <!-- Start Title  -->
                    <div class="row justify-content-md-center">
                        <div class="col-md-9 col-sm-12 title">
                            <h1>Sausage</h1>
                            <div class="tagline"></div>
                        </div>
                    </div>
                    <!-- End Title -->

                    <!-- Start Sub Title -->
                    <div class="row justify-content-md-center">
                        <div class="col-md-9 col-sm-12">
                            <div class="row sub-title">
                                <!-- Select language Button -->
                                <div class="col-md-6 col-sm-6 col-6 sel-lang">
                                    <a>
                                        Language
                                    </a>
                                </div>
                                <!-- Select Download, Watch, Edit Button -->
                                <div class="col-md-6 col-sm-6 col-6 icon-btn">
                                    <!-- Select Download PDF Button -->
                                    <a class="btn-download">
                                        <i class="fas fa-download"></i>
                                        <p>Download PDF</p>
                                    </a>
                                    <!-- Select Watch Button -->
                                    <a class="btn-watch">
                                        <p>Watch</p>
                                    </a>
                                    <!-- Select Edit Button -->
                                    <a class="btn-edit">
                                        <p>Edit</p>
                                    </a>
                                </div>
                            </div>
                            <div class="tagline2"></div>
                        </div>
                    </div>
                    <!-- End Sub Title -->

                    <!-- Start Main Content -->
                    <div class="row justify-content-md-center">
                        <div class="col-md-9 col-sm-12">
                            <div class="head-note">
                                <p>This article is about the food. For other uses, see <a href="#">Sausage (disambiguation) </a>.</p>
                            </div>
                            <p>
                                <b>Sausages</b> are a meat product usually made from <a href="#">ground meat</a>, often pork, beef, or poultry, along with salt, spices and other flavourings. Other ingredients such as grains or breadcrumbs may be included as fillers or extenders. Some sausages include other ingredients for flavour.
                            </p>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 left-content">
                                    <p>The word "sausage" can refer to the loose sausage meat, which can be formed into patties or stuffed into a skin. When referred to as "a sausage," the product is usually cylindrical and encased in a skin.</p>
                                    <p>Typically, a sausage is formed in a <a href="#">casing</a> traditionally made from <a href="#">intestine</a> but sometimes from synthetic materials. Sausages that are sold raw are cooked in many ways, including pan-frying, broiling and barbecuing. Some sausages are <a href="#">cooked</a> during processing and the casing may then be removed.</p>
                                    <p><a href="#">Sausage making</a> is a traditional <a href="#">food preservation</a> technique. Sausages may be preserved by <a href="#">curing</a>, <a href="#">drying</a> (often in association with fermentation or culturing, which can contribute to preservation), <a href="#">smoking</a>, or freezing. Some cured or smoked sausages can be stored without refrigeration. Most fresh sausages must be refrigerated or frozen until they are cooked.</p>
                                    <p>Sausages come in a huge range of national and regional varieties, which differ by their flavouring or spicing ingredients (garlic, peppers, wine, etc.), the meat(s) used in them and their manner of preparation</p>
                                    <!-- Start Dropdown Menu -->
                                    <div class="dropdown">
                                        <button class="" type="button" id="dropdownButton" >
                                            <i class="fas fa-list" style="margin-right: 10px;"></i> Contents
                                        </button>
                                        <div class="dropdown-content" id="dropdowncontent">
                                            <ul>
                                                <li><a href="#">Etymology</a></li>
                                                <li><a href="#">History</a></li>
                                                <li>
                                                    <a href="#">National varieties
                                                        <ul style="padding-left:10px;">
                                                            <li><a href="#">Africa</a></li>
                                                            <li><a href="#">Asia</a></li>
                                                            <li><a href="#">Eurasia</a></li>
                                                            <li><a href="#">Europe</a></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li><a href="#">Other variations</a></li>
                                                <li><a href="#">Gallery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu  -->

                                    <!-- Start Accordion List  -->
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="Etymology">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h4>Etymology</h4>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Etymology">
                                                <div class="accordion-body">
                                                    <p>The word "sausage" was first used in English in the mid-15th century, spelled "sawsyge". This word came from Old North French <i>saussiche</i> (Modern French <i>saucisse</i>)". The French word came from Vulgar Latin <i>salsica</i> (sausage), from <i>salsicus</i> (seasoned with salt).</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="History">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <h4>History</h4>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#History">
                                                <div class="accordion-body">
                                                    <p><a href="/wiki/Sausage_making" title="Sausage making">Sausage making</a> is an outcome of efficient butchery. Traditionally, sausage makers <a href="/wiki/Salting_(food)" title="Salting (food)">salted</a> various <a href="/wiki/Tissue_(biology)" title="Tissue (biology)">tissues</a> and <a href="/wiki/Organ_(anatomy)" title="Organ (anatomy)">organs</a> such as scraps, <a href="/wiki/Organ_meat" class="mw-redirect" title="Organ meat">organ meats</a>, blood, and fat to help preserve them. They then stuffed them into tubular casings made from the cleaned intestines of the animal, producing the characteristic cylindrical shape. Hence, sausages, <a href="/wiki/Pudding" title="Pudding">puddings</a>, and <a href="/wiki/Salami" title="Salami">salami</a> are among the oldest of prepared foods, whether cooked and eaten immediately or dried to varying degrees.<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (April 2018)">citation needed</span></a></i>]</sup></p>
                                                    <p>An <a href="/wiki/Akkadian_language" title="Akkadian language">Akkadian cuneiform</a> tablet records a dish of intestine casings filled with some sort of <a href="/wiki/Forcemeat" title="Forcemeat">forcemeat</a>.<sup id="cite_ref-2" class="reference"><a href="#cite_note-2">[2]</a></sup></p>
                                                    <p>A <a href="/wiki/Chinese_sausage" title="Chinese sausage">Chinese type of sausage</a> has been described, <i>lup cheong</i> (<a href="/wiki/Pinyin" title="Pinyin">pinyin</a>: <i><span lang="zh-Latn-pinyin">làcháng</span></i>) from the <a href="/wiki/Northern_and_Southern_dynasties" title="Northern and Southern dynasties">Northern and Southern dynasties</a> (<a href="/wiki/589_BC" title="589 BC">589 BC</a>–<a href="/wiki/420_BC" title="420 BC">420 BC</a>), made from goat and lamb meat with salt, and flavoured with green onion, <a href="/wiki/Bean_sauce" class="mw-redirect" title="Bean sauce">bean sauce</a>, ginger, and pepper. The modern type of <i>lup cheong</i> has a comparatively long <a href="/wiki/Shelf_life" title="Shelf life">shelf life</a>, mainly because of a high content of <a href="/wiki/Lactobacilli" class="mw-redirect" title="Lactobacilli">lactobacilli</a>; so high that it is considered sour by many.<sup id="cite_ref-Zeuthen2007_3-0" class="reference"><a href="#cite_note-Zeuthen2007-3">[3]</a></sup></p>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12">
                                                            <img src="./img/Sausage_making.jpg">
                                                            <p><a href="#">Sausage making</a> at home</p>
                                                        </div>
                                                        <div class="col-md-8 col-sm-12">
                                                            <p>The <a href="/wiki/Ancient_Greece" title="Ancient Greece">Greek</a> poet <a href="/wiki/Homer" title="Homer">Homer</a> mentioned a kind of <a href="/wiki/Blood_sausage" title="Blood sausage">blood sausage</a> in the <i><a href="/wiki/Odyssey" title="Odyssey">Odyssey</a></i>, <a href="/wiki/Epicharmus" class="mw-redirect" title="Epicharmus">Epicharmus</a> wrote a comedy titled <i>The Sausage</i>, and <a href="/wiki/Aristophanes" title="Aristophanes">Aristophanes</a>' play <i><a href="/wiki/The_Knights" title="The Knights">The Knights</a></i> is about a sausage vendor who is elected leader. Evidence suggests that sausages were already popular both among the <a href="/wiki/Ancient_Greeks" class="mw-redirect" title="Ancient Greeks">ancient Greeks</a> and <a href="/wiki/Ancient_Rome" title="Ancient Rome">Romans</a> and most likely with the various tribes occupying the larger part of Europe.<sup id="cite_ref-T-P_4-0" class="reference"><a href="#cite_note-T-P-4">[4]</a></sup></p>
                                                        </div>
                                                    </div>
                                                    <p>The most famous sausage in ancient Italy was from <a href="/wiki/Lucania" title="Lucania">Lucania</a> (modern <a href="/wiki/Basilicata" title="Basilicata">Basilicata</a>) and was called <i><a href="/wiki/Lucanica" title="Lucanica">lucanica</a></i>, a name which lives on in a variety of modern sausages in the Mediterranean.<sup id="cite_ref-Riley2007_5-0" class="reference"><a href="#cite_note-Riley2007-5">[5]</a></sup> During the reign of the Roman emperor <a href="/wiki/Nero" title="Nero">Nero</a>, sausages were associated with the <a href="/wiki/Lupercalia" title="Lupercalia">Lupercalia</a> festival.<sup id="cite_ref-All_about_sausages_6-0" class="reference"><a href="#cite_note-All_about_sausages-6">[6]</a></sup> Early in the 10th century during the <a href="/wiki/Byzantine_Empire" title="Byzantine Empire">Byzantine Empire</a>, <a href="/wiki/Leo_VI_the_Wise" title="Leo VI the Wise">Leo VI the Wise</a> outlawed the production of <a href="/wiki/Blood_sausage" title="Blood sausage">blood sausages</a> following cases of <a href="/wiki/Food_poisoning" class="mw-redirect" title="Food poisoning">food poisoning</a>.<sup id="cite_ref-All_about_sausages_6-1" class="reference"><a href="#cite_note-All_about_sausages-6">[6]</a></sup></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="Cashing">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <h4>Cashing</h4>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Cashing">
                                                <div class="accordion-body">
                                                    <p><a href="/wiki/Sausage_making" title="Sausage making">Sausage making</a> is an outcome of efficient butchery. Traditionally, sausage makers <a href="/wiki/Salting_(food)" title="Salting (food)">salted</a> various <a href="/wiki/Tissue_(biology)" title="Tissue (biology)">tissues</a> and <a href="/wiki/Organ_(anatomy)" title="Organ (anatomy)">organs</a> such as scraps, <a href="/wiki/Organ_meat" class="mw-redirect" title="Organ meat">organ meats</a>, blood, and fat to help preserve them. They then stuffed them into tubular casings made from the cleaned intestines of the animal, producing the characteristic cylindrical shape. Hence, sausages, <a href="/wiki/Pudding" title="Pudding">puddings</a>, and <a href="/wiki/Salami" title="Salami">salami</a> are among the oldest of prepared foods, whether cooked and eaten immediately or dried to varying degrees.<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (April 2018)">citation needed</span></a></i>]</sup></p>
                                                    <p>An <a href="/wiki/Akkadian_language" title="Akkadian language">Akkadian cuneiform</a> tablet records a dish of intestine casings filled with some sort of <a href="/wiki/Forcemeat" title="Forcemeat">forcemeat</a>.<sup id="cite_ref-2" class="reference"><a href="#cite_note-2">[2]</a></sup></p>
                                                    <p>A <a href="/wiki/Chinese_sausage" title="Chinese sausage">Chinese type of sausage</a> has been described, <i>lup cheong</i> (<a href="/wiki/Pinyin" title="Pinyin">pinyin</a>: <i><span lang="zh-Latn-pinyin">làcháng</span></i>) from the <a href="/wiki/Northern_and_Southern_dynasties" title="Northern and Southern dynasties">Northern and Southern dynasties</a> (<a href="/wiki/589_BC" title="589 BC">589 BC</a>–<a href="/wiki/420_BC" title="420 BC">420 BC</a>), made from goat and lamb meat with salt, and flavoured with green onion, <a href="/wiki/Bean_sauce" class="mw-redirect" title="Bean sauce">bean sauce</a>, ginger, and pepper. The modern type of <i>lup cheong</i> has a comparatively long <a href="/wiki/Shelf_life" title="Shelf life">shelf life</a>, mainly because of a high content of <a href="/wiki/Lactobacilli" class="mw-redirect" title="Lactobacilli">lactobacilli</a>; so high that it is considered sour by many.<sup id="cite_ref-Zeuthen2007_3-0" class="reference"><a href="#cite_note-Zeuthen2007-3">[3]</a></sup></p>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12">
                                                            <img src="./img/Sausage_making.jpg">
                                                            <p><a href="#">Sausage making</a> at home</p>
                                                        </div>
                                                        <div class="col-md-8 col-sm-12">
                                                            <p>The <a href="/wiki/Ancient_Greece" title="Ancient Greece">Greek</a> poet <a href="/wiki/Homer" title="Homer">Homer</a> mentioned a kind of <a href="/wiki/Blood_sausage" title="Blood sausage">blood sausage</a> in the <i><a href="/wiki/Odyssey" title="Odyssey">Odyssey</a></i>, <a href="/wiki/Epicharmus" class="mw-redirect" title="Epicharmus">Epicharmus</a> wrote a comedy titled <i>The Sausage</i>, and <a href="/wiki/Aristophanes" title="Aristophanes">Aristophanes</a>' play <i><a href="/wiki/The_Knights" title="The Knights">The Knights</a></i> is about a sausage vendor who is elected leader. Evidence suggests that sausages were already popular both among the <a href="/wiki/Ancient_Greeks" class="mw-redirect" title="Ancient Greeks">ancient Greeks</a> and <a href="/wiki/Ancient_Rome" title="Ancient Rome">Romans</a> and most likely with the various tribes occupying the larger part of Europe.<sup id="cite_ref-T-P_4-0" class="reference"><a href="#cite_note-T-P-4">[4]</a></sup></p>
                                                        </div>
                                                    </div>
                                                    <p>The most famous sausage in ancient Italy was from <a href="/wiki/Lucania" title="Lucania">Lucania</a> (modern <a href="/wiki/Basilicata" title="Basilicata">Basilicata</a>) and was called <i><a href="/wiki/Lucanica" title="Lucanica">lucanica</a></i>, a name which lives on in a variety of modern sausages in the Mediterranean.<sup id="cite_ref-Riley2007_5-0" class="reference"><a href="#cite_note-Riley2007-5">[5]</a></sup> During the reign of the Roman emperor <a href="/wiki/Nero" title="Nero">Nero</a>, sausages were associated with the <a href="/wiki/Lupercalia" title="Lupercalia">Lupercalia</a> festival.<sup id="cite_ref-All_about_sausages_6-0" class="reference"><a href="#cite_note-All_about_sausages-6">[6]</a></sup> Early in the 10th century during the <a href="/wiki/Byzantine_Empire" title="Byzantine Empire">Byzantine Empire</a>, <a href="/wiki/Leo_VI_the_Wise" title="Leo VI the Wise">Leo VI the Wise</a> outlawed the production of <a href="/wiki/Blood_sausage" title="Blood sausage">blood sausages</a> following cases of <a href="/wiki/Food_poisoning" class="mw-redirect" title="Food poisoning">food poisoning</a>.<sup id="cite_ref-All_about_sausages_6-1" class="reference"><a href="#cite_note-All_about_sausages-6">[6]</a></sup></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion List -->
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12 right-image">
                                    <div class="image-category">
                                        <img src="./img/Kielbasa7.jpg">
                                        <p class="image-content">
                                            <a href="#">Kielbasa</a> biała (white sausage), szynkowa (smoked), śląska and podhalańska styles (Poland)
                                        </p>
                                    </div>
                                    <div class="image-category">
                                        <img src="./img/GERMANY.jpg">
                                        <p class="image-content">
                                            Cooked Nuremberger pork sausages, <a href="#">sauerkraut</a> and beer in Germany
                                        </p>
                                    </div>
                                    <div class="image-category">
                                        <img src="./img/Grinners_breakfast.jpg">
                                        <p class="image-content">
                                            Full Scottish breakfast: <a href="#">Black pudding</a>, <a href="#">Lorne sausage</a>, toast, fried mushrooms and baked beans.
                                        </p>
                                    </div>
                                    <div class="image-category">
                                        <img src="./img/Ryynimakkara.jpg">
                                        <p class="image-content">
                                            <a href="#">Ryynimakkara</a>, a <a href="#">groat</a> sausage
                                        </p>
                                    </div>
                                    <div class="image-category">
                                        <img src="./img/Wurstplatte.jpg">
                                        <p class="image-content">
                                            Plate of German sausage: <a href="#">Jagdwurst</a>, <a href="#">liver sausage</a>, <a href="#">blood sausage</a>, <a href="#">Westphalian ham</a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Start Accordion List  -->
                                <div class="accordion" style="padding-left: 15px;">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Ingredients">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <h4>Ingredients</h4>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Ingredients">
                                            <div class="accordion-body">
                                                <p>A sausage consists of meat cut into pieces or ground, mixed with other ingredients, and filled into a casing. Ingredients may include a cheap <a href="/wiki/Starch" title="Starch">starch</a> filler such as breadcrumbs or grains, seasoning and flavourings such as spices, and sometimes others such as apple and leek.<sup id="cite_ref-beebswozzle_8-0" class="reference"><a href="#cite_note-beebswozzle-8">[8]</a></sup> The meat may be from any animal but is often pork, beef or <a href="/wiki/Veal" title="Veal">veal</a>, or poultry. The lean meat-to-fat <a href="/wiki/Ratio" title="Ratio">ratio</a> depends upon the style and producer. The meat content as labelled may exceed 100%; which happens when the weight of meat exceeds the total weight of the sausage after it has been made, sometimes including a drying process which reduces water content.</p>
                                                <p>In some jurisdictions foods described as sausages must meet regulations governing their content. For example, in the United States The <a href="/wiki/United_States_Department_of_Agriculture" title="United States Department of Agriculture">Department of Agriculture</a> specifies that the fat content of different defined types of sausage may not exceed 30%, 35% or 50% by weight; some sausages may contain binders or extenders.<sup id="cite_ref-9" class="reference"><a href="#cite_note-9">[9]</a></sup><sup id="cite_ref-10" class="reference"><a href="#cite_note-10">[10]</a></sup></p>
                                                <p>Many traditional styles of sausage from Asia and mainland Europe use no bread-based filler and include only meat (lean meat and fat) and flavorings.<sup id="cite_ref-11" class="reference"><a href="#cite_note-11">[11]</a></sup> In the United Kingdom and other countries with <a href="/wiki/English_cuisine" title="English cuisine">English cuisine</a> traditions, many sausages contain a significant proportion of bread and starch-based fillers, which may comprise 30% of ingredients. The filler in many sausages helps them to keep their shape as they are cooked. As the meat contracts in the heat, the filler expands and absorbs moisture and fat from the meat.<sup id="cite_ref-beebbanger_12-0" class="reference"><a href="#cite_note-beebbanger-12">[12]</a></sup></p>
                                                <p>When the food processing industry produces sausages for a low <a href="/wiki/Price_point" title="Price point">price point</a>, almost any part of the animal can end up in sausages, varying from cheap, fatty specimens stuffed with meat blasted off the carcasses (<a href="/wiki/Mechanically_recovered_meat" class="mw-redirect" title="Mechanically recovered meat">mechanically recovered meat</a>, MRM) and <a href="/wiki/Rusk" title="Rusk">rusk</a>. On the other hand, the finest quality contain only choice cuts of meat and seasoning.<sup id="cite_ref-beebswozzle_8-1" class="reference"><a href="#cite_note-beebswozzle-8">[8]</a></sup> In Britain, "meat" declared on labels could in the past include fat, connective tissue, and MRM. These ingredients may still be used but must be labelled as such, and up to 10% water may be included without being labelled.<sup id="cite_ref-beebbanger_12-1" class="reference"><a href="#cite_note-beebbanger-12">[12]</a></sup></p>
                                                <p>Sausages are <a href="/wiki/Emulsion" title="Emulsion">emulsion</a>-type products. They are composed of solid fat globules, dispersed in protein solution. The proteins function by coating the fat and stabilizing them in water.<sup id="cite_ref-13" class="reference"><a href="#cite_note-13">[13]</a></sup></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Gallery">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                <h4>Gallery</h4>
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Gallery">
                                            <div class="accordion-body">
                                                <div class="row justify-content-md-center">
                                                    <div class="gallery-image col-md-2 col-sm-12">
                                                        <img src="./img/Gallery1.jpg">
                                                        <p><a href="#">Salami</a>, a cured sausage</p>
                                                    </div>
                                                    <div class="gallery-image col-md-2 col-sm-12">
                                                        <img src="./img/Gallery2.jpg">
                                                        <p><a href="#">Vegetarian sausages</a> on toast</p>
                                                    </div>
                                                    <div class="gallery-image col-md-2 col-sm-12">
                                                        <img src="./img/Gallery3.jpg">
                                                        <p>A sliced chorizo sausage</p>
                                                    </div>
                                                    <div class="gallery-image col-md-3 col-sm-12">
                                                        <img src="./img/Gallery4.jpg">
                                                        <p>Two sausage rolls on a plate</p>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-md-center">
                                                    <div class="gallery-image col-md-3 col-sm-12">
                                                        <img src="./img/Gallery5.jpg">
                                                        <p>Sausages after <a href="#">roasting</a></p>
                                                    </div>
                                                    <div class="gallery-image col-md-2 col-sm-12">
                                                        <img src="./img/Gallery6.jpg">
                                                        <p>A <a href="#">sausage sandwich</a> with egg and ketchup</p>
                                                    </div>
                                                    <div class="gallery-image col-md-1 col-sm-12">
                                                        <img src="./img/Gallery7.jpg">
                                                        <p>Raw sausages</p>
                                                    </div>
                                                    <div class="gallery-image col-md-2 col-sm-12">
                                                        <img src="./img/Gallery8.jpg">
                                                        <p>Some sausages grilling</p>
                                                    </div>
                                                    <div class="gallery-image col-md-2 col-sm-12">
                                                        <img src="./img/Gallery9.jpg">
                                                        <p>Yam mu yo, a Thai sausage salad</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion List -->
                            </div>
                        </div>
                        <!-- End Main Content -->
                    </div>
                </div>
            </form>
            <!-- End main container -->

            <!-- Start Footer -->
            <footer class="nw-footer">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="content-footer col-md-9 col-sm-12" style="line-height: 55px;">
                            <i class="fas fa-history"></i><a class="btn-first" href="#">Last edited 6 days ago</a> by <a class="btn-second" href="#">Monkbot</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
            <!---->
        </div>
        <!-- Nav left menu -->
        <div class="nav-left-menu" id="navleftmenu">
        	<div class="leftbadge"></div>
        	<div class="menuitem"><div><i class="fas fa-home"></i><p>Home</p></div></div>
        </div>
        <div class="menumask"></div>

        <!-- End Nav Left menu -->
    </div>
</body>

	<!-- 
	Using bootstrap.min.js in Bootstrap Folder on vendor
		<script type="text/javascript"src="./vendor/bootstrap/bootstrap.min.js"></script> 
	-->

	<!-- Using cdn cloudflare url of all.min.css -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/style.js"></script>
	<script>	
		$( document ).ready(function() {
		    $('.dropdown-toggle').dropdown();
		    $('#navbar').click(function(){
			    $('.menumask').css('visibility','visible');
			});
            $('#dropdownButton').click(function(){
                var dropdowncontent_state = document.getElementsByClassName('dropdown-content').dropdowncontent.style.visibility;
                if(dropdowncontent_state == "" || dropdowncontent_state == "hidden"){
                    $('.dropdown-content').css('visibility','visible');
                }
                else {
                    $('.dropdown-content').css('visibility','hidden');
                }
            });

			$('.menumask').click(function(){
				$('.nav-left-menu').css('left','-320px');
				$('.menumask').css('visibility','hidden');
			});

			$('.btn-search').click(function(){
				$('.phone-search-mask').css('display','block');
				$('.phone-search-box').css('display','block');
				$('.phone-search-box').focus();
				$('.nav-bar').css('display','none');
				$('.logo').css('display','none');

			});

			$('.phone-search-mask').click(function(){
				$('.phone-search-mask').css('display','none');
				$('.phone-search-box').css('display','none');
				$('.nav-bar').css('display','block');
				$('.logo').css('display','block');
			});
		});
	</script>
</html>

