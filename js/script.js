$(document).ready(function () {
  // slimNav
  $("#navigation nav").slimNav_sk78();
  $("#nav-icon0").click(function () {
    $(this).toggleClass("open");
  });

  // left-dropdown
  $(".select-dropdown__button").on("click", function () {
    var dropdown = $(this).closest(".select-dropdown");
    dropdown.find(".select-dropdown__list").toggleClass("active");
  });

  $(".select-dropdown").each(function () {
    $(this)
      .find(".select-dropdown__list-item")
      .on("click", function () {
        var dropdown = $(this).closest(".select-dropdown");
        var itemValue = $(this).data("value");
        console.log(itemValue);
        dropdown
          .find(".select-dropdown__button span")
          .text($(this).text())
          .parent()
          .attr("data-value", itemValue);
        dropdown.find(".select-dropdown__list").toggleClass("active");
      });
  });

  // choose country
  $(".choose-country").on("click", function () {
    var dropdown = $(this).closest(".select-dropdown");
    dropdown.find(".select-dropdown__list").toggleClass("active");
  });

  $(".choose-country").each(function () {
    $(this)
      .find(".select-dropdown__list-item")
      .on("click", function () {
        var dropdown = $(this).closest(".select-dropdown");
        var itemValue = $(this).data("value");
        console.log(itemValue);
        dropdown
          .find(".choose-country span")
          .text($(this).text())
          .parent()
          .attr("data-value", itemValue);
        dropdown.find(".select-dropdown__list").toggleClass("active");
      });
  });

  // choose country
  $(".click-button").on("click", function () {
    var dropdown = $(this).closest(".select-dropdown");
    dropdown.find(".select-dropdown__list").toggleClass("active");
  });

  $(".click-button").each(function () {
    $(this)
      .find(".select-dropdown__list-item")
      .on("click", function () {
        var dropdown = $(this).closest(".select-dropdown");
        var itemValue = $(this).data("value");
        console.log(itemValue);
        dropdown
          .find(".click-button span")
          .text($(this).text())
          .parent()
          .attr("data-value", itemValue);
        dropdown.find(".select-dropdown__list").toggleClass("active");
      });
  });

  // profile bropdown
  $("header .wraper .profile").on("click", function (e) {
    $(this).addClass("active");
    e.stopPropagation();
  });

  $(document).on("click", function (e) {
    if ($(e.target).is("header .wraper .profile") === false) {
      $("header .wraper .profile").removeClass("active");
    }
  });

  // passwoed-eye
  $(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

  // job-tab
  $(".tab-menu li a").on("click", function () {
    var target = $(this).attr("data-rel");
    $(".tab-menu li a").removeClass("active");
    $(this).addClass("active");
    $("#" + target)
      .fadeIn("slow")
      .siblings(".tab-box")
      .hide();
    return false;
  });

  $(".hamburger").click(function () {
    $('body').toggleClass("is-active");
  });


  // double accordian
$('.accordion dt').on('click', function () {

  var current_dt = $(this);

  //dd of just clicked dt not active - direct sibling
  if (!$(this).next('dd').hasClass('active')){
      //call back function interprets this as selected $('dd')

      //checking if any other sibling dd's active
      if (current_dt.siblings('dd.active').length) {
          //find dd with a class of active before sliding up
          current_dt
            .siblings('dd.active')
            .slideUp(function() {
              current_dt
                .next('dd')
                .slideDown()
                .addClass('active');
            })
            .removeClass('active')
            .find('dd.active')
              .hide()
              .removeClass('active');

       } else {
          current_dt.next('dd').slideDown().addClass('active');       
       }
  } else {
      //dd of just clicked dt is active - close form
      current_dt.next('dd').slideUp().removeClass('active');
  }
});

});










document.addEventListener('DOMContentLoaded', function() {
  const searchInputs = document.querySelectorAll('.searchInput');
  searchInputs.forEach(searchInput => {
      searchInput.addEventListener('keydown', function(event) {
          if (event.key === 'Enter' && this.value.trim() !== '') {
              event.preventDefault(); // Prevent default behavior
              const tagsDiv = this.parentElement.nextElementSibling;
              tagsDiv.style.display = 'block'; // Show the tags div
              const tagList = tagsDiv.querySelector('.tagList');
              addTag(this.value.trim(), tagList);
              this.value = ''; // Clear the search input
          }
      });
  });
});
function addTag(text, tagList) {
  const li = document.createElement('li');
  li.textContent = text;
  const span = document.createElement('span');
  span.textContent = 'X';
  span.className = 'cross';
  span.addEventListener('click', function() {
      this.parentElement.remove(); // Remove the associated tag
  });
  li.appendChild(span);
  tagList.appendChild(li);
}

function triggerFileInput() {
  document.querySelector('.fileuploadresume').click();
}