
/*
 * Purl (A JavaScript URL parser) v2.3.1
 * Developed and maintanined by Mark Perkins, mark@allmarkedup.com
 * Source repository: https://github.com/allmarkedup/jQuery-URL-Parser
 * Licensed under an MIT-style license. See https://github.com/allmarkedup/jQuery-URL-Parser/blob/master/LICENSE for details.
 */

;(function(factory) {
    if (typeof define === 'function' && define.amd) {
        define(factory);
    } else {
        window.purl = factory();
    }
})(function() {

    var tag2attr = {
            a       : 'href',
            img     : 'src',
            form    : 'action',
            base    : 'href',
            script  : 'src',
            iframe  : 'src',
            link    : 'href'
        },

        key = ['source', 'protocol', 'authority', 'userInfo', 'user', 'password', 'host', 'port', 'relative', 'path', 'directory', 'file', 'query', 'fragment'], // keys available to query

        aliases = { 'anchor' : 'fragment' }, // aliases for backwards compatability

        parser = {
            strict : /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,  //less intuitive, more accurate to the specs
            loose :  /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/ // more intuitive, fails on relative paths and deviates from specs
        },

        isint = /^[0-9]+$/;

    function parseUri( url, strictMode ) {
        var str = decodeURI( url ),
        res   = parser[ strictMode || false ? 'strict' : 'loose' ].exec( str ),
        uri = { attr : {}, param : {}, seg : {} },
        i   = 14;

        while ( i-- ) {
            uri.attr[ key[i] ] = res[i] || '';
        }

        // build query and fragment parameters
        uri.param['query'] = parseString(uri.attr['query']);
        uri.param['fragment'] = parseString(uri.attr['fragment']);

        // split path and fragement into segments
        uri.seg['path'] = uri.attr.path.replace(/^\/+|\/+$/g,'').split('/');
        uri.seg['fragment'] = uri.attr.fragment.replace(/^\/+|\/+$/g,'').split('/');

        // compile a 'base' domain attribute
        uri.attr['base'] = uri.attr.host ? (uri.attr.protocol ?  uri.attr.protocol+'://'+uri.attr.host : uri.attr.host) + (uri.attr.port ? ':'+uri.attr.port : '') : '';

        return uri;
    }

    function getAttrName( elm ) {
        var tn = elm.tagName;
        if ( typeof tn !== 'undefined' ) return tag2attr[tn.toLowerCase()];
        return tn;
    }

    function promote(parent, key) {
        if (parent[key].length === 0) return parent[key] = {};
        var t = {};
        for (var i in parent[key]) t[i] = parent[key][i];
        parent[key] = t;
        return t;
    }

    function parse(parts, parent, key, val) {
        var part = parts.shift();
        if (!part) {
            if (isArray(parent[key])) {
                parent[key].push(val);
            } else if ('object' == typeof parent[key]) {
                parent[key] = val;
            } else if ('undefined' == typeof parent[key]) {
                parent[key] = val;
            } else {
                parent[key] = [parent[key], val];
            }
        } else {
            var obj = parent[key] = parent[key] || [];
            if (']' == part) {
                if (isArray(obj)) {
                    if ('' !== val) obj.push(val);
                } else if ('object' == typeof obj) {
                    obj[keys(obj).length] = val;
                } else {
                    obj = parent[key] = [parent[key], val];
                }
            } else if (~part.indexOf(']')) {
                part = part.substr(0, part.length - 1);
                if (!isint.test(part) && isArray(obj)) obj = promote(parent, key);
                parse(parts, obj, part, val);
                // key
            } else {
                if (!isint.test(part) && isArray(obj)) obj = promote(parent, key);
                parse(parts, obj, part, val);
            }
        }
    }

    function merge(parent, key, val) {
        if (~key.indexOf(']')) {
            var parts = key.split('[');
            parse(parts, parent, 'base', val);
        } else {
            if (!isint.test(key) && isArray(parent.base)) {
                var t = {};
                for (var k in parent.base) t[k] = parent.base[k];
                parent.base = t;
            }
            if (key !== '') {
                set(parent.base, key, val);
            }
        }
        return parent;
    }

    function parseString(str) {
        return reduce(String(str).split(/&|;/), function(ret, pair) {
            try {
                pair = decodeURIComponent(pair.replace(/\+/g, ' '));
            } catch(e) {
                // ignore
            }
            var eql = pair.indexOf('='),
                brace = lastBraceInKey(pair),
                key = pair.substr(0, brace || eql),
                val = pair.substr(brace || eql, pair.length);

            val = val.substr(val.indexOf('=') + 1, val.length);

            if (key === '') {
                key = pair;
                val = '';
            }

            return merge(ret, key, val);
        }, { base: {} }).base;
    }

    function set(obj, key, val) {
        var v = obj[key];
        if (typeof v === 'undefined') {
            obj[key] = val;
        } else if (isArray(v)) {
            v.push(val);
        } else {
            obj[key] = [v, val];
        }
    }

    function lastBraceInKey(str) {
        var len = str.length,
            brace,
            c;
        for (var i = 0; i < len; ++i) {
            c = str[i];
            if (']' == c) brace = false;
            if ('[' == c) brace = true;
            if ('=' == c && !brace) return i;
        }
    }

    function reduce(obj, accumulator){
        var i = 0,
            l = obj.length >> 0,
            curr = arguments[2];
        while (i < l) {
            if (i in obj) curr = accumulator.call(undefined, curr, obj[i], i, obj);
            ++i;
        }
        return curr;
    }

    function isArray(vArg) {
        return Object.prototype.toString.call(vArg) === "[object Array]";
    }

    function keys(obj) {
        var key_array = [];
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) key_array.push(prop);
        }
        return key_array;
    }

    function purl( url, strictMode ) {
        if ( arguments.length === 1 && url === true ) {
            strictMode = true;
            url = undefined;
        }
        strictMode = strictMode || false;
        url = url || window.location.toString();

        return {

            data : parseUri(url, strictMode),

            // get various attributes from the URI
            attr : function( attr ) {
                attr = aliases[attr] || attr;
                return typeof attr !== 'undefined' ? this.data.attr[attr] : this.data.attr;
            },

            // return query string parameters
            param : function( param ) {
                return typeof param !== 'undefined' ? this.data.param.query[param] : this.data.param.query;
            },

            // return fragment parameters
            fparam : function( param ) {
                return typeof param !== 'undefined' ? this.data.param.fragment[param] : this.data.param.fragment;
            },

            // return path segments
            segment : function( seg ) {
                if ( typeof seg === 'undefined' ) {
                    return this.data.seg.path;
                } else {
                    seg = seg < 0 ? this.data.seg.path.length + seg : seg - 1; // negative segments count from the end
                    return this.data.seg.path[seg];
                }
            },

            // return fragment segments
            fsegment : function( seg ) {
                if ( typeof seg === 'undefined' ) {
                    return this.data.seg.fragment;
                } else {
                    seg = seg < 0 ? this.data.seg.fragment.length + seg : seg - 1; // negative segments count from the end
                    return this.data.seg.fragment[seg];
                }
            }

        };

    }
    
    purl.jQuery = function($){
        if ($ != null) {
            $.fn.url = function( strictMode ) {
                var url = '';
                if ( this.length ) {
                    url = $(this).attr( getAttrName(this[0]) ) || '';
                }
                return purl( url, strictMode );
            };

            $.url = purl;
        }
    };

    purl.jQuery(window.jQuery);

    return purl;

});



