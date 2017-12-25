<?php get_header(); ?>

<!-- GREEN BANNER -->

    <div class="banner-container">
            <div class="color-banner">
                <div class="container" id="header-text">
                    <div class="row">
                        <h1 id="title-tekst"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
    </div>

<!-- CONTENT -->

    <div class="container" id="text-box-container">
            <div class="row" id="text-box-row">
                <div class="col">
                    <h1>Wie zijn we?</h1>
                    <p>
                        Wij zijn een team van 15 toffe mensen met 2 grote gezamelijke passies.
                        Muziek, en muziek op vinyl. Doordat de terugkeer van lp’s een feit is,
                        openen wij een pop-up store waarin enkel en alleen maar dit audioformaat te vinden is.
                        Bij ons zal je niet jouw typische Ed Sheeran album kunnen vinden. 
                        Wij leggen de focus namelijk op de kleinere artiesten die bruisen van het talent. 
                        Muziek is er om te verkennen! En er is geen beter medium dan vinyl om dit te ervaren.
                    </p>
                    <img id="team-pic" src="<?php echo get_template_directory_uri(); ?>/assets/team_pic.jpg">
                </div>
                <div class="col">
                    <h1>Wat doen we?</h1>
                    <p>
                        Samen met QRATES, een online crowdfund platform speciaal voor vinyl,
                        openen wij een pop-up store in Gent voor 3 maanden. Het aanbod in onze store zal vooral
                        aanspreken naar de jeugd toe, aangezien veel crowdfunders tussen de 15 en 30 jaar zijn.
                        Als een lp zijn minimum aantal backers heeft behaald op QRATES, zal die lp in productie
                        gaan voor een heel beperkte oplage. Een deel van die oplage zal in onze pop-up store verschijnen.
                        De boodschap is dus om snel te zijn aangezien wij geen grote voorraden hebben.
                        Van elk album zullen wij een demo-lp plaatsen in onze store, samen met een aantal platenspelers
                        zodat je kan verkennen. Wees er zeker van dat er wat voor jou zal tussenliggen door onze
                        samenwerking met labels als:
                    </p>
                    <div class="partners">
                        <img id="partner" src="<?php echo get_template_directory_uri(); ?>/assets/timeslave_recordings.png">
                        <img id="partner" src="<?php echo get_template_directory_uri(); ?>/assets/chillhop_records.jpg">
                        <img id="partner" src="<?php echo get_template_directory_uri(); ?>/assets/rewired_records.jpg">
                        <img id="partner-end" src="<?php echo get_template_directory_uri(); ?>/assets/snazzy.jpg">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container" id="line-splitter">
            <div class="row">
                <div class="col">
                    <img id="line" src="<?php echo get_template_directory_uri(); ?>/assets/line.png">
                </div>
                <div class="col-1" id="pen-icon-col" align="center">
                    <img id="pen-icon" src="<?php echo get_template_directory_uri(); ?>/assets/pencil-icon.png">
                </div>
                <div class="col">
                    <img id="line" src="<?php echo get_template_directory_uri(); ?>/assets/line.png">
                </div>
            </div>
        </div>
        <br>
        <div class="container" id="bottom-banner">
            <img id="bottom-banner-pic" src="<?php echo get_template_directory_uri(); ?>/assets/bottom_banner_pic.png">
        </div>

<?php get_footer(); ?>