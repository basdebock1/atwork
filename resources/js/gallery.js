$("#gallery__button").on("click", function (e) {
  e.preventDefault();
  console.log("clicked");
  addImages();
});

const addImages = () => {
  if ($(document).width() >= 1100) {
    if ($(".gallery div:nth-last-of-type(1)").hasClass("gallery__images")) {
      console.log("add 3");
      $(".gallery__images__desktop:first")
        .clone()
        .insertBefore($("#gallery__button"));
    } else if (
      $(".gallery div:nth-last-of-type(1)").hasClass("gallery__images__desktop")
    ) {
      console.log("add 4");
      $(".gallery__images:first").clone().insertBefore($("#gallery__button"));
    } else {
      console.log("bad css selector");
    }
  } else {
    $(".gallery__images:first").clone().insertBefore($("#gallery__button"));
  }
};