///************ custom code !!!


  jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.
 $(function() {
	 $('.pane-panels-mini').hide();

	 // changed to .live because Drupal 7 ships with JQuery 1.4
	    $('.white-text').live('click', function() {	    

	    		    	 $('.pane-panels-mini').hide(400);
	        var sName = $(this).attr('id');


			 $('.'+sName+'-home-overlay').toggle(400);

	    });

		$('.close').live('click', function() {
	        //$(this).parent('div').toggle(400);
	         $('.pane-panels-mini').hide(400);			
	    });
  });
  
		 $(function() {
		//$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
		//$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
		$( "#table-wrap #tabs" ).removeClass(".ui-widget-content");
		});



		// side toolbar
	  $(function() {


		// right-menu features menu

//$( "#features_menu" ).menu();


		// fix lame nodes of drupal menus Left Nav Icons
		$('#block-menu-menu-clone-left-margin-menu ul li').each(function() {
   var player = $(this).children().attr("id");
   $(this).attr('id', 'list-'+player);
});

// Make your own menu

/*General mouseover drop-down menu for browsers without CSS hover*/  
      $("#block-menu-menu-clone-left-margin-menu ul li").hover(function() { 
              $(this).addClass("show_children");   
                }, function() {  
                       $(this).removeClass("show_children");     }); 



	               		// tab navs

		// $( "#seating-menu , #galleys-menu" ).tabs();					

	$("span").removeClass("ui-icon-carat-1-e");
	$('#fleet-inner-menu .ui-icon').remove();

	$("a").attr('hidefocus' , 'hidefocus');



	});

