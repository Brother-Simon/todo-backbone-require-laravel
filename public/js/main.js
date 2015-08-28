// Filename: main.js

// Require.js allows us to configure mappings to paths
// as demonstrated below:
require.config({
  paths: {
    jquery: '/public/js/libs/jquery/jquery-min',
    underscore: '/public/js/libs/underscore/underscore-min',
    backbone: '/public/js/libs/backbone/backbone',

    // storage has built in support for requirejs
    // hence, it doesn't need to configured in 'shim'
    storage: '/public/js/libs/backbone/backbone.localStorage',
    text: '/public/js/libs/require/text'
  },

  shim: {

    underscore: {
      exports: '_'
    },

    backbone: {
      deps: [ 'underscore', 'jquery' ],
      exports: 'Backbone'
    }
  }

});

require([ 'views/app', 'collections/todos' ], function(AppView, AppCollection){
  var app_view = new AppView({
    collection: AppCollection
  });
});
