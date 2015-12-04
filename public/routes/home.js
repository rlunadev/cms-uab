'use strict';
angular.module('seedApp')
.config(['$urlRouterProvider', '$stateProvider',
  function($urlRouterProvider, $stateProvider) {
    var path = './public/views';

    // PUBLIC
    $stateProvider.state('main', {
      url: '/',
      templateUrl: path + '/index.html',
      controller: 'MainController'
    });
    //DEMO

    $stateProvider.state('demo', {
      url: '/demo',
      templateUrl: path + '/demo.html',
      controller: 'DemoController'
    });

    $stateProvider.state('demo.demo1', {
      url: '/demo1',
      templateUrl: path + '/demo/demo1.html',
      controller: 'DemoController'
    });

    $stateProvider.state('demo.demo1.demo2', {
      url: '/demo2',
      templateUrl: path + '/demo/demo2.html',
      controller: 'DemoController'
    });
    $stateProvider.state('demo.demo1.demo3', {
      url: '/demo3',
      templateUrl: path + '/demo/demo3.html',
      controller: 'DemoController'
    });

    $stateProvider.state('main.album', {
      url: 'album',
      templateUrl: path + '/album/galeria.html',
      controller: 'MainController'
    });



    $stateProvider.state('main.contactos', {
      url: 'contactos',
      templateUrl: path + '/contactos/contactos.html',
      controller: 'MainController'
    });

    $stateProvider.state('main.quienesSomos', {
      url: 'quienesSomos',
      templateUrl: path + '/quienesSomos/nosotros.html',
      controller: 'MainController'
    });

    $stateProvider.state('main.galeria', {
      url: 'galeria',
      templateUrl: path + '/galeria/galeria.html',
      controller: 'MainController'
    });

    $stateProvider.state('main.eventos', {
      url: 'eventos',
      templateUrl: path + '/eventos/index.html',
      controller: 'MainController'
    });

    $stateProvider.state('main.listaeventos', {
      url: 'listaEvento',
      templateUrl: path + '/eventos/listar.html',
      controller: 'MainController'
    });
    $stateProvider.state('main.nuevoEvento', {
      url: 'nuevoEvento',
      templateUrl: path + '/eventos/nuevo.html',
      controller: 'MainController'
    });
    $stateProvider.state('main.comunicados', {
      url: 'comunicado',
      templateUrl: path + '/comunicados/index.html',
      controller: 'MainController'
    });
    $stateProvider.state('main.detallecomunicado', {
      url: '/comunicados/:id_comunicados',
      templateUrl: path + '/comunicados/contenido.html',
      controller: 'MainController'
    });

    $stateProvider.state('main.convocatorias', {
      url: 'convocatoria',
      templateUrl: path + '/convocatorias/index.html',
      controller: 'MainController'
    });
    //noticia
    $stateProvider.state('main.noticias', {
      url: 'noticia',
      templateUrl: path + '/noticias/index.html',
      controller: 'MainController'
    });

    //Usuario
////////////////////////VISSTA ADMIN/////////////////////////////////
    $stateProvider.state('admin', {
      url: '/admin',
      templateUrl: path + '/admin.html',
      controller: 'MainController'
    });
    //usuario
    $stateProvider.state('admin.adminUsuario', {
      url: 'Usuario',
      templateUrl: path + '/usuarios/index.html',
      controller: 'MainController'
    });

//ronald
    //comunicados
    $stateProvider.state('admin.adminComunicado', {
      url: 'Comunicado',
      templateUrl: path + '/comunicados/admin.html',
      controller: 'MainController'
    });

    //Admin Convocatoria
    $stateProvider.state('admin.adminConvocatoria', {
      url: 'Convocatoria',
      templateUrl: path + '/convocatorias/admin.html',
      controller: 'MainController'
    });
    //Admin Banner
    $stateProvider.state('admin.adminBanner', {
      url: 'Banner',
      templateUrl: path + '/banner/admin.html',
      controller: 'MainController'
    });
    //Admin Multimedia
    $stateProvider.state('admin.adminMultimedia', {
      url: 'Multimedia',
      templateUrl: path + '/multimedia/admin.html',
      controller: 'MainController'
    });
  // galeria
    $stateProvider.state('admin.adminGaleria', {
      url: 'Galeria',
      templateUrl: path + '/galeria/admin.html',
      controller: 'MainController'
    });
  //contacto
    $stateProvider.state('admin.adminContacto', {
      url: 'Contacto',
      templateUrl: path + '/contactos/admin.html',
      controller: 'MainController'
    });
  //Evento
  	$stateProvider.state('admin.adminEvento', {
      url: 'Evento',
      templateUrl: path + '/eventos/admin.html',
      controller: 'MainController'
    });
    $stateProvider.state('admin.adminNoticia', {
      url: 'Noticia',
      templateUrl: path + '/noticias/admin.html',
      controller: 'MainController'
    });
  //LOGIN
    $stateProvider.state('main.logger', {
      url: '/log',
      templateUrl: path + '/login/index.view.html',
      controller: 'MainController'
    });
    
    //index Banner
    $stateProvider.state('main.Banner', {
      url: 'Banner',
      templateUrl: path + '/banner/index.html',
      controller: 'MainController'
    });

    //calendario
    $stateProvider.state('main.calendario', {
      url: 'calendario',
      templateUrl: path + '/demo/calendario.html',
      controller: 'MainController'
    });

    $urlRouterProvider.otherwise('/');
  }
]);
