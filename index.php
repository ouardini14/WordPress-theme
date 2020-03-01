<?php get_header(); ?>
<?php get_sidebar(); ?>
<div style="background: url('/wordpress/wp-content/themes/Magic/images/home-bg.jpg') no-repeat;background-size: cover; background-position: center; min-height: 500px; padding-top: 180px; padding-bottom: 100px;" id="home">
	<div class="container">
		<div class="row">
			
			
		</div>
	</div>
</div>
<div class="divider">
	<div id="fi" class="container">
		<div class="row">
			<div  class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>Genie Informatique</h2>
					<p><p>Administration de Syst&egrave;mes et de R&eacute;seaux (ASR) :</p>
					<p>La r&eacute;partition et le partage des ressources mat&eacute;rielles, logicielles et informationnelles dans les syst&egrave;mes et r&eacute;seaux ont conduit &agrave; une &eacute;volution de certains m&eacute;tiers de l&rsquo;informatique et &agrave; l&rsquo;&eacute;mergence de nouveaux m&eacute;tiers. Parmi ces derniers, figurent ceux qui prennent en charge l&rsquo;ensemble des t&acirc;ches relatives &agrave; l&rsquo;administration et &agrave; la gestion d&rsquo;un parc informatique (organis&eacute; ou &agrave; organiser) en r&eacute;seau.</p>
					<p>Les comp&eacute;tences vis&eacute;es dans cette option s&rsquo;inscrivent dans ce cadre et correspondent, au niveau technique, &agrave; l&rsquo;exercice de fonctions d&rsquo;interface entre les utilisateurs, les fournisseurs d&rsquo;&eacute;quipements mat&eacute;riels et logiciels ou prestataires externes, les gestionnaires et les d&eacute;cideurs.</p>
					<p>Ces comp&eacute;tences sont principalement :</p>
					<p>&ndash; le choix et l&rsquo;installation des &eacute;quipements mat&eacute;riels et logiciels relatifs &agrave; l&rsquo;interconnexion au niveau d&rsquo;un site ou entre sites distants</p>
					<p>&ndash; le choix, la mise en &oelig;uvre et le test de l&rsquo;&eacute;lectronique active utilis&eacute;e dans les diff&eacute;rents &eacute;quipements</p>
					<p>&ndash; le choix et la mise en &oelig;uvre de configurations de type client/serveur</p>
					<p>&ndash; l&rsquo;administration d&rsquo;un r&eacute;seau local ou &eacute;tendu</p>
					<p>&ndash; l&rsquo;administration d&rsquo;un ou plusieurs syst&egrave;mes de bases de donn&eacute;es d&rsquo;entreprise</p></p>
				</div>
			</div>
			<div  class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-mobile"></i>
					<h2>Techniques de Management</h2>
					<p><p>Former des techniciens sup&eacute;rieurs en techniques de management qui disposent de&nbsp; connaissances et&nbsp; de comp&eacute;tences appr&eacute;ciables relative aux organisations, priv&eacute;es et publiques.</p>
					<p><strong>D&eacute;bouch&eacute;s potentiels</strong>&nbsp;:</p>
					<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Int&eacute;grer l&rsquo;entreprise priv&eacute;e et publique</p>
					<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cr&eacute;ation d&rsquo;entreprise</p>
					<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fonction publique</p>
					<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gestionnaire</p>
					<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Technicien en informatique de gestion</p>
					<p><strong>Conditions d&rsquo;acc&egrave;s :</strong></p>
					<p>&ndash; Acc&egrave;s sur &eacute;tude de dossier</p>
					<p>&ndash; Baccalaur&eacute;ats Scientifiques et Techniques</p>
					<p><strong>Options&nbsp;:</strong></p>
					<p>&ndash; Comptabilit&eacute; en Normes Fran&ccedil;aises et Internationales.</p>
					<p>&ndash; Gestion des banques et&nbsp; assurances</p>
					<p>&ndash; Gestion des Ressources Humaines.</p></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-life-ring"></i>
					<h2>Genie Agricole</h2>
					<p><p>Le DUT agronomie est pr&eacute;cis&eacute;ment le DUT g&eacute;nie biologique option agronomie ou DUT GB agro. En effet le DUT g&eacute;nie biologique peut proposer les options agronomie, analyse biologique et biochimique et industrie alimentaire et biologique. Il s&rsquo;agit d&rsquo;un&nbsp;<strong>dipl&ocirc;me d&rsquo;&Eacute;tat de niveau&nbsp;bac+2</strong>&nbsp;accessible directement apr&egrave;s le bac.</p>
					<p>Au sein de ce cursus d&rsquo;une dur&eacute;e de deux ans, les &eacute;tudiants apprennent les techniques d&rsquo;am&eacute;lioration des conditions de production agricole pour travailler dans le domaine de la qualit&eacute; ou du commerce. Cette formation professionnalisante est disponible dans les&nbsp;<strong>Instituts Universitaires de Technologie</strong>&nbsp;et peut &ecirc;tre suivie&nbsp;en alternance&nbsp;si les &eacute;tudiants souhaitent acqu&eacute;rir de l&rsquo;exp&eacute;rience rapidement via&nbsp;<strong>un contrat de professionnalisation ou un contrat d&rsquo;apprentissage</strong>.</p></p>
				</div>
			</div>
		</div>
		<section>
		<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
		</section>
	</div>
</div>

