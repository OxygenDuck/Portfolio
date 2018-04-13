//Define Variables
var song1, song2, song3;
var title0 = document.getElementById("title 0").innerHTML;
var title1 = document.getElementById("title 1").innerHTML;
var title2 = document.getElementById("title 2").innerHTML;
var artist0 = document.getElementById("artist 0").innerHTML;
var artist1 = document.getElementById("artist 1").innerHTML;
var artist2 = document.getElementById("artist 2").innerHTML;
var year0 = document.getElementById("year 0").innerHTML;
var year1 = document.getElementById("year 1").innerHTML;
var year2 = document.getElementById("year 2").innerHTML;
var picture0 = document.getElementById("picture 0").innerHTML;
var picture1 = document.getElementById("picture 1").innerHTML;
var picture2 = document.getElementById("picture 2").innerHTML;

//Set the albums
function album1() {
  song1 = "Media/Songs/HollowKnight/EnterHallownest.mp3";
  song2 = "Media/Songs/HollowKnight/Greenpath.mp3";
  song3 = "Media/Songs/HollowKnight/CityOfTears.mp3";
  document.getElementById('download0').href = song1;
  document.getElementById('download1').href = song2;
  document.getElementById('download2').href = song3;

  document.getElementById('title').innerHTML = title0;
  document.getElementById('artist').innerHTML = artist0;
  document.getElementById('year').innerHTML = year0;
  document.getElementById('pictureName').innerHTML = picture0;
  document.getElementById('video').poster='Media/Images/HollowKnightPoster.jpg';
  document.getElementById('video').src='Media/Movies/HollowKnightMainTheme.mp4';
  document.getElementById('song').src = song1;

  document.getElementById('tableSongName0').innerHTML = document.getElementById('songName01').innerHTML;
  document.getElementById('tableTime0').innerHTML = document.getElementById('time01').innerHTML;
  document.getElementById('tableSongName1').innerHTML = document.getElementById('songName02').innerHTML;
  document.getElementById('tableTime1').innerHTML = document.getElementById('time02').innerHTML;
  document.getElementById('tableSongName2').innerHTML = document.getElementById('songName03').innerHTML;
  document.getElementById('tableTime2').innerHTML = document.getElementById('time03').innerHTML;
}

function album2() {
  song1 = "Media/Songs/LazyTown/YouAreAPirate.mp3";
  song2 = "Media/Songs/LazyTown/CookingByTheBook.mp3";
  song3 = "Media/Songs/LazyTown/TheMineSong.mp3";
  document.getElementById('download0').href = song1;
  document.getElementById('download1').href = song2;
  document.getElementById('download2').href = song3;

  document.getElementById('title').innerHTML = title1;
  document.getElementById('artist').innerHTML = artist1;
  document.getElementById('year').innerHTML = year1;
  document.getElementById('pictureName').innerHTML = picture1;
  document.getElementById('video').poster='Media/Images/LazyTownPoster.jpg';
  document.getElementById('video').src='Media/Movies/WeAreNumberOne.mp4';
  document.getElementById('song').src = song1;

  document.getElementById('tableSongName0').innerHTML = document.getElementById('songName11').innerHTML;
  document.getElementById('tableTime0').innerHTML = document.getElementById('time11').innerHTML;
  document.getElementById('tableSongName1').innerHTML = document.getElementById('songName12').innerHTML;
  document.getElementById('tableTime1').innerHTML = document.getElementById('time12').innerHTML;
  document.getElementById('tableSongName2').innerHTML = document.getElementById('songName13').innerHTML;
  document.getElementById('tableTime2').innerHTML = document.getElementById('time13').innerHTML;
}

function album3() {
  song1 = "Media/Songs/RockOfAges2/HowToTrainYourBoulder.mp3";
  song2 = "Media/Songs/RockOfAges2/ImpressionistFields.mp3";
  song3 = "Media/Songs/RockOfAges2/TowersOfEden.mp3";
  document.getElementById('download0').href = song1;
  document.getElementById('download1').href = song2;
  document.getElementById('download2').href = song3;

  document.getElementById('title').innerHTML = title2;
  document.getElementById('artist').innerHTML = artist2;
  document.getElementById('year').innerHTML = year2;
  document.getElementById('pictureName').innerHTML = picture2;
  document.getElementById('video').poster='Media/Images/RockOfAges2Poster.jpg';
  document.getElementById('video').src='Media/Movies/Bigger&Boulder.mp4';
  document.getElementById('song').src = song1;

  document.getElementById('tableSongName0').innerHTML = document.getElementById('songName21').innerHTML;
  document.getElementById('tableTime0').innerHTML = document.getElementById('time21').innerHTML;
  document.getElementById('tableSongName1').innerHTML = document.getElementById('songName22').innerHTML;
  document.getElementById('tableTime1').innerHTML = document.getElementById('time22').innerHTML;
  document.getElementById('tableSongName2').innerHTML = document.getElementById('songName23').innerHTML;
  document.getElementById('tableTime2').innerHTML = document.getElementById('time23').innerHTML;
}

//Set the current song
function playSong1() {
  document.getElementById('song').src = song1;
}

function playSong2() {
  document.getElementById('song').src = song2;
}

function playSong3() {
  document.getElementById('song').src = song3;
}
