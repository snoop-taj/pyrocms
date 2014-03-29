CKEDITOR.plugins.add( 'adonis',
{   
   requires : ['richcombo'], //, 'styles' ],
   init : function( editor )
   {
      var config = editor.config,
         lang = editor.lang.format;

      // Gets the list of tags from the settings.
      var tags = []; //new Array();
      //this.add('value', 'drop_text', 'drop_label');
      tags[0]=["{{ adonis:alert style=%27info%27 }} My Content {{ /adonis:alert }}", "Alert", "Alert"];
      tags[1]=["{{ adonis:align position=%27left%27 }} My Content {{ /adonis:align }}", "Align", "Align"];
      tags[2]=["{{ adonis:badge style=%27%27 }} My Content {{ /adonis:badge }}", "Badge", "Badge"];
      tags[3]=["{{ adonis:carousel slug=%27Gallery Slug%27 }}", "Carousel", "Carousel"];
      tags[4]=["{{ adonis:collapse title=%27My Title%27 }} My Content  {{ /adonis:collapse }}", "Collapse", "Collapse"];
      tags[5]=["{{ adonis:emphasis style=%27%27 }} My Content  {{ /adonis:emphasis }}", "Emphasis", "Emphasis"];
      tags[6]=["{{ adonis:hero }} My Content  {{ /adonis:hero }}", "Hero", "Hero"];
      tags[7]=["{{ adonis:label style=%27%27 }} My Content {{ /adonis:label }}", "Label", "Label"];
      tags[8]=["{{ adonis:lead }} My Content  {{ /adonis:lead }}", "Lead", "Lead"];
      tags[9]=["{{ adonis:row }} {{ adonis:span size=%27%27 }} My Content  {{ /adonis:span }} {{ /adonis:row }}", "Row - Span", "Row - Span"];
      tags[10]=["{{ adonis:tabheaderwrap }}<p>{{ adonis:tabheader title=%27Tab One%27 active=%27true%27 }}</p><p>{{ adonis:tabheader title=%27Tab Two%27 }}</p><p>{{ /adonis:tabheaderwrap }}</p><p>{{ adonis:tabcontentwrap }}</p><p>{{ adonis:tabcontent title=%27Tab One%27 active=%27true%27 }}Tab one contents goes here{{ /adonis:tabcontent }}</p><p>{{ adonis:tabcontent title=%27Tab Two%27 }} Tab two contents goes here{{ /adonis:tabcontent }}</p><p>{{ /adonis:tabcontentwrap }}</p>", "Tabs", "Tabs"];
      tags[11]=["{{ adonis:well }} My Content  {{ /adonis:well }}", "Well", "Well"];
      tags[13]=["{{ adonis:iconbox title=%27MAIN-TITLE%27 class=%27ICON CLASS%27 link=%27#%27 }} DESCRIPTION {{ /adonis:iconbox }}", "Iconbox", "Iconbox"];
      tags[14]=["{{ adonis:imageLightbox image-id=%27 IMAGE_ID %27 title=%27 TITLE %27}}", "Image - Lightbox", "Image - Lightbox"];
      tags[15]=["{{ adonis:videoLightbox image-id=%27 IMAGE_ID %27 video-url=%27 VIDEO URL %27 title=%27 TITLE %27}}", "Video - Lightbox", "Video - Lightbox"];
      // Create style objects for all defined styles.
      editor.ui.addRichCombo( 'adonis',
         {
            label : "adonis",
            title :"adonis",
            voiceLabel : "adonis",
            className : 'cke_format',
            multiSelect : false,

            panel :
            {
               css : [ config.contentsCss, CKEDITOR.getUrl( CKEDITOR.skin.getPath('editor')  + 'editor.css' ) ],
               voiceLabel : lang.panelVoiceLabel
            },

            init : function()
            {
               this.startGroup( "adonis" );
               //this.add('value', 'drop_text', 'drop_label');
               for (var this_tag in tags){
                  this.add(tags[this_tag][0], tags[this_tag][1], tags[this_tag][2]);
               }
            },

            onClick : function( value )
            {         
               editor.focus();
               editor.fire( 'saveSnapshot' );
               editor.insertHtml(unescape(value));
               editor.fire( 'saveSnapshot' );
            }
         });
   }
});

/*

Include this file:
   // get path of directory ckeditor
   var basePath = CKEDITOR.basePath;
   basePath = basePath.substr(0, basePath.indexOf("ckeditor/")); 
   (function() {
      CKEDITOR.plugins.addExternal('adonis',basePath+'../../../../../addons/shared_addons/themes/MY_THEME/js/', 'adonis-ckeditor.js');
   })();

Add 'adonis' to extra plugins:
   extraPlugins: 'pyroimages,pyrofiles,adonis',

Then add 'adonis' to a toolbar

*/