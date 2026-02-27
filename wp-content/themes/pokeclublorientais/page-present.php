<?php
$events = get_next_events(3);
$partners = get_partners();

/**
 * Template Name: Présentation
 */
get_header(); ?>

<section id="partners">
  <div class="container">
    <h2 class="section-title">Qui sommes-nous ?</h2>
    <p>Le Poke Club Bretagne Sud est le fier successeur du Poké Club Lorientais.
      Fondée par une poignée de passionnés de l'univers Pokémon dans le Morbihan,
      l'association a grandi au-delà des frontières de Lorient pour rayonner aujourd'hui
      sur l'ensemble de la Bretagne Sud.
      Basés historiquement dans le pays lorientais, nous regroupons des collectionneurs,
      des joueurs compétitifs et des curieux de tous âges. L'association est pilotée
      par un bureau dynamique composé de membres investis
    </p>
</section>
<section>
  <div class="container">
    <h2 class="section-title">Nos missions</h2>
    <p>
      Le but premier du Poke Club Bretagne Sud est de créer un espace de rencontre
      sécurisé et convivial pour tous les "Dresseurs" de la région. Nous œuvrons
      pour briser l'isolement des joueurs en favorisant les échanges physiques de cartes,
      l'apprentissage des règles du Jeu de Cartes à Collectionner (JCC) et l'organisation
      de sessions de jeu sur consoles. Au-delà du simple divertissement, l'association porte
      des valeurs de respect, de fair-play et d'entraide, permettant aux plus jeunes
      d'apprendre des plus anciens dans un cadre intergénérationnel unique.
    </p>
  </div>
  </div>
</section>
<section>
  <div class="container">
    <h2 class="section-title">Nos actions</h2>
    <p>Depuis notre création, nous avons marqué notre présence lors de nombreux événements locaux,
      notamment à travers des collaborations avec des médiathèques, des boutiques spécialisées
      et des salons de la culture geek en Bretagne. Nous avons organisé des tournois internes
      et des ateliers d'initiation qui ont réuni des dizaines de familles. À l'avenir,
      le club ambitionne de structurer une ligue officielle pour permettre à nos membres
      de participer à des compétitions de plus grande envergure, d'organiser un grand "Poké-Événement"
      annuel en Bretagne Sud et de développer des partenariats caritatifs pour
      mettre notre passion au service de causes solidaires.</p>

    <div id="events">

      <?php include_once __DIR__ . "/_partials/_more_events.php"; ?>
    </div>
    <div id="partners">

      <?php include_once __DIR__ . "/_partials/_more_partners.php"; ?>
    </div>

  </div>
</section>
<section>
  <div class="container">
    <h2 class="section-title">Nous rejoindre ?</h2>
    <p>Adhérer au Poke Club Bretagne Sud, c'est intégrer une communauté soudée
      où chaque membre bénéficie d'un accès privilégié à nos ateliers,
      de conseils d'experts pour l'authentification de cartes et de tarifs
      préférentiels lors de nos sorties ou achats groupés. C'est surtout
      l'opportunité de participer activement à la vie d'une association
      qui vous ressemble. Pour nous rejoindre, rien de plus simple :
      vous pouvez remplir notre formulaire d'adhésion directement sur ce
      site ou venir nous rencontrer lors de l'une de nos permanences.
      Que vous soyez un stratège accompli ou que vous veniez d'ouvrir
      votre premier booster, votre place est parmi nous !</p>

  </div>

</section>

<?php get_footer(); ?>