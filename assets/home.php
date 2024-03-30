<?php
/*
Template Name: Home
*/
?>

<?php get_header() ?>

<main class="main">

  <section class="hero" id="about">
    <div class="container hero__container">
      <h1 class="title hero__title wow animate__fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <?php the_field('title') ?> <span><?php the_field('name') ?></span>
      </h1>

      <h2 class="subtitle hero__subtitle wow animate__fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
        <?php the_field('subtitle-text') ?>
      </h2>

      <img class="hero__img wow animate__fadeInUp" data-wow-delay=".5s" src="<?php the_field('ctypto') ?>" alt="ctypto" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">

      <div class="hero__text wow animate__fadeInUp" data-wow-delay=".75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
        <?php the_field('hero-text') ?>
      </div>

      <a class="hero__btn wow animate__fadeInUp" data-wow-delay="1s" href="#exchange" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Обмен</a>
    </div>
  </section>

  <section class="exchange" id="exchange">
    <div class="container exchange__container">
      <div class="exchange__text wow animate__fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
        <?php the_field('exchange') ?>
      </div>

      <h3 class="title exchange__title wow animate__fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <?php the_field('exchange-title') ?>
      </h3>

      <div class="exchange__wrapper wow animate__fadeInUp" data-wow-delay=".75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
        <div class="exchange__block exchange__block_big">
          <div class="exchange__block-title">
            Вы отправляете
          </div>
          <input style="display: none;" id="searchValue1" class="searchCoin lng-search-coin-placeholder" type="text" name="" value="" placeholder="Search coin" oninput="searchCoin(1)">
          <ul class="exchange__block-list exchange__block-list-send" id="sendCoins">
            <li onclick="chooseCoin('BTC',1,'Bitcoin');" class="exchange__block-item exchange__block-item-send coin coin-1 Bitcoin" id="Bitcoin-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/BTC.svg" alt="BTC" data-code="BTC" data-title="Bitcoin" data-name="Bitcoin (BTC)">
            </li>
            <li onclick="chooseCoin('DASH',1,'Dash');" class="exchange__block-item exchange__block-item-send coin coin-1 Dash" id="Dash-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/DASH.svg" alt="DASH" data-code="DASH" data-title="Dash" data-name="Dash (DASH)">
            </li>
            <li onclick="chooseCoin('ETH',1,'Ethereum');" class="exchange__block-item exchange__block-item-send coin coin-1 Ethereum" id="Ethereum-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/ETH.svg" alt="ETH" data-code="ETH" data-title="Ethereum" data-name="Ethereum (ETH)">
            </li>
            <li onclick="chooseCoin('LTC',1,'Litecoin');" class="exchange__block-item exchange__block-item-send coin coin-1 Litecoin" id="Litecoin-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/LTC.svg" alt="LTC" data-code="LTC" data-title="Litecoin" data-name="Litecoin (LTC)">
            </li>
            <li onclick="chooseCoin('MATIC',1,'Polygon');" class="exchange__block-item exchange__block-item-send coin coin-1 Polygon" id="Polygon-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/MATIC.svg" alt="MATIC" data-code="MATIC" data-title="Polygon" data-name="Polygon (MATIC)">
            </li>
            <li onclick="chooseCoin('SOL',1,'Solana');" class="exchange__block-item exchange__block-item-send coin coin-1 Solana" id="Solana-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/SOL.svg" alt="SOL" data-code="SOL" data-title="Solana" data-name="Solana (SOL)">
            </li>
            <li onclick="chooseCoin('TRX',1,'Tron');" class="exchange__block-item exchange__block-item-send coin coin-1 Tron" id="Tron-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/TRX.svg" alt="TRX" data-code="TRX" data-title="Tron" data-name="Tron (TRX)">
            </li>
            <li onclick="chooseCoin('USDT',1,'Tether (trc20)');" class="exchange__block-item exchange__block-item-send coin coin-1 Tether (trc20)" id="Tether (trc20)-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/USDT.svg" alt="USDT" data-code="USDT" data-title="Tether (trc20)" data-name="Tether (trc20) (USDT)">
            </li>
            <li onclick="chooseCoin('XRP',1,'XRP');" class="exchange__block-item exchange__block-item-send coin coin-1 XRP" id="XRP-1">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/XRP.svg" alt="XRP" data-code="XRP" data-title="XRP" data-name="XRP (XRP)">
            </li>
          </ul>
        </div>

        <div class="exchange__block exchange__block_big">
          <div class="exchange__block-title">
            Вы получаете
          </div>
          <input style="display: none;" id="searchValue2" class="searchCoin lng-search2-coin-placeholder" type="text" name="" value="" placeholder="Search coin" oninput="searchCoin(2)">
          <ul class="exchange__block-list exchange__block-list-receive" id="receiveCoins">
            <li onclick="chooseCoin('BTC',2,'Bitcoin');" class="exchange__block-item exchange__block-item-receive coin coin-2 Bitcoin" id="Bitcoin-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/BTC.svg" alt="BTC" data-code="BTC" data-title="Bitcoin" data-name="Bitcoin (BTC)">
            </li>
            <li onclick="chooseCoin('DASH',2,'Dash');" class="exchange__block-item exchange__block-item-receive coin coin-2 Dash" id="Dash-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/DASH.svg" alt="DASH" data-code="DASH" data-title="Dash" data-name="Dash (DASH)">
            </li>
            <li onclick="chooseCoin('ETH',2,'Ethereum');" class="exchange__block-item exchange__block-item-receive coin coin-2 Ethereum" id="Ethereum-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/ETH.svg" alt="ETH" data-code="ETH" data-title="Ethereum" data-name="Ethereum (ETH)">
            </li>
            <li onclick="chooseCoin('LTC',2,'Litecoin');" class="exchange__block-item exchange__block-item-receive coin coin-2 Litecoin" id="Litecoin-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/LTC.svg" alt="LTC" data-code="LTC" data-title="Litecoin" data-name="Litecoin (LTC)">
            </li>
            <li onclick="chooseCoin('MATIC',2,'Polygon');" class="exchange__block-item exchange__block-item-receive coin coin-2 Polygon" id="Polygon-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/MATIC.svg" alt="MATIC" data-code="MATIC" data-title="Polygon" data-name="Polygon (MATIC)">
            </li>
            <li onclick="chooseCoin('SOL',2,'Solana');" class="exchange__block-item exchange__block-item-receive coin coin-2 Solana" id="Solana-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/SOL.svg" alt="SOL" data-code="SOL" data-title="Solana" data-name="Solana (SOL)">
            </li>
            <li onclick="chooseCoin('TRX',2,'Tron');" class="exchange__block-item exchange__block-item-receive coin coin-2 Tron" id="Tron-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/TRX.svg" alt="TRX" data-code="TRX" data-title="Tron" data-name="Tron (TRX)">
            </li>
            <li onclick="chooseCoin('USDT',2,'Tether (trc20)');" class="exchange__block-item exchange__block-item-receive coin coin-2 Tether (trc20)" id="Tether (trc20)-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/USDT.svg" alt="USDT" data-code="USDT" data-title="Tether (trc20)" data-name="Tether (trc20) (USDT)">
            </li>
            <li onclick="chooseCoin('XRP',2,'XRP');" class="exchange__block-item exchange__block-item-receive coin coin-2 XRP" id="XRP-2">
              <img src="<?php bloginfo('template_url'); ?>/assets/fonts/XRP.svg" alt="XRP" data-code="XRP" data-title="XRP" data-name="XRP (XRP)">
            </li>
          </ul>
        </div>

        <div class="exchange__block exchange__block_small">
          <div class="exchange__block-title">
            Запоните поля
          </div>

          <form class="exchange__block-form" method="post">
            <div style="display: none;">
              <div id="loader"></div>
              <div class="mobileCoin" id="mobileSend" onclick="openMobileChoose(1)"></div>
              <div class="mobileCoin" id="mobileReceive" onclick="openMobileChoose(2)"></div>
            </div>
            <div class="exchange__block-wrapper">
              <div class="exchange__block-text exchange__block-text-send">
                <span id="rate_p"></span><br>Вы отправляете
              </div>
              <div id="sendCoinInfo" class="exchange__block-header exchange__block-header-send">
                Bitcoin (BTC)
              </div>
              <input oninput="processChange()" class="exchange__block-input exchange__block-input-val exchange__block-input-send" type="number" id="inputAmount" required="">
            </div>

            <div class="exchange__block-wrapper">
              <div class="exchange__block-text exchange__block-text-receive">
                Вы получаете <span></span>
              </div>
              <div id="receiveCoinInfo" class="exchange__block-header exchange__block-header-receive">
                Ethereum (ETH)
              </div>
              <input class="exchange__block-input exchange__block-input-val exchange__block-input-receive" type="number" step="any" id="receiveInput" disabled="">
            </div>

            <div class="exchange__block-wrapper">
              <!-- <div class="exchange__block-text">
                    Адрес получения
                  </div> -->

              <!-- <input id="walletAddress" class="exchange__block-input exchange__block-input-receive-address " type="text" placeholder="Ваш адресс" required=""> -->

              <p id="errorWallet" class="lng-invalid-wallet errors" style="display: none;"></p>
            </div>

            <div class="exchange__block-wrapper">
              <!-- <div class="exchange__block-text e-mail__text">
                    E-mail
                  </div> -->

              <!-- <input oninput="typing('errorEmail')" id="email" class="exchange__block-input exchange__block-input-email" type="email" placeholder="Your e-mail" required=""> -->

              <p id="errorEmail" class="lng-invalid-email"></p>
            </div>

            <!---       <div class="exchange__block-wrapper">
                                       <div class="exchange__block-text">
                                           Promocode
                                       </div>
                                       <div class="" style="display: flex; align-content: center; align-items: center; justify-content: center;">
                                           <input id="promocode" type="text" name="" value="" class="exchange__block-input" oninput="removeError()" placeholder="Promocode">
                                           <button style="margin-top: 15px; border: none; min-width: 40px; border-radius: 0px 5px 5px 0px;" class="btn_mark" id="promoBtn" type="button" name="button" onclick="activatePromo()">
                                               <svg xmlns="http:/www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                   <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                                                   </path>
                                               </svg>
                                           </button>
                                       </div>
                                   </div>

                                   --->

            <!-- <button onclick="exchange()" class="exchange__block-btn" id="continue_btn" type="button"><a id="continue_btn" style="color: #fff;">Продолжить</a></button> -->

            <?php echo do_shortcode('[contact-form-7 id="3cfb8ce" title="Контактная форма"]') ?>

            <p id="error" style="display: block;margin: 0 auto;width: 100%;text-align: center;margin-top: 10px;color: #ff0016b8;"></p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="how-exchange" id="how-exchange">
    <div class="container how-exchange__container">
      <div class="how-exchange__wrapper">
        <div class="how-exchange__start wow animate__fadeInLeft" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
          <div class="how-exchange__text">
            <?php the_field('how-exchange-text') ?>
          </div>

          <h3 class="title how-exchange__title">
            <?php the_field('how-exchange-title') ?>
          </h3>

          <img class="how-exchange__steps" src="<?php the_field('steps') ?>" alt="steps">
        </div>

        <div class="how-exchange__end wow animate__fadeInRight" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
          <img class="how-exchange__steps-2" src="<?php the_field('steps-two') ?>" alt="steps">
        </div>
      </div>

      <div class="how-exchange__blocks wow animate__fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <div class="how-exchange__block">
          <div class="how-exchange__block-step">
            <?php the_field('block-step-one') ?>
          </div>
          <h4 class="how-exchange__block-title">
            <?php the_field('block-title-one') ?>
          </h4>

          <div class="how-exchange__block-text">

          </div>

          <img src="<?php the_field('step-img-one') ?>" alt="">


        </div>

        <div class="how-exchange__block">
          <div class="how-exchange__block-step">
            <?php the_field('block-step-two') ?>
          </div>
          <h4 class="how-exchange__block-title">
            <?php the_field('block-title-two') ?>
          </h4>
          <div class="how-exchange__block-text">

          </div>

          <img class="how-exchange__block-img" src="<?php the_field('step-img-two') ?>" alt="">

        </div>

        <div class="how-exchange__block">
          <div class="how-exchange__block-step">
            <?php the_field('block-step-three') ?>
          </div>
          <h4 class="how-exchange__block-title">
            <?php the_field('block-title-three') ?>
          </h4>
          <div class="how-exchange__block-text">


          </div>
          <img class="how-exchange__block-img" src="<?php the_field('step-img-three') ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="transactions wow animate__fadeInUp" data-wow-delay=".25s" id="transactions" style="visibility: hidden; animation-delay: 0.25s; animation-name: none;">
    <div class="container transactions__container">
      <h3 class="transactions__title">
        <?php the_field('transactions-title') ?>
        <div class="transactions__title-circle">
          <span></span>
        </div>
      </h3>

      <?php the_field('statistics-text') ?>

      <!-- <div class="transactions__table-wrapper">
        <table class="transactions__table">
          <tbody>
            <tr class="transactions__tr-header">
              <th class="transactions__th">TxHash</th>
              <th class="transactions__th">Block</th>
              <th class="transactions__th">From</th>
              <th class="transactions__th">To</th>
              <th class="transactions__th">Value</th>
              <th class="transactions__th">Age</th>
            </tr>
            <tr class="transactions__table-content">
            </tr>
            <tr class="transactions__tr">
              <td class="transactions__td">wgggoaslmqb...</td>
              <td class="transactions__td">372017</td>
              <td class="transactions__td">A35JJF...</td>
              <td class="transactions__td">38A0J0...</td>
              <td class="transactions__td">9835.35 TRX</td>
              <td class="transactions__td transactions__td_blue">Right now</td>
            </tr>
            <tr class="transactions__tr">
              <td class="transactions__td">un89zp6xqn...</td>
              <td class="transactions__td">156439</td>
              <td class="transactions__td">F0J0B4...</td>
              <td class="transactions__td">37F51B...</td>
              <td class="transactions__td">3063.48 FTM</td>
              <td class="transactions__td transactions__td_blue">Right now</td>
            </tr>
            <tr class="transactions__tr">
              <td class="transactions__td">t6z9t6otlb...</td>
              <td class="transactions__td">109767</td>
              <td class="transactions__td">JJ5T9J...</td>
              <td class="transactions__td">FJKT59...</td>
              <td class="transactions__td">0.49 ETH</td>
              <td class="transactions__td transactions__td_blue">Right now</td>
            </tr>
          </tbody>
        </table>
      </div> -->
    </div>
  </section>


  <div class="container support__container">

    <div id="anycomment-app"></div>


  </div>


  <section class="support" id="support">
    <div class="container support__container">
      <span class="header__logo header__link" href="/" style="font-size: 30px; color: #007eda;"><?php the_field('name-logo') ?></span>
      <h3 class="support__title">
        <?php the_field('support-title') ?>
      </h3>
      <div class="support__text">
        <?php the_field('name-social-network') ?>
        <a href="<?php the_field('telegramm-link-username') ?>"><?php the_field('username') ?></a>
      </div>
      <a class=" support__btn" href="<?php the_field('telegramm-link-username') ?>">
        <img src="<?php bloginfo('template_url'); ?>/assets/fonts/tg.svg" alt="tg"> Открыть
      </a>
    </div>
  </section>
</main>

<?php get_footer() ?>