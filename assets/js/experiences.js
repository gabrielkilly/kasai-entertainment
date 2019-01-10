$(document).ready(function(){
  // $('.grid').masonry({
  //     itemSelector: '.grid-item',
  //     gutter: 5,
  //     columnWidth: 150,
  //     fitWidth: true
  // });
  $('.grid-item').magnificPopup({
    type: 'image',
    gallery:{
      enabled:true
    }
  });
});
