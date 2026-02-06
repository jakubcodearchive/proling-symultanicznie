<!-- Dynamic $title, $canonical and $description, $meta_keywords --> 
<?php
$title = "Tłumaczenia symultaniczne Gdańsk – Biuro tłumaczeń | Symultanicznie PL";
$canonical = "https://symultanicznie.pl/";
$description = "Symultanicznie PL — profesjonalne tłumaczenia symultaniczne w Gdańsku. Kompleksowa obsługa konferencji, kabiny tłumaczeniowe i doświadczony tłumacz. Poproś o wycenę.";
$meta_keywords = "tłumaczenia symultaniczne Gdańsk, biuro tłumaczeń Gdańsk, tłumacz symultaniczny, Symultanicznie PL, tłumaczenia konferencyjne";
?>

<?php require('./includes/header.php');?>
<!-- SITE HEADER WITH NAVIGATION -->
<header class="site-header">
  <div class="wrapper">
    <a href="/" class="logo">Proling</a>
     <!-- <div class="site-header__logo">
        <img src="images/index/logo.jpg" alt="Logo biura tłumaczeń Proling" />
     </div> -->
    <div class="site-header__menu-content">
        <div class="site-header__menu-icon" aria-label="Toggle menu">
          <div class="site-header__menu-icon__middle"></div> 
        </div>

        <span class="telephone">
            <i class="fas fa-phone-alt"></i> 509-662-578
        </span>
        
        <nav class="main-nav main-nav--pull-right">
            <ul class="nav-list">
                <li><a href="#uslugi">Usługi</a></li>
                <li><a href="#o_nas">O nas</a></li>
                <li><a href="#projekty">Projekty</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
        </nav>
    </div>
  </div>
</header>

<!-- HERO SECTION -->
<section class="hero">
  <picture>
    <source srcset="images/x-large/poznan_symultaniczne-large@2x.webp" type="image/webp" media="(min-width: 800px) and (min-resolution: 192dpi)" >
    <source srcset="images/large/poznan_symultaniczne-large.webp" type="image/webp" media="(min-width: 800px)" >
    <source srcset="images/small/poznan_symultaniczne-small.webp" type="image/webp" >
    
    <!-- Fallback image for browsers that don't support WebP -->
    <img src="images/index/poznan_symultaniczne.jpg" 
      alt="Tłumacz symultaniczny pracujący w kabinie podczas konferencji biznesowej"
      width="600"
      height="400"
      loading="lazy"
    >
  </picture>

    <div class="overlay">
        <h1 class="hero-title">Tłumaczenia symultaniczne Gdańsk</h1>

        <h2 class="hero-subtitle">
            Profesjonalne biuro tłumaczeń konferencyjnych – Symultanicznie PL
        </h2>

        <p class="hero-description">
            Oferujemy obsługę symultaniczną i konsekutywną podczas konferencji,
            szkoleń i wydarzeń biznesowych. Zapewniamy kabiny tłumaczeniowe, obsługę techniczną
            oraz doświadczonych tłumaczy pracujących w dynamicznych warunkach konferencyjnych.
            Realizujemy projekty w Gdańsku i na terenie całej Polski.
        </p>

        <a href="#kontakt" class="hero-btn btn-blue">Skontaktuj się z nami</a>
    </div>
</section>

<div class="wrapper">
<!-- Headline, subheadline, image --> 
<section id="uslugi" class="centered-text-section section-margin">

  <div class="centered-text-container">
      <h2 class="headline 
              headline--centered
              headline--b-margin-small">
        Biuro tłumaczeń Symultanicznie PL – obsługa konferencji i wydarzeń
      </h2>

      <!-- Sub-heading -->
      <h3 class="headline 
              headline--centered 
              headline--light
              headline--small
              headline--b-margin-large
              headline--dark-blue
              headline--margin-top
          ">
      Biuro tłumaczeń działające w Gdańsku – kompleksowa obsługa konferencji
      </h3>

      <div class="wrapper--medium wrapper--medium--one-column-image
                      wrapper--medium--one-column-image--margin-top">
          <img 
              src="./images/small/tlumaczenie-symultaniczne.webp" 
              alt="Profesjonalne tłumaczenia symultaniczne podczas konferencji i wydarzeń biznesowych"
              loading="lazy">
      </div>

      <p>
      Nasze biuro tłumaczeń świadczące usługi na tereie Trójmiasta specjalizuje się w realizacji 
      <strong>obsługi symultanicznej</strong> oraz przekładów konsekutywnych podczas konferencji, 
      spotkań biznesowych i wydarzeń branżowych. 
      Dzięki połączeniu wiedzy językowej oraz profesjonalnego sprzętu konferencyjnego 
      zapewniamy płynną komunikację w wielu językach i na najwyższym poziomie.
      </p>

      <p>
      Obsługa konferencji realizowana przez naszych tłumaczy na terenie Gdańska
      to gwarancja precyzji, naturalnego brzmienia i pełnego zrozumienia przekazu. 
      Nasi doświadczeni specjaliści pracują w dynamicznym środowisku konferencyjnym, 
      gdzie liczy się tempo, koncentracja i doskonała znajomość kontekstu.
      </p>

      <p>
      Obsługujemy zarówno duże kongresy międzynarodowe, jak i kameralne spotkania firmowe, 
      oferując kompleksowe wsparcie techniczne: 
      <em>kabiny tłumaczeniowe, zestawy słuchawkowe, systemy tour guide</em> 
      oraz profesjonalne nagłośnienie.
      </p>

      <div class="centered-text-icon">
          <!-- Ikona -->
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C6.477 2 2 6.476 2 12v4c0 1.105.895 2 2 2h2v-6H4v-2a8 8 0 1116 0v2h-2v6h2c1.105 0 2-.895 2-2v-4c0-5.524-4.477-10-10-10z" 
                  fill="#1E293B"/>
              <circle cx="12" cy="17" r="1.5" fill="#1E293B"/>
          </svg>
      </div>

  </div><!-- end of centered-text-container -->
</section>

