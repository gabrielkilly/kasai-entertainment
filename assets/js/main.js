var tag = document.createElement('script');
tag.id = 'iframe-demo';
tag.src = 'http://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var noOfVids = 3;
var players = new Array();
function onYouTubeIframeAPIReady() {
    console.log("WHATS UP");
    for (var i = 0; i < noOfVids; i++) {
      var id = 'yt_' + i.toString();
      players[i] = new YT.Player('yt_' + i.toString())
    }
}

$(window).load(function(){
  slickSliderMaker();
  parallaxMaker();
  wordChanger();
  players[0].playVideo();
});

function toggleMenu() {
  $("li.outer.second, li.outer.third").toggle();
}
var words = ["JOY", "DANCE", "MUSIC", "MEMORIES"];
var iters = 0;
function wordChanger() {
  var span = $("span#wordChanger");
  if(iters < words.length) {
    span.text(words[iters])
        .fadeIn(400)
        .delay(1000)
        .fadeOut(400, wordChanger)
  } else {
    span.text("MOMENTS")
        .fadeIn(400);
  }
  iters = iters + 1;
}
function parallaxMaker() {
  $(".parallax-img").paroller({
    factor: 0.160,
    type: 'foreground',
    direction: 'vertical' });
  $(".parallax-h1").paroller({
    factor: 0.22,
    type: 'foreground',
    direction: 'vertical' });
  $(".parallax-p").paroller({
    factor: 0.18,
    type: 'foreground',
    direction: 'vertical' });
}
function slickSliderMaker() {
  $('.slider').slick({
    centerMode: true,
    infinite: true,
    variableWidth: true,
    dots: true,
    speed: 600,
    arrows: true
  });
}
// https://developers.google.com/youtube/iframe_api_reference
function youtubeVidListeners() {
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  var noOfVids = 3;
  var players = new Array();
  console.log("YOOO");
  function onYouTubeIframeAPIReady() {
      console.log("WHATS UP");
      for (var i = 0; i < noOfVids; i++) {
        var id = 'yt_' + i.toString();
        players[i] = new YT.Player('yt_' + i.toString(), {
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      console.log(players.length);
      players[0].playVideo();
      //setInterval(playerListener(players[i], 'yt_' + i), 500);
  }
  //Center video in slider plays. Pauses when it is no longer at the center.
  // function playerListener(player, id) {
  //   if($(id).closest('.slick-slide').hasClass('.slick-center')) {
  //     player.playVideo();
  //   } else if(!(player.getPlayerState() == 2)) {
  //     player.pauseVideo();
  //   }
  // }
}
