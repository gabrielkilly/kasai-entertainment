$(window).load(function(){
  $('.grid').masonry({
      itemSelector: '.grid-item',
      gutter: 5,
      columnWidth: 150,
      fitWidth: true
  });
});