<!-- Our Projects section --> 
<section id="projekty" class="section-margin">
  <!-- TWO COLUMN LAYOUT -->
  <div class="service-grid">

      <!-- Image Column -->
        <div class="image-column">
          <picture>
            <source srcset="images/large/biuro-tlumaczen-miedzynarodowe-large.webp" type="image/webp" media="(min-width: 800px)">
            <source srcset="images/small/biuro-tlumaczen-miedzynarodowe-small.webp" type="image/webp">
            <img 
             
              src="images/img/biuro-tlumaczen-miedzynarodowe-fallback.jpg" 
              alt="Nasze biuro obsługuje tłumaczenia ustne podczas międzynarodowej konferencji"
              width="600" 
              height="400"
              loading="lazy"
            >
          </picture>
        </div>

       <!-- Text Column -->
        <div class="text-column">
          <h3 class="headline headline--small headline--narrow headline--b-margin-small">
            Obsługa symultaniczna międzynarodowej konferencji branżowej
          </h3>

          <p>
            Nasze <strong>biuro tłumaczeń działające w Gdańsku</strong> specjalizuje się w obsłudze 
            <strong>przekładu symultanicznego w kabinie</strong>podczas wydarzeń o zasięgu międzynarodowym. 
            Jednym z realizowanych projektów była kompleksowa obsługa konferencji branżowej 
            z udziałem przedstawicieli administracji publicznej, ekspertów oraz delegacji zagranicznych.
          </p>

          <p>
            Podobnie jak w przypadku wielu innych projektów zastosowaliśmy profesjonalne kabiny tłumaczeniowe, systemy audio oraz sprawdzone 
            rozwiązania techniczne, które zagwarantowały <strong>wysoką jakość przekładu symultanicznego</strong> 
            i komfort uczestników korzystających z przekładu w czasie rzeczywistym.
          </p>

          <p>
            Dzięki doświadczeniu naszego zespołu, znajomości specjalistycznej terminologii oraz umiejętności
            pracy w dynamicznych warunkach możliwe jest zachowanie pełnej płynności komunikacji 
            między prelegentami a międzynarodową publicznością, która często jest potzebna przy tłumaczeniu paneli, lub warsztatów.
          </p>

          <p>
            Wspieramy organizatorów wydarzeń wymagających profesjonalnej obsługi językowej — 
            od konferencji wysokiego szczebla, przez targi i debaty gospodarcze, 
            aż po spotkania naukowe i akademickie.
          </p>
        </div>
  </div>

  <div class="service-grid">

    <!-- Text Column -->
    <div class="text-column">
    <h3 class="headline headline--small headline--narrow headline--b-margin-small">
        Obsługa tłumaczeń konferencyjnych dla CFA Society Poland
    </h3>

    <p>
        Realizowaliśmy obsługę symultaniczną podczas cyklu wydarzeń organizowanych przez CFA Society Poland — od konferencji branżowych po szkolenia i warsztaty dla profesjonalistów rynku kapitałowego. Projekt obejmował obsługę sesji plenarnych, paneli eksperckich oraz sesji Q&A, zapewniając płynną komunikację między prelegentami a międzynarodową publicznością.
    </p>

    <p>
        CFA Society Poland działa w sieci CFA Institute i organizuje wydarzenia edukacyjne, programy certyfikacyjne oraz szkolenia dla analityków i menedżerów — udział w ich konferencjach bierze zwykle kilkaset osób, w tym uczestnicy z całej Polski i goście zagraniczni. Z tego powodu przygotowanie terminologiczne i dobre zaplecze techniczne były kluczowe dla jakości przekładu. 
    </p>

    <p>
        Przygotowując tłumaczenia, opracowaliśmy glosariusz terminologii 
        finansowej, dobraliśmy zespół 
        <em>doświadczonych tłumaczy konferencyjnych oraz skonfigurowaliśmy 
        kabiny </em>i kanały audio — w tym rozwiązania hybrydowe dla uczestników zdalnych. 
        Dzięki temu każdy <strong>tłumacz konferencyjny</strong> mógł pracować w optymalnych warunkach, a uczestnicy otrzymali czytelny przekład specjalistycznych wystąpień.
    </p>

    <p>
        W realizacji projektu zwracaliśmy szczególną uwagę na precyzję terminologiczną i synchronizację kanałów językowych — elementy niezbędne przy wydarzeniach o profilu merytorycznym, takich jak panele dotyczące standardów inwestycyjnych, etyki czy analiz rynkowych. 
        Jako <strong>biuro tłumaczeń działające w Gdańsku</strong> zapewniamy kompleksową obsługękonferencji i szkoleń, w tym wsparcie logistyczne i techniczne dostosowane do skali wydarzenia.
    </p>
    </div>


      <!-- Image Column -->
      <div class="image-column">
        <picture>
        <!-- Large WebP for wider screens -->
        <source 
          srcset="images/large/kabiny_symultaniczne-large.webp" type="image/webp" media="(min-width: 800px)">
        <source 
          srcset="images/small/kabiny_symultaniczne-small.webp" type="image/webp">

        <!-- JPG fallback -->
        <img 
         
          src="images/img/kabiny_symultaniczne-fallback.jpg" 
          alt="Kabiny do tłumaczeń symultanicznych i system audio na konferencji branżowej"
          width="600" 
          height="400"
          loading="lazy"
          style="width: 100%; height: auto;">
        </picture>
      </div>
  </div>

  <div class="service-grid">
      
      <!-- Image Column -->
      <div class="image-column">
        <picture>
          <!-- Standard large image for wider viewports -->
          <source 
            srcset="images/large/kongres-symultaniczne-large.webp" 
            type="image/webp" 
            media="(min-width: 800px)">

          <!-- Smaller image for small screens -->
          <source 
            srcset="images/small/kongres-symultaniczne-small.webp" 
            type="image/webp">

          <!-- Fallback image (JPG) -->
          <img 
            src="images/img/kongres-symultaniczne-fallback.jpg" 
            alt="Tłumacz konferencyjny podczas szkolenia i warsztatów międzynarodowych" 
            width="600" 
            height="400" 
            loading="lazy"
            sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 600px"
            style="width: 100%; height: auto;">
        </picture>
      </div>  

     <!-- Text Column -->
    <div class="text-column">
    <h3 class="headline headline--small headline--narrow headline--b-margin-small">
        Tłumaczenia symultaniczne dla PZPN – szkolenia trenerów i programy rozwojowe
    </h3>

    <p>
        W ramach stałej współpracy z Polskim Związkiem Piłki Nożnej realizujemy
        <strong>obsługę symultaniczną podczas szkoleń i programów edukacyjnych</strong>
        kierowanych do trenerów pracujących w akademiach piłkarskich. 
        Spotkania prowadzone są zarówno
        przez polskich specjalistów, jak i szkoleniowców z zagranicy, co wymaga sprawnej i precyzyjnej komunikacji
        między uczestnikami.
    </p>

    <p>
        Sesje szkoleniowe odbywają się w różnych miastach – w tym w <strong>Warszawie, Poznaniu i Gdańsku</strong> –
        a także na obiektach treningowych na terenie całej Polski. Tematyka obejmuje m.in. psychologię sportu,
        metodykę pracy z młodymi zawodnikami, analizę taktyczną oraz współczesne standardy szkolenia.
    </p>

    <p>
        Każde wydarzenie wymaga odpowiedniego przygotowania terminologicznego, ponieważ poruszane zagadnienia
        dotyczą zarówno technicznej strony piłki nożnej, jak i zagadnień rozwojowych, mentalnych oraz organizacyjnych.
        Dzięki doświadczeniu zespołu odpowiedzialnego za obsługę językową wydarzenia możliwe jest wierne oddanie
        intencji prelegentów i płynne przekazywanie wiedzy.
    </p>

    <p>
        Współpraca z PZPN to dla nas okazja do wsparcia projektów, które w realny sposób podnoszą poziom szkolenia w Polsce.
        Cieszymy się, że możemy uczestniczyć w wydarzeniach, które rozwijają trenerów akademii i wpływają na jakość
        pracy z młodymi piłkarzami.
    </p>
    </div>

  </div>

  <div class="service-grid">

    <!-- Text Column -->
    <div class="text-column">
        <h3 class="headline headline--small headline--narrow headline--b-margin-small">
            Tłumaczenia konferencyjne dla sektora środowiskowego
        </h3>

        <p>
            Podczas specjalistycznych wydarzeń poświęconych IPTOK-om zapewnialiśmy
            <strong>przekład symultaniczny</strong> dla uczestników reprezentujących laboratoria badawcze,
            instytucje certyfikujące oraz podmioty zajmujące się analizą składu gazów i ich wpływu na środowisko.
            Tematyka spotkań obejmowała zarówno zagadnienia techniczne, jak i normy regulacyjne obowiązujące
            w Unii Europejskiej.
        </p>

        <p>
            W ramach współpracy zapewnialiśmy tłumaczenie podczas szkoleń dla laboratoriów zajmujących się 
            pomiarami emisji i oceną zanieczyszczeń. Prelegenci omawiali nowoczesne rozwiązania pomiarowe,
            metody walidacji oraz wymagania stawiane jednostkom badawczym. Dzięki odpowiedniemu przygotowaniu
            terminologicznemu możliwe było wierne oddanie specjalistycznych treści technicznych.
        </p>

        <p>
            Uczestniczyliśmy również w konferencji poświęconej sektorowi spalarni odpadów, gdzie dyskutowano
            o europejskich regulacjach środowiskowych, standardach emisyjnych i wyzwaniach operacyjnych.
            W wydarzeniu brali udział operatorzy spalarni, przedstawiciele branżowych stowarzyszeń
            oraz reprezentanci samorządów lokalnych. 
            Przekład symultaniczny umożliwił płynną wymianę wiedzy i doświadczeń między delegacjami z różnych państw.
        </p>

        <p>
            Projekty realizowaliśmy w różnych lokalizacjach na terenie kraju, również w rejonie Gdańska,
            wspierając wydarzenia wymagające precyzyjnego i merytorycznego przekładu treści technicznych.
            Nasze zaangażowanie pozwoliło uczestnikom skupić się na merytoryce spotkań, niezależnie od języka prelegentów.
        </p>
    </div>

    <!-- Image Column -->
    <div class="image-column">
        <picture>
        <source srcset="./images/small/kabina-symultaniczna.webp" media="(min-width: 800px)"> 
        <img class="row__4-image" src="./images/balkany.jpg"
         alt="Tłumaczenia symultaniczne podczas konferencji technicznej">
        </picture>
    </div>

  </div>

  <div class="service-grid">
    <!-- Text Column -->
    <div class="text-column">
        <h3 class="headline headline--small headline--narrow headline--b-margin-small">
            Tłumaczenia symultaniczne dla UNICEF — konferencja o dostępie dzieci uchodźców do wymiaru sprawiedliwości
        </h3>

        <p>
            Podczas jednego z projektów realizowaliśmy <strong>obsługę symultaniczną konferencji UNICEF</strong> w ramach
            spotkania poświęconego prawom dzieci-uchodźców i dzieci migrujących. Wydarzenie zgromadziło ekspertów
            zajmujących się ochroną najmłodszych, przedstawicieli instytucji publicznych oraz organizacji międzynarodowych,
            a jego celem było omówienie barier i wyzwań związanych z dostępem do wymiaru sprawiedliwości dla dzieci
            przebywających poza krajem pochodzenia.
        </p>

        <p>
            UNICEF prowadzi globalne działania na rzecz ochrony praw dziecka — od wsparcia humanitarnego po projekty
            edukacyjne i systemowe rozwiązania wzmacniające instytucje publiczne. Tematyka konferencji odzwierciedlała
            jeden z kluczowych obszarów pracy organizacji: zapewnienie, aby każde dziecko — niezależnie od sytuacji
            migracyjnej — miało zagwarantowaną możliwość wysłuchania i sprawiedliwej procedury.
        </p>

        <p>
            Dzięki sprawnej organizacji technicznej, odpowiednio skonfigurowanym kabinom i narzędziom audio uczestnicy
            — zarówno prelegenci, jak i goście z zagranicy — mogli swobodnie śledzić dyskusję. Dla naszego zespołu była to
            realizacja wymagająca dużego skupienia i odpowiedzialności, wpisująca się w misję wspierania wydarzeń o
            znaczeniu społecznym i systemowym.
        </p>
    </div>

    <!-- Image Column -->
    <div class="image-column">
        <picture>
        <!-- Standard large image for wider viewports -->
        <source 
            srcset="images/large/tlumaczenia-wielojezyczne-polska-large.webp" 
            type="image/webp" 
            media="(min-width: 800px)">

        <!-- Smaller image for small screens -->
        <source 
            srcset="images/small/tlumaczenia-wielojezyczne-polska-small.webp" 
            type="image/webp">

        <!-- Fallback image (JPG) -->
        <img 
            src="images/img/tlumaczenia-wielojezyczne-polska-fallback.jpg" 
            alt="Wielojęzyczna obsługa konferencji międzynarodowej" 
            width="600" 
            height="400" 
            loading="lazy"
            sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 600px"
        >
        </picture> 
    </div>
  </div>