<!-- about section -->
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="/wordpress/wp-content/themes/Magic/images/logo.jpg" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h3>PR&Eacute;SENTATION G&Eacute;N&Eacute;RALE sur EST Sidi Bennour</h3>
<p><strong>Ecole Sup&eacute;rieure de Technologie Sidi Bennour :&nbsp;</strong>(<strong>&nbsp;EST Sidi Bennour ou ESTS Sidi Bennour&nbsp;</strong>), est un &eacute;tablissement public d&rsquo;enseignement sup&eacute;rieur &agrave; finalit&eacute; de formation des Techniciens Sup&eacute;rieurs. Elle a &eacute;t&eacute; cr&eacute;&eacute;e en Ao&ucirc;t 2016 par le Minist&egrave;re de l&rsquo;Enseignement Sup&eacute;rieur, de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc</p>
<p>&nbsp;</p>
<p>L&rsquo;<strong>Ecole Sup&eacute;rieure de Technologie Sidi Bennour</strong>&nbsp;(<strong>ESTSB</strong>) est une composante de l&rsquo;Universit&eacute; Chouaib Doukkali d&rsquo;El Jadida. Sa vocation est de former des Techniciens Sup&eacute;rieurs polyvalents, hautement qualifi&eacute;s et imm&eacute;diatement op&eacute;rationnels apr&egrave;s leur sortie de l&rsquo;Ecole en tant que collaborateurs d&rsquo;ing&eacute;nieurs et de managers. Sont admis &agrave;&nbsp;<strong>l&rsquo;ESTSB</strong>, les bacheliers de l&rsquo;enseignement secondaire technique, scientifique et tertiaire. L&rsquo;admission &agrave; l&rsquo;Ecole (au de Dipl&ocirc;me Universitaire de Technologie &laquo; DUT &raquo;) se fait par voie de s&eacute;lection par ordre de m&eacute;rite apr&egrave;s une pr&eacute;s&eacute;lection sur la base des notes obtenues au baccalaur&eacute;at. Les candidats doivent &ecirc;tre &acirc;g&eacute;s de 22 ans au plus au 31 D&eacute;cembre de l&rsquo;ann&eacute;e du concours et doivent d&eacute;poser leurs dossiers de pr&eacute;-inscription avant le 30 Juin de chaque ann&eacute;e universitaire.</p>
<p>Orientation appliqu&eacute;e de l&rsquo;enseignement</p>
<p>La formation appliqu&eacute;e &agrave;&nbsp;<strong>l&rsquo;ESTSB</strong>&nbsp;est largement tourn&eacute;e vers les Technologies d&rsquo;Information et de Communication, les Techniques de Gestion, les langues vivantes, les Syst&egrave;mes et R&eacute;seaux Informatiques, les conceptions et les r&eacute;alisations informatiques, c&rsquo;est pourquoi ses programmes ont toujours le souci de r&eacute;pondre aux exigences et aux attentes de l&rsquo;environnement socio-&eacute;conomique de l&rsquo;Ecole et font appel &agrave; des m&eacute;thodes p&eacute;dagogiques actives et &eacute;volu&eacute;es. Les</p>
<p>programmes d&rsquo;enseignement comportent des Cours magistraux, des Travaux Pratiques (TP), des Travaux Dirig&eacute;s (TD) et des Dossiers et Travaux de R&eacute;alisation, des Projets de Fin d&rsquo;Etude, des Stages d&rsquo;Initiation et des Stages de Stages Techniques dans les entreprises, les organismes socio-professionnels, les collectivit&eacute;s locales et les administrations publiques.</p>
<p>Dur&eacute;e des &eacute;tudes</p>
<p>La dur&eacute;e des &eacute;tudes est de deux ann&eacute;es universitaires avec 16 modules d&rsquo;enseignement. La premi&egrave;re ann&eacute;e s&rsquo;&eacute;tale sur 32 semaines suivies de quatre semaines de stage d&rsquo;initiation apr&egrave;s la fin de S2 et avant le d&eacute;marrage de S3 dans l&rsquo;entreprise en Juillet ou Aout &agrave; raison de 24 jours avec un rapport et une soutenance. La deuxi&egrave;me ann&eacute;e est de 36 semaines dont 8 semaines de stage technique et dispens&eacute; &agrave; raison de 48 jours pour 36 heures par semaine en moyenne avec un rapport et une soutenance.</p>
			</div>
		</div>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>activités récentes</h2> 
			</div>
         </div>
         
         
            <section id="photos">
			<img src="/wordpress/wp-content/themes/Magic/images/1.jpg" alt="portfolio img">
			
			
				<img src="/wordpress/wp-content/themes/Magic/images/2.jpg" alt="portfolio img">
			<img src="/wordpress/wp-content/themes/Magic/images/3.jpg" alt="portfolio img">
			
            
			<img src="/wordpress/wp-content/themes/Magic/images/4.jpg" alt="portfolio img">
			
			<img src="/wordpress/wp-content/themes/Magic/images/5.jpg" alt="portfolio img">
			
			<img src="/wordpress/wp-content/themes/Magic/images/6.jpg" alt="portfolio img">
			
			<img src="/wordpress/wp-content/themes/Magic/images/7.jpg" alt="portfolio img">
						<img src="/wordpress/wp-content/themes/Magic/images/8.jpg" alt="portfolio img">

			<script>function getRandomSize(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

for (var i = 0; i < 25; i++) {
  var width = getRandomSize(400, 800);
  var height =  getRandomSize(400, 800);
  $('#photos').append('<img src="http://localhost/wordpress/'+width+'/'+height+'/cats" alt="portfolio img">');
}</script>
			</section>
		
	</div>
</div>
<?php get_footer(); ?>