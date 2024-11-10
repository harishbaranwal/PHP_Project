
  // Start JavaScript For  Image Slider
  var indexValue = 0;
  function slideShow(){
    setTimeout(slideShow, 2000);
    var x;
  // For Slider 1
    const img1 = document.querySelectorAll(".content-2>.ads>.images > img");
    for(x = 0; x < img1.length; x++){
      img1[x].style.display = "none";
    }
    indexValue++;
    if(indexValue > img1.length){indexValue = 1}
    img1[indexValue -1].style.display = "block";
  
  // For Slider 2
    const img2 = document.querySelectorAll(".box>.ads>.images > img");
    for(x = 0; x < img2.length; x++){
      img2[x].style.display = "none";
    }
    if(indexValue > img2.length){indexValue = 1}
    img2[indexValue -1].style.display = "block";
  }
  slideShow();
  // End JavaScript For Image Slider
  
  