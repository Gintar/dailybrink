<?php
/*
Template Name: Tablet - Browse
*/
?>

<!doctype html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title>Isotope</title>
  
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
  <link rel="stylesheet" href="http://www.dailybrink.com/wp-content/themes/starkers/tablet/css/isotope.css" />
  
  <!-- scripts at bottom of page -->

</head>
<body class="homepage ">
  
  <section id="content">
    

      <section id="options" class="clearfix">
    <div class="option-combo">
      <h2>CATEGORY:</h2>
      <ul id="filter" class="option-set clearfix" data-option-key="filter">
        <li><a href="#show-all" data-option-value="*" class="selected">show all</a></li>
        <li><a href="#arts" data-option-value=".arts">arts</a></li>
        <li><a href="#athletics" data-option-value=".athletics">athletics</a></li>
        <li><a href="#business" data-option-value=".business">business</a></li>
        <li><a href="#eduction" data-option-value=".education">education</a></li>
        <li><a href="#fashion" data-option-value=".fashion">fashion</a></li>
        <li><a href="#food" data-option-value=".food">food</a></li>
        <li><a href="#humor" data-option-value=".humor">humor</a></li>
        <li><a href="#law" data-option-value=".law">law/politics</a></li>
        <li><a href="#activism" data-option-value=".activism">social activism</a></li>
        <li><a href="#tech" data-option-value=".tech">tech/sciences</a></li>
        <li><a href="#writing" data-option-value=".writing">writing</a></li>
        <li><a href="#others" data-option-value=".others">others</a></li>
      </ul>
    </div>
    <BR>
    <div class="option-combo">
      <h2>SORT BY:</h2>
      <ul id="sort" class="option-set clearfix" data-option-key="sortBy">
        <li><a href="#alphabetical" data-option-value="alphabetical">alphabetical</a></li>
        <li><a href="#original" data-option-value="original-order">date</a></li>
      </ul>
    </div>
    </section>
  
  <div id="container" class="super-list variable-sizes clearfix">
    
    <?php query_posts(array('showposts' => -1, 'post_type' => 'post', 'orderby' => 'title', 'order' => 'ASC', 'post_status' => 'publish')); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>	
		<div class="person <? echo get_post_meta($post->ID,"ArchiveCategory1", true); ?>" data-symbol="Mg" data-category="<? echo get_post_meta($post->ID,"ArchiveCategory1", true); ?>">
	      <p class="number"><img src="<?php echo get_post_meta($post->ID,"topCollage", true); ?>"/></p>
	      <h2 class="name"><?php the_title(); ?></h2>
	      <p class="weight"><?php the_date(); ?></p>
	    </div>
	<?php endwhile; ?>
	<?php endif; ?>
        
  </div>

  <div id="sites"></div>
  
  
  <script src="http://www.dailybrink.com/wp-content/themes/starkers/tablet/js/jquery-1.6.2.min.js"></script>
  <script src="http://www.dailybrink.com/wp-content/themes/starkers/tablet/js/jquery.isotope.min.js"></script>
  <script>
    $(function(){
    
      var $container = $('#container');
    
      $container.isotope({
        masonry: {
          columnWidth: 120
        },
        sortBy: 'number',
        getSortData: {
          number: function( $elem ) {
            var number = $elem.hasClass('element') ? 
              $elem.find('.number').text() :
              $elem.attr('data-number');
            return parseInt( number, 10 );
          },
          alphabetical: function( $elem ) {
            var name = $elem.find('.name'),
                itemText = name.length ? name : $elem;
            return itemText.text();
          }
        }
      });
    
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });


    
      // Sites using Isotope markup
      var $sites = $('#sites'),
          $sitesTitle = $('<h2 class="loading"><img src="http://i.imgur.com/qkKy8.gif" />Loading sites using Isotope</h2>'),
          $sitesList = $('<ul class="clearfix"></ul>');
        
      $sites.append( $sitesTitle ).append( $sitesList );

      $sitesList.isotope({
        layoutMode: 'cellsByRow',
        cellsByRow: {
          columnWidth: 290,
          rowHeight: 400
        }
      });
    
      var ajaxError = function(){
        $sitesTitle.removeClass('loading').addClass('error')
          .text('Could not load sites using Isotope :(');
      };
    
      // dynamically load sites using Isotope from Zootool
      $.getJSON('http://zootool.com/api/users/items/?username=desandro' +
          '&apikey=8b604e5d4841c2cd976241dd90d319d7' +
          '&tag=bestofisotope&callback=?')
        .error( ajaxError )
        .success(function( data ){

          // proceed only if we have data
          if ( !data || !data.length ) {
            ajaxError();
            return;
          }
          var items = [],
              item, datum;

          for ( var i=0, len = data.length; i < len; i++ ) {
            datum = data[i];
            item = '<li><a href="' + datum.url + '">'
              + '<img src="' + datum.image.replace('/l.', '/m.') + '" />'
              + '<b>' + datum.title + '</b>'
              + '</a></li>';
            items.push( item );
          }
        
          var $items = $( items.join('') )
            .addClass('example');
            
          // set random number for each item
          $items.each(function(){
            $(this).attr('data-number', ~~( Math.random() * 100 + 15 ));
          });
        
          $items.imagesLoaded(function(){
            $sitesTitle.removeClass('loading').text('Sites using Isotope');
            $container.append( $items );
            $items.each(function(){
              var $this = $(this),
                  itemHeight = Math.ceil( $this.height() / 120 ) * 120 - 10;
              $this.height( itemHeight );
            });
            $container.isotope( 'insert', $items );
          });
        
        });
    
    
    });
  </script>

    
  </section> <!-- #content -->
  

</body>
</html>