</section>

<!-- OUR FEATURES SECTION Three columns -->
<section class="section-services section-margin">
  <header class="section-header">
    <h2 class="headline 
    headline--centered
    ">Tłumaczenia konferencyjne Trójmiasto</h2>
    
    <h3 class="headline 
    headline--small
    headline--light 
    headline--margin-top 
    headline--dark-blue
    headline--b-margin-large
    headline--centered
    ">Symultanicznie PL — szeroki zakres usług tłumaczeniowych dla wydarzeń</h3>
  </header>

  <div class="services-grid">
    
    <!-- Service Item --> 
    <div class="service-item">
      <picture>
        <!-- WebP source -->
        <source 
          srcset="./images/small/tlumaczenia-wielojezyczne-polska-small.webp" 
          type="image/webp">

        <!-- JPG fallback -->
        <img 
          src="./images/small/tlumaczenia-wielojezyczne-polska-small.jpg" 
          alt="Tłumaczenia konsekutywne dla wydarzeń branżowych"
          loading="lazy"
          width="420"
          height="580"
          style="width: 100%; height: auto; object-fit: cover;">
      </picture>

      <h3 class="headline headline--small headline--margin-top headline--grey">Tłumaczenia konsekutywne</h3>
      <p>
        Konsekutywny przekład sprawdza się przy szkoleniach, prezentacjach 
        i spotkaniach negocjacyjnych,
        gdy prelegent chce przekazać dłuższy fragment przed tłumaczeniem. To rozwiązanie cenione
        za precyzję przekazu i naturalne brzmienie w języku docelowym. 
        Oferujemy przygotowanie terminologiczne i obsadę tłumaczy na wydarzenia w Gdańsku i całej Polsce.
      </p>
    </div>
    
    <!-- Service Item --> 
    <div class="service-item">
      <picture>
        <source srcset="./images/small/balkany-small.webp" type="image/webp">
        <img 
          src="./images/small/balkany-small.jpg" 
          alt="Tłumaczenia symultaniczne podczas konferencji i debat międzynarodowych"
          width="420" 
          height="580" 
          loading="lazy" 
          >
      </picture>

      <h3 class="headline headline--small headline--margin-top headline--grey">Tłumaczenia symultaniczne</h3>
      <p>
        Przekład symultaniczny zapewnia płynność i tempo dyskusji podczas kongresów, konferencji
        i debat międzynarodowych. Jak to działa? Tłumacze pracują w kabinach, korzystając z profesjonalnego sprzętu, by
        dostarczyć przekład na żywo bez przerywania wystąpień. Zapewniamy pełen pakiet usług, min: ekipę tłumaczy oraz pełne wsparcie
        techniczne (kabiny, konsole, kanały audio) dostosowane do wielkości wydarzenia.
      </p>

    </div>

    <!-- Service Item --> 
    <div class="service-item">
      <picture>
        <source srcset="./images/small/dendro-small.webp" type="image/webp">
        <img 
          src="./images/small/dendro-small.jpg" 
          alt="Tłumaczenia symultaniczne online i obsługa hybrydowa"
          width="420" 
          height="580" 
          loading="lazy" 
          >
      </picture>

      <h3 class="headline headline--small headline--margin-top headline--grey">Tłumaczenia online i hybrydowe</h3>
      <p>
        Realizujemy również <strong>przekład symultaniczny online</strong> oraz obsługę hybrydową na platformach takich jak Zoom czy Teams. 
        Dzięki temu, jesteśmy w stanie - bez kabin - obsłużyć uczestników zdalnych zachowując wysoką jakość przekładu i synchronizację kanałów językowych. Jeśli to konieczne możemy zapewnić usługi hybrydowe (ma miejscu oraz online).
      </p>
    </div>
  </div><!-- services grid -->

  <div class="section-cta">
    <a href="#kontakt" class="btn-primary">Tłumaczenia symultaniczne</a>
  </div>