// Email Code

	function rawurlencode (str) {
  // http://kevin.vanzonneveld.net
  // +   original by: Brett Zamir (http://brett-zamir.me)
  // +      input by: travc
  // +      input by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +      input by: Michael Grier
  // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
  // +      input by: Ratheous
  // +      reimplemented by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Joris
  // +      reimplemented by: Brett Zamir (http://brett-zamir.me)
  // %          note 1: This reflects PHP 5.3/6.0+ behavior
  // %        note 2: Please be aware that this function expects to encode into UTF-8 encoded strings, as found on
  // %        note 2: pages served as UTF-8
  // *     example 1: rawurlencode('Kevin van Zonneveld!');
  // *     returns 1: 'Kevin%20van%20Zonneveld%21'
  // *     example 2: rawurlencode('http://kevin.vanzonneveld.net/');
  // *     returns 2: 'http%3A%2F%2Fkevin.vanzonneveld.net%2F'
  // *     example 3: rawurlencode('http://www.google.nl/search?q=php.js&ie=utf-8&oe=utf-8&aq=t&rls=com.ubuntu:en-US:unofficial&client=firefox-a');
  // *     returns 3: 'http%3A%2F%2Fwww.google.nl%2Fsearch%3Fq%3Dphp.js%26ie%3Dutf-8%26oe%3Dutf-8%26aq%3Dt%26rls%3Dcom.ubuntu%3Aen-US%3Aunofficial%26client%3Dfirefox-a'
  str = (str + '').toString();

  // Tilde should be allowed unescaped in future versions of PHP (as reflected below), but if you want to reflect current
  // PHP behavior, you would need to add ".replace(/~/g, '%7E');" to the following.
  return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
  replace(/\)/g, '%29').replace(/\*/g, '%2A');
}


	function emailCurrentPage() {

  var thispage= rawurlencode(window.location);
   
  
 var title = "United Product Guide" 
  //document.title;
  
	  window.location.href = "mailto:?subject="+title+"&body="+ thispage ;

	  console.log(thispage);
         
};

	$('#list-email').click(emailCurrentPage);



	// Get Page URL and set active links

	$(function(){	

url = $.url(window.location.pathname);
      
        //console.log( "the url is =" + url.attr('directory') );

    // get current url dir 
     	urlRegExp = url.attr('directory');
     	    }); 
        // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        
       
     // Cabin Class/Section Nav active          
            var cabinClass =  url.segment(5);
            
      	console.log( "URL cabin class =" + cabinClass );
 	
 	        // now grab every link from the navigation
        $('.view-features-menus2-cabin-class-menu ul li div div a').each(function(){
        

           var getElementUrl = $(this).attr('href').split('/')[5];
                   
                  console.log( "these links Cabin Class section =" + getElementUrl );
                    
                 if(cabinClass == getElementUrl ) {
                $(this).parent().parent().parent().addClass('active');
				}
            	 
			});

    // Remove amenity kits from Economy - right menu
        $('#features_menu a').each(function(){
        
         var getElementUrl = $(this).attr('href').split('/')[5];


   if(cabinClass == "United Economy Plus" ) {
                $("#features_menu a").remove(":contains('Amenity')");            }
            
            else if(cabinClass == "United Economy" ) {
                $("#features_menu a").remove(":contains('Amenity')");            }
        });    


 // Cabin Class/Section Menu Region active Food & Bev Specific!!!
         
            var foodBevMenuRoute =  url.segment(6);
        	//console.log( "aircraft URL" + aircraftType );
 	
 	        // now grab every link from the navigation
        $('#features div.route-nav ul li div div a').each(function(){
        

           var getElementUrl = $(this).attr('href').split('/')[6];
                   
                  // console.log( "the type links = " + getElementUrl ).each();
                    
                 if(foodBevMenuRoute == getElementUrl ) {
                $(this).parent().parent().parent().addClass('activeRoute');
            }

});
  
     /// Right menu active link          
 
