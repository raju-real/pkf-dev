$(function(){
  "use strict";


    $('.bar-trigger').click(function(){
      if ($('#MainNav').hasClass('show')) {
        $('#MainNav').removeClass('show');
      } else {
        $('#MainNav').addClass('show');
      }
    });
    $('.bar-trigger-2').click(function(){
      if ($('#MainNav').hasClass('show')) {
        $('#MainNav').removeClass('show');
      } else {
        $('#MainNav').addClass('show');
      }
    });
    
    $('.closebtn').click(function(){
      $('#mySidenav').css('width', '0px');
    });

    $('.search-trigger').click(function(){
      $(this).attr('search-close', true);

      $('#mySearchbar').show();
      $('#mySearchbar').css('width', '450px');
    });
    $('.search-trigger-2').click(function(){
      $(this).attr('search-close', true);

      $('#mySearchbar-2').show();
      $('#mySearchbar-2').css('width', '350px');
    });

    setTimeout(function(){
      $('#mySearchbar-2').hide();
    }, 200);



    // Get the elements
    const searchTrigger = document.querySelector('.search-trigger');
    const searchbar = document.getElementById('mySearchbar');
    const searchTrigger2 = document.querySelector('.search-trigger-2');
    const searchbar2 = document.getElementById('mySearchbar-2');

    // Function to open the search bar
    searchTrigger.addEventListener('click', function() {
        searchbar.style.display = 'block'; // Show the search bar
    });
    // Function to open the search bar
    searchTrigger2.addEventListener('click', function() {
      searchbar.style.display = 'block'; // Show the search bar
    });

    // Close the search bar when clicking outside of it
    document.addEventListener('click', function(event) {
        // Check if the clicked target is not the search bar or the bar trigger
        if (!searchbar.contains(event.target) && !searchTrigger.contains(event.target)) {
            searchbar.style.display = 'none'; // Hide the search bar
        }
        if (!searchbar2.contains(event.target) && !searchTrigger2.contains(event.target)) {
            searchbar2.style.display = 'none'; // Hide the search bar
        }
    });
});