</section>

<!-- Benefits Icons section - four columns -->
<section class="section-margin">

  <div class="benefits-header">
    <h2 class="headline 
    headline--centered 
    headline--b-margin-medium">
    Symultaniczne czy konsekutywne?</h2>
    <h3 class="headline 
      headline--centered 
      headline--light
      headline--small
      headline--b-margin-large
      headline--dark-blue
      headline--margin-top
      ">
      Niezależnie od formatu tłumaczenia — zapewniamy profesjonalną obsługę konferencji i 
      komfort komunikacji w Gdańsku i całym kraju
    </h3>
  </div>

  <div class="benefits-grid">
    <div class="benefit-item">
      <h3 class="headline headline--small headline--centered">Dopasowana wycena</h3>
      <span class="icon">★</span>
      <p class="paragraph-centered">Indywidualna, przejrzysta oferta na tłumaczenia symultaniczne uwzględniająca liczbę języków, czas i zapotrzebowanie techniczne. </p>
    </div>

    <div class="benefit-item">
      <h3 class="headline headline--small headline--centered">Optymalna Jakość przekładu</h3>
      <span class="icon">★</span>
      <p class="paragraph-centered">Tłumaczenia wykonywane przez <strong>doświadczonych tłumaczy konferencyjnych </strong>z przygotowaniem merytorycznym.</p>
    </div>

    <div class="benefit-item">
      <h3 class="headline headline--small headline--centered">Wsparcie techniczne</h3>
      <span class="icon">★</span>
      <p class="paragraph-centered">Kompletne zaplecze: kabiny, konsole, zestawy słuchawkowe i obsługa audio dla wydarzeń stacjonarnych i hybrydowych.</p>
    </div>

    <div class="benefit-item">
      <h3 class="headline headline--small headline--centered">Specjalistyczna wiedza</h3>
      <span class="icon">★</span>
      <p class="paragraph-centered">Znajomość terminologii branżowej (prawo, medycyna, finanse, środowisko i inne) zapewniająca precyzyjny przekład.</p>
    </div>
  </div>

</section>


