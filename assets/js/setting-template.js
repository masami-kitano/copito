(function() {
    tinymce.create( 'tinymce.plugins.original_tinymce_button', {
      init: function( ed, url ) {
        ed.addButton( 'square', {
          title: '枠線', 
          image: url + '/square.png', 
          cmd: 'square_cmd'
        });

        ed.addCommand( 'square_cmd', function() {
          var return_text = '<div class="square"></div>'; 
          ed.execCommand( 'mceInsertContent', 0, return_text );
        });
      },
      createControl : function( n, cm ) {
        return null;
      },
    });
    tinymce.PluginManager.add( 'original_tinymce_button_plugin', tinymce.plugins.original_tinymce_button );
})();