var linkLevel =  url.segment(2);
 
 		//console.log( "url section is " + linkLevel )
 
 	         $('#features_menu a').each(function () {
                 
            var getElementUrl = $(this).attr('href').split('/')[2];
                   
                   //console.log( "right menu link is " + getElementUrl ).each();
                    
                 if(linkLevel == getElementUrl ) {
                     $(this).children().addClass('active');
                     }  
                 
                  if(linkLevel === "amenity-kits" ) {
                     $(".view-features-menus2-cabin-class-menu li").remove(":contains('Economy')");
                    
                     }
              
             });
      
      

  var aircraftType =  url.segment(4);
 
 	//console.log( "aircraft URL" + aircraftType );
 	
 	        // now grab every link from the navigation
        $('div.config-menu ul li div div a').each(function(){
        

           var getElementUrl = $(this).attr('href').split('/')[4];
                   
                  // console.log( "the type links = " + getElementUrl )
                    
                 if(aircraftType == getElementUrl ) {
                $(this).parent().parent().parent().addClass('activeConfig');
            }

});

// slideshow fixins
//$('.slideshow').parent().addClass('slider-container');

//$('.views-field-field-tabletop p').after("<div class='clear-float'></div>")

//$('.thumbs').prependTo('.thumb-wrap');




/// aircraft type/configuration dropdown

    $('#features .config-menu ul').prepend($('#features li.activeConfig'))
    
    //.prependTo($(this).parent());


	  $(".config-menu ul").hover(function () {
	      $('.config-menu ul li').toggleClass("show");
	    });

// Page DOM manip

	$("#header p").remove();

	$("#home-wrap #first-time").remove();

	$("#features tr").removeClass('odd even');

	$('#list-planes').click(function(){
  window.location = 'http://54.227.239.49/';
});

	$('#list-search').click(function(){
  window.location = '/search';
});

	
	$('#list-search , #block-search-by-page-1').hover(function(){
		$('#block-search-by-page-1').toggleClass('show', "hide");
			});
	
	
	
	
	
	

	$('#planes').next().addClass("firstLevel");
	
	$(".accordion").next().addClass("drop_down"); 
	
	   $("<div id='flying_plane'></div> ").appendTo("#home-wrap");
	   
	   		$('#flying_plane').wrap('<div class="flying_plane_wrap" />');

		$("<div id='landing_plane'></div> ").appendTo("#landing-wrap");
		
	$('#block-search-by-page-1').appendTo('#main');
		$('#edit-keys--2').attr("value", "Enter search term");
		
		$('<p>Search</p>').appendTo('#list-search #search-submit');
		
		var defaultValue = "Enter search term";
		
		$("#edit-keys--2")
  .focus(function() {
        if (this.value == "Enter search term") {
            this.value = '';
        }
  })
  .blur(function() {
        if (this.value == '') {
            this.value = "Enter search term";
        }
});


	 
function printPage()
{
  // remove elements for printing
   $(".config-menu").remove();
   
    window.print();
    }  
    
    $('#list-print').click( printPage );


///  slide show config


// Food and Bev class addition	
	$(".view-food-bev-blocks").first().addClass("food-bev-overview");
	$(".view-food-bev-blocks:nth-child(2)").addClass("beverages-list");


// end of $ wrapper 
});