<!--3 Columns / usługi dodatkowe -->
<section class="section-margin">
    <h2 class="headline 
    headline--centered 
    headline--margin-top-large">Usługi dodatkowe biura tłumaczeń – wsparcie techniczne konferencji</h2>

    <p class="headline 
      headline--centered 
      headline--light
      headline--small
      headline--b-margin-large
      headline--dark-blue
      headline--margin-top
    ">
      Symultanicznie PL w Gdańsku oferuje nie tylko tłumaczenia symultaniczne, ale także wsparcie techniczne i rozwiązania,
      które usprawniają przebieg konferencji i wydarzeń biznesowych
    </p>

    <div class="additional-services-grid">
      
      <!-- Card 1 -->
      <div class="service-card">
        <picture>
          <source srcset="./images/small/oswietlenie-led-biuro-tlumaczen.webp" type="image/webp">
          <img 
            src="./images/small/oswietlenie-led-biuro-tlumaczen.jpg" 
            alt="Oświetlenie sceniczne wspierające konferencje i wydarzenia biznesowe" 
            width="420" 
            height="580" 
            loading="lazy">
        </picture>
        
        <h3 class="headline headline--small headline--margin-top headline--grey">Oświetlenie sceniczne</h3>

        <p>
          Wiemy, że odpowiednio zaplanowane oświetlenie zwiększa komfort uczestników i podnosi jakość odbioru wydarzenia.
          Dlatego doradzamy w wyborze rozwiązań LED, które doskonale sprawdzają się podczas konferencji obsługiwanych przez naszych
          <strong>tłumaczy konferencyjnych obsługujących wydarzenia w Gdańsku</strong>
        </p>
      </div>

      <!-- Card 2 -->
      <div class="service-card">
        <picture>
          <source srcset="./images/small/kabina-symultaniczna.webp" type="image/webp">
          <img 
            src="./images/small/kabina-symultaniczna.jpg" 
            alt="System tour guide do mobilnych tłumaczeń ustnych podczas wizyt studyjnych" 
            width="420" 
            height="580" 
            loading="lazy">
        </picture>
        
        <h3 class="headline headline--small headline--margin-top headline--grey">Tłumaczenie Tour Guide</h3>

        <p>
          Czym jest system tour guide? Jest to wygodne i mobilne wsparcie podczas wizyt studyjnych, szkoleń terenowych
          czy oprowadzania delegacji. Umożliwia płynny odbiór treści, także tam, gdzie użycie kabiny
          nie byłoby możliwe. To doskonałe uzupełnienie usług oferowanych przez nasze 
          <strong>biuro tłumaczeń w Gdańsku</strong>.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="service-card">
        <picture>
          <source srcset="./images/small/naglosnienie-konferencji-eventow-Poznan.webp" type="image/webp">
          <img 
            src="./images/small/naglosnienie-konferencji-eventow-Poznan.jpg" 
            alt="Nagłośnienie konferencji i obsługa techniczna wydarzeń" 
            width="420" 
            height="580" 
            loading="lazy">
        </picture>

        <h3 class="headline headline--small headline--margin-top headline--grey">Nagłośnienie</h3>

        <p>
          Udostęniamy profesjonalne nagłośnienie konferencji: mikrofony, kolumny, miksery oraz pełną obsługę techniczną. 
          Wysoka jakość dźwięku jest kluczowa, aby przekład symultaniczny był czytelny, naturalne i wygodne dla uczestników.
        </p>
      </div>

      <div class="icon-container">
        <i class="fa-solid fa-headset"></i>
      </div>

    </div><!-- service grid -->
</section>


<!-- Q and A section --> 
<section class="section-margin section-margin--blue">
   <div class="wrapper wrapper--wide">

    <div class="qanda-grid">
      <div class="qanda-item">
        <h3 class="headline--smooth headline--white headline--b-margin-medium">
          Obsługa tłumaczeniowa na terenie Gdańska i całej Polski
        </h3>
        <p class="p--white">
          Siedziba naszego <strong>biura tłumaczeń znajduje się w Gdańsku</strong>, ale 
          obsługujemy przekład symultaniczny i konsekutywny
          podczas konferencji, szkoleń i wydarzeń specjalistycznych w całej Polsce. 
          Regularnie pracujemy także w Warszawie, Poznaniu, Krakowie, Wrocławiu oraz mniejszych miejscowościach, 
          zapewniając pełną mobilność zespołu tłumaczy i zaplecza technicznego.
        </p>
      </div>

      <div class="qanda-item">
        <h3 class="headline--smooth headline--white headline--b-margin-medium">
          Z jakimi branżami pracujemy?
        </h3>
        <p class="p--white">
          Tłumaczymy wydarzenia z wielu sektorów — od konferencji medycznych, gospodarczych i akademickich,
          po szkolenia techniczne, panele biznesowe oraz projekty kulturalne. 
          Nasi <strong>tłumacze symultaniczni</strong> pracują w instytucjach publicznych, firmach prywatnych, 
          na halach produkcyjnych, w uczelniach, muzeach oraz na wydarzeniach sportowych.
        </p>
      </div>

      <div class="qanda-item">
        <h3 class="headline--smooth headline--white headline--b-margin-medium">
          Ile kosztują tłumaczenia symultaniczne?
        </h3>
        <p class="p--white">
          W celu zapoznania się z ceną poprosimy o przedstawienie takich informacji jak: miejsce wydarzenia, 
          ilość gości oraz czas trwania spotkania. To pomoże nam obiektywnie wycenić Państwa usługę.
          Na koszt wpływa również niezbędne wyposażenie techniczne, 
          takie jak kabiny tłumaczeniowe, nagłośnienie czy zestawy słuchawkowe. 
          Każdą realizację wyceniamy indywidualnie, aby dopasować ofertę do potrzeb organizatora.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- Q and A number 2 --> 
