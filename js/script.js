jQuery(document).ready(function() {
    $("#lightgallery").lightGallery({

      mode:'lg-fade', // css/lg-transitions.css
      speed: 200,
        addClass:'myclass',
        preload:1,
       thumbnail: true,
        thumbWidth:200,
        mousewheel:true


    });

    //$(".but").click(function() {  //по нажатию на кнопку
    //    $(this).lightGallery({    //обращаемся к кнопке по this
    //        mode:'lg-fade',
    //        dynamic:true,
    //        dynamicEl:[
    //            {'src':'img/1.jpg', 'thumb':'img/thumb-1.jpg', 'sub-html':"<div class='test'><h1>Hello</h1><p>Text1</p></div>"},
    //            {'src':'img/2.jpg', 'thumb':'img/thumb-2.jpg'},
    //            {'src':'img/3.jpg', 'thumb':'img/thumb-3.jpg'},
    //            {'src':'img/4.jpg', 'thumb':'img/thumb-4.jpg'}
    //
    //        ]
    //    });
    //});

})