<section class="section-faq section-margin">
  <header class="section-header">
    <h2 class="headline 
      headline--centered
      headline--b-margin-large">
      FAQ — Co warto wiedzieć
    </h2>
  </header>

  <div class="faq-list">

    <div class="faq-item">
      <h3 class="headline headline--small">Czym różni się tłumaczenie symultaniczne od konsekutywnego?</h3>
      <p>
        Jeśli zagubili się Państwo w definicjach - zaraz wyjaśnimy. 
        Tłumaczenie symultaniczne polega na przekładaniu wypowiedzi na bieżąco, zwykle w kabinie,
        dzięki czemu uczestnicy wydarzenia słyszą tłumaczenie bez przerw. 
        W tłumaczeniu konsekutywnym tłumacz zabiera głos po prelegencie, co daje więcej czasu na dopracowanie przekładu,
        ale nieco wydłuża przebieg spotkania. Jeśli chcą się Państwo dowiedzieć więcej prosimy o kontakt - doradzimy jaki typ 
        tłumaczenia będzie lepszy przy Państwa spotkaniu. 
      </p>
    </div>

    <div class="faq-item">
      <h3 class="headline headline--small">Kiedy warto wybrać tłumaczenie symultaniczne?</h3>
      <p>
        Zdecydowanie polecamy tłumaczenie symultaniczne podczas wydarzeń o większej skali — konferencji, szczytów branżowych,
        debat publicznych lub paneli z udziałem gości z zagranicy. 
        Taki model pracy Pozwala zachować tempo programu oraz zapewnia wygodną komunikację dla uczestników,
        co jest szczególnie istotne przy konferencjach organizowanych w Gdańsku i regionie pomorskim.
      </p>
    </div>

    <div class="faq-item">
      <h3 class="headline headline--small">Czy zapewniacie sprzęt do tłumaczeń symultanicznych?</h3>
      <p>
        Tak. Oferujemy kompletny zestaw rozwiązań technicznych: kabiny tłumaczeniowe,
        systemy słuchawkowe, mikrofony, nagłośnienie oraz pełne wsparcie techników.
        Dzięki naszemu zapleczu technicznemu organizatorzy wydarzeń mogą liczyć na stabilne i profesjonalne zaplecze
        do tłumaczeń symultanicznych nie tylko w Gdańsku i na terenie całej Polski.
      </p>
    </div>

    <div class="faq-item">
      <h3 class="headline headline--small">Jak wygląda wycena tłumaczenia symultanicznego?</h3>
      <p>
        Wycena zależy od zakresu wydarzenia — liczby języków, czasu trwania, tematyki oraz zapotrzebowania
        na sprzęt konferencyjny. Przygotowujemy indywidualne kosztorysy w oparciu o krótki opis wydarzenia
        i jego lokalizację, np. w Gdańsku, Sopocie lub Gdyni.
      </p>
    </div>

    <div class="faq-item">
      <h3 class="headline headline--small">Czy realizujecie tłumaczenia online?</h3>
      <p>
        Owszem. Wykonujemy <strong>tłumaczenia symultaniczne online</strong> na popularnych platformach
        takich jak Zoom, Google Meet czy Microsoft Teams. 
        Mamy bogate doświadczenia w tłumaczeniach zdalnych, które - jak wiemy - sprawiają niekiedy wiele trudności. 
        Czasem jednak jest to rozwiązanie idealne dla wydarzeń hybrydowych oraz spotkań z udziałem prelegentów z różnych krajów,
        którzy łączą się zdalnie.
      </p>
    </div>

  </div>
</section>


<!-- Team -->
<section id="o_nas" class="section-margin">
  <h2 class="headline
  headline--centered 
  headline--b-margin-medium
  headline--margin-top">Nasz Zespół tłumaczy – zespół Gdański</h2>

  <div class="team-grid">

    <div class="team-card">
      <p class="our-team">
        Łączy doświadczenie konferencyjne z pasją do nowych technologii.
        W branży tłumaczeniowej działa od wielu lat, koordynując projekty w różnych miastach Polski, 
        w tym liczne <strong>projekty konferencyjne realizowane w Gdańsku</strong>.  
        Dba o sprawny przebieg wydarzeń i dobór odpowiednich narzędzi technicznych, 
        a po godzinach rozwija swoje zainteresowania muzyczne.
      </p>
      <div class="image-and-name">
        <img 
          class="head-picture"
          src="./images/small/dobry-tlumacz-symultaniczny-Poznan.jpg" 
          alt="Jakub Skrzeczkowski - członek naszego zespołu" 
          width="250" 
          height="250" 
          loading="lazy">
        <p class="name-text">Jakub Skrzeczkowski</p>
      </div>
    </div>

    <div class="team-card">
     <p class="our-team">
       Amerykanista i medioznawca, od lat związany z tłumaczeniami ustnymi na konferencjach 
       o tematyce społecznej, akademickiej i kulturowej. 
       Jako <strong>tłumacz konferencyjny języka angielskiego</strong> pracuje zarówno w kabinie, jak i podczas wydarzeń hybrydowych.  
       Współpracuje z instytucjami i firmami realizującymi spotkania w Gdańsku oraz innych dużych miastach w Polsce.
     </p>
     <div class="image-and-name">
        <img 
          class="head-picture"
          src="./images/small/tlumacz-symultaniczny-jezyka-angielskiego.jpg" 
          alt="Tłumacz symultaniczny języka angielskiego - członek zespołu Symultanicznie PL" 
          width="250" 
          height="250" 
          loading="lazy">
        <p class="name-text">Józef Jaskulski</p>
     </div>
    </div>

    <div class="team-card">
      <p class="our-team">
        Specjalistka ds. komunikacji i obsługi klienta, odpowiada za przygotowanie zespołów tłumaczy 
        oraz organizację logistyczną wydarzeń.  
        Od lat wspiera projekty realizowane przez <strong>biuro tłumaczeń Symultanicznie PL</strong>, 
        koordynując obsługę symultaniczną i konsekutywną na konferencjach w Gdańsku, Gdyni i Sopocie.  
        Doskonale łączy wiedzę językową z dbałością o każdy szczegół obsługi wydarzenia.
      </p>
      <div class="image-and-name">
        <img 
          class="head-picture"
          src="./images/small/pracownik-biura-tlumaczen.jpg" 
          alt="Koordynatorka - członek naszego zespołu" 
          width="250" 
          height="250" 
          loading="lazy">
        <p class="name-text">Bożena Śliwińska</p>
     </div>
    </div>

  </div>
</section>

<!-- Info / Template of Projects --> 
<section class="section-margin">
 <div class="project-section">

    <div class="project-text">
        <h3 class="headline headline--small headline--margin-top">
            Jak pracujemy z klientami – podejście projektowe
        </h3>

        <p>
            Wspieramy organizatorów wydarzeń w Gdańsku i całej Polsce, zapewniając zarówno stronę językową, 
            jak i techniczną. Pracujemy przy konferencjach, szkoleniach, debatach i spotkaniach biznesowych, 
            dobierając rodzaj tłumaczenia do formatu wydarzenia. 
            Naszą <strong>obsługę symultaniczną konferencji</strong> realizujemy w Gdańskuz pełnym zapleczem sprzętowym 
            oraz zespołem doświadczonych tłumaczy konferencyjnych.
        </p>

        <p>Aby przygotować rzetelną wycenę, prosimy o podanie:</p>

        <ul>
            <li>dokładnej daty wydarzenia,</li>
            <li>planowanego czasu trwania,</li>
            <li>liczby uczestników korzystających ze słuchawek lub systemu tour-guide.</li>
        </ul>

        <p>
            Dzięki tym informacjom możemy dobrać odpowiednich specjalistów oraz sprzęt, 
            który zapewni komfort i nieprzerwaną komunikację przez cały czas trwania wydarzenia.
        </p>
    </div>

    <div class="project-image">
      <picture>
        <source srcset="./images/small/cena-tlumaczenia-symultanicznego.webp" type="image/webp">
        <img 
          src="./images/small/cena-tlumaczenia-symultanicznego.jpg" 
          alt="Przykładowe nagłośnienie podczas konferencji w Poznaniu" 
          width="972" 
          height="729" 
          loading="lazy">
      </picture>
    </div>

  </div>

  <div class="project-section">
    <div class="project-text">
        <h3 class="headline headline--small headline--margin-top">
            Zaplecze techniczne i zespoły tłumaczy konferencyjnych
        </h3>

        <p>
            Od kilkunastu lat wspieramy organizatorów wydarzeń w Gdańsku, zapewniając 
            profesjonalną obsługę symultaniczną wraz z pełnym zapleczem technicznym. 
            Współpracujemy z tłumaczami konferencyjnymi, którzy potrafią pracować pod presją czasu 
            i swobodnie poruszają się w różnych dziedzinach — od biznesu, przez technikę, 
            po tematy społeczne czy naukowe.
        </p>

        <p>
            Jeśli wcześniej nie mieli Państwo okazji zobaczyć, jak wygląda tłumaczenie kabinowe od kulis, 
            na naszym kanale publikujemy krótkie materiały pokazujące proces montażu kabiny, 
            organizację stanowiska tłumaczy oraz pracę ekipy technicznej podczas wydarzeń konferencyjnych.
        </p>

        <p>Zapewniamy kompletne wyposażenie techniczne, w tym:</p>

        <ul>
            <li>kabiny do tłumaczenia symultanicznego dostosowane do przestrzeni wydarzenia,</li>
            <li>zestawy słuchawkowe i odbiorniki dla uczestników,</li>
            <li>zespół tłumaczy symultanicznych przygotowanych merytorycznie do danej tematyki.</li>
        </ul>

        <p>
            Aby zapewnić spójny i precyzyjny przekład, zachęcamy do przesłania materiałów programowych, prezentacji 
            lub agendy spotkania. Dzięki nim tłumacze mogą wcześniej zapoznać się z terminologią 
            i przygotować się do specyfiki wydarzenia.
        </p>
    </div>

    <div class="project-image">
      <picture>
        <source srcset="./images/small/biuro-tlumaczen-symultaniczne.webp" type="image/webp">
        <img 
          src="./images/small/biuro-tlumaczen-symultaniczne.jpg" 
          alt="Kabina tłumaczeniowa i sprzęt symultaniczny podczas konferencji w Poznaniu" 
          width="568" 
          height="598" 
          loading="lazy">
      </picture>
    </div>
  </div>

 <div class="project-section">
    <div class="project-text">
      <h3 class="headline headline--small headline--margin-top">
          Rozwój obsługi konferencji w Gdańsku i Trójmieście
      </h3>

      <p>
          Choć pracujemy w całej Polsce, to właśnie w Gdańsku najintensywniej rozwijamy 
          nasze tłumaczenia symultaniczne i obsługę wydarzeń konferencyjnych. 
          Na naszych profilach społecznościowych można znaleźć krótkie relacje z konferencji i szkoleń, 
          w których odpowiadaliśmy zarówno za pracę tłumaczy, jak i zaplecze techniczne.
      </p>
  
      <p>
          Każde wydarzenie wymaga innego podejścia — innej konfiguracji sprzętu, ustawienia kabiny, 
          nagłośnienia czy sposobu rozmieszczenia uczestników. W razie potrzeby wykonujemy także 
          wcześniejszą wizję lokalną, aby zaplanować logistykę i uniknąć niespodzianek w dniu wydarzenia.
      </p>

      <p>
          Obsługujemy konferencje i spotkania m.in. w <strong>Gdańsku, Warszawie, Poznaniu, Krakowie, Wrocławiu 
          i Katowicach</strong>, a na życzenie realizujemy również projekty międzynarodowe. 
          Coraz częściej prowadzimy też <em>tłumaczenia symultaniczne online</em> — w formule zdalnej lub hybrydowej, 
          w zależności od potrzeb organizatora.
      </p>
    </div>


    <div class="project-image">
      <picture>
        <source srcset="./images/small/tlumaczenie-tour-guide.webp" type="image/webp">
        <img 
          src="./images/small/tlumaczenie-tour-guide.jpg" 
          alt="Tłumaczenia symultaniczne Gdańsk – realizacja podczas konferencji" 
          loading="lazy">
      </picture>
    </div>
  </div>
</section>

<!-- Information section -->  
<section class="section-margin">  
  <h2 class="headline headline--centered headline--b-margin-large">Informacje o naszym biurze tłumaczeń</h2>

  <div class="info-grid">

    <!-- 1 -->
    <div class="info-item">
      <h3 class="headline--icon headline--small headline--grey">
        <svg class="icon" viewBox="0 0 24 24">
          <path d="M12 2L15 8h6l-4.5 4 1.5 6L12 14l-6 4 1.5-6L3 8h6z" fill="currentColor"/>
        </svg>
        Jak długo działa nasze biuro tłumaczeń?
      </h3>

      <p>
        Nasze <strong>biuro tłumaczeń</strong> działa od 2010 roku. Zaczynaliśmy w Poznaniu, ale z czasem rozszerzyliśmy działalność 
        na kolejne miasta — dziś wspieramy klientów w Gdańsku, Warszawie, Wrocławiu, Krakowie i w całej Polsce.
      </p>
      <p>
        Mimo rozwoju i pracy przy dużych projektach pozostajemy firmą o charakterze „butikowym”: jesteśmy blisko klientów, 
        doradzamy na każdym etapie i dbamy o to, aby nasze usługi były uczciwie wycenione oraz dopasowane do realnych potrzeb wydarzenia.
      </p>
    </div>

    <!-- 2 -->
    <div class="info-item">
      <h3 class="headline--icon headline--small headline--grey">
        <svg class="icon" viewBox="0 0 24 24">
          <path d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2zm0 17a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5zm1-5.75h-2v-.5c0-1.104.896-2 2-2s2-.896 2-2-.896-2-2-2-2 .896-2 2H9c0-2.21 1.79-4 4-4s4 1.79 4 4c0 1.657-1.343 3-3 3z" fill="currentColor"/>
        </svg>
        Jakie usługi oferujemy?
      </h3>

      <p>
        Wykonujemy tłumaczenia symultaniczne, <em>tłumaczenia konsekutywne</em> oraz <strong>tłumaczenia online</strong> 
        — na platformach takich jak Zoom, Teams czy Google Meet. Każdy projekt wyceniamy indywidualnie, 
        dobierając rodzaj tłumaczenia i liczbę tłumaczy do charakteru wydarzenia i oczekiwań klienta.
      </p>
      <p>
        Stawiamy na elastyczność — dopasowujemy naszą obsługę do specyfiki branży, skali wydarzenia i warunków technicznych.
      </p>
    </div>

    <!-- 3 -->
    <div class="info-item">
      <h3 class="headline--icon headline--small headline--grey">
        <svg class="icon" viewBox="0 0 24 24">
          <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h10v2H4v-2z" fill="currentColor"/>
        </svg>
        Zamów usługi naszego biura w Gdańsku
      </h3>

      <p>
        Aby przygotować dla Państwa precyzyjną wycenę, wystarczy podać kilka podstawowych informacji: 
        termin wydarzenia, liczbę uczestników korzystających ze słuchawek, języki tłumaczenia oraz lokalizację (np. Gdańsk lub okolice).
      </p>
      <p>
        Na tej podstawie zaproponujemy odpowiedni rodzaj tłumaczenia, liczbę tłumaczy oraz kompletne zaplecze techniczne.
      </p>
    </div>

    <!-- 4 -->
    <div class="info-item">
      <h3 class="headline--icon headline--small headline--grey">
        <svg class="icon" viewBox="0 0 24 24">
          <path d="M12 1a10 10 0 0 0-10 10v6a3 3 0 0 0 3 3h1v-8H5a7 7 0 0 1 14 0h-1v8h1a3 3 0 0 0 3-3v-6A10 10 0 0 0 12 1z" fill="currentColor"/>
        </svg>
        Czy potrzebujemy tłumaczenia symultanicznego czy konsekutywnego?
      </h3>

      <p>
        Tłumaczenia symultaniczne to najlepszy wybór podczas dużych konferencji, debat i spotkań międzynarodowych — 
        przekład odbywa się w czasie rzeczywistym, bez przerywania mówcy.
      </p>
      <p>
        <em>Tłumaczenia konsekutywne</em> sprawdzają się w mniejszych grupach, podczas szkoleń, briefingów i negocjacji, 
        gdzie możliwe jest zatrzymywanie wypowiedzi i praca „fragment po fragmencie”.
      </p>
      <p>
        Jeśli nie mają Państwo pewności, który rodzaj będzie odpowiedni — chętnie doradzimy po krótkiej rozmowie.
      </p>
    </div>

  </div>
</section>


<!-- Clients section -->
<section class="clients section-padding">
  <h2 class="headline headline--centered headline--b-margin-large">Nasi klienci</h2>
  <picture class="clients__image">
    <!-- WebP Source -->
    <source 
      srcset="./images/large/klienci-biura-tlumaczen-w-Poznaniu.webp" 
      type="image/webp">
    <!-- JPG Fallback -->
    <img 
      src="./images/large/klienci-biura-tlumaczen-w-Poznaniu.jpg" 
      alt="Tłumaczenie konsekutywne w biurze tłumaczeń Gdańsk"
      width="1031"
      height="199"
      loading="lazy">
  </picture>
</section>

<!-- Localized section --> 
<section class="centered-text-section section-margin">

  <div class="centered-text-container">
      <h2 class="headline 
              headline--centered
              headline--b-margin-small">
      Lokalna obsługa konferencji i wydarzeń w Gdańsku</h2>
      <p>
        Nasze <strong>biuro tłumaczeń obsługuje wydarzenia w Gdańsku, Gdyni i Sopocie</strong>,
        zapewniając obsługę symultaniczną podczas konferencji, na szkoleniach i wydarzeniach międzynarodowych.
        Działamy mobilnie i dojeżdżamy do obiektów konferencyjnych na terenie całego Trójmiasta.
      </p>  
      <p>
        Obsługujemy również wydarzenia poza Trójmiastem — sprawdź naszą ofertę
        <a href="/tlumaczenia-symultaniczne-szczecin/">obsługi konferencji w Szczecinie</a>.
      </p>
  </div><!-- end of centered-text-container -->
</section>


 <!-- Contact & Footer Section -->
<section id="kontakt" class="contact-footer">

  <div class="contact-top">
  <iframe
    class="contact-map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2331.702873918046!2d18.65305181596241!3d54.34808058019895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd73a4f1c5b5bb%3A0x9a2b0c1a6d7f8f3d!2sD%C5%82ugi%20Targ%201%2C%2080-828%20Gda%C5%84sk!5e0!3m2!1spl!2spl!4v1710000000000"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>

    <div class="contact-info">
      <h3 class="headline headline--small">Kontakt</h3>
      <p><strong>Porling JS</strong><br>
        Ulica Woźna 10,<br>
        61-777 Gdańsk<br>
        NIP: 2810024393<br>
        biuro@symultaniczne.pl<br>
        jakub.skrzeczkowski@gmail.com<br>
        tel: 509-662-578
      </p>
    </div>
  </div>
</section>

<?php
    require('./includes/footer.php');
?>
</div><!-- wrapper